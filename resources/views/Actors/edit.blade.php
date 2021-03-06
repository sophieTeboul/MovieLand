@extends('layouts.header')

@section('title', 'Page Title')

@show('navbar')

@section('content')
    <br>
    <div class="container">
        <form method="post" action="{{url('/actor/edit/'.$actor->id)}}">
            @csrf
            <div class="form-group">
                <h3>Edit Actor</h3>
                <label for="first_name">First Name</label>
                <input type="first_name" name="first_name" class="form-control" id="first_name" value="{{$actor->act_fname}}">
            </div>
            <div class="form-group">
                <label for="last_name">Last Name</label>
                <input type="last_name" name="last_name" class="form-control" id="last_name" value="{{$actor->act_lname}}" >
            </div>
            <br>
            <input type="submit" class="btn btn-primary"></input>
        </form>
    </div>
@endsection
