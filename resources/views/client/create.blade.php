@extends('layouts.app')

@section('content')

<form method="POST" action="{{route('client.store')}}">
    Name: <input type="text" name="client_name">
    Surname: <input type="text" name="client_surname">
    DocumentID: <input type="text" name="client_personalID">
    @csrf
    <button type="submit">ADD</button>
 </form>

 @endsection

 @section('title') Client create @endsection