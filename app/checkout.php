<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Checkout extends Model
{
  protected  $table='checkouts';
  protected $primaryKey='id';
  public $timestaps=true;
      public function user() 
      {
         return $this->belongsTo('App\User','checkout_reader'); 
      }
      public function book() 
      {
         return $this->belongsTo('App\book_item','checkout_book_item'); 
      }

}
