<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CapungController extends Controller
{
    function index(){
        echo "ini controller";

    }
        function pujangga(){
            return "bebek goreng by pujangga";
        }
    function city (){
        return view("mamalia/kucing");
    }
    
}
