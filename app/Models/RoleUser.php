<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoleUser extends Model
{
    //
    public function roles() {
        return $this->belongsTo('App\Models\Role', 'id_role', 'id');
    }

    public function users() {
        return $this->belongsTo('App\User', 'id_user', 'id');
    }
}
