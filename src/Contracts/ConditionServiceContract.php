<?php
namespace Aleks\LaravelConditions\Contracts;

interface ConditionServiceContract {
    
    public function make(array|object $conditions);
    public function check(array|object $data):bool;

}
?>