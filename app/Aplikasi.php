<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aplikasi extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'aplikasis';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nama_aplikasi', 'deskripsi'];


    public function Videos()
    {
        return $this->hasMany('App\Video', 'aplikasi_id', 'id');
    }


    public function CountVideo(){
        
    }

    
}
