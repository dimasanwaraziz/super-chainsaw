import DashboardLayout from '@/Layouts/DashboardLayout';
import { Head } from '@inertiajs/react';

export default function Download() {
    return (
        <DashboardLayout>
            <Head title="Download" />
            <div className="flex flex-1 flex-col gap-4 p-4 pt-0">
                <h1>Download</h1>
            </div>
        </DashboardLayout>
    );
}
