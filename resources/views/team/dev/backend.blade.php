@extends('layout.layout')

@section('content')

<div class="flex">
@foreach ($backArray as $value )
<div class="max-w-xs mx-auto overflow-hidden bg-white rounded-lg shadow-lg dark:bg-gray-800 my-4">
    <img class="object-cover w-full h-56" src="https://images.unsplash.com/photo-1542156822-6924d1a71ace?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="avatar">

    <div class="py-5 text-center">
        <a href="#" class="block text-2xl font-bold text-gray-800 dark:text-white">{{$value[0]}}</a>
        <span class="text-sm text-gray-700 dark:text-gray-200">{{$value[1]}}</span>
    </div>
</div>
@endforeach

</div>

@endsection
