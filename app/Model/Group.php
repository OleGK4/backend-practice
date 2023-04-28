<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Group extends Model
{
    use HasFactory;
    public $timestamps = false;


    public function students(): HasMany
    {
        return $this->hasMany(Student::class);
    }
}
