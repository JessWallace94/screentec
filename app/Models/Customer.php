<?php

namespace ScreenTec\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
  /*
  * A customer is owned by a user ($user->customers)
  * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
  */
  public function user()
  {
    return $this->belongsTo('ScreenTec\Models\User');
  }

  /*
  * Get the vehicles associated with the given customer ($customer->vehicles)
  * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
  */

  // $customer->vehicles
  public function vehicles()
  {
    return $this->belongsToMany('ScreenTec\Models\Vehicle')->withTimestamps();
  }

  
}
