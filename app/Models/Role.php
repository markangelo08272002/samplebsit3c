<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Role extends Model
{
    use HasFactory;

    protected $fillable = [
        'role_name', 
        'url',       
    ];

    /**
     * (Optional) Allow $role->name instead of $role->role_name.
     */
    public function getNameAttribute(): string
    {
        return $this->role_name;
    }
}
