<?php

namespace App\Http\Controllers;

use App\Models\Notas;
use Illuminate\Http\Request;

class NotasController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
}
