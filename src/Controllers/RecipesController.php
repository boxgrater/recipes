<?php

namespace BoxGrater\Recipes\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use BoxGrater\Recipes\Models\Recipe as Model;

class RecipesController extends Controller
{
    protected $handle = "recipe";

    public function __construct()
    {
        $this->layout = str_plural($this->handle);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Model::all();
        return view( $this->layout.'::recipe', ['view' => 'index'])->with($this->layout, $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view( $this->layout.'::recipe', ['view' => 'create']);
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Model::find($id);
        return view( $this->layout.'::recipe', ['view' => 'show'])->with($this->handle, $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Model::find($id);
        return view( $this->layout.'::recipe', ['view' => 'edit'])->with($this->handle, $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
