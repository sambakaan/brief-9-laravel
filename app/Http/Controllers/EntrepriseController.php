<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EntrepriseController extends Controller
{
    public function index () {
        return view('entreprises.index');
    }

    public function create() {
        return view('entreprises.create');
    }
}
