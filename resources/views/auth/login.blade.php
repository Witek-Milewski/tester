@extends('layouts.app')

@section('content')

    <main>
        <header>
            <img src="img/default-monochrome-white.svg" alt="Logo">
        </header>

        <form method="POST">

            <input type="text" name="email" placeholder="E-mail" required>
            @error('email')
                @if ($message == 'The email field is required.')
                    <div class="e_pass">To pole jest wymagane</div>
                @endif
            @enderror


            <input type="password" name="password" placeholder="Hasło" required>
            @error('email')
                @if ($message == 'These credentials do not match our records.')
                <div class="e_pass">Nieprawidłowe dane</div>

                @endif
            @enderror


            @csrf

            
            <input type="submit" value="Zaloguj się">
            <a href="/register">Rejestracja</a>
        </form>
    </main>

@endsection
