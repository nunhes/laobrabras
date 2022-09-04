<?php

namespace App\Exports;

use App\Models\Empresa;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Events\AfterSheet;
use Maatwebsite\Excel\Events\BeforeSheet;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;

class EmpresaExport implements FromQuery, WithHeadings
{

    use Exportable;
    /**
    * @return \Illuminate\Support\Collection

    public function collection()
    {
        return Empresa::all();
    }    */

  public function query()
  {
    return Empresa::query();
  }

    // Con esta función añado los headings de la tabla generada
    public function headings(): array
    {
        return [
            'ID',
            'Código postal',
            'Data de baja',
            'Data de primeiro contacto',
            'Email',
            'Enderezo',
            'Fax',
            'Localidade',
            'Nome',
            'Notas sobre a baixa',
            'Número de traballodores/as',
            'Observacións',
            '',
            'Teléfono fixo',
            'Móbil',
            'Web',
            'ID da actividade',
            'ID do centro',
            'ID do/a orientador/a',
            'ID da provincia'

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
