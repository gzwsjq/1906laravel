<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class GoodsModel extends Model
{
		//指派表名
		protected $table="goods";
		protected $primaryKey="goods_id";

		protected $timestamp=false;
}
