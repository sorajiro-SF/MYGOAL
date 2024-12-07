<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('みんなのプロフィール') }}
        </h2>
        <style>
    span{
     margin-right: 5px;
    }
    </style>
    </x-slot>
    <br></br>
    <div class="profile">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    ここが本文
                </div>
            </div>
        </div>
    </div>
    </div>
</x-app-layout>