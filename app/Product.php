<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	public function category(){
		return $this->belongsToMany('App\Category');
	}
	//Note here that the money format is a PHP function that gives the price in any formats you want it to and all you need to do is to call it in teh page where you want it
    public function presentPrice(){
    	
    	return money_format('$%i', $this->price / 100);
    }
}
