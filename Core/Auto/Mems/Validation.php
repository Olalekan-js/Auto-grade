<?php
/**
 * Created by PhpStorm.
 * User: kibb
 * Date: 4/11/18
 * Time: 12:39 AM
 */
namespace App\Auto\Mems;

use Illuminate\Database\Capsule\Manager as Capsule;

class Validation{
    private $_errors= [];
    private $_passed = false;
    public function __construct(){
    }
    public function check($source,$items){
        foreach ($items as $item=>$rules){
            foreach ($rules as $rule=>$rule_value){
                $value= $source[$item];
                if ($rule === 'required' && empty($value)){
                    $this->addError($item,"{$item} is required ");
                }elseif (!empty($value)){
                    switch ($rule){
                        case 'min':
                            if (strlen($value) < $rule_value){
                                $this->addError($item,"{$item} must be minimum of {$rule_value}");
                            }
                            break;
                        case 'max':
                            if (strlen($value)> $rule_value){
                                $this->addError($item,"{$item} is too long");
                            }
                            break;
                        case 'matches':
                            if ($value !=$source[$rule_value]){
                                $this->addError($item, "{$item} do not  match {$rule_value}");
                            }
                            break;
                        case 'unique':
                            //$check = $this->_db->select($rule_value,array($item=>$value));
                            $check = Capsule::table($rule_value)->where($item,$value);
                            if ($check->exists()){
                                $this->addError($item,"{$item} already exists.");
                            }
                            break;
                    }
                }
            }
        }
        if (empty($this->_errors)){
            $this->_passed= true;
        }
    }
    private function addError($item,$error){
        return $this->_errors[$item] = $error;
    }
    public function passed(){
        return $this->_passed;
    }
    public function errors(){
        return $this->_errors;
    }
}