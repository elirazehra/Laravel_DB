<?php

namespace App\Http\Controllers;

use App\Models\DumpModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\LaravelIgnition\Recorders\DumpRecorder\Dump;

class DumpModelController extends Controller
{

    public function index()
    {
        return view('dump');
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      /*  DB::table('dump_models')->insert([
            'name' => 'Ahmet',
            'surname' => 'kaya',
            'is_active'=>'0',
            'type'=> '1' ]);

        return "veri eklendi";*/
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\DumpModel $dumpModel
     * @return \Illuminate\Http\Response
     */
    public function show(DumpModel $dumpModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\DumpModel $dumpModel
     * @return \Illuminate\Http\Response
     */
    public function edit(DumpModel $dumpModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\DumpModel $dumpModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DumpModel $dumpModel)
    {
     /*   $dump = DB::table('dump_models')
            ->where('id', 1)
            ->update(['surname' => 'kaya']);
        return "veri güncellendi";*/


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\DumpModel $dumpModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(DumpModel $dumpModel)
    {
  /*      $dump = DB::table('dump_models')
            ->where('id', '=','1')
            ->delete(['surname' => 'kar']);
        return "veri silindi";*/
    }

    public function insert_dump_data(Request $request)
    {
    $dump=new DumpModel();
        $dump->name=$request->name;
        $dump->surname=$request->surname;
        $dump->is_active=$request->is_active;
        $dump->type=$request->is_active;
        $dump->save();



   }
}
