<?php

namespace App\Http\Controllers;

use App\Models\Relation;
use App\Models\From;
use App\Models\Mprofile;
use Illuminate\Http\Request;
use PhpParser\Node\Name;

class QuizController extends Controller
{
    public function QuizSelect(Mprofile $pro)
    {
        return view('Quiz.select')->with(['profile' => $pro->getPaginateByLimit(4)]);
    }

    public function QuizQuestion(Mprofile $pro, Relation $relation, From $from)
    {
        return view('Quiz.question')->with(['pro' => $pro, 'relation' => $relation->get(), 'from' => $from->get()]);
    }

    //こっから先がNewになる

    public function NewQuizSelect(Mprofile $pro)
    {
        return view('NewQuiz.select')->with(['profile' => $pro->getPaginateByLimit(4)]);
    }

    public function NewQuizALL(Mprofile $profile, Relation $relation, From $from)
    {

        // 全件取得
        $all_data = $profile->get();

        // 名前とかいろんないろんなデータを全権取得する
        $questions = [];
        //質問一覧の多次元配列のからデータを取得

        // 取得したデータをもとに問題を作ります
        $question_key = [
            "birth" => "生年月日",
            "food" => "好きな食べ物",
            "hobby" => "趣味",
            "word" => "好きな言葉",
            "work"=>"仕事"
        ];
        //各項目のDB上のカラム名と単語を紐つけしている。問題文に自動出力させるようにする

        // 10問の問題を作成する
        for($i=0; $i<10; $i++){
            // ランダムな4つのデータを取得
            $number_array = range(0, count($all_data)-1); // 全データ分の数の数列を用意
            shuffle($number_array); // 配列の順番入れ替え▶︎配列の項番と中身が入れ替わる
                $record1 = $all_data[$number_array[0]];
            if( count($all_data) > 1){
                $record2 = $all_data[$number_array[1]];}
            if( count($all_data) > 2){
                $record3 = $all_data[$number_array[2]];}
            // 3件以下の場合は3択
            if( count($all_data) > 3){
                $record4 = $all_data[$number_array[3]];
            }

            // 取得したデータをもとに問題を作ります
            $question_key = [
                "birth" => "生年月日",
                "food" => "好きな食べ物",
                "hobby" => "趣味",
                "word" => "好きな言葉",
                "work"=>"仕事"
            ];
            //各項目のDB上のカラム名と単語を紐つけしている。問題文に自動出力させるようにする。連想配列

            // 問題にするフィールドを決める
            $field_list = array_keys($question_key);
            //question_keyの配列キー（birthとか）を取得
            $number_array = range(0, count($field_list)-1);
            shuffle($field_list);//リストの順番変える
            $field = $field_list[$number_array[0]];
            //このfieldには、クイズのジャンルが格納される
            
            // 選択肢を作成する
            $sentakushi = [
                $record1[$field],
                $record2[$field],
                $record3[$field],
                $record4[$field],
            ];
            shuffle($sentakushi);//選択肢というインスタンス名はそのままに、順番だけ変えちゃう

            // 取得したデータをもとに問題を作ります
            $question_key = [
                "birth" => "生年月日",
                "food" => "好きな食べ物",
                "hobby" => "趣味",
                "word" => "好きな言葉",
                "work"=>"仕事"
            ];

            


            // 問題情報を作成する
            $question = [
                "q" => $record1->name . "の" . $question_key[$field] . "は？",
                //レコード１の名前と、問題文の取得
                "sentakushi" => $sentakushi,
                "answer" => $record1[$field],
                "name"=> $record1->name,
                "field"=>$question_key[$field]
            ];
            
            $questions[] = $question;
        }


        return view('NewQuiz.ALL')->with([
            "all_data" => $all_data,
            'questions' => $questions
        ]);

    }
}