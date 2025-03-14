import { Input } from '@/components/ui/input';
import { Label } from '@/components/ui/label';
import {
    Table,
    TableBody,
    TableCaption,
    TableCell,
    TableHead,
    TableHeader,
    TableRow,
} from '@/components/ui/table';

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
        <div className="px-4">
            <div className="mb-4">
                <Label>Nomor Surat</Label>
                <Input value={detail.nomor_surat} disabled />
            </div>
            <div className="mb-4">
                <Label>Unit Kerja</Label>
                <Input value={detail.unit_kerja} disabled />
            </div>
            <div className="mb-4">
                <Label>Berangkat Dari</Label>
                <Input value={detail.berangkat_dari} disabled />
            </div>
            <div className="mb-4">
                <Label>Tujuan</Label>
                <Input value={detail.tujuan} disabled />
            </div>
            <div className="mb-4">
                <Label>Tanggal Berangkat</Label>
                <Input value={detail.tanggal_berangkat} disabled />
            </div>
            <div className="mb-4">
                <Label>Tanggal Pulang</Label>
                <Input value={detail.tanggal_pulang} disabled />
            </div>
            <div className="mb-4">
                <Label>Created At</Label>
                <Input value={detail.created_at} disabled />
            </div>
            <div className="mb-4">
                <Label>Updated At</Label>
                <Input value={detail.updated_at} disabled />
            </div>
            <div className="mb-4">
                <Label>Status Pengajuan</Label>
                <Input value={detail.status_pengajuan} disabled />
            </div>

            <hr className="my-4" />
            <Table>
                <TableCaption>Daftar Anggota Pengajuan</TableCaption>
                <TableHeader>
                    <TableRow>
                        <TableHead>NIP</TableHead>
                        <TableHead>Nama Anggota</TableHead>
                    </TableRow>
                </TableHeader>
                <TableBody>
                    {detail.anggota_pengajuan.map((anggota, index) => (
                        <TableRow key={index}>
                            <TableCell>{anggota.nip}</TableCell>
                            <TableCell className="font-medium">
                                {anggota.nama_anggota}
                            </TableCell>
                        </TableRow>
                    ))}
                </TableBody>
            </Table>
        </div>
    );
}
