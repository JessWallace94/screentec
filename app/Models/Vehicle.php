<?php

namespace ScreenTec\Models;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
  /**
   * Fillable fields for a vehicle
   *
   * @var array
   */
   protected $fillable = [
     'registration', 'make', 'model', 'year_of_manufacture'
   ];

  /*
  * Get the vehicles associated with the given customer ($vehicle->customers)
  * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
  */
  public function customers() {
    return $this->belongsToMany('ScreenTec\Models\Customer')->withTimestamps();
  }

}
