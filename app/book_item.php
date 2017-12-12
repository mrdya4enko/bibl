<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class book_item extends Model
{
    public function book()
    {
      return $this->belongsTo('App\book','book_id');
    }
    public function checkout()
    {
      return $this->belongsTo('App\checkout');
    }

}
