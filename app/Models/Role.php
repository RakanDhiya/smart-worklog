<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $table = 'roles';

    protected $fillable = [
        'name',
    ];

    public function accounts()
    {
        return $this->hasMany(Account::class);
    }

    public function permissions()
    {
        return $this->belongsToMany(
            Permission::class,
            'role_permissions'
        );
    }

    public function hasPermission(string $permission): bool
    {
        return $this->permissions()
            ->where('name', $permission)
            ->exists();
    }
}
