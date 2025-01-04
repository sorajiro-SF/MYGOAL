<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('問題') }}
        </h2>
        <style>    
    </style>

    </x-slot>
    <br></br>
    <div class="quizquestion">
            <figure class="image">
                <img class="profile_show_img" src="{{asset('storage/image/'. $pro->image_path)}}" alt="">
            </figure>
            <div class="right">
                <p class="all_name">この人の名前は？</p>
                <div class="name">
                <input type="text" name="name" id="name" placeholder="漢字の名前" value="{{ old('name') }}" answer="{{$pro->name}}"/>
                <p class="check" id="check_name"></p>
                </div>

                <div class="kana">
                <input type="text" name="kana" id="kana" placeholder="名前のかな" value="{{ old('kana') }}" answer="{{$pro->name_kana}}"/>
                <p class="check" id="check_kana"></p>
                </div>

                <p class="relation">この人との関係性は？</p>
                <select name="relation_id" id="relation_id" value="{{ old('relation_id') }}" answer="{{$pro->relation_id}}">
                    @foreach($relation as $relation)
                        <option value="{{ $relation->id }}">{{ $relation->relation }}</option>
                    @endforeach
                </select>
                <p class="check" id="check_relation_id"></p>
                
                <p class="birth">この人の誕生日はいつ？</p>
                <input type="date" name="date" id="date" value="{{ old('date') }}" answer="{{ $pro->birth }}"/>
                <p class="check" id="check_date"></p>
            
                <p class="from">この人の出身地はどこ？</p>
                <select name="from_id" id="from_id" value="{{ old('from_id') }}" answer="{{$pro->from_id}}"/>
                    @foreach($from as $from)
                        <option value="{{ $from->id }}">{{ $from->from }}</option>
                    @endforeach
                </select>
                <p class="check" id="check_from_id"></p>

                <p class="hobby">この人の趣味は何？</p>
                <input type="text" name="hobby" id="hobby" placeholder="自分の趣味" value="{{ old('hobby') }}" answer="{{$pro->hobby}}"/>
                <p class="check" id="check_hobby"></p>
            
                <p class="food">この人の好きな食べ物は何？</p>
                <input type="text" name="food" id="food" placeholder="好きな食べ物" value="{{ old('food') }}" answer="{{$pro->food}}"/>
                <p class="check" id="check_food"></p>
            
                <p class="work">この人の仕事は何？</p>
                <input type="text" name="work" id="work" placeholder="仕事" value="{{ old('work') }}" answer="{{$pro->work}}"/>
                <p class="check" id="check_work"></p>
                
                <p class="word">この人の好きな言葉は何？</p>
                <input type="text" name="word" id="word" placeholder="好きな言葉" value="{{ old('word') }}" answer="{{$pro->word}}"/>
                <p class="check" id="check_word"></p>
                <p></p>
            
            
                <input type="button" id="answerbutton" value="結果発表！" />

            <div class="footer">
                <a href="/Quiz">戻る</a>
            </div>
        </div>
        <script src="{{ asset('/js/jquery-3.7.1.min.js') }}"></script>
        <script src="{{ asset('/js/Quiz.js') }}"></script>
    </div>
    </x-app-layout>