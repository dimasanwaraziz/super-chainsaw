import {
    DropdownMenu,
    DropdownMenuContent,
    DropdownMenuItem,
    DropdownMenuTrigger,
} from '@/components/ui/dropdown-menu';
import { Link, usePage } from '@inertiajs/react';
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

const items = [
    {
        title: 'Home',
        url: route('dashboard'),
        link: '/dashboard',
        icon: Home,
        role: ['*'],
    },
    {
        title: 'Pengajuan',
        url: route('pengajuan'),
        link: '/pengajuan',
        icon: Inbox,
        role: ['*'],
    },
    {
        title: 'Approval',
        url: route('approval'),
        link: '/approval',
        icon: Inbox,
        role: ['karo', 'kabag', 'kasubag'],
    },
    // {
    //     title: 'Rincian Biaya Perjadin',
    //     url: route('downloadrincianbiayaperjalanandinas'),
    //     icon: ListCollapse,
    //     role: ['*'],
    // },
    {
        title: 'Pertanggungjawaban',
        url: route('downloadpertanggungjawabanperjalanandinas'),
        icon: ContactRound,
        role: ['*'],
    },
    {
        title: 'Tanda Terima Uang',
        url: route('downloadtandaterimaperjalanandinas'),
        icon: CircleDollarSign,
        role: ['*'],
    },
    {
        title: 'Daftar Nominal',
        url: route('downloaddaftarnominal'),
        icon: FileDigit,
        role: ['*'],
    },
    {
        title: 'Surat Tugas',
        url: route('downloadsurattugas'),
        icon: LetterText,
        role: ['*'],
    },
];

export function AppSidebar({ ...props }: React.ComponentProps<typeof Sidebar>) {
    const { url, component } = usePage();
    const roles = usePage().props.auth.roles;
    return (
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
                            {items.map((item) => {
                                const hasRole =
                                    item.role.includes('*') ||
                                    item.role.some((role) =>
                                        roles.includes(role),
                                    );
                                if (!hasRole) return null;
                                return (
                                    <SidebarMenuItem key={item.title}>
                                        <SidebarMenuButton
                                            asChild
                                            isActive={
                                                item.link &&
                                                url.startsWith(item.link)
                                                    ? true
                                                    : false
                                            }
                                        >
                                            <Link href={item.url}>
                                                <item.icon />
                                                <span>{item.title}</span>
                                            </Link>
                                        </SidebarMenuButton>
                                    </SidebarMenuItem>
                                );
                            })}
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
                                    <User2 /> {usePage().props.auth.user.name}
                                    <ChevronUp className="ml-auto" />
                                </SidebarMenuButton>
                            </DropdownMenuTrigger>
                            <DropdownMenuContent
                                side="top"
                                className="w-[--radix-popper-anchor-width]"
                            >
                                <DropdownMenuItem asChild>
                                    <Link
                                        href={route('logout')}
                                        method="post"
                                        className="w-full cursor-pointer text-left"
                                    >
                                        Sign out
                                    </Link>
                                </DropdownMenuItem>
                            </DropdownMenuContent>
                        </DropdownMenu>
                    </SidebarMenuItem>
                </SidebarMenu>
            </SidebarFooter>
        </Sidebar>
    );
}
