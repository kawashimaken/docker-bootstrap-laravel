<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model;
//論理削除
use Jenssegers\Mongodb\Eloquent\SoftDeletes;

class Tree extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    //独自のcollection名を使いたい場合は、ここで明示する
    protected $collection = 'category_tree';
    //protected $primaryKey = 'id';
    protected $connection = 'mongodb';
}
