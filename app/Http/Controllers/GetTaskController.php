<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cliente;
use Yajra\Datatables\Datatables;

class GetTaskController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        if ($request->ajax()) {
            $data = cliente::latest()->get();
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
   
                           $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">View</a>';
     
                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        return view('Tablas/index');
        
        //$tasks = cliente::select([
          //  'id',
            //'nombres',
            //'apellidos',
            //'fech_nac',
            //'genero',
            //'direccion',
            //'dpi',
            //'telefono']);
     
            //return Datatables::of($tasks)
     
                //->make(true);
    }
}
