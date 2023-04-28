<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Student extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'last_name',
        'first_name',
        'patronymic',
        'gender',
        'date_of_birth',
        'address',
        'group_id'
    ];

}
