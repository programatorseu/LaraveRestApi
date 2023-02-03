<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $fillable = [
        'nazwa',
        'nip',
        'adres',
        'miasto',
        'kod_pocztowy'
    ];
    public function employees()
    {
        return $this->hasMany(Employee::class);
    }
}
