<?php

namespace App\Exports;

use App\Pegawai;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;

class PegawaiExport implements FromCollection,WithHeadings,ShouldAutoSize,WithEvents
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Pegawai::all();
    }
    public function headings(): array
    {
        return [
            'ID',
            'NIP',
            'Nama',
            'Tanggal Lahir',
            'Jenis Kelamin',
            'Alamat',
            'ID Jabatan',
            'Foto',
            'Created_at',
            'Updated at'
        ];
    }
    public function registerEvents(): array
    {
        return [
            AfterSheet::class    => function(AfterSheet $event) {
                $cellRange = 'A1:W1'; // All headers
                $event->sheet->getDelegate()->getStyle($cellRange)->getFont()->setSize(14);
                
                $styleArray = [
                    'borders' => [
                        'outline' => [
                            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                            'color' => ['argb' => '000000'],
                        ]
                    ]
                ];
                $event->sheet->getDelegate()->getStyle('A1:J1')->applyFromArray($styleArray);
                $event->sheet->getDelegate()->getStyle('A2:J2')->applyFromArray($styleArray);
                $event->sheet->getDelegate()->getStyle('A3:J3')->applyFromArray($styleArray);
                $event->sheet->getDelegate()->getStyle('A4:J4')->applyFromArray($styleArray);
                $event->sheet->getDelegate()->getStyle('A5:J5')->applyFromArray($styleArray);
                $event->sheet->getDelegate()->getStyle('A6:J6')->applyFromArray($styleArray);
                $event->sheet->getDelegate()->getStyle('A7:J7')->applyFromArray($styleArray);
                $event->sheet->getDelegate()->getStyle('A8:J8')->applyFromArray($styleArray);

                $event->sheet->getDelegate()->getStyle('A1:A8')->applyFromArray($styleArray);
                $event->sheet->getDelegate()->getStyle('B1:B8')->applyFromArray($styleArray);
                $event->sheet->getDelegate()->getStyle('C1:C8')->applyFromArray($styleArray);
                $event->sheet->getDelegate()->getStyle('D1:D8')->applyFromArray($styleArray);
                $event->sheet->getDelegate()->getStyle('E1:E8')->applyFromArray($styleArray);
                $event->sheet->getDelegate()->getStyle('F1:F8')->applyFromArray($styleArray);
                $event->sheet->getDelegate()->getStyle('G1:G8')->applyFromArray($styleArray);
                $event->sheet->getDelegate()->getStyle('H1:H8')->applyFromArray($styleArray);
                $event->sheet->getDelegate()->getStyle('I1:I8')->applyFromArray($styleArray);
                $event->sheet->getDelegate()->getStyle('J1:J8')->applyFromArray($styleArray);

                $styleArray = [
                    'borders' => [
                        'outline' => [
                            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_DOUBLE,
                            'color' => ['argb' => '000000'],
                        ]
                    ]
                ];
                $event->sheet->getDelegate()->getStyle('A1:J1')->applyFromArray($styleArray);
                // Set first row to height 20
                $event->sheet->getDelegate()->getRowDimension(1)->setRowHeight(20);            
            },
        ];
    }}