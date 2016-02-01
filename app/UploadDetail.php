<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UploadDetail extends Model
{
    public function user() {
        return $this->belongsTo("App\User");
    }

    public function transaction() {
        return $this->hasOne('App\transaction', 'user_id');
    }
}
