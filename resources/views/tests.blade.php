@foreach ($tests as $test)
    {{$test->userid}}
@endforeach

<form method="POST">
    <input name="title" type="text" placeholder="Tytuł">
    <input name="question" type="text" placeholder="Pytanie">
    <input name="a" type="text" placeholder="Odpowiedz A">
    <input name="b" type="text" placeholder="Odpowiedz B">
    <input name="c" type="text" placeholder="Odpowiedz C">
    <input name="d" type="text" placeholder="Odpowiedz D">
    <input name="answer" type="text" placeholder="Poprawna">
    <input type="submit" value="Dodaj">
    @csrf
</form>