<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('メインメニュー') }}
        </h2>
        <link rel="stylesheet" href="{{ asset('/css/profile.css') }}">
    </x-slot>
    <div class="main">
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <p class="mode">上のタグからモードを選択してね！</p>
                        <p></p>
                        <p>・プロフィール･･･これまで登録した情報をみることができます！</p>
                        <p></p>
                        <p>・クイズ　　　･･･プロフィールの内容を入力するクイズができます！</p>
                        <p></p>
                        <p>・4択クイズ　 ･･･ランダムで10問、友達に関する4択クイズができます！</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>