<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Asunto;
use Illuminate\Http\Request;
use App\Actions\CreateAsuntoAction;
use App\Actions\EditAsuntoAction;
use App\Actions\DeleteAsuntoAction;
use Illuminate\Support\Facades\DB;

use Carbon\Carbon;

// use PDF;

class AsuntosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
  // public function index(Request $request)
    public function index()
    {

 // add
      /*$asuntos = (new Asunto)->newQuery();
        if (request()->has('search')) {
            $asuntos->where('nome', 'Like', '%' . request()->input('search') . '%')
              ->orWhere('description', 'Like', '%' . request()->input('search') . '%')
              ->where('datainicio', 'Like', '%' . request()->input('search') . '%')
              ->where('datafin', 'Like', '%' . request()->input('search') . '%');
        }

        if (request()->query('sort')) {
            $attribute = request()->query('sort');
            $sort_order = 'ASC';
            if (strncmp($attribute, '-', 1) === 0) {
                $sort_order = 'DESC';
                $attribute = substr($attribute, 1);
            }
            $asuntos->orderBy($attribute, $sort_order);
        } else {
            $asuntos->latest();
        }

        $asuntos = $asuntos->paginate(10);
        return view('calendar.index', compact('asuntos'))
            ->with('i', (request()->input('page', 1) - 1) * 10);*/


      return view('calendar.index', [
        'asuntos' => DB::table('asuntos')->paginate(10)
      ]);


      /*    $sort = trim($request->input('sort'));
         $sort = in_array($sort, ['datainicio', 'nome']) ? $sort : 'datainicio';

         $asuntos = Asunto::orderBy($sort, 'ASC')->paginate(10);

         return view('calendar.index')->with('asuntos', $asuntos);*/
     }

     /**
      * Show the form for creating a new resource.
      *
      * @return \Illuminate\Http\Response
      */
    public function create()
    {
        return view('calendar.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, CreateAsuntoAction $createAsuntoAction)
    {
        $request->validate([
            'nome' => 'required|max:255',                // title
            'description' => 'required',         // body
            'datainicio' => 'required|date_format:Y-m-d',          // due_at
            'codigo',
            'coste',
            'costeasoc',
            'datafin' => 'required|date_format:Y-m-d',
            'nummatriculadostotal',
            'nummatriculadosweb',
            'needssanitario',
            'programa_id',
            'user_id',

           // 'title' => 'required|max:255',
           // 'body' => 'required',
           // 'due_at' => 'required|date_format:Y-m-d',
        ], [
        // 'due_at.required' => 'The due date is a required field!',
        // 'due_at.date_format' => 'The date does not match the format dd/mm/yyyy',
            'datainicio.required' => 'A data de inicio é un dato requirido!',
            'datainicio.date_format' => 'A data non segue o formato dd/mm/yyyy',
        ]);

        $createAsuntoAction->execute($request);

        return redirect()->route('asuntos.index')->with('success','Actividade creada con éxito.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Asunto  $asunto
     * @return \Illuminate\Http\Response
     */
    public function show(Asunto $asunto)
    {
        return view('calendar.show')->with('asunto', $asunto);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Asunto  $asunto
     * @return \Illuminate\Http\Response
     */
    public function edit(Asunto $asunto)
    {
        return view('calendar.edit')->with('asunto', $asunto);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Asunto  $asunto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Asunto $asunto, EditAsuntoAction $editAsuntoAction)
    {
        $request->validate([
            'nome' => 'required|max:255',                // title
            'description' => 'required',         // body
            'datainicio' => 'required|date_format:Y-m-d',          // due_at
            'codigo',
            'coste',
            'costeasoc',
            'datafin' => 'date_format:Y-m-d',
            'nummatriculadostotal',
            'nummatriculadosweb',
            'needssanitario',
            'programa_id',
            'user_id',

           // 'title' => 'required|max:255',
           // 'body' => 'required',
           // 'due_at' => 'required|date_format:Y-m-d',
        ], [
            // 'due_at.required' => 'The due date is a required field!',
            // 'due_at.date_format' => 'The date does not match the format dd/mm/yyyy',
            'datainicio.required' => 'A data de início é un dato requirido!',
            'datainicio.date_format' => 'A data non segue o formato dd/mm/yyyy',
        ]);

        $editAsuntoAction->execute($request, $asunto);

        return redirect()->route('asuntos.index')->with('success','Actividade creada con éxito.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Asunto  $asunto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Asunto $asunto, DeleteAsuntoAction $deleteAsuntoAction)
    {
        if($asunto->user_id != auth()->user()->id) {
            return redirect()->route('asuntos.index')->with('error','Non estás autorizado a eliminar actividades doutro usuario!');
        }

        $deleteAsuntoAction->execute($asunto);

        return redirect()->route('asuntos.index')->with('success','Actividade eliminada con éxito.');

    }
}
