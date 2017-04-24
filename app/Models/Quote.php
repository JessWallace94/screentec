<?php

namespace ScreenTec\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    /**
     * Fillable fields for a vehicle
     *
     * @var array
     */
     protected $fillable = [
       'customer_id', 'address', 'date_requested'
     ];
    /**
    * Get the customer associated with the given quote ($quote->customers)
    *
    * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    */
    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id');
    }

    /**
    * Get the line items associated with the given quote ($quote->line_items)
    *
    * @return \Illuminate\Database\Eloquent\Relations\HasMany
    */
    public function lineitems()
    {
        return $this->hasMany(LineItem::class, 'quote_id');
    }
}
