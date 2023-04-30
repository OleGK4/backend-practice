<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Subject extends Model
{
    protected $table = 'subjects';
    use HasFactory;
    public $timestamps = false;

        public function subject()
    {
        return $this->hasOne(Group_subject::class);
    }

    public function marks()
    {
        return $this->hasMany(Mark::class);
    }
}