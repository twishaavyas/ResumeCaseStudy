<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
    public static function deleteEntry($id) {

    	$resume = Resume::find($id);
		$resume->delete();
   
	}
}
