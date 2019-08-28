@extends('layouts.app')

@section('content')
    <h1>Courses Enrolled</h1>
    <hr>
    <br>
  

        {{--  Check from EnrolledCourseList Table  --}}
        @foreach ($enCourseList as $enCourse)

            {{--  If the User is enrolled to a course --}}
            @if ( $enCourse->id == $user->id )

                {{--  Check from Course Table --}}
                @foreach ($courses as $course)

                    {{--  Check to specify whether User has enrolled to the intended course  --}}
                    @if ( $enCourse->courseID == $course->courseID )
                        <div class='well'>
                            <h3><a href='/courses/{{$course->courseID}}'>{{$course->nameCourse}}</a></h3>
                        </div>
                    @endif

                @endforeach
            @endif
            
        @endforeach



    

@endsection