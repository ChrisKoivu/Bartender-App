<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Drink extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
       'name', 'description', 'img_link'
    ];

    /**
     * Get the order that this drink is associated with.
     */
    public function order()
    {
        return $this->belongsTo('App\Order');
    }

}
