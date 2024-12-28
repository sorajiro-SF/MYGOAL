<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('作成フォーム') }}
        </h2>
    </x-slot>
    <br></br>
    <div class="profile">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                <form action="/Mprofile" method="POST" enctype="multipart/form-data">
                    @csrf
                <div class="name">
                <h2>名前</h2>
                <input type="text" name="name" placeholder="漢字の名前"
                value="{{ old('name') }}"/>
                <p class="title__error" style="color:red">{{ $errors->first('name') }}</p>
                </div>
                <div class="kana">
                <input type="text" name="kana" placeholder="名前のかな"
                value="{{ old('kana') }}"/>
                <p class="title__error" style="color:red">{{ $errors->first('kana') }}</p>
                </div>

            
            <h2>関係性</h2>
            <div class="relation">
            <select name="relation_id" value="{{ old('relation_id') }}">
                @foreach($relation as $relation)
                    <option value="{{ $relation->id }}">{{ $relation->relation }}</option>
                @endforeach
            </select>
            </div>
            <p></p>


            <div class="birth">
            <h2>誕生日</h2>
                <input type="date" name="date" value="{{ old('date') }}"/>
            <p></p>

            <div class="from">
            <h2>出身地</h2>
            <select name="from_id" value="{{ old('from_id') }}">
                @foreach($from as $from)
                    <option value="{{ $from->id }}">{{ $from->from }}</option>
                @endforeach
            </select>
            </div>
            <p></p>


            <div class="hobby">
                <h2>趣味</h2>
                <input type="text" name="hobby" placeholder="自分の趣味"
                value="{{ old('hobby') }}"/>
                <p class="title__error" style="color:red">{{ $errors->first('hobby') }}</p>
            <p></p>

            <h2>好きな食べ物</h2>
                <input type="text" name="food" placeholder="好きな食べ物" value="{{ old('food') }}"/>
                <p class="title__error" style="color:red">{{ $errors->first('food') }}</p>
            <p></p>

            <h2>仕事</h2>
                <input type="text" name="work" placeholder="仕事" value="{{ old('work') }}"/>
                <p class="title__error" style="color:red">{{ $errors->first('work') }}</p>
            <p></p>

            <h2>好きな言葉</h2>
                <input type="text" name="word" placeholder="人生の言葉を入れてね" value="{{ old('word') }}"/>
                <p class="title__error" style="color:red">{{ $errors->first('word') }}</p>
            <p></p>
            <div class='image'>
               <h2>最高の写真</h2>
           </div>
           <div>
           <input type='file' name='img'>
           </div>
            <p></p>
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
</x-app-layout>