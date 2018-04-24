<?php
/**
 * Created by PhpStorm.
 * User: kibb
 * Date: 4/24/18
 * Time: 10:26 PM
 */
namespace App\Auto;
use Illuminate\Database\Eloquent\Model;
class Admin extends Model{

    protected $hidden = ['created_at','password'];

    public function course(){
        return $this->hasOne(Course::class);
    }
}