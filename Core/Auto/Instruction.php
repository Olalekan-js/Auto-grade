<?php
namespace App\Auto;
use Illuminate\Database\Eloquent\Model;
class Instruction extends Model {
    protected $fillable = ['course','details','admin_id'];
}