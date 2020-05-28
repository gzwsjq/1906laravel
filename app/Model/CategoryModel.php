<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class CategoryModel extends Model
{
		//指派表名
		protected $table="category";
		protected $primaryKey="cat_id";

		protected $timestamp=false;
}
