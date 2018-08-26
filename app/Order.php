<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    /**
     * 
     * Bridge entity for Many to Many relationship
     */

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        //'name', 'description', 
     ];

     /**
     * Get the drinks associated with this Order 
     */
    public function drinks()
    {
        return $this->hasMany('App\Drink');
    }

    /**
     * Get the user that this order is associated with.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
