@extends('layouts.app')

@section('content')

<form method="POST" action="{{route('account.store')}}">
    Balance: <input type="text" name="account_balance">
    <select name="client_id">
        @foreach ($clients as $client)
            <option value="{{$client->id}}">{{$client->name}} {{$client->surname}}</option>
        @endforeach
 </select>
    @csrf
    <button type="submit">ADD</button>
 </form>
 
@endsection

 @section('title') Account create @endsection