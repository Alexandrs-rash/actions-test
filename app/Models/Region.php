<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    use HasFactory;
    protected $table = 'region';
    public const CREATED_AT = 'created';
    public const UPDATED_AT = 'updated';
    protected $dateFormat = 'U';
    protected $fillable = [
        'region_id',
        'name',
        'anons',
        'alias',
        'status',
        'map',
        'preview',
        'lat',
        'lon',
        'center',
        'zoom',
        'center_m',
        'zoom_m',
        'zoom_speed',
        'onmap',
    ];
}
