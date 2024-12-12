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
            <div class="h2 name">
                <h2>名前</h2>
                <input type="text" name="Mprofile[name]" placeholder="漢字の名前"
                value="{{ old('Mprofile.name') }}"/>
                <input type="text" name="Mprofile[kana]" placeholder="名前のかな"
                value="{{ old('Mprofile.kana') }}"/>
                <p class="title__error" style="color:red">{{ $errors->first('Mprofile.name') }}</p>
                <p></p>
                <p class="title__error" style="color:red">{{ $errors->first('Mprofile.kana') }}</p>
            </div>

            <div class="relation">
            <h2>関係性</h2>
            <select name="Mprofile[relation_id]">
                @foreach($relation as $relation)
                    <option value="{{ $relation->id }}">{{ $relation->relation }}</option>
                @endforeach
            </select>
            </div>
            <p></p>


            <div class="birth">
            <h2>誕生日</h2>
                <input type="date" name="Mprofile[date]" 
                value="{{ old('Mprofile.date') }}"/>
            <p></p>

            <div class="from">
            <h2>出身地</h2>
            <select name="Mprofile[from_id]">
                @foreach($from as $from)
                    <option value="{{ $from->id }}">{{ $from->from }}</option>
                @endforeach
            </select>
            </div>
            <p></p>


            <div class="name">
                <h2>趣味</h2>
                <input type="text" name="Mprofile[hobby]" placeholder="自分の趣味"
                value="{{ old('Mprofile.hobby') }}"/>
                <p class="title__error" style="color:red">{{ $errors->first('Mprofile.hobby') }}</p>
            <p></p>

            <h2>好きな食べ物</h2>
                <input type="text" name="Mprofile[food]" placeholder="好きな食べ物"
                value="{{ old('Mprofile.food') }}"/>
                <p class="title__error" style="color:red">{{ $errors->first('Mprofile.food') }}</p>
            <p></p>

            <h2>仕事</h2>
                <input type="text" name="Mprofile[work]" placeholder="仕事"
                value="{{ old('Mprofile.work') }}"/>
                <p class="title__error" style="color:red">{{ $errors->first('Mprofile.work') }}</p>
            <p></p>

            <h2>好きな言葉</h2>
                <input type="text" name="Mprofile[word]" placeholder="人生の言葉を入れてね"
                value="{{ old('Mprofile.word') }}"/>
                <p class="title__error" style="color:red">{{ $errors->first('Mprofile.word') }}</p>
            <p></p>

            <div class='image'>
                <h2>最高の写真！</h2>
                <div>
            <input type="hidden" name="Mprofile[id]" value="">
                </div>
                <input type="file",name="Mprofile[image]",onchange="preview(this)";>
                
            <p></p>

            <input type="submit" value="保存する"/>


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