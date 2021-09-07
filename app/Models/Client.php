<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    public function clientAccounts()
    {
        return $this->hasMany(Account::class, 'client_id', 'id');
    }
    public function userClient()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
