<?php

namespace App\Http\Controllers;
use App\Models\From;
use App\Http\Requests\FromRequest;

class FromController extends Controller
{
    public function froms (From $from)
    {
        return view('from.from')->with(['froms' => $from->getPaginateByLimit()]); 
    }

    public function create()
    {
    return view('from.create');
    }

    public function store(FromRequest $request, From $from)
{
    $input = $request['from'];
    $from->from = $input["name"];//ここ注意
    $from->save();
    return redirect('/from/create');
}

public function edit(From $from)
{
    return view('from.edit')->with(['from' => $from]);
}

public function update(FromRequest $request, From $from)
{
    $input_from = $request['from'];
    $from->from = $input_from["name"];//ここ注意
    $from->save();
    return redirect('/from');
}

public function delete(From $from)
{
    $from->delete();
    return redirect('/from');
}
}
