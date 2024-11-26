<?php
namespace Aleks\LaravelConditions;
use Aleks\LaravelConditions\Contracts\ConditionServiceContract;

class ConditionService implements ConditionServiceContract {
    public function make(array|object $conditions){

    }
    public function check(array|object $data):bool
    {
        return true;
    }
}
?>