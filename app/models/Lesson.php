<?php

/**
 * Class Lesson
 */
class Lesson extends \Eloquent {

    /**
     * @var array
     */
    protected $fillable = ['title', 'body', 'some_bool'];

//    protected $hidden = ['title'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function tags()
    {
        return $this->belongsToMany('Tag');
    }
}