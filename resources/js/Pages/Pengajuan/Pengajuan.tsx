import DashboardLayout from '@/Layouts/DashboardLayout';
import { Head } from '@inertiajs/react';
import Stats from './Statis';
import DataTableDemo from './Table';

export default function Dashboard() {
    return (
        <DashboardLayout>
            <Head title="Dashboard" />
            <div className="flex flex-1 flex-col gap-4 p-4 pt-0">
                <div className="grid auto-rows-min gap-4 md:grid-cols-3">
                    <Stats />
                    <div className="aspect-video rounded-xl bg-muted/50" />
                    <div className="aspect-video rounded-xl bg-muted/50" />
                </div>
                <div className="min-h-[100vh] flex-1 rounded-xl bg-muted/50 md:min-h-min" />
                <DataTableDemo />
            </div>
        </DashboardLayout>
    );
}
