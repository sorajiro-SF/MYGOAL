<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('みんなのプロフィール') }}
        </h2>
        <style>
    </style>
    </x-slot>
    <br></br>
    <div class="show">
            <figure class="image">
                <img class="profile_show_img" src="{{asset('storage/image/'. $pro->image_path)}}" alt="">
            </figure>
            <div class="right">
            <p class="name">名前：{{$pro->name}}（{{$pro->name_kana}}）</p>
            <p class="relation">関係性：{{$pro->relation->relation}}</p>
            <p class="birth">誕生日：{{ $pro->birth }}</p>
            <p class="from">出身地：{{$pro->from->from}}</p>
            <p class="hobby">趣味：{{$pro->hobby}}</p>
            <p class="food">好きな食べ物：{{$pro->food}}</p>
            <p class="work">仕事：{{$pro->work}}</p>
            <p class="word">好きな言葉：{{$pro->word}}</p>
            </div>
            </div>
            </div>
        </div>
    </div>
    </x-app-layout>