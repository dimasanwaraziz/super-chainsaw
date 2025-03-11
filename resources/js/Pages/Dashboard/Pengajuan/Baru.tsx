'use client';

import { Button } from '@/components/ui/button';
import { Calendar } from '@/components/ui/calendar';
import {
    Form,
    FormControl,
    FormDescription,
    FormField,
    FormItem,
    FormLabel,
    FormMessage,
} from '@/components/ui/form';
import { Input } from '@/components/ui/input';
import {
    Popover,
    PopoverContent,
    PopoverTrigger,
} from '@/components/ui/popover';
import {
    Select,
    SelectContent,
    SelectItem,
    SelectTrigger,
    SelectValue,
} from '@/components/ui/select';
import DashboardLayout from '@/Layouts/DashboardLayout';
import { cn } from '@/lib/utils';
import { zodResolver } from '@hookform/resolvers/zod';
import { Head } from '@inertiajs/react';
import { format } from 'date-fns';
import { Calendar as CalendarIcon } from 'lucide-react';
import { useState } from 'react';
import { useForm } from 'react-hook-form';
import { z } from 'zod';

const formSchema = z.object({
    nama: z.string().min(2).max(50),
    nip: z.string().min(2).max(50),
    anggota: z.string().min(2).max(50),
    tujuan: z.string().min(2).max(50),
    keberangkatan: z.string().min(2).max(50),
    dob: z.object({
        from: z.date(),
        to: z.date(),
    }),
});

export default function Dashboard() {
    // 1. Define your form.
    const form = useForm<z.infer<typeof formSchema>>({
        resolver: zodResolver(formSchema),
        defaultValues: {
            nama: '',
            nip: '',
            dob: { from: undefined, to: undefined },
        },
    });

    // 2. Define a submit handler.
    function onSubmit(values: z.infer<typeof formSchema>) {
        // Do something with the form values.
        // ✅ This will be type-safe and validated.
        console.log(values);
    }

    const [data, setData] = useState([{ id: Date.now(), nip: '', nama: '' }]);

    const addData = () => {
        setData([...data, { id: Date.now(), nip: '', nama: '' }]);
    };

    interface DataItem {
        id: number;
        nip: string;
        nama: string;
    }

    const removeData = (id: number): void => {
        setData(data.filter((item: DataItem) => item.id !== id));
    };

    interface UpdateDataParams {
        id: number;
        option: 'nip' | 'nama';
        newValues: string;
    }

    const updateData = ({ id, option, newValues }: UpdateDataParams): void => {
        setData(
            data.map((item: DataItem) =>
                item.id === id ? { ...item, [option]: newValues } : item,
            ),
        );
    };

    return (
        <DashboardLayout>
            <Head title="Pengajuan Baru" />
            <div className="flex flex-1 flex-col gap-4 p-4 pt-0">
                <Form {...form}>
                    <form
                        onSubmit={form.handleSubmit(onSubmit)}
                        className="space-y-8"
                    >
                        <FormField
                            control={form.control}
                            name="nama"
                            render={({ field }) => (
                                <FormItem>
                                    <FormLabel>
                                        Tujuan Perjalanan Dinas
                                    </FormLabel>
                                    <FormControl>
                                        <Input
                                            placeholder="Benchmarking"
                                            {...field}
                                        />
                                    </FormControl>
                                    <FormDescription>
                                        This is your public display name.
                                    </FormDescription>
                                    <FormMessage />
                                </FormItem>
                            )}
                        />
                        <div className="flex gap-4">
                            <FormField
                                control={form.control}
                                name="keberangkatan"
                                render={({ field }) => (
                                    <FormItem className="flex-1">
                                        <FormLabel>Keberangkatan</FormLabel>
                                        <FormControl>
                                            <Select>
                                                <SelectTrigger className="w-[180px]">
                                                    <SelectValue placeholder="Provinsi" />
                                                </SelectTrigger>
                                                <SelectContent>
                                                    <SelectItem value="Aceh">
                                                        Aceh
                                                    </SelectItem>
                                                    <SelectItem value="Bali">
                                                        Bali
                                                    </SelectItem>
                                                    <SelectItem value="Banten">
                                                        Banten
                                                    </SelectItem>
                                                    <SelectItem value="Bengkulu">
                                                        Bengkulu
                                                    </SelectItem>
                                                    <SelectItem value="Gorontalo">
                                                        Gorontalo
                                                    </SelectItem>
                                                    <SelectItem value="Jakarta">
                                                        Jakarta
                                                    </SelectItem>
                                                    <SelectItem value="Jambi">
                                                        Jambi
                                                    </SelectItem>
                                                    <SelectItem value="Jawa Barat">
                                                        Jawa Barat
                                                    </SelectItem>
                                                    <SelectItem value="Jawa Tengah">
                                                        Jawa Tengah
                                                    </SelectItem>
                                                    <SelectItem value="Jawa Timur">
                                                        Jawa Timur
                                                    </SelectItem>
                                                    <SelectItem value="Kalimantan Barat">
                                                        Kalimantan Barat
                                                    </SelectItem>
                                                    <SelectItem value="Kalimantan Selatan">
                                                        Kalimantan Selatan
                                                    </SelectItem>
                                                    <SelectItem value="Kalimantan Tengah">
                                                        Kalimantan Tengah
                                                    </SelectItem>
                                                    <SelectItem value="Kalimantan Timur">
                                                        Kalimantan Timur
                                                    </SelectItem>
                                                    <SelectItem value="Kalimantan Utara">
                                                        Kalimantan Utara
                                                    </SelectItem>
                                                    <SelectItem value="Kepulauan Bangka Belitung">
                                                        Kepulauan Bangka
                                                        Belitung
                                                    </SelectItem>
                                                    <SelectItem value="Kepulauan Riau">
                                                        Kepulauan Riau
                                                    </SelectItem>
                                                    <SelectItem value="Lampung">
                                                        Lampung
                                                    </SelectItem>
                                                    <SelectItem value="Maluku">
                                                        Maluku
                                                    </SelectItem>
                                                    <SelectItem value="Maluku Utara">
                                                        Maluku Utara
                                                    </SelectItem>
                                                    <SelectItem value="Nusa Tenggara Barat">
                                                        Nusa Tenggara Barat
                                                    </SelectItem>
                                                    <SelectItem value="Nusa Tenggara Timur">
                                                        Nusa Tenggara Timur
                                                    </SelectItem>
                                                    <SelectItem value="Papua">
                                                        Papua
                                                    </SelectItem>
                                                    <SelectItem value="Papua Barat">
                                                        Papua Barat
                                                    </SelectItem>
                                                    <SelectItem value="Riau">
                                                        Riau
                                                    </SelectItem>
                                                    <SelectItem value="Sulawesi Barat">
                                                        Sulawesi Barat
                                                    </SelectItem>
                                                    <SelectItem value="Sulawesi Selatan">
                                                        Sulawesi Selatan
                                                    </SelectItem>
                                                    <SelectItem value="Sulawesi Tengah">
                                                        Sulawesi Tengah
                                                    </SelectItem>
                                                    <SelectItem value="Sulawesi Tenggara">
                                                        Sulawesi Tenggara
                                                    </SelectItem>
                                                    <SelectItem value="Sulawesi Utara">
                                                        Sulawesi Utara
                                                    </SelectItem>
                                                    <SelectItem value="Sumatera Barat">
                                                        Sumatera Barat
                                                    </SelectItem>
                                                    <SelectItem value="Sumatera Selatan">
                                                        Sumatera Selatan
                                                    </SelectItem>
                                                    <SelectItem value="Sumatera Utara">
                                                        Sumatera Utara
                                                    </SelectItem>
                                                    <SelectItem value="Yogyakarta">
                                                        Yogyakarta
                                                    </SelectItem>
                                                </SelectContent>
                                            </Select>
                                        </FormControl>
                                        <FormDescription>
                                            Pilih provinsi keberangkatan.
                                        </FormDescription>
                                        <FormMessage />
                                    </FormItem>
                                )}
                            />
                            <FormField
                                control={form.control}
                                name="tujuan"
                                render={({ field }) => (
                                    <FormItem className="flex-1">
                                        <FormLabel>Tujuan</FormLabel>
                                        <FormControl>
                                            <Select>
                                                <SelectTrigger className="w-[180px]">
                                                    <SelectValue placeholder="Provinsi" />
                                                </SelectTrigger>
                                                <SelectContent>
                                                    <SelectItem value="Aceh">
                                                        Aceh
                                                    </SelectItem>
                                                    <SelectItem value="Bali">
                                                        Bali
                                                    </SelectItem>
                                                    <SelectItem value="Banten">
                                                        Banten
                                                    </SelectItem>
                                                    <SelectItem value="Bengkulu">
                                                        Bengkulu
                                                    </SelectItem>
                                                    <SelectItem value="Gorontalo">
                                                        Gorontalo
                                                    </SelectItem>
                                                    <SelectItem value="Jakarta">
                                                        Jakarta
                                                    </SelectItem>
                                                    <SelectItem value="Jambi">
                                                        Jambi
                                                    </SelectItem>
                                                    <SelectItem value="Jawa Barat">
                                                        Jawa Barat
                                                    </SelectItem>
                                                    <SelectItem value="Jawa Tengah">
                                                        Jawa Tengah
                                                    </SelectItem>
                                                    <SelectItem value="Jawa Timur">
                                                        Jawa Timur
                                                    </SelectItem>
                                                    <SelectItem value="Kalimantan Barat">
                                                        Kalimantan Barat
                                                    </SelectItem>
                                                    <SelectItem value="Kalimantan Selatan">
                                                        Kalimantan Selatan
                                                    </SelectItem>
                                                    <SelectItem value="Kalimantan Tengah">
                                                        Kalimantan Tengah
                                                    </SelectItem>
                                                    <SelectItem value="Kalimantan Timur">
                                                        Kalimantan Timur
                                                    </SelectItem>
                                                    <SelectItem value="Kalimantan Utara">
                                                        Kalimantan Utara
                                                    </SelectItem>
                                                    <SelectItem value="Kepulauan Bangka Belitung">
                                                        Kepulauan Bangka
                                                        Belitung
                                                    </SelectItem>
                                                    <SelectItem value="Kepulauan Riau">
                                                        Kepulauan Riau
                                                    </SelectItem>
                                                    <SelectItem value="Lampung">
                                                        Lampung
                                                    </SelectItem>
                                                    <SelectItem value="Maluku">
                                                        Maluku
                                                    </SelectItem>
                                                    <SelectItem value="Maluku Utara">
                                                        Maluku Utara
                                                    </SelectItem>
                                                    <SelectItem value="Nusa Tenggara Barat">
                                                        Nusa Tenggara Barat
                                                    </SelectItem>
                                                    <SelectItem value="Nusa Tenggara Timur">
                                                        Nusa Tenggara Timur
                                                    </SelectItem>
                                                    <SelectItem value="Papua">
                                                        Papua
                                                    </SelectItem>
                                                    <SelectItem value="Papua Barat">
                                                        Papua Barat
                                                    </SelectItem>
                                                    <SelectItem value="Riau">
                                                        Riau
                                                    </SelectItem>
                                                    <SelectItem value="Sulawesi Barat">
                                                        Sulawesi Barat
                                                    </SelectItem>
                                                    <SelectItem value="Sulawesi Selatan">
                                                        Sulawesi Selatan
                                                    </SelectItem>
                                                    <SelectItem value="Sulawesi Tengah">
                                                        Sulawesi Tengah
                                                    </SelectItem>
                                                    <SelectItem value="Sulawesi Tenggara">
                                                        Sulawesi Tenggara
                                                    </SelectItem>
                                                    <SelectItem value="Sulawesi Utara">
                                                        Sulawesi Utara
                                                    </SelectItem>
                                                    <SelectItem value="Sumatera Barat">
                                                        Sumatera Barat
                                                    </SelectItem>
                                                    <SelectItem value="Sumatera Selatan">
                                                        Sumatera Selatan
                                                    </SelectItem>
                                                    <SelectItem value="Sumatera Utara">
                                                        Sumatera Utara
                                                    </SelectItem>
                                                    <SelectItem value="Yogyakarta">
                                                        Yogyakarta
                                                    </SelectItem>
                                                </SelectContent>
                                            </Select>
                                        </FormControl>
                                        <FormDescription>
                                            Pilih provinsi tujuan.
                                        </FormDescription>
                                        <FormMessage />
                                    </FormItem>
                                )}
                            />
                        </div>
                        <FormField
                            control={form.control}
                            name="dob"
                            render={({ field }) => (
                                <FormItem className="flex flex-col">
                                    <FormLabel>
                                        Tanggal perjalanan dinas
                                    </FormLabel>
                                    <Popover>
                                        <PopoverTrigger asChild>
                                            <FormControl>
                                                <Button
                                                    variant={'outline'}
                                                    className={cn(
                                                        'w-[240px] pl-3 text-left font-normal',
                                                        !field.value?.from &&
                                                            !field.value?.to &&
                                                            'text-muted-foreground',
                                                    )}
                                                >
                                                    {field.value?.from &&
                                                    field.value?.to ? (
                                                        `${format(
                                                            field.value.from,
                                                            'PPP',
                                                        )} - ${format(
                                                            field.value.to,
                                                            'PPP',
                                                        )}`
                                                    ) : (
                                                        <span>Pick a date</span>
                                                    )}
                                                    <CalendarIcon className="ml-auto h-4 w-4 opacity-50" />
                                                </Button>
                                            </FormControl>
                                        </PopoverTrigger>
                                        <PopoverContent
                                            className="w-auto p-0"
                                            align="start"
                                        >
                                            <Calendar
                                                mode="range"
                                                selected={field.value}
                                                onSelect={field.onChange}
                                                initialFocus
                                            />
                                        </PopoverContent>
                                    </Popover>
                                    <FormDescription>
                                        Lamanya waktu perjalanan dinas
                                    </FormDescription>
                                    <FormMessage />
                                </FormItem>
                            )}
                        />
                        <hr />
                        <div>Daftar Anggota</div>
                        <div className="space-y-4">
                            {data.map((val, key) => (
                                <div
                                    key={key + 'form'}
                                    className="flex items-center gap-5"
                                >
                                    <div className="w-1/3">
                                        <FormLabel>NIP</FormLabel>
                                        <FormControl>
                                            <Input
                                                placeholder="198001012003121001"
                                                value={val.nip}
                                                onChange={(e) => {
                                                    updateData({
                                                        id: val.id,
                                                        option: 'nip',
                                                        newValues:
                                                            e.target.value,
                                                    });
                                                }}
                                            />
                                        </FormControl>
                                        <FormDescription>
                                            Nomor Induk Pegawai
                                        </FormDescription>
                                    </div>
                                    <div className="flex-1">
                                        <FormLabel>Nama</FormLabel>
                                        <FormControl>
                                            <Input
                                                placeholder="John Doe"
                                                value={val.nama}
                                                onChange={(e) => {
                                                    updateData({
                                                        id: val.id,
                                                        option: 'nama',
                                                        newValues:
                                                            e.target.value,
                                                    });
                                                }}
                                            />
                                        </FormControl>
                                        <FormDescription>
                                            This is your public display name.
                                        </FormDescription>
                                    </div>
                                    <button
                                        type="button"
                                        className="cursor-pointer rounded-md bg-red-500 px-5 py-2 text-xs text-white"
                                        onClick={() => removeData(val.id)}
                                    >
                                        Delete
                                    </button>
                                </div>
                            ))}
                            <div className="flex justify-end">
                                <button
                                    type="button"
                                    className="cursor-pointer rounded-md bg-green-500 px-5 py-2 text-xs text-white"
                                    onClick={() => addData()}
                                >
                                    Add
                                </button>
                            </div>
                        </div>
                        <Button type="submit">Submit</Button>
                    </form>
                </Form>
            </div>
        </DashboardLayout>
    );
}
