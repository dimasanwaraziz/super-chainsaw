interface Totals {
    pending: number;
    disetujui: number;
    ditolak: number;
    keseluruhan: number;
}

export default function Testing({ totals }: { totals: Totals }) {
    return (
        <div className="grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
            <div className="rounded-xl border bg-card text-card-foreground shadow">
                <div className="flex flex-row items-center justify-between space-y-0 p-6 pb-2">
                    <div className="text-sm font-medium tracking-tight">
                        Pengajuan Baru
                    </div>
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        strokeLinecap="round"
                        strokeLinejoin="round"
                        strokeWidth="2"
                        className="h-4 w-4 text-muted-foreground"
                    >
                        <path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                    </svg>
                </div>
                <div className="p-6 pt-0">
                    <div className="text-2xl font-bold">{totals.pending}</div>
                    <p className="text-xs text-muted-foreground">
                        Total surat masuk baru butuh approval
                    </p>
                </div>
            </div>
            <div className="rounded-xl border bg-card text-card-foreground shadow">
                <div className="flex flex-row items-center justify-between space-y-0 p-6 pb-2">
                    <div className="text-sm font-medium tracking-tight">
                        Disetujui
                    </div>
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        strokeLinecap="round"
                        strokeLinejoin="round"
                        strokeWidth="2"
                        className="h-4 w-4 text-muted-foreground"
                    >
                        <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                        <circle cx="9" cy="7" r="4"></circle>
                        <path d="M22 21v-2a4 4 0 0 0-3-3.87M16 3.13a4 4 0 0 1 0 7.75"></path>
                    </svg>
                </div>
                <div className="p-6 pt-0">
                    <div className="text-2xl font-bold text-green-500">
                        {totals.disetujui}
                    </div>
                    <p className="text-xs text-muted-foreground">
                        Total surat disetujui
                    </p>
                </div>
            </div>
            <div className="rounded-xl border bg-card text-card-foreground shadow">
                <div className="flex flex-row items-center justify-between space-y-0 p-6 pb-2">
                    <div className="text-sm font-medium tracking-tight">
                        Ditolak
                    </div>
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        strokeLinecap="round"
                        strokeLinejoin="round"
                        strokeWidth="2"
                        className="h-4 w-4 text-muted-foreground"
                    >
                        <rect width="20" height="14" x="2" y="5" rx="2"></rect>
                        <path d="M2 10h20"></path>
                    </svg>
                </div>
                <div className="p-6 pt-0">
                    <div className="text-2xl font-bold text-red-500">
                        {totals.ditolak}
                    </div>
                    <p className="text-xs text-muted-foreground">
                        Total surat pengajuan ditolak
                    </p>
                </div>
            </div>
            <div className="rounded-xl border bg-card text-card-foreground shadow">
                <div className="flex flex-row items-center justify-between space-y-0 p-6 pb-2">
                    <div className="text-sm font-medium tracking-tight">
                        Total
                    </div>
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        strokeLinecap="round"
                        strokeLinejoin="round"
                        strokeWidth="2"
                        className="h-4 w-4 text-muted-foreground"
                    >
                        <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                    </svg>
                </div>
                <div className="p-6 pt-0">
                    <div className="text-2xl font-bold">
                        {totals.keseluruhan}
                    </div>
                    <p className="text-xs text-muted-foreground">
                        Total surat masuk
                    </p>
                </div>
            </div>
        </div>
    );
}
