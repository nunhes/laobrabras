<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Oftraballo;
use App\Models\Empresa;
use Illuminate\Http\Request;

// exportar pdf/excel
use App\Exports\OftraballoExport;
use Maatwebsite\Excel\Facades\Excel;
use PhpOffice\PhpSpreadsheet\Writer\Pdf\Dompdf;

use Carbon\Carbon;

use DB;
// use PDF;

class OftraballoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // add
        $oftraballos = (new Oftraballo)->newQuery();
        if (request()->has('search')) {
            $oftraballos->where('posto', 'Like', '%' . request()->input('search') . '%')
            ->orWhere('observacions', 'Like', '%' . request()->input('search') . '%')
            ->orWhere('estudiosminimos', 'Like', '%' . request()->input('search') . '%')
            ->orWhere('data', 'Like', '%' . request()->input('search') . '%');
        }

        if (request()->query('sort')) {
            $attribute = request()->query('sort');
            $sort_order = 'ASC';
            if (strncmp($attribute, '-', 1) === 0) {
                $sort_order = 'DESC';
                $attribute = substr($attribute, 1);
            }
            $oftraballos->orderBy($attribute, $sort_order);
        } else {
            $oftraballos->latest();
        }

        $oftraballos = $oftraballos->paginate(10);
        return view('admin.oftraballo.index',compact('oftraballos'))
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
        return view('admin.oftraballo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validar datos
        $request->validate([
            'posto' => 'required|string:'.config('oftraballo.table_names.oftraballos', 'oftraballos').',posto',
            'data' => 'required:'.config('oftraballo.table_names.oftraballos', 'oftraballos').',data',
            'nummeses' => 'required:'.config('oftraballo.table_names.oftraballos', 'oftraballos').',nummeses',
          'numpostosofertados' => 'required:'.config('oftraballo.table_names.oftraballos', 'oftraballos').',numpostosofertados',
        ]);
        Oftraballo::create($request->all());
        return redirect()->route('oftraballo.index')
            ->with('message','Oferta de traballo created successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Oftraballo  $oftraballo
     * @return \Illuminate\Http\Response
     */
    public function show(Oftraballo $oftraballo)
    {
       // add
        return view('admin.oftraballo.show', compact('oftraballo'));
     }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Oftraballo  $oftraballo
     * @return \Illuminate\Http\Response
     */
    public function edit(Oftraballo $oftraballo)
    {
        // add
        return view('admin.oftraballo.edit', compact('oftraballo'));
   }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Oftraballo  $oftraballo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Oftraballo $oftraballo)
    {
         // add
        $request->validate([
            'posto' => 'required|string:'.config('oftraballo.table_names.oftraballos', 'oftraballos').',posto,'.$oftraballo->id,
            'data' => 'required:'.config('oftraballo.table_names.oftraballos', 'oftraballos').',data,'.$oftraballo->id,
            'nummeses' => 'required:'.config('oftraballo.table_names.oftraballos', 'oftraballos').',nummeses,'.$oftraballo->id,
          'numpostosofertados' => 'required:'.config('oftraballo.table_names.oftraballos', 'oftraballos').',numpostosofertados,'.$oftraballo->id,
        ]);
        $oftraballo->update($request->all());
        return redirect()->route('oftraballo.index')
            ->with('message','Oferta de traballo actualizada con éxito.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Oftraballo  $oftraballo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Oftraballo $oftraballo)
    {
        // eliminar oferta existente
        $oftraballo->delete();
        return redirect()->route('oftraballo.index')
            ->with('message','Oferta de traballo eliminada con éxito');

    }

/**
 * The permission has been checked in the controller constructor by using middleware.
 */
    function __construct()
    {
        $this->middleware('can:oftraballo list', ['only' => ['index','show']]);
        $this->middleware('can:oftraballo create', ['only' => ['create','store']]);
        $this->middleware('can:oftraballo edit', ['only' => ['edit','update']]);
        $this->middleware('can:oftraballo delete', ['only' => ['destroy']]);
    }

    // Función para poder exportar datos en formato excel

    public function export()
    {
        return Excel::download(new OftraballoExport, 'oftraballo.xlsx');
        //return redirect()->route('oftraballo.index');
    }

// Función para poder exportar datos en formato PDF

    public function exportpdf()
    {
        return Excel::download(new OftraballoExport, 'oftraballo.pdf', \Maatwebsite\Excel\Excel::DOMPDF);
        //return redirect()->route('oftraballo.index');
    }
}
