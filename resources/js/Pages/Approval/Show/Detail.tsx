type DetailType = {
    anggota_pengajuan: { nama_anggota: string; nip: string }[];
    id: number;
    nomor_surat: string;
    unit_kerja: string;
    berangkat_dari: string;
    tujuan: string;
    tanggal_berangkat: string;
    tanggal_pulang: string;
    created_at: string;
    updated_at: string;
    status_pengajuan: string;
};

export default function Detail({ detail }: { detail: DetailType }) {
    return (
        <>
            <div className="px-4">{detail.id}</div>
            <div className="px-4">{detail.nomor_surat}</div>
            <div className="px-4">{detail.unit_kerja}</div>
            <div className="px-4">{detail.berangkat_dari}</div>
            <div className="px-4">{detail.tujuan}</div>
            <div className="px-4">{detail.tanggal_berangkat}</div>
            <div className="px-4">{detail.tanggal_pulang}</div>
            <div className="px-4">{detail.created_at}</div>
            <div className="px-4">{detail.updated_at}</div>
            <div className="px-4">{detail.status_pengajuan}</div>
            {detail.anggota_pengajuan.map((anggota, index) => (
                <div className="px-4" key={index}>
                    <span>Nama: {anggota.nama_anggota}</span>,{' '}
                    <span>NIP: {anggota.nip}</span>
                </div>
            ))}
        </>
    );
}
