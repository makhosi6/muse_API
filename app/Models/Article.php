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
    /**
     * The storage format of the model's date columns.
     *
     * @var string
     */
    // protected $dateFormat = 'U';
       /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'isVid' => 'boolean',
        'tags' => 'array',
        'authors' => 'array'
    ];

    protected $fillable = [
        'id',
        'url',
        'headline',
        'lede',
        'thumbnail',
        'category',
        'catLink',
        'images',
        'key',
        'label',
        'subject',
        'format',
        'about',
        'src_name',
        'src_url',
        'src_logo',
        'isVid',
        'vidLen',
        'type',
        'tag',
        'tags',
        'author',
        'authors',
        'date'
    ];

}
