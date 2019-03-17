<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProfileHistory extends Model
{
	protected $table='profile_history';
    protected $guarded=array('id');
    
    public static $rules=array(
    	'profile_id'=>'required',
    	'edited_at'=>'required',
    );
}
