<?php

namespace App\Http\Controllers;
use App\Models\Relation;
use App\Models\From;
use App\Models\Mprofile;
use App\Http\Requests\MprofileRequest;




class MprofileController extends Controller
{
    public function index(Mprofile $pro) 
    {
        return view('Mprofile.index')->with(['profile' => $pro->getPaginateByLimit()] );
    }
    public function create(Relation $relation, From $from)
    {
        return view('Mprofile.create')->with(['relation' => $relation->get(), 'from'=> $from->get()]);
    }

    public function store(MprofileRequest $request, Mprofile $pro)
    {

        $pro->name = $request->name;
        $pro->name_kana = $request->kana;
        $pro->relation_id = $request->relation_id;
        $pro->hobby = $request->hobby;
        $pro->birth = $request->date;
        $pro->food = $request->food;
        $pro->work = $request->work;
        $pro->word = $request->word;
        $pro->from_id = $request->from_id;

        $file_name = $request->file('img')->getClientOriginalName();
        $request->file('img')->storeAs('image' ,$file_name);
        $pro->image_path = $file_name;
        
        $pro->save();
        return redirect('/Mprofile');
    }

    public function edit(Mprofile $pro, Relation $relation, From $from)
    {
        return view('Mprofile.edit')->with(['pro' => $pro ,'relation' => $relation->get(), 'from'=> $from->get()]);
    }

    public function update(MprofileRequest $request, Mprofile $pro)
{
    $pro->name = $request->name;
    $pro->name_kana = $request->kana;
    $pro->relation_id = $request->relation_id;
    $pro->hobby = $request->hobby;
    $pro->birth = $request->date;
    $pro->food = $request->food;
    $pro->work = $request->work;
    $pro->word = $request->word;
    $pro->from_id = $request->from_id;

    $file_name = $request->file('img')->getClientOriginalName();
    if ($pro->image_path == $file_name)
    {
        //
    }else{
        $file_name = $request->file('img')->getClientOriginalName();
        $request->file('img')->storeAs('image' ,$file_name);
        $pro->image_path = $file_name;
    }
    $pro->save();
    return redirect('/Mprofile');
}


    public function delete(Mprofile $pro)
    {
        
        $pro->delete(); 
        return redirect('/Mprofile');
    }


}