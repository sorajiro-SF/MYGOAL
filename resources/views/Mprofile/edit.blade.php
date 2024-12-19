<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('編集フォーム') }}
        </h2>
    </x-slot>
    <br></br>
    <div class="profile">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                <form action="/Mprofile/{{$pro->id}}" method="POST" enctype="multipart/form-data">
                    @csrf
                <div class="name">
                <h2>名前</h2>
                <input type="text" name="name" placeholder="漢字の名前"
                value="{{$pro->name}}"/>
                <p class="title__error" style="color:red">{{ $errors->first('name') }}</p>
                </div>
                <div class="kana">
                <input type="text" name="kana" placeholder="名前のかな"
                value="{{$pro->name_kana}}"/>
                <p class="title__error" style="color:red">{{ $errors->first('kana') }}</p>
                </div>

            <div class="relation">
            <h2>関係性</h2>
            <select name="relation_id" value="">
                @foreach($relation as $relation)
                    <option value="{{ $relation->id }}" 
                    @if ( $relation->id == $pro->relation_id ) selected 
                    @endif>
                    
                    {{ $relation->relation }}</option>
            
                @endforeach
            </select>
            </div>
            <p></p>


            <div class="birth">
            <h2>誕生日</h2>
                <input type="date" name="date" value="{{ $pro->birth }}"/>
            <p></p>

            <div class="from">
            <h2>出身地</h2>
            <select name="from_id" value="">
                @foreach($from as $from)
                    <option value="{{ $from->id }}"
                    @if ( $from->id == $pro->from_id ) selected 
                    @endif>{{ $from->from }}</option>
                @endforeach
            </select>
            </div>
            <p></p>


            <div class="name">
                <h2>趣味</h2>
                <input type="text" name="hobby" placeholder="自分の趣味"
                value="{{ $pro->hobby }}"/>
                <p class="title__error" style="color:red">{{ $errors->first('hobby') }}</p>
            <p></p>

            <h2>好きな食べ物</h2>
                <input type="text" name="food" placeholder="好きな食べ物"
                value="{{ $pro->food }}"/>
                <p class="title__error" style="color:red">{{ $errors->first('food') }}</p>
            <p></p>

            <h2>仕事</h2>
                <input type="text" name="work" placeholder="仕事"
                value="{{ $pro->work }}"/>
                <p class="title__error" style="color:red">{{ $errors->first('work') }}</p>
            <p></p>

            <h2>好きな言葉</h2>
                <input type="text" name="word" placeholder="人生の言葉を入れてね"
                value="{{ $pro->word }}"/>
                <p class="title__error" style="color:red">{{ $errors->first('word') }}</p>
            <p></p>
            <div class='image'>
               <h2>最高の写真</h2>
           </div>
           <div>
           <input type='file' name='img' id="filecheck"/>
           </div>
           
           <p></p>
           <!---画像が新しく入力されたか否かで、If文を作成-->

            <input type="submit" value="保存する" />
            <div class="footer">
                <a href="/Mprofile">戻る</a>
            </div>
            
        </form>  
        
                </div>
            </div>
        </div>
        
    </div>
    </div>
    <script src='edit.js'></script>
</x-app-layout>