<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cliente;
use Yajra\Datatables\Datatables;

class TaskController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        return view('Tablas/index');
    }

    public function getTasks()
    {   
        
    }
}
