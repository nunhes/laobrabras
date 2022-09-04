<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Empresa;
use Illuminate\Http\Request;

// exportar pdf/excel
use App\Exports\EmpresaExport;
use Maatwebsite\Excel\Facades\Excel;
use PhpOffice\PhpSpreadsheet\Writer\Pdf\Dompdf;

use Carbon\Carbon;

use DB;
// use PDF;

class EmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

      //* engadir argumentos de busca
        $empresas = (new Empresa)->newQuery();
        if (request()->has('search')) {
            $empresas->where('nome', 'Like', '%' . request()->input('search') . '%')
            ->orWhere('localidade', 'Like', '%' . request()->input('search') . '%')
            ->orWhere('enderezo', 'Like', '%' . request()->input('search') . '%')
            ->orWhere('email', 'Like', '%' . request()->input('search') . '%')
            ->orWhere('codpostal', 'Like', '%' . request()->input('search') . '%');
        }

        if (request()->query('sort')) {
            $attribute = request()->query('sort');
            $sort_order = 'ASC';
            if (strncmp($attribute, '-', 1) === 0) {
                $sort_order = 'DESC';
                $attribute = substr($attribute, 1);
            }
            $empresas->orderBy($attribute, $sort_order);
        } else {
            $empresas->latest();
        }

        $empresas = $empresas->paginate(10);
        return view('admin.empresa.index',compact('empresas'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //add
        return view('admin.empresa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nome' => 'required|string:'.config('empresa.table_names.empresas', 'empresas').',nome',
          'web' => 'required|string:'.config('empresa.table_names.empresas', 'empresas').',web',
          'enderezo' => 'required|string:'.config('empresa.table_names.empresas', 'empresas').',enderezo',
          'localidade' => 'required|string:'.config('empresa.table_names.empresas', 'empresas').',localidade',
        ]);
        Empresa::create($request->all());
        return redirect()->route('empresa.index')
            ->with('message','Datos da empresa creados con éxito.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function show(Empresa $empresa)
    {
        // add
        return view('admin.empresa.show', compact('empresa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function edit(Empresa $empresa)
    {
        //// add
        return view('admin.empresa.edit', compact('empresa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Empresa $empresa)
    {
            // add
        $request->validate([
            'nome' => 'required|string:'.config('empresa.table_names.empresas', 'empresas').',nome,'.$empresa->id,
        ]);
        $empresa->update($request->all());
        return redirect()->route('empresa.index')
            ->with('message','Datos da empresa actualizados con éxito.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Empresa $empresa)
    {
        // eliminar empresa existente
        $empresa->delete();
        return redirect()->route('empresa.index')
            ->with('message','Datos da empresa eliminados con éxito');

    }

/**
 * The permission has been checked in the controller constructor by using middleware.
 */
    function __construct()
    {
        $this->middleware('can:empresa list', ['only' => ['index','show']]);
        $this->middleware('can:empresa create', ['only' => ['create','store']]);
        $this->middleware('can:empresa edit', ['only' => ['edit','update']]);
        $this->middleware('can:empresa delete', ['only' => ['destroy']]);
    }

// Función para poder exportar datos en formato excel

    public function exportempresa()
    {
        return Excel::download(new EmpresaExport, 'empresas.xlsx');
        // return redirect()->route('oftraballo.index');
    }

// Función para poder exportar datos en formato PDF

    public function exportpdfempresa()
    {
        return Excel::download(new EmpresaExport, 'empresas.pdf', \Maatwebsite\Excel\Excel::DOMPDF);
        // return redirect()->route('oftraballo.index');
    }

}
