import DashboardLayout from '@/Layouts/DashboardLayout';
import { Head, usePage } from '@inertiajs/react';
import Detail from './Detail';

export default function Dashboard() {
    const detail = usePage().props.pengajuan as any;
    console.log(detail);
    return (
        <DashboardLayout>
            <Head title="Approval Detail" />
            <Detail detail={detail} />
        </DashboardLayout>
    );
}
