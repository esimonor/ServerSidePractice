<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'date',
        'origin',
        'destiny',
        'avaliable_seats',
    ];

    public function users()
    {
        return $this->BelongsToMany('\App\Models\User');
    }
}
