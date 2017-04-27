<?php

namespace Wagg\WhatAreYouDoingWhileWaitingForComposer;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $dates = ['created_at'];

    public $updated_at = '';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'body'
    ];

    public function user() {
        return $this->belongsTo(User::class, 'user_id', 'github_user_id');
    }
}
