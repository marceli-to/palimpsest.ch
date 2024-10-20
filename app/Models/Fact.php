<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Fact extends Model
{
  protected $fillable = [
    'periode',
    'text',
    'location_slug',
    'location_id'
  ];

  public function location()
  {
    return $this->belongsTo(Location::class);
  }
}
