<?php
/**
 * Created by PhpStorm.
 * User: kibb
 * Date: 4/14/18
 * Time: 8:14 AM
 */
namespace App\Auto;

use Illuminate\Database\Eloquent\Model;

class Result extends Model{

    protected $fillable = ['student_id','course_id','semester','result'];

    public function student(){
        return $this->belongsTo(Student::class);
    }

    public function course(){
        return $this->belongsTo(Course::class);
    }
}