<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $fillable =[
        'name',
    ];

    public function Name(): Attribute
    {
        return Attribute::make(
            get: fn(string $value)=>ucfirst(strtolower($value)),
        );

    }
}
