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

}
