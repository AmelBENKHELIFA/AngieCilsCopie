<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    
    public function prestation()
{
    return $this->belongsTo(Prestation::class, 'prestation_id');
}

public function client()
{
    return $this->belongsTo(Client::class, 'client_id');
}
}


