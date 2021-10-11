<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Board;

class BoardController extends Controller
{
    /**
     * Show all of the boards available.
     */
    public function index()
    {
        return view('boards.index', [ 'boards' => Board::all() ]);
    }
}
