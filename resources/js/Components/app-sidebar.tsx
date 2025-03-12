import {
    DropdownMenu,
    DropdownMenuContent,
    DropdownMenuItem,
    DropdownMenuTrigger,
} from '@/components/ui/dropdown-menu';
import { usePage } from '@inertiajs/react';
import {
    ChevronUp,
    CircleDollarSign,
    ContactRound,
    FileDigit,
    Home,
    Inbox,
    LetterText,
    ListCollapse,
    User2,
} from 'lucide-react';
import * as React from 'react';
import ApplicationLogo from './ApplicationLogo';

import {
    Sidebar,
    SidebarContent,
    SidebarFooter,
    SidebarGroup,
    SidebarGroupContent,
    SidebarGroupLabel,
    SidebarMenu,
    SidebarMenuButton,
    SidebarMenuItem,
} from '@/components/ui/sidebar';

// This is sample data.
const data = {
    navMain: [
        {
            title: 'Dashboard',
            url: route('dashboard'),
            link: '/dashboard',
        },
        {
            title: 'Layanan Loket',
            url: '#',
            items: [
                {
                    title: 'Pengajuan',
                    url: route('pengajuan'),
                    link: '/loket/pengajuan',
                },
                {
                    title: 'Rincian Biaya Perjadin',
                    url: route('downloadrincianbiayaperjalanandinas'),
                },
                {
                    title: 'Pertanggungjawaban',
                    url: route('downloadpertanggungjawabanperjalanandinas'),
                },
                {
                    title: 'Tanda Terima Uang',
                    url: route('downloadtandaterimaperjalanandinas'),
                },
                {
                    title: 'Daftar Nominal',
                    url: route('downloaddaftarnominal'),
                },
            ],
        },
    ],
};

const items = [
    {
        title: 'Home',
        url: route('dashboard'),
        link: '/dashboard',
        icon: Home,
    },
    {
        title: 'Pengajuan',
        url: route('pengajuan'),
        link: '/loket/pengajuan',
        icon: Inbox,
    },
    {
        title: 'Rincian Biaya Perjadin',
        url: route('downloadrincianbiayaperjalanandinas'),
        icon: ListCollapse,
    },
    {
        title: 'Pertanggungjawaban',
        url: route('downloadpertanggungjawabanperjalanandinas'),
        icon: ContactRound,
    },
    {
        title: 'Tanda Terima Uang',
        url: route('downloadtandaterimaperjalanandinas'),
        icon: CircleDollarSign,
    },
    {
        title: 'Daftar Nominal',
        url: route('downloaddaftarnominal'),
        icon: FileDigit,
    },
    {
        title: 'Surat Tugas',
        url: route('downloadsurattugas'),
        icon: LetterText,
    },
];

export function AppSidebar({ ...props }: React.ComponentProps<typeof Sidebar>) {
    const { url, component } = usePage();
    return (
        // <Sidebar {...props}>
        //     <SidebarHeader>
        //         <SidebarMenu>
        //             <SidebarMenuItem>
        //                 <SidebarMenuButton size="lg" asChild>
        //                     <a href="#">
        //                         <div className="flex aspect-square size-8 items-center justify-center rounded-lg bg-sidebar-primary text-sidebar-primary-foreground">
        //                             {/* <GalleryVerticalEnd className="size-4" /> */}
        //                             <ApplicationLogo />
        //                         </div>
        //                         <div className="flex flex-col gap-0.5 leading-none">
        //                             <span className="font-semibold">
        //                                 Siloket
        //                             </span>
        //                             <span className="">
        //                                 DPR RI Perjalanan Dinas
        //                             </span>
        //                         </div>
        //                     </a>
        //                 </SidebarMenuButton>
        //             </SidebarMenuItem>
        //         </SidebarMenu>
        //     </SidebarHeader>
        //     <SidebarContent>
        //         <SidebarGroup>
        //             <SidebarMenu>
        //                 {data.navMain.map((item) => (
        //                     <SidebarMenuItem key={item.title}>
        //                         <SidebarMenuButton asChild>
        //                             <a href={item.url} className="font-medium">
        //                                 {item.title}
        //                             </a>
        //                         </SidebarMenuButton>
        //                         {item.items?.length ? (
        //                             <SidebarMenuSub>
        //                                 {item.items.map((item) => (
        //                                     <SidebarMenuSubItem
        //                                         key={item.title}
        //                                     >
        //                                         <SidebarMenuSubButton
        //                                             asChild
        //                                             isActive={
        //                                                 url ===
        //                                                 item.link
        //                                                     ? true
        //                                                     : false
        //                                             }
        //                                         >
        //                                             <a href={item.url}>
        //                                                 {item.title}
        //                                             </a>
        //                                         </SidebarMenuSubButton>
        //                                     </SidebarMenuSubItem>
        //                                 ))}
        //                             </SidebarMenuSub>
        //                         ) : null}
        //                     </SidebarMenuItem>
        //                 ))}
        //             </SidebarMenu>
        //         </SidebarGroup>
        //     </SidebarContent>
        //     <SidebarRail />
        // </Sidebar>
        <Sidebar>
            <SidebarContent>
                <SidebarMenuButton size="lg" asChild>
                    <a href="#">
                        <div className="flex aspect-square size-8 items-center justify-center rounded-lg bg-sidebar-primary text-sidebar-primary-foreground">
                            {/* <GalleryVerticalEnd className="size-4" /> */}
                            <ApplicationLogo />
                        </div>
                        <div className="flex flex-col gap-0.5 leading-none">
                            <span className="font-semibold">Siloket</span>
                            <span className="">DPR RI Perjalanan Dinas</span>
                        </div>
                    </a>
                </SidebarMenuButton>
                <SidebarGroup>
                    <SidebarGroupLabel>Application</SidebarGroupLabel>
                    <SidebarGroupContent>
                        <SidebarMenu>
                            {items.map((item) => (
                                <SidebarMenuItem key={item.title}>
                                    <SidebarMenuButton
                                        asChild
                                        isActive={
                                            url === item.link ? true : false
                                        }
                                    >
                                        <a href={item.url}>
                                            <item.icon />
                                            <span>{item.title}</span>
                                        </a>
                                    </SidebarMenuButton>
                                </SidebarMenuItem>
                            ))}
                        </SidebarMenu>
                    </SidebarGroupContent>
                </SidebarGroup>
            </SidebarContent>
            <SidebarFooter>
                <SidebarMenu>
                    <SidebarMenuItem>
                        <DropdownMenu>
                            <DropdownMenuTrigger asChild>
                                <SidebarMenuButton>
                                    <User2 /> Username
                                    <ChevronUp className="ml-auto" />
                                </SidebarMenuButton>
                            </DropdownMenuTrigger>
                            <DropdownMenuContent
                                side="top"
                                className="w-[--radix-popper-anchor-width]"
                            >
                                <DropdownMenuItem>
                                    <span>Sign out</span>
                                </DropdownMenuItem>
                            </DropdownMenuContent>
                        </DropdownMenu>
                    </SidebarMenuItem>
                </SidebarMenu>
            </SidebarFooter>
        </Sidebar>
    );
}
