<?php
namespace Aleks\LaravelConditions;
use Aleks\LaravelConditions\Contracts\ConditionServiceContract;
use Illuminate\Support\Arr;

class ConditionService implements ConditionServiceContract {

    private $data;

    public function make(array|object $data){
        $this->data = $data;
        return $this;
    }

    public function check(array|object $conditions):bool
    {
        foreach($conditions as $path => $condition){
            $checked_value = Arr::get($this->data,$path);

            $func = match($condition[0]){
                '=' => Conditions\Equals::check($checked_value, $condition[1]),
                '>' => Conditions\More::check($checked_value, $condition[1]),
                '<' => Conditions\Less::check($checked_value, $condition[1]),
                '!='=> Conditions\NotEqual::check($checked_value, $condition[1]),
                'in'=> Conditions\In::check($checked_value, $condition[1]),
                '>=' => (Conditions\Equals::check($checked_value, $condition[1]) || Conditions\More::check($checked_value, $condition[1])),
                '<=' => (Conditions\Equals::check($checked_value, $condition[1]) || Conditions\Less::check($checked_value, $condition[1])),
                default => throw new \Exception("Unknown condition")
            };
        }
        return $func;
    }
}
?>
