<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Group_subject extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function subjects(): HasMany // Одинаковые поля name, как решить?
    {
        return $this->hasMany(Subject::class);
    }

    public function groups(): HasMany // Одинаковые поля name, как решить?
    {
        return $this->hasMany(Group::class);
    }

}