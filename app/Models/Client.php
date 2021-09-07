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

    public function clientOperations()
    {
        return $this->hasMany(Operation::class, 'client_id', 'id');
    }
}
