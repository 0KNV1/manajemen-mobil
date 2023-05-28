<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Car extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'slug',
        'driver_id',
        'location_id',
        'type_id',
        'photos',
        'service',
        'consume_oil',
    ];
    protected $casts = [
        'photos' => 'array',
    ];
    public function getThumbnailAttribute()
    {
        if ($this->photos) {
            return Storage::url((json_decode($this->photos)[0]));
        }
        return  asset('images/default.png');
    }
    public function driver()
    {
        return $this->belongsTo(Driver::class);
    }
    public function location()
    {
        return $this->belongsTo(Location::class);
    }
    public function type()
    {
        return $this->belongsTo(Type::class);
    }

}
