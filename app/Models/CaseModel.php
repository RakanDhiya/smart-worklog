<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CaseModel extends Model
{
    use HasFactory;

    protected $table = 'cases';

    protected $fillable = [
        'case_number',
        'title',
        'description',
        'status',
        'priority',
    ];

    public function pics(): BelongsToMany
    {
        return $this->belongsToMany(
            Employee::class,
            'case_pic',
            'case_id',
            'employee_id'
        );
    }

    public function members(): BelongsToMany
    {
        return $this->belongsToMany(
            Employee::class,
            'case_members',
            'case_id',
            'employee_id'
        );
    }

    public function activities(): HasMany
    {
        return $this->hasMany(Activity::class, 'case_id');
    }
}
