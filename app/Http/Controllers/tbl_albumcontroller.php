<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class tbl_albumcontroller extends Controller
{
    //
    public function index()
    {
        $tbl_album = DB::table('tbl_album')->get();
        dump($tbl_album);
        return view ('index', ['tbl_album' =>$tbl_album]);
    }
}
