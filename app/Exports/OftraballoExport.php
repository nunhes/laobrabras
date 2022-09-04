<?php

// Archivo creado para exportar en excel

namespace App\Exports;

use App\Models\Oftraballo;
use Maatwebsite\Excel\Events\AfterSheet;
use Maatwebsite\Excel\Events\BeforeSheet;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;
// use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use PhpOffice\PhpSpreadsheet\Worksheet\PageSetup;


class OftraballoExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Oftraballo::all();
    }

    // Con esta función añado los headings de la tabla generada
    public function headings(): array
    {
        return [
            'ID',
            'Data',
            'Número de meses',
            'Número de postos ofertados',
            'Observacións',
            'Posto',
            'Número de accións',
            'ID da empresa',


        ];
    }



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
