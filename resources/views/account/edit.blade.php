@extends('layouts.app')

@section('content')

<form method="POST" action="{{route('account.update',[$account])}}">
    Balance: <input type="text" name="account_balance" value="{{$account->balance}}">
    <select name="client_id">
        @foreach ($clients as $client)
            <option value="{{$client->id}}" @if($client->id == $account->client_id) selected @endif>
                {{$client->name}} {{$client->surname}}
            </option>
        @endforeach
</select>
    @csrf
    <button type="submit">EDIT</button>
</form>

@endsection

@section('title') Account edit @endsection