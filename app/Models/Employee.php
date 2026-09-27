<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'employee_code',
        'phone',
        'position',
        'department',
        'join_date',
        'birth_date',
        'gender',
        'address',
        'status',
    ];

    protected function casts(): array
    {
        return [
            'join_date' => 'date',
            'birth_date' => 'date',
        ];
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function activities(): HasMany
    {
        return $this->hasMany(Activity::class);
    }

    public function casesAsPic(): BelongsToMany
    {
        return $this->belongsToMany(
            CaseModel::class,
            'case_pic'
        );
    }

    public function casesAsMember(): BelongsToMany
    {
        return $this->belongsToMany(
            CaseModel::class,
            'case_members'
        );
    }

    public function attendances(): HasMany
    {
        return $this->hasMany(Attendance::class);
    }

    public function leaves(): HasMany
    {
        return $this->hasMany(Leave::class);
    }
}
