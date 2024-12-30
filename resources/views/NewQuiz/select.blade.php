<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('どのクイズにするか選択してください！') }}
        </h2>
        <style>
    </style>
    </x-slot>
    <br></br>
    <div class="newquizselect">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
    <div class="p-6 bg-white border-b border-gray-200">
        <p class="desc">クイズは全部で１０問！正解できるかな？</p>    
        <div><button class="ALL" onclick='location.href="/NewQuiz/ALL"'>問題へレッツゴー！</div>
        
    </div>
    </div>
    </div>
        
       
    </div>
</x-app-layout>