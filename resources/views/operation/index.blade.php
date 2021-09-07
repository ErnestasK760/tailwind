@extends('layouts.app')


@section('content')

@foreach ($operations as $operation)
  <a href="{{route('operation.edit',[$operation])}}">{{$operation->value}}</a>
  <form method="POST" action="{{route('operation.destroy', $operation)}}">
   @csrf
   <button type="submit">DELETE</button>
  </form>
  <br>
@endforeach

@endsection

@section('title') Operation index @endsection