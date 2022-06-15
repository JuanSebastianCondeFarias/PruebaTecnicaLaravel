<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'phone',
        'address',
        'types_id'
    ];

    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    public function contracts()
    {
        return $this->hasMany(Contract::class, 'employees_id');
    }
    public function childrens()
    {
        return $this->hasMany(Children::class, 'employees_id');
    }
}
