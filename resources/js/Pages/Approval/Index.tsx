import DashboardLayout from '@/Layouts/DashboardLayout';
import { Head, usePage } from '@inertiajs/react';
import DataTableDemo, { Pengajuan } from './Table';
import Testing from './Testing';

interface Totals {
    pending: number;
    disetujui: number;
    ditolak: number;
    keseluruhan: number;
}

export default function Dashboard() {
    const totals = usePage().props.totals;
    const pengajuan = usePage().props.pengajuan;
    return (
        <DashboardLayout>
            <Head title="Approval" />
            <div className="flex flex-1 flex-col gap-4 p-4 pt-0">
                <Testing totals={totals as Totals} />
                <DataTableDemo data={pengajuan as Pengajuan[]} />
            </div>
        </DashboardLayout>
    );
}
