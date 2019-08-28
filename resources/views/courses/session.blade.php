@extends('layouts.app')

@section('content')

    

    <h1>{{$course->nameCourse}}</h1>
    
    <h3>{{$session->topic}}</h3>
    <hr>
    <br>
    <h5>{{$session->detail}}</h5>

    

@endsection