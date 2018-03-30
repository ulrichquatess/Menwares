<?php

function presentPrice($price)
{
    return money_format("$%i", $price / 100);
  }

  function setActiveCategory($category, $output = 'active'){
    	
    	return request()->category == $category ? $output : '';
    }
//this function below checks if the file or image exist if so the show image or the default image you would be shown
    function productImage($path)
    {
    	return $path && file_exists('storage/'.$path) ? asset('storage/'.$path) : asset('img/not-found.jpg');
    }  