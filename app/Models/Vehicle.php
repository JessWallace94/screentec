<?php

namespace ScreenTec\Models;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
  /*
  * Get the vehicles associated with the given customer ($vehicle->customers)
  * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
  */
  public function customers() {
    return $this->belongsToMany('ScreenTec\Models\Customer');
  }

}
