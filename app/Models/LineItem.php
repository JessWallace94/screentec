<?php

namespace ScreenTec\Models;

use Illuminate\Database\Eloquent\Model;

class LineItem extends Model
{
  /*
  * Get the quotes associated with the given line-item ($line_item->quotes)
  * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
  */
  public function quotes() {
    return $this->belongsTo(Quote::class, 'quote_id');
  }
}
