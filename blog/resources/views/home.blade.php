{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
@extends('layouts.app')

@section('content')
<h1>home</h1>
<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laboriosam vitae inventore sapiente ducimus, ea maxime magni ipsam numquam, enim totam odio. Dolor debitis reiciendis ea voluptatem doloremque aut enim animi!</p>
@endsection

@section('sidebar')
@parent
<p>appended to sidebar</p>
@endsection