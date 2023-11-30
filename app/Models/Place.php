<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Place extends Model
{
    use HasFactory;
    protected $table = 'place';
    public const CREATED_AT = 'created';
    public const UPDATED_AT = 'updated';
    protected $dateFormat = 'U';
    protected $fillable = [
        "name",
        "name_en",
        "alias",
        "address",
        "address_en",
        "coords",
        "lat",
        "len",
        "anons",
        "anons_en",
        "about",
        "about_en",
        "preview",
        "status",
        "created",
        "updated",
        "size",
        "zoom",
        "zoom_speed",
        "region_id",
        "type_id",
        "date",
        "date_from",
        "date_to",
    ];
    public function tags(): BelongsToMany
    {
        return $this
            ->belongsToMany(
            Tag::class, 'tag_value',
            'owner_id',
            'tag_id'
            )
            ->withPivot('category');
    }
}
