@extends('layouts.app')

@section('content')

@foreach ($clients as $client)
  <a href="{{route('client.edit',[$client])}}">{{$client->name}} {{$client->surname}}</a>
  <form method="POST" action="{{route('client.destroy', $client)}}">
   @csrf
   <button type="submit">DELETE</button>
  </form>
  <br>
@endforeach

@endsection

@section('title') Client index @endsection