<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    function index(){
        echo 'Selamat Datang';
    }

    function about(){
        echo 'M.Rizky Mafazan 2141720140';
    }

    function articles(){
        echo 'Halaman Artikel dengan Id $id';
    }
}
