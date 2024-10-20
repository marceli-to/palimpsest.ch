<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
  protected $fillable = [
    'slug',
    'title',
    'audio_file',
    'subtitle',
    'latitude',
    'longitude',
    'published',
    'place_id'
  ];

  protected $appends = [
    'map_data'
  ];

  public function facts()
  {
    return $this->hasMany(Fact::class);
  }

  public function place()
  {
    return $this->belongsTo(Place::class);
  }

  public function scopePublished($query)
  {
    return $query->where('published', true);
  }

  public function getMapDataAttribute()
  {
    return [
      'longitude' => $this->longitude,
      'latitude' => $this->latitude,
      'title' => $this->title,
      'slug' => $this->slug
    ];
  }

}
