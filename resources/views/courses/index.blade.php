@extends('layouts.app')

@section('content')
    <span class="border bg-white border-white">
    <h1>Courses Available</h1>
    <hr>
    <br>

    {{--  Display courses if exist  --}}
    @if (count($courses) > 0)
        @foreach ($courses as $course)
            <div class='well'>
                <h3><a href='/courses/{{$course->courseID}}'>{{$course->nameCourse}}</a></h3>
            </div>
        @endforeach
        
    @else
        <p>No courses found</p>
    @endif
    </span>
@endsection