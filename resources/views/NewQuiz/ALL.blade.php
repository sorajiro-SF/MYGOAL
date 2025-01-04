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
                    @foreach($questions as $index => $question)
                    <div class="question" id="question.{{$question['name']}}.{{$question['field']}}">
                        <h1 class="q">第{{$index+1}}問</h1>
                        <h2 class="radio">{{$question['q']}}</h2>
                        <P></P>
                        <div>
                            <form class="radio" id="question_{{$index}}" answer="{{$question['answer']}}">
                                @foreach($question['sentakushi'] as $sentakushi)
                                <input type="radio" name="question_{{$index}}" value="{{$sentakushi}}">{{$sentakushi}}
                                @endforeach
                            </form>
                        </div>
                        <p class="check" id="check_question_{{$index}}"></p>
                    </div>
                    <p></p>
                    @endforeach
                    <!--- 各問題ごとにnameをつけたい -->
                    <p></p>
                    <input type="button" id="answer_button" value="結果発表！" />
                </div>
            </div>
        </div>
    </div>
    </div>
    <script src="{{ asset('/js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('/js/NewQuiz.js') }}"></script>
</x-app-layout>