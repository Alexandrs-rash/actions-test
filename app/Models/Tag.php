<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Tag extends Model
{
    use HasFactory;
    protected $table = 'tag';
    public const CREATED_AT = 'created';
    public const UPDATED_AT = 'updated';
    protected $dateFormat = 'U';
    protected $fillable = [
        'name',
        'alias',
        'status',
        'created',
        'updated',
        'category',
    ];
    public function places(): BelongsToMany
    {
        return $this->belongsToMany(
            Place::class,
            'tag_value',
            'tag_id',
            'owner_id',
        );
    }
}
