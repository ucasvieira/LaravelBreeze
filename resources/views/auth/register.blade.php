<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <script>
            $(document).ready(function() {

            $('#telefone').mask('(00) 0000-0000');
            $('#cep').mask('00000-000');
            $('#celular').mask('(00) 00000-0000');

            });
        </script>
        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" placeholder="Digite seu nome" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Endereco -->
        <div>
            <x-input-label for="endereco" :value="__('endereco')" />
            <x-text-input  id="endereco" class="block mt-1 w-full" type="text" name="endereco" placeholder="Digite seu endereço" :value="old('endereco')" required autofocus autocomplete="endereco" />
            <x-input-error :messages="$errors->get('endereco')" class="mt-2" />
        </div>

        <!-- bairro -->
        <div>
            <x-input-label for="bairro" :value="__('bairro')" />
            <x-text-input  id="bairro" class="block mt-1 w-full" type="text" name="bairro" placeholder="Digite seu bairro" :value="old('bairro')" required autofocus autocomplete="bairro" />
            <x-input-error :messages="$errors->get('bairro')" class="mt-2" />
        </div>
        
        <!-- cep -->
        <div>
            <x-input-label for="cep" :value="__('cep')" />
            <x-text-input class="form-control cep-mask"  pattern="\d{5}-\d{3}" placeholder="00000-000" title="Digite um CEP válido no formato 00000-000" id="cep" class="block mt-1 w-full" type="text" name="cep" :value="old('cep')" required autofocus autocomplete="cep" />
            <x-input-error :messages="$errors->get('cep')" class="mt-2" />
        </div>

        <!-- cidade -->
        <div>
            <x-input-label for="cidade" :value="__('cidade')" />
            <x-text-input  id="cidade" class="block mt-1 w-full" placeholder="Digite sua cidade" type="text" name="cidade" :value="old('cidade')" required autofocus autocomplete="cidade" />
            <x-input-error :messages="$errors->get('cidade')" class="mt-2" />
        </div>

        <!-- estado -->
        <div>
            <x-input-label for="estado" :value="__('estado')" />
            <x-text-input  id="estado" class="block mt-1 w-full" type="text" placeholder="Digite seu estado" name="estado" :value="old('estado')" required autofocus autocomplete="estado" />
            <x-input-error :messages="$errors->get('estado')" class="mt-2" />
        </div>

        <!-- telefone -->
        <div>
            <x-input-label for="telefone" :value="__('telefone')" />
            <x-text-input  id="telefone" class="block mt-1 w-full" type="tel" placeholder="(00) 0000-0000" name="telefone" :value="old('telefone')" required autofocus autocomplete="telefone"  />
            <x-input-error :messages="$errors->get('telefone')" class="mt-2" />
        </div>

        <!-- celular -->
        <div>
            <x-input-label for="celular" :value="__('celular')" />
            <x-text-input  id="celular" class="block mt-1 w-full" type="tel" name="celular" placeholder="(00) 00000-0000" :value="old('celular')" required autofocus autocomplete="celular"  />
            <x-input-error :messages="$errors->get('celular')" class="mt-2" />
        </div>
        

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" placeholder="Digite seu email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
