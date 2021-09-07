<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Operation_title extends Model
{
    use HasFactory;
    public function operationstitle()
    {
        return $this->hasMany(Operation::class, 'operation_title_id', 'id');
    }
}
