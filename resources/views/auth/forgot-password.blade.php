<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600">
        {{ __('パスワードを再送するリンクを送付しますので、下記フォームに登録したメールアドレスを入力してください。') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('メールアドレスに再登録用リンクを送付') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
