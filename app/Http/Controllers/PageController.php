<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Train;

class PageController extends Controller
{
    public function index() {
        $trainsList = Train::where(
            ['orario_di_partenza', 'like', '2022%']
        )->get();
        return view('index', compact('trainsList'));
    }
}
