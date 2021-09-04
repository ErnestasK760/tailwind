<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;
    
    public function clientAccount()
    {
        return $this->belongsTo(Client::class, 'client_id', 'id');
    }
    public function createAccnum()
    {
        return $accnum = "LT01" . rand(0, 99) . rand(1000, 9999) . rand(1000, 9999) . rand(100, 999) . rand(100, 999);
    }
 
}
