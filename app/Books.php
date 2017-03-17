<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    protected $fillable = ['book_isbn', 'book_title', 'book_author', 'book_colorcat', 'book_dis'];
}
