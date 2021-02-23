@extends('layouts.app')

@section('content')
    <main>
        <header>
            <img src="../img/default-monochrome-white.svg" alt="Logo">
        </header>

        <form method="POST">



            <input type="email" name="email" placeholder="E-mail" autocomplete="email" required>
            @error('email')

                @if ($message == 'The email has already been taken.')
                    <div class="e_pass">Konto z tym adresem email już istnieje</div>
                @elseif($message == 'The email must be a valid email address.')
                    <div class="e_pass">Adres email jest niepoprawny</div>
                @elseif($message == 'The email field is required.')
                    <div class="e_pass">To pole jest wymagane</div>
                @else
                    <div class="e_pass"> {{ $message }}</div>
                @endif
            @enderror


            <input type="password" name="password" placeholder="Hasło" required>
            @error('password')
                @if ($message == 'The password must be at least 8 characters.')
                    <div class="e_pass">Hasło musi zawierać przynjamniej 8 znaków</div>
                @elseif($message == 'The password field is required.')
                    <div class="e_pass">To pole jest wymagane</div>
                @endif
            @enderror


            <input type="password" name="password_confirmation" placeholder="Powtórz hasło" required>
            @error('password')
                @if ($message == 'The password confirmation does not match.')
                    <div class="e_pass">Hasła muszą być identyczne</div>
                @endif
            @enderror


            @csrf

            
            <input type="submit" value="Zarejestruj się">
            <a href="login">Logowanie</a>
        </form>
    </main>

@endsection
