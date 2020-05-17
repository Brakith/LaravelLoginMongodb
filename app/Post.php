<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;//edu 

class Post extends Eloquent
{
    //
    protected $connection = 'mongodb'; //edu
    protected $guarded = []; //edu, allow all field
    //public $primarykey = 'id_post'; //if use custom primary key si no se usa el id  or default
    //Solo permite el ingreso de campos especificos
    //protected $fillable = [
      //  'name', 'email', 'password',
    //];

}
