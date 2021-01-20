<?php

namespace App\Http\Controllers;

use App\Models\todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

class TodoController extends Controller
{
    public function share(Request $req){
        /*
        * Stores todo items in database and returns submission id
        */

        $submission_id = (todo::select(DB::raw("COALESCE(MAX(submission_id), 0) AS submission_id"))
                            ->first())["submission_id"]+1;
        $items = $req->all();
        foreach($items as $item){
            $todos = new todo;
            $todos->submission_id = $submission_id;
            $todos->item_number = $item["id"];
            $todos->description = $item["description"];
            $todos->save();   
        }
        return ["submission_id"=>$submission_id];
    }

    public function submission($id){
        /*
         *  Shows the submission listing 
         */
        $items = todo::select(["item_number","description"])
                     ->where("submission_id",$id)
                     ->get();
        if(count($items)==0){
            abort(404);
        } else {
            return view("listing")->with("items",$items);
        }
    }
}
