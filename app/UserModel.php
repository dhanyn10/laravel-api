<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    protected $table        = 'user';
    protected $primaryKey   = 'id';
    public $incrementing    = true;
    public $timestamps      = false;

    protected $guarded      = [];
}
