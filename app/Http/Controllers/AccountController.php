<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;
use App\Models\Client;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $accounts = Account::all();
        return view('account.index', ['accounts' => $accounts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clients = Client::all();
        return view('account.create', ['clients' => $clients]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $account = new Account;
       $account->accnum = $request->account_accnum;
       $account->balance = $request->account_balance;
       $account->about = $request->account_about;
       $account->client_id = $request->client_id;
       $account->save();
       return redirect()->route('account.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Account  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Account $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Account  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Account $account)
    {
        $clients = Client::all();
        return view('account.edit', ['account' => $account, 'clients' => $clients]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Account  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Account $account)
    {
        $account->accnum = $request->account_accnum;
        $account->balance = $request->account_balance;
        $account->about = $request->account_about;
        $account->client_id = $request->client_id;
        $account->save();
        return redirect()->route('account.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Account  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Account $account)
    {
        $account->delete();
        return redirect()->route('account.index');
    }
}
