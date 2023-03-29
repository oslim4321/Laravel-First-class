
@extends('layout')
@section('content')


    <h1>Welcome {{$name}} you are {{$age}} </br>  This is About page</h1>

    
    <p>Age: {{$age ? $age : 'No age'}}</p>



    <!-- <a href="{{route('index')}}">go home page</a> --> 
    @if($age)
    {{$age}}
    @else
    no years available
    @endif


    @endsection