@extends('layouts.app')

@section('content')

@foreach ($accounts as $account)
  <a href="{{route('account.edit',[$account])}}">{{$account->balance}} {{$account->clientAccount->name}} {{$account->clientAccount->surname}}</a>
  <form method="POST" action="{{route('account.destroy', [$account])}}">
   @csrf
   <button type="submit">DELETE</button>
  </form>
  <br>
@endforeach

@endsection

@section('title') Account index @endsection
