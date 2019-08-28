@extends('layouts.app')

@section('content')

    <h1>{{$course -> nameCourse}}</h1>
   
   {{--  Checking access to targeted course  --}}
    @foreach ( $enCourseList as $listing )  
        @if ( 'App\EnrolledCourseList'::alreadyEnrolled( $listing, $course ) ) 
            {{ 'App\EnrolledCourseList'::permitAccess($access) }}
        @endif  
    @endforeach

    {{--  If accessible, Register Course button is discarded  --}}
    @if ( !'App\EnrolledCourseList'::hasAccess($access) )
        <a href='/courses/{{$course->courseID}}/registered' class='btn-link '>
            <button type="submit" class="btn btn-sm light-white btn-dark">
                Register Course            
            </button>    
        </a>
    @endif

    <hr>
    <br>

    {{--  If accessible, Topics can be clicked  --}}
    @if (count($sessionList) > 0)
        @foreach ($sessionList as $listing)
            @if( $listing->courseID == $course->courseID )

                {{--  Getting Topics from targeted current target session list  --}}
                {{ 'App\SessionList'::lookUpSessionList( $session, $listing->sessionID )}}

                <div class='well'>
                    @if('App\EnrolledCourseList'::hasAccess($access))
                        <h5><a href='/courses/{{$course->courseID}}/{{$session->sessionID}}'>{{$session->topic}}</a></h5>
                    @else                 
                        <h5>{{$session->topic}}</h5>
                    @endif
                </div>
            @endif
        @endforeach
        
    @else
        <p>No sessions found</p>
    @endif              

@endsection
