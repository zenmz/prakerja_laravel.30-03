@extends('template')
@section('main')
    <h1>Ini view laravel saya</h1>

    @for ($i = 1; $i <= 10; $i++)
        @if ($i % 2)
            <h1>Ini menggunakan blade</h1>
        @endif
    @endfor

    @php
        $nilai = 50;
        echo $nilai;
    @endphp

    <img src="{{ asset('img/photo-167.jpeg') }}" alt="" width="300px">
@endsection
