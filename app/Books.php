<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    protected $fillable = ['book_isbn', 'book_title', 'book_author_id', 'book_author_name', 'book_colorcat', 'book_dis'];
}
