<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PerpustakaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('buku')
            ->leftjoin('rak_buku', 'rak_buku.id', '=', 'buku.id')

            ->get();
        return view ('home0217')->with('data', $data);
    }
}