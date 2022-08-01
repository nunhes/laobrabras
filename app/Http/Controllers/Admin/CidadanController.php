<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Cidadan;
use Illuminate\Http\Request;

class CidadanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // add
        $cidadans = (new Cidadan)->newQuery();
        if (request()->has('search')) {
            $cidadans->where('name', 'Like', '%' . request()->input('search') . '%');
        }
        if (request()->query('sort')) {
            $attribute = request()->query('sort');
            $sort_order = 'ASC';
            if (strncmp($attribute, '-', 1) === 0) {
                $sort_order = 'DESC';
                $attribute = substr($attribute, 1);
            }
            $cidadans->orderBy($attribute, $sort_order);
        } else {
            $cidadans->latest();
        }
        $cidadans = $cidadans->paginate(5);
        return view('admin.cidadan.index',compact('cidadans'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cidadan  $cidadan
     * @return \Illuminate\Http\Response
     */
    public function show(Cidadan $cidadan)
    {
        // add
        $roles = Role::all();
        $userHasRoles = array_column(json_decode($user->roles, true), 'id');
        return view('admin.cidadan.show', compact('cidadan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cidadan  $cidadan
     * @return \Illuminate\Http\Response
     */
    public function edit(Cidadan $cidadan)
    {
        // add
        $roles = Role::all();
       
        return view('admin.cidadan.edit', compact('cidadan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cidadan  $cidadan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cidadan $cidadan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cidadan  $cidadan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cidadan $cidadan)
    {
        //
    }
}
