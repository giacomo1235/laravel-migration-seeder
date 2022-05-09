<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Train;

class PageController extends Controller
{
    public function index() {
        $trainsList = Train::paginate(100);
        /* where(
            ['orario_di_partenza', 'like', date()]
        )->get(); */
        return view('index', compact('trainsList'));
    }
}
