<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
	protected $fillable = ['created_at', 'updated_at'];
	
    public function user() {
        return $this->belongsTo("App\User");
    }
}
