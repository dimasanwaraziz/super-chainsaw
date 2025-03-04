import DashboardLayout from '@/Layouts/DashboardLayout';
import { Head } from '@inertiajs/react';
import Stats from './Statis';
import DataTableDemo from './Table';
import Testing from './Testing'

export default function Dashboard() {
    return (
        <DashboardLayout>
            <Head title="Pengajuan" />
            <div className="flex flex-1 flex-col gap-4 p-4 pt-0">
                <Testing />
                <DataTableDemo />
            </div>
        </DashboardLayout>
    );
}
