@extends('layouts.app') 
    @section('content')
        <h1>Messages</h1>
        {{--
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laboriosam vitae inventore sapiente ducimus, ea maxime magni ipsam
            numquam, enim totam odio. Dolor debitis reiciendis ea voluptatem doloremque aut enim animi!</p> --}}
        @if(count($messages) > 0)
            @foreach($messages as $message)
                <ul class="list-group">
                    <li class="list-group-item"> Name:{{$message->name}}</li>
                    <li class="list-group-item">Email:{{$message->email}}</li>
                    <li class="list-group-item"> Message:{{$message->message}}</li>

                </ul>
            @endforeach
        @endif
    @endsection
    
    @section('sidebar')
        @parent
        <p>appended to sidebar</p>
    @endsection
