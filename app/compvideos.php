<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class compvideos extends Model
{
    //
    use SoftDeletes;
    protected $dates = ['deleted_at'];
}
