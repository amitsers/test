<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SeasonDetail extends Model
{
	public function uploadDetail() {
        return $this->hasMany('App\UploadDetail', 'season_id');
    }
}
