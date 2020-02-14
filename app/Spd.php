<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Spd extends Model
{
    protected $table ='SKUParentData';
    protected $primaryKey = 'SKU';
    public $timestamps = false; 
    protected $fillable = ['SKU','TitleShort','TitleLong','DescriptionShort','DescriptionLong',
    'Bullet1','Bullet2','Bullet3','Bullet4','Bullet5','Category','SubCategory','Keywords','Language'];

    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($spd) {
            $spd->photos->each->delete();
        });

    }


    public function photos()
    {
        return $this->hasMany(Photo::class);
    }
}
