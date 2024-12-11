<?php
namespace Aleks\LaravelConditions\Conditions;

class More {

    public static function check($verifiable, $reference){

        if(gettype($verifiable) !== gettype($reference)) throw new \Exception("Incomparable types");

        return ($verifiable > $reference);

    }
}
?>
