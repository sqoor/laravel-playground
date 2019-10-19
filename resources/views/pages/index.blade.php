@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1><?php echo $title; ?></h1>
        <p>This is a tutorial of Laravel 5.7.15</p>
        <p><a href="/login" class="btn btn-primary btn-lg">Login</a> <a href="/signup" class="btn btn-success btn-lg">Sign Up</a></p>
    </div>
@endsection
