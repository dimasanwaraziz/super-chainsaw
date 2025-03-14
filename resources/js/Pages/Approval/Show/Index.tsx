import DashboardLayout from '@/Layouts/DashboardLayout';
import { Head, usePage } from '@inertiajs/react';

export default function Dashboard() {
    const detail = usePage().props.pengajuan;
    console.log(detail)
    return (
        <DashboardLayout>
            <Head title="Approval Detail" />
        </DashboardLayout>
    );
}
