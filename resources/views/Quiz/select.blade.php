<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('誰のクイズにするか選択してください！') }}
        </h2>
        <style>
    </style>
    </x-slot>
    <br></br>
    <div class="quizselect">
        @foreach($profile as $pro)
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <img class='p_img' src="{{asset('storage/image/'. $pro->image_path)}}"  alt="">
                    <div class="edit"><a href="/Quiz/{{ $pro->id }}">問題に行く！</a></div>

                </div>
            </div>
        </div>
        @endforeach
        <br></br>
        
        <div class='paginate'>
            <p>{{ $profile->links() }}</p>
        </div>
    </div>
</x-app-layout>