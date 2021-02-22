<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        echo"Selamat Datang";
    }
    public function about(){
        echo "Erika Amalia - 1941720015";
    }
    public function articels($id){
        echo "Halaman Artikel dengan ID :" . $id;
    }
    
}