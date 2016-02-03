<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookCategory extends Model
{
    protected $fillable = [
    	'book_category_id',
		'book_category_name',
		'book_category_description'
	];
	protected $primaryKey='book_category_id';
}
