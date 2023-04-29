<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Group_subject extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function subject(): BelongsTo // Одинаковые поля name, как решить?
    {
        return $this->belongsTo(Subject::class);
    }

    public function group():BelongsTo
    {
        return $this->belongsTo(Group::class);
    }

//    public function groups(): HasMany // Одинаковые поля name, как решить?
//    {
//        return $this->hasMany(Group::class);
//    }

}

//Group_subject::find($id)->first()->subjects->name;