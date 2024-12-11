<?php
namespace Aleks\LaravelConditions\Conditions;

class In {

    public static function check($verifiable, $reference){

        if(gettype($reference) != 'array') throw new \Exception("Reference mast be array");

        return in_array($verifiable,$reference);

    }
}
?>
