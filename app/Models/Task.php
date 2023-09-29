<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Task extends Model
{
    use HasFactory;

    protected $fillable =[
        'name',
        'user_id',
        'status',
        'dueDate',
        'description',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function name(): Attribute
    {
        return new Attribute(
            get: fn(string $value) => ucwords(strtolower($value)),
            set: fn(string $value) => ucwords(strtolower($value))
        );
    }

    public function status(): Attribute
    {
        return new Attribute(
            get: fn(string $value) => ucwords(strtolower($value)),
            set: fn(string $value) => ucwords(strtolower($value)),
        );
    }
}
