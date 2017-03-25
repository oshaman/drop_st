<?php

namespace Features;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = ['asin', 'img', 'description', 'walmart_id', 'price_amazon', 'price_walmart', 'shipping', 'walmart_available', 'renew'];
    
    //define relationship One To Many
    public function user()
        {
            return $this->belongsTo('Features\User');
        }
}
