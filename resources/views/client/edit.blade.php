@extends('layouts.app')

@section('content')

<form method="POST" action="{{route('client.update',$client)}}">
    Name: <input type="text" name="client_name" value="{{$client->name}}">
    Surname: <input type="text" name="client_surname" value="{{$client->surname}}">
    @csrf
    <button type="submit">EDIT</button>
 </form>

 @endsection
 

 @section('title') Client edit @endsection