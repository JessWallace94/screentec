<?php

namespace ScreenTec\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
  /**
  * Fillable fields for a Customer.
  *
  * @var array
  */
  protected $fillable = [
    'name', 'email', 'phone_number'
  ];

  /*
  * A customer is owned by a user ($user->customers)
  *
  * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
  */
  public function user()
  {
    return $this->belongsTo('ScreenTec\Models\User');
  }

  /*
  * Get the vehicles associated with the given customer ($customer->vehicles)
  *
  * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
  */

  public function vehicles()
  {
    return $this->belongsToMany('ScreenTec\Models\Vehicle')->withTimestamps();
  }

  /*
  * Get a list of vehicle ids associated with this customer
  *
  * @return array
  */

  public function getVehicleListAttribute()
  {
    return $this->vehicles->pluck('id');
  }

  /*
  * Get the quotes associated with the given customer ($customer->quotes)
  *
  * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
  */

  public function quotes()
    {
        return $this->hasMany(Quote::class, 'customer_id');
    }


}
