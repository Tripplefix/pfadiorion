<?php namespace Orion\News\Models;

use Model;

class Post extends Model{
    public $table = 'orion_news_posts';

    /*
     * Validation
     */
    public $rules = [
        'title' => 'required',
        'content' => 'required',
    ];

    /**
     * The attributes that should be mutated to dates.
     * @var array
     */
    protected $dates = ['published_at'];


    /*
     * Relations
     */
    public $belongsTo = [
        'user' => ['Backend\Models\User']
    ];
}
