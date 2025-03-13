import { AppSidebar } from '@/components/app-sidebar';
import {
    Breadcrumb,
    BreadcrumbItem,
    BreadcrumbLink,
    BreadcrumbList,
    BreadcrumbPage,
    BreadcrumbSeparator,
} from '@/components/ui/breadcrumb';
import { Separator } from '@/components/ui/separator';
import {
    SidebarInset,
    SidebarProvider,
    SidebarTrigger,
} from '@/components/ui/sidebar';
import { Breadcrumb as BreadcrumbType } from '@/types/Breadcrumb';
import { usePage } from '@inertiajs/react';
import { PropsWithChildren, ReactNode } from 'react';

export default function PageDashboard({
    header,
    children,
}: PropsWithChildren<{ header?: ReactNode }>) {
    const { breadcrumbs = [] } = usePage().props as {
        breadcrumbs?: BreadcrumbType[];
    };

    return (
        <SidebarProvider>
            <AppSidebar />
            <SidebarInset>
                <header className="flex h-16 shrink-0 items-center gap-2 transition-[width,height] ease-linear group-has-[[data-collapsible=icon]]/sidebar-wrapper:h-12">
                    <div className="flex items-center gap-2 px-4">
                        <SidebarTrigger className="-ml-1" />
                        <Separator
                            orientation="vertical"
                            className="mr-2 h-4"
                        />
                        <Breadcrumb>
                            <BreadcrumbList>
                                {breadcrumbs.length > 0 ? (
                                    breadcrumbs.map((breadcrumb, index) => (
                                        <BreadcrumbItem
                                            key={index}
                                            className={
                                                index === breadcrumbs.length - 1
                                                    ? 'font-bold'
                                                    : ''
                                            }
                                        >
                                            {breadcrumb.url ? (
                                                <BreadcrumbLink
                                                    href={breadcrumb.url}
                                                >
                                                    {breadcrumb.title}
                                                </BreadcrumbLink>
                                            ) : (
                                                <BreadcrumbPage>
                                                    {breadcrumb.title}
                                                </BreadcrumbPage>
                                            )}
                                            {index < breadcrumbs.length - 1 && (
                                                <BreadcrumbSeparator />
                                            )}
                                        </BreadcrumbItem>
                                    ))
                                ) : (
                                    <BreadcrumbItem>
                                        <BreadcrumbPage>Home</BreadcrumbPage>
                                    </BreadcrumbItem>
                                )}
                            </BreadcrumbList>
                        </Breadcrumb>
                    </div>
                </header>
                {header && (
                    <header className="bg-white shadow">
                        <div className="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                            {header}
                        </div>
                    </header>
                )}

                <main>{children}</main>
            </SidebarInset>
        </SidebarProvider>
    );
}
