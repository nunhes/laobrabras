<?php

  namespace App\Http\Controllers\Admin;

  use App\Http\Controllers\Controller;
  use App\Models\Offormacion;
  use App\Models\Empresa;
  use Illuminate\Http\Request;

// exportar pdf/excel
  use App\Exports\OfformacionExport;
  use Maatwebsite\Excel\Facades\Excel;
  use PhpOffice\PhpSpreadsheet\Writer\Pdf\Dompdf;

  use Carbon\Carbon;

  use DB;
// use PDF;

  class OfformacionController extends Controller
  {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      // add
      $offormacions = (new Offormacion)->newQuery();
      if (request()->has('search')) {
        $offormacions->where('nome', 'Like', '%' . request()->input('search') . '%')
          ->orWhere('dataata', 'Like', '%' . request()->input('search') . '%')
          ->orEhere('datadende', 'Like', '%' . request()->input('search') . '%')
          ->where('lugar', 'Like', '%' . request()->input('search') . '%')
          ->where('tipo', 'Like', '%' . request()->input('search') . '%');
      }

      if (request()->query('sort')) {
        $attribute = request()->query('sort');
        $sort_order = 'ASC';
        if (strncmp($attribute, '-', 1) === 0) {
          $sort_order = 'DESC';
          $attribute = substr($attribute, 1);
        }
        $offormacions->orderBy($attribute, $sort_order);
      } else {
        $offormacions->latest();
      }

      $offormacions = $offormacions->paginate(10);
      return view('admin.offormacion.index', compact('offormacions'))
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
      return view('admin.offormacion.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      //
      $request->validate([
        'nome' => 'required|string:' . config('offormacion.table_names.offormacions', 'offormacions') . ',nome',
        'dataata' => 'required:' . config('offormacion.table_names.offormacions', 'offormacions') . ',dataata',
        'datadende' => 'required:' . config('offormacion.table_names.offormacions', 'offormacions') . ',datadende',
        'lugar' => 'required:' . config('offormacion.table_names.offormacions', 'offormacions') . ',lugar',
        'numhoras' => 'required:' . config('offormacion.table_names.offormacions', 'offormacions') . ',numhoras',
        'numprazas' => 'required:' . config('offormacion.table_names.offormacions', 'offormacions') . ',numprazas',
      ]);
      Offormacion::create($request->all());
      return redirect()->route('offormacion.index')
        ->with('message', 'Oferta de formación creada con éxito.');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Offormacion $offormacion
     * @return \Illuminate\Http\Response
     */
    public function show(Offormacion $offormacion)
    {
      // add
      return view('admin.offormacion.show', compact('offormacion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Offormacion $offormacion
     * @return \Illuminate\Http\Response
     */
    public function edit(Offormacion $offormacion)
    {
      // add
      return view('admin.offormacion.edit', compact('offormacion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Offormacion $offormacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Offormacion $offormacion)
    {
      // add
      $request->validate([
        'nome' => 'required|string:' . config('offormacion.table_names.offormacions', 'offormacions') . ',nome,' . $offormacion->id,
        'dataata' => 'required:' . config('offormacion.table_names.offormacions', 'offormacions') . ',dataata,' . $offormacion->id,
        'datadende' => 'required:' . config('offormacion.table_names.offormacions', 'offormacions') . ',datadende,' . $offormacion->id,
        'lugar' => 'required:' . config('offormacion.table_names.offormacions', 'offormacions') . ',lugar,' . $offormacion->id,
        'numhoras' => 'required:' . config('offormacion.table_names.offormacions', 'offormacions') . ',numhoras,' . $offormacion->id,
      ]);
      $offormacion->update($request->all());
      return redirect()->route('offormacion.index')
        ->with('message', 'Oferta de formación actualizada con éxito.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Offormacion $offormacion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Offormacion $offormacion)
    {
      // eliminar oferta existente
      $offormacion->delete();
      return redirect()->route('offormacion.index')
        ->with('message', 'Oferta de formación eliminada con éxito.');
    }

    /**
     * The permission has been checked in the controller constructor by using middleware.
     */
    function __construct()
    {
      $this->middleware('can:offormacion list', ['only' => ['index', 'show']]);
      $this->middleware('can:offormacion create', ['only' => ['create', 'store']]);
      $this->middleware('can:offormacion edit', ['only' => ['edit', 'update']]);
      $this->middleware('can:offormacion delete', ['only' => ['destroy']]);
    }

    // Función para poder exportar datos en formato excel

    public function exportofformacion()
    {
      return Excel::download(new OfformacionExport, 'offormacion.xlsx');
    }

    // Función para poder exportar datos en formato PDF

    public function exportpdfofformacion()
    {
      return Excel::download(new OfformacionExport, 'offormacion.pdf', \Maatwebsite\Excel\Excel::DOMPDF);
    }
  }
