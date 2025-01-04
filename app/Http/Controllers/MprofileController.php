<?php

namespace App\Http\Controllers;

use App\Models\Relation;
use App\Models\From;
use App\Models\Mprofile;
use App\Http\Requests\MprofileRequest;
use Illuminate\Support\Facades\DB;




class MprofileController extends Controller
{
    public function index(Mprofile $pro)
    {
        return view('Mprofile.index')->with(['profile' => $pro->getPaginateByLimit()]);
    }
    public function create(Relation $relation, From $from)
    {
        return view('Mprofile.create')->with(['relation' => $relation->get(), 'from' => $from->get()]);
    }
    public function show(Mprofile $pro)
    {
        return view('Mprofile.show')->with(['pro' => $pro]);
        //'post'はbladeファイルで使う変数。中身は$postはid=1のPostインスタンス。
    }

    public function store(MprofileRequest $request, Mprofile $pro)
    {
        DB::beginTransaction();
        try {
            $pro->name = $request->name;
            $pro->name_kana = $request->kana;
            $pro->relation_id = $request->relation_id;
            $pro->hobby = $request->hobby;
            $pro->birth = $request->date;
            $pro->food = $request->food;
            $pro->work = $request->work;
            $pro->word = $request->word;
            $pro->from_id = $request->from_id;
            $pro->image_path = $request->from_id;
            $pro->save();
            $file = $request->file('img');
            if (empty($file)) {
                return redirect('/Mprofile/create')->withInput();
            } else {
                $file_name = 'profile' . $pro->id;
                $pro->image_path = $file_name;
                $request->file('img')->storeAs('public/image', $file_name);
            }
            $pro->save();
            DB::commit();
        } catch (\Exception $e) {
            report($e);
            DB::rollback();
            return redirect('/Mprofile/create')->withInput();
        }
        return redirect('/Mprofile');
    }

    public function edit(Mprofile $pro, Relation $relation, From $from)
    {
        return view('Mprofile.edit')->with(['pro' => $pro, 'relation' => $relation->get(), 'from' => $from->get()]);
    }

    public function update(MprofileRequest $request, Mprofile $pro)
    {
        DB::beginTransaction();
        try {
            $pro->name = $request->name;
            $pro->name_kana = $request->kana;
            $pro->relation_id = $request->relation_id;
            $pro->hobby = $request->hobby;
            $pro->birth = $request->date;
            $pro->food = $request->food;
            $pro->work = $request->work;
            $pro->word = $request->word;
            $pro->from_id = $request->from_id;

            $file = $request->file('img');
            if (empty($file)) {
            } else {
                $file_name = 'profile' . $pro->id; //ファイル名を変えるよ
                $pro->image_path = $file_name; //データベースの画像パスを変えるよ
                $request->file('img')->storeAs('public/image', $file_name);
            }
            $pro->save();
            DB::commit();
        } catch (\Exception $e) {
            report($e);
            DB::rollback();
            return redirect('/Mprofile/edit')->withInput();
        }
        return redirect('/Mprofile');
    }

    public function delete(Mprofile $pro)
    {

        $pro->delete();
        return redirect('/Mprofile');
    }
}
