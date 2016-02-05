<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UploadDetail extends Model
{
	protected $fillable = ['created_at', 'updated_at'];
	
    public function user() {
        return $this->belongsTo("App\User");
    }

    public function transaction() {
        return $this->hasOne('App\transaction', 'song_id');
    }
}
