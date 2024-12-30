<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('問題') }}
        </h2>
        <style>    
    </style>
    </x-slot>
    <br></br>
    <div class="newquizquestion">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
    <div class="p-6 bg-white border-b border-gray-200">
    <p class="question"></p>
    <div>
    {{$newfoodarray[1]['name']}}の好きな食べ物は？
    <div>
        <input type="radio" name="toi1" id="toi1_1" answer="29">{{$newfoodarray[1]['food']}}ラーメン
        <input type="radio" name="toi1" id="toi1_2" answer="29">寿司
        <input type="radio" name="toi1" id="toi1_3" answer="29">カツ丼
        <input type="radio" name="toi1" id="toi1_4" answer="29">ステーキ
    </div>
    <p></p>
    
    <span id="food_txt"></span>

</div>
    </div>
    </div>
    </div>
    </div>
    <script src="{{ asset('/js/NewQuiz.js') }}"></script>
    </x-app-layout>