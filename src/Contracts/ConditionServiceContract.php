<?php
namespace Aleks\LaravelConditions\Contracts;

interface ConditionServiceContract {

    public function make(array|object $data);
    public function check(array|object $conditions):bool;

}
?>
