<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'videos';

    protected $appends = ['video_thumbnail'];
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
    protected $fillable = ['video_title', 'video_url', 'video_id', 'video_thumbnail', 'video_duration', '', 'video_type', 'size','aplikasi_id'];


    public function getVideoThumbnailAttribute()
    {
        $url = $this->attributes['video_url'];
        parse_str( parse_url( $url, PHP_URL_QUERY ), $url_vars );
        return $this->attributes['video_thumbnail'] = "https://img.youtube.com/vi/".$url_vars['v']."/mqdefault.jpg";
    }
    
}
