<?php
/**
 * Created by PhpStorm.
 * User: kibb
 * Date: 4/14/18
 * Time: 8:17 AM
 */
namespace App\Auto;

use Illuminate\Database\Eloquent\Model;

class Course extends Model{

    protected $fillable = ['name'];

    protected $hidden =['created_at','updated_at'];

    public function admin(){
        return $this->belongsTo(\Admin::class);
    }
}