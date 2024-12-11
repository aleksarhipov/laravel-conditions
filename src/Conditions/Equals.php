<?php
namespace Aleks\LaravelConditions\Conditions;

class Equals {

    public static function check($verifiable, $reference){

        if(gettype($verifiable) !== gettype($reference)) throw new \Exception("Incomparable types");

        return ($verifiable == $reference);

    }
}
?>
