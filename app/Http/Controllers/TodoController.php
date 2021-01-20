<?php

namespace App\Http\Controllers;

use App\Models\todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;


class TodoController extends Controller
{
    public function share(Request $req){
        Log::info($req);
        return "sucess";
    }
}
