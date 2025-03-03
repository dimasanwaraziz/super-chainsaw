import DashboardLayout from '@/Layouts/DashboardLayout';
import { Head } from '@inertiajs/react';
import Chart1 from './Chart1';
import Chart2 from './Chart2';
import Chart3 from './Chart3';
import Chart4 from './Chart4';

export default function Dashboard() {
    return (
        <DashboardLayout>
            <Head title="Loket Pengajuan" />
            <div className="flex flex-1 flex-col gap-4 p-4 pt-0">
                <div className="grid auto-rows-min gap-4 md:grid-cols-3">
                    <Chart1 />
                    <Chart2 />
                    <Chart3 />
                </div>
                <Chart4 />
            </div>
        </DashboardLayout>
    );
}
