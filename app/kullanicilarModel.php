<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kullanicilarModel extends Model
{
    protected $table = 'kullanicilar';
    
    protected $primaryKey = 'id';
    
    public $timestamps = false;
    
    protected $fillable = [];

    protected $guarded = ['id']; 

}
