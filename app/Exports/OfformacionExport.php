<?php

namespace App\Exports;

use App\Models\Offormacion;
use Maatwebsite\Excel\Events\AfterSheet;
use Maatwebsite\Excel\Events\BeforeSheet;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;
// use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use PhpOffice\PhpSpreadsheet\Worksheet\PageSetup;

class OfformacionExport implements FromCollection,
//  ShouldAutoSize,
 WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Offormacion::all();
    }

    // Con esta función añado los headings de la tabla generada
    public function headings(): array
    {
        return [
            'ID',
            'Data de alta',
            'Data oferta',
            'Lugar',
            'Oferta',
            'Número de horas',
            'Número de prazas',
            'Tipo de oferta',
            'Número de accións de formación',
            'ID da empresa',


        ];
    }



// public function registerEvents(): array
//     {
//         return [
//             AfterSheet::class    => function(AfterSheet $event) {

//                 $event->sheet->getAlignment()
//                             ->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);

//             },
//         ];
//     }

    public function registerEvents(): array
    {
        return [
            AfterSheet::class    => function(AfterSheet $event) {
                $cellRange = 'A1:W1'; // All headers
                $event->sheet->getDelegate()->getStyle($cellRange)->getFont()->setSize(14);
            },
        ];
    }
}




