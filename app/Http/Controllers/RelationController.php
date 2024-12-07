<?php

namespace App\Http\Controllers;
use App\Http\Requests\RelationRequest;
use App\Models\Relation;

class RelationController extends Controller
{
    public function relations (Relation $rel)
    {
        return view('rel.relation')->with(['rels' => $rel->getPaginateByLimit()]); 
    }

    public function create()
    {
    return view('rel.create');
    }

    public function store(RelationRequest $request, Relation $rel)
{
    $input = $request['relation'];
    $rel->relation = $input["name"];
    $rel->save();
    return redirect('/');
}

public function show(Relation $relation)
{
    return view('rel.show')->with(['rel' => $relation]);
 //'rel'はbladeファイルで使う変数。中身は$relationはid=1のPostインスタンス。
}

public function edit(Relation $relation)
{
    return view('rel.edit')->with(['rel' => $relation]);
}

public function update(RelationRequest $request, Relation $relation)
{
    $input_rel = $request['relation'];
    $relation->relation = $input_rel["name"];
    $relation->save();
    return redirect('/');
}

public function delete(Relation $relation)
{
    $relation->delete();
    return redirect('/');
}

}