<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class DroppingController extends Controller
{

    public function index() {
        return view('dropping.index');
    }

    public function table(){
    	return view('table');
    }

    public function tarik_tunai(){
    	return view('tariktunai');
    }

    public function pengembalian(){
    	return view ('pengembalian');
    }

    public function penambahan(){
    	return view ('penambahan');
    }

    public function redirect($url, $statusCode = 303)
    {
       header('Location: ' . $url, true, $statusCode);
       die();
    }
}
