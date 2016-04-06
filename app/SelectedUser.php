<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SelectedUser extends Model
{
	protected $fillable = ['created_at', 'updated_at'];
    public function user() {
        return $this->belongsTo("App\User");
    }

    public function seasonDetail() {
        return $this->belongsTo("App\SeasonDetail");
    }
}
