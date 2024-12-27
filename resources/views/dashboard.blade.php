<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('メインメニュー') }}
        </h2>
    </x-slot>
    <div class="main">
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                    <p>上のタグから選択できます</p>
                    <p>・プロフィール･･･これまで登録した情報をみることができます。</p>
                    <p>・クイズ･･･プロフィールの内容を入力するクイズができます</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
