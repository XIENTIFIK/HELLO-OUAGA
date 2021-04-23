@extends('base')

@section('title', 'About Us ! '. config('app.name'))






@section('content')

<img src="{{asset('/img/soleil.jpg ') }}" alt="un soleil" class=" my-12 rounded-full shadow-md">

        <h2 class="mb-5 text-gray-700" >Concu par PIERRE avec Amour <span class="text-pink-500">&hearts;</span> </h2>
 

        <p><a href="{{ route('home')}}" class="text-indigo-500  hover:text-indigo-600 underline">Revenir a la page d'accueil</a></p>

       
@endsection