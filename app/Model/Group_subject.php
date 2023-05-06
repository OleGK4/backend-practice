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
    protected $fillable = [
        'hours',
        'subject_id',
        'group_id',
        'semester',
    ];

    public function subject(): BelongsTo // Одинаковые поля name, как решить?
    {
        return $this->belongsTo(Subject::class);
    }

    public function group(): BelongsTo
    {
        return $this->belongsTo(Group::class);
    }
}