<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'imie',
        'nazwisko',
        'company_id',
        'email',
        'numer_telefonu'
    ];
    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
