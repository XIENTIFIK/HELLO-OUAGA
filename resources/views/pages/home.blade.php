@extends('base')


@section('content')

<img src="{{ asset('/img/gateau.jpg') }}" alt="un gateau" class="mt-12 rounded shadow-md h-40 w-40 ">
        <h1 class="mt-5 text-3xl sm:text-5xl font-semibold text-indigo-600">Hello from Ouagadougou</h1>

        <p class="text-lg text-gray-800">Il est {{ date('G:i A') }}.</p>


@endsection 