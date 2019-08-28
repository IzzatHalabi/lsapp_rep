@extends('layouts.app')


@section('content')
    @guest
    <div class='input-container text-center '>
        <h1 >Welcome to UDEMY</h1>
        <p>Please register or log-in to continue.</p>
        <a class="nav-link" href="{{ route('login') }}">
            <button type="submit" class="btn btn-sm light-white btn-dark ">
                {{ __('Login') }}
            </button> 
        </a>
        <a class="nav-link" href="{{ route('register') }}">
    
            <button type="submit" class="btn btn-sm light-white btn-dark "> 
                    {{ __('Register') }}
            </button>    
         </a>
        
    </div>
    </div>
    @endguest
@endsection

 

  
