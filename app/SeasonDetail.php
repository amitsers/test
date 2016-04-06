<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SeasonDetail extends Model
{
	public function selectedUser() {
        return $this->hasMany('App\SelectedUser', 'season_details_id');
    }
}
