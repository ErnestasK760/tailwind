<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Operation extends Model
{
    use HasFactory;
    public function operation()
    {
        return $this->belongsTo(Operation_title::class, 'operation_title_id', 'id');
    }
    public function operation()
    {
        return $this->belongsTo(Client::class, 'client_id', 'id');
    }
}
}
