<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use \Sushi\Sushi;

class Place extends Model
{
  use Sushi;

  protected $rows = [
    [
      'id' => 1, 
      'slug' => 'freiburg-im-breisgau', 
      'name' => 'Freiburg im Breisgau', 
      'published' => true
    ],
    [
      'id' => 2, 
      'slug' => 'zurich', 
      'name' => 'Zürich', 
      'published' => true
    ],
    [
      'id' => 3, 
      'slug' => 'bern', 
      'name' => 'Bern', 
      'published' => true
    ],
    [
      'id' => 4, 
      'slug' => 'geneve', 
      'name' => 'Genève', 
      'published' => true
    ],
    [
      'id' => 5, 
      'slug' => 'gland', 
      'name' => 'Gland', 
      'published' => true
    ],
    [
      'id' => 6, 
      'slug' => 'givrins', 
      'name' => 'Givrins', 
      'published' => true
    ],
    [
      'id' => 7, 
      'slug' => 'nyon', 
      'name' => 'Nyon', 
      'published' => true
    ],
    [
      'id' => 8, 
      'slug' => 'bellinzona', 
      'name' => 'Bellinzona', 
      'published' => true
    ],
    [
      'id' => 9, 
      'slug' => 'lausanne', 
      'name' => 'Lausanne', 
      'published' => true
    ],
    [
      'id' => 10, 
      'slug' => 'sierre', 
      'name' => 'Sierre', 
      'published' => true
    ],
    [
      'id' => 11, 
      'slug' => 'zug', 
      'name' => 'Zug', 
      'published' => true
    ],
    [
      'id' => 12, 
      'slug' => 'luxembourg', 
      'name' => 'Luxembourg', 
      'published' => true
    ],
  ];

  public function scopePublished($query)
  {
    return $query->where('published', true);
  }
}
