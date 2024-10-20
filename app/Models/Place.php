<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
  protected $fillable = [
    'slug', 
    'name',
    'position',
    'published'
  ];

  public function scopePublished($query)
  {
    return $query->where('published', true);
  }

  public function locations()
  {
    return $this->hasMany(Location::class);
  }
}
