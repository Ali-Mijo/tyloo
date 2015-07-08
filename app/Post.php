<?php

namespace App;

class Post extends AbstractModel
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'posts';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'slug', 'excerpt', 'content', 'author_id', 'published', 'image'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    /**
     * Get the user record associated with the Post.
     */
    public function author()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * Get all the tags for a given Post.
     */
    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }

    public function isPublished()
    {
        return $this->attributes['published'] ? 'Yes'  : 'No';
    }
}
