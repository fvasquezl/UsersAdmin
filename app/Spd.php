<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Spd extends Model
{
    protected $table ='SKUParentData';
    protected $primaryKey = 'SKU';
    public $timestamps = false;
    protected $guarded =[];
}
