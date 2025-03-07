<?php

namespace App\Http\Controllers; 

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PageController extends Controller {
    public function index(){ 
        return ('Selamat Datang'); 
    } 

    public function about(){ 
        return ('Aprilia Putri Anggraeni (2341760043)'); 
    } 

    public function articles($id = null){ 
        return 'Halaman Artikel dengan Id' .$id; 
    }
}