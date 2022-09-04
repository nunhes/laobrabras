<?php

namespace App\Exports;

use App\Models\Cidadan;
use Maatwebsite\Excel\Events\AfterSheet;
use Maatwebsite\Excel\Events\BeforeSheet;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromQuery;

//class CidadanExport implements ShouldAutoSize, FromQuery // , WithHeadings
class CidadanExport implements FromQuery, WithHeadings
{
    // /**
    // * @return \Illuminate\Support\Collection
    // */
    // public function collection()
    // {
    //     return Cidadan::all();
    // }
    use Exportable;

    public function query()
    {
        return Cidadan::query();
    }

    // Con esta función añado los headings de la tabla generada

    public function headings(): array
    {
         return [
             'ID',
             'Nome',
             'Primeiro apelido',
             'Segundo apelido',
             'NIF',
            ];
    }



public function registerEvents(): array
    {
        return [
            AfterSheet::class    => function(AfterSheet $event) {

                $event->sheet->getAlignment()
                            ->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);

            },
        ];
    }
}
