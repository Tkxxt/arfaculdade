<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <img src="/img/hdcevents_logo.jpg" alt="Excelência Ar Condicionado">
        </x-slot>

        <x-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Senha') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Lembrar de mim') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button class="ml-4">
                    {{ __('Entrar') }}
                </x-button>
            </div>
            <div class="card text-blue bg-primary py-5 d-md-down-none">
                    <div class="card-body text-center">
                        <div>
                            <h2>Sem conta?</h2>
                            <p>Crie uma agora!!</p>
                            <a class="btn btn-lg btn-outline-light mt-3" href="{{ route('register') }}">Registrar</a>
                        </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
