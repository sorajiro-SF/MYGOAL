<?php

namespace App\Http\Controllers;
use App\Models\Relation;
use App\Models\From;
use App\Models\Mprofile;
use App\Http\Requests\MprofileRequest;



class MprofileController extends Controller
{
    public function index() 
    {
        return view('Mprofile.index');
    }
    public function create(Relation $relation, From $from)
    {
        return view('Mprofile.create')->with(['relation' => $relation->get(), 'from'=> $from->get()]);
    }

    public function store(MprofileRequest $request,Mprofile $pro)
    {
        $input = $request['Mprofile'];
        $pro->name = $input["name"];
        $pro->kana = $input["name_kana"];
        $pro->relation_id = $input["relation_id"];
        $pro->date = $input["birth"];
        $pro->from_id = $input["from_id"];

        $path = $request->file('image')->store('public/image');
        $image_path = basename($path);
        $pro->image_path = $image_path;
        $pro->save();

        return redirect("/Mprofile");
    }

}
