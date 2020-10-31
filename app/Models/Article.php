<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'articles';
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id';
    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = true;
    // /**
    //  * The storage format of the model's date columns.
    //  *
    //  * @var string
    //  */
    // protected $dateFormat = 'U';

    protected $fillable = [
        'url_src',
        'src_name',
        'url',
        'headline',
        'lede',
        'thumbnail',
        'src',
        'category',
        'catLink',
        'tag',
        'images',
        'isVid',
        'vidLen',
        'author',
        'date'
    ];

}
