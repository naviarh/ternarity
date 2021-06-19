<?php

class T {

    public static function T3($arg) {
        if ($arg === true) return true;
        if ($arg === false) return false;
        if ($arg === null) return null;
        if ($arg > 0) return true;
        if ($arg < 0) return false;
        if ($arg === 0) return null;
        if ($arg === 'TRUE') return true;
        if ($arg === 'FALSE') return false;
        if ($arg === 'NULL') return null;
        if ($arg === 'NONE') return null;
        if ($arg === 'UNDEFINED') return null;
        if ($arg === 'True') return true;
        if ($arg === 'False') return false;
        if ($arg === 'Null') return null;
        if ($arg === 'None') return null;
        if ($arg === 'Undefined') return null;
        if ($arg === 'true') return true;
        if ($arg === 'false') return false;
        if ($arg === 'null') return null;
        if ($arg === 'none') return null;
        if ($arg === 'undefined') return null;
        if ($arg === 'N') return null;
        if ($arg === 'n') return null;
        if ($arg === 'T') return true;
        if ($arg === 't') return true;
        if ($arg === 'F') return false;
        if ($arg === 'f') return false;
        if ($arg === '0') return null;
        if ($arg === '1') return true;
        if ($arg === '-1') return false;
        if ($arg === 'U') return null;
        if ($arg === 'u') return null;
        if ($arg === 'A') return true;
        if ($arg === 'a') return false;
        if ($arg === 'i') return false;
        if ($arg === 'h') return false;
        return null;
    }
    
    public static function BIN($arg) {
        $arg = T::T3($arg);
        if (is_null($arg)) return false;
        else if ($arg) return true;
        else return false;
    }
    public static function T2($arg) {
        return T::BIN($arg);
    }
    
    public static function BIN1($arg) {
        $arg = T::T3($arg);
        if (is_null($arg)) return null;
        else if ($arg) return true;
        else return null;
    }
    
    public static function BIN2($arg) {
        $arg = T::T3($arg);
        if (is_null($arg)) return true;
        else if ($arg) return true;
        else return false;
    }
    
    public static function BIN3($arg) {
        $arg = T::T3($arg);
        if (is_null($arg)) return true;
        else if ($arg) return true;
        else return null;
    }
    
    public static function BIN4($arg) {
        $arg = T::T3($arg);
        if (is_null($arg)) return false;
        else if ($arg) return true;
        else return true;
    }
    
    public static function BIN5($arg) {
        $arg = T::T3($arg);
        if (is_null($arg)) return null;
        else if ($arg) return true;
        else return true;
    }
    
    public static function NOT($arg) {
        $arg = T::T3($arg);
        if (is_null($arg)) return null;
        else if ($arg) return false;
        else return true;
    }
    
    public static function NOT1($arg) {
        $arg = T::T3($arg);
        if (is_null($arg)) return false;
        else if ($arg) return true;
        else return null;
    }
    
    public static function NOT2($arg) {
        $arg = T::T3($arg);
        if (is_null($arg)) return true;
        else if ($arg) return null;
        else return false;
    }
    
    public static function LEFT($arg) {
        $arg = T::T3($arg);
        if (is_null($arg)) return false;
        else if ($arg) return null;
        else return true;
    }
    
    public static function RIGHT($arg) {
        $arg = T::T3($arg);
        if (is_null($arg)) return true;
        else if ($arg) return false;
        else return null;
    }
    
    public static function AND($arg1, $arg2) {
        $arg1 = T::T3($arg1);
        $arg2 = T::T3($arg2);
        if ($arg1 === false and $arg2 === false) return false;
        if ($arg1 === false and $arg2 === null) return false;
        if ($arg1 === false and $arg2 === true) return false;
        if ($arg1 === null and $arg2 === false) return false;
        if ($arg1 === null and $arg2 === null) return null;
        if ($arg1 === null and $arg2 === true) return null;
        if ($arg1 === true and $arg2 === false) return false;
        if ($arg1 === true and $arg2 === null) return null;
        if ($arg1 === true and $arg2 === true) return true;
        return null;
    }
    public static function MIN($arg1, $arg2) {
        return T::AND($arg1, $arg2);
    }
    
    public static function OR($arg1, $arg2) {
        $arg1 = T::T3($arg1);
        $arg2 = T::T3($arg2);
        if ($arg1 === false and $arg2 === false) return false;
        if ($arg1 === false and $arg2 === null) return null;
        if ($arg1 === false and $arg2 === true) return true;
        if ($arg1 === null and $arg2 === false) return null;
        if ($arg1 === null and $arg2 === null) return null;
        if ($arg1 === null and $arg2 === true) return true;
        if ($arg1 === true and $arg2 === false) return true;
        if ($arg1 === true and $arg2 === null) return true;
        if ($arg1 === true and $arg2 === true) return true;
        return null;
    }
    public static function MAX($arg1, $arg2) {
        return T::OR($arg1, $arg2);
    }
    
    public static function NAND($arg1, $arg2) {
        $arg1 = T::T3($arg1);
        $arg2 = T::T3($arg2);
        if ($arg1 === false and $arg2 === false) return true;
        if ($arg1 === false and $arg2 === null) return true;
        if ($arg1 === false and $arg2 === true) return true;
        if ($arg1 === null and $arg2 === false) return true;
        if ($arg1 === null and $arg2 === null) return null;
        if ($arg1 === null and $arg2 === true) return null;
        if ($arg1 === true and $arg2 === false) return true;
        if ($arg1 === true and $arg2 === null) return null;
        if ($arg1 === true and $arg2 === true) return false;
        return null;
    }
    
    public static function NOR($arg1, $arg2) {
        $arg1 = T::T3($arg1);
        $arg2 = T::T3($arg2);
        if ($arg1 === false and $arg2 === false) return true;
        if ($arg1 === false and $arg2 === null) return null;
        if ($arg1 === false and $arg2 === true) return false;
        if ($arg1 === null and $arg2 === false) return null;
        if ($arg1 === null and $arg2 === null) return null;
        if ($arg1 === null and $arg2 === true) return false;
        if ($arg1 === true and $arg2 === false) return false;
        if ($arg1 === true and $arg2 === null) return false;
        if ($arg1 === true and $arg2 === true) return false;
        return null;
    }
    
    public static function XAND($arg1, $arg2) {
        $arg1 = T::T3($arg1);
        $arg2 = T::T3($arg2);
        if ($arg1 === false and $arg2 === false) return true;
        if ($arg1 === false and $arg2 === null) return null;
        if ($arg1 === false and $arg2 === true) return false;
        if ($arg1 === null and $arg2 === false) return null;
        if ($arg1 === null and $arg2 === null) return null;
        if ($arg1 === null and $arg2 === true) return null;
        if ($arg1 === true and $arg2 === false) return false;
        if ($arg1 === true and $arg2 === null) return null;
        if ($arg1 === true and $arg2 === true) return true;
        return null;
    }
    
    public static function EQV($arg1, $arg2) {
        return T::XAND($arg1, $arg2);
    }
    
    public static function XOR($arg1, $arg2) {
        $arg1 = T::T3($arg1);
        $arg2 = T::T3($arg2);
        if ($arg1 === false and $arg2 === false) return false;
        if ($arg1 === false and $arg2 === null) return null;
        if ($arg1 === false and $arg2 === true) return true;
        if ($arg1 === null and $arg2 === false) return null;
        if ($arg1 === null and $arg2 === null) return null;
        if ($arg1 === null and $arg2 === true) return null;
        if ($arg1 === true and $arg2 === false) return true;
        if ($arg1 === true and $arg2 === null) return null;
        if ($arg1 === true and $arg2 === true) return false;
        return null;
    }
    
    public static function XMIN($arg1, $arg2) {
        $arg1 = T::T3($arg1);
        $arg2 = T::T3($arg2);
        if ($arg1 === false and $arg2 === false) return true;
        if ($arg1 === false and $arg2 === null) return false;
        if ($arg1 === false and $arg2 === true) return false;
        if ($arg1 === null and $arg2 === false) return false;
        if ($arg1 === null and $arg2 === null) return true;
        if ($arg1 === null and $arg2 === true) return null;
        if ($arg1 === true and $arg2 === false) return false;
        if ($arg1 === true and $arg2 === null) return null;
        if ($arg1 === true and $arg2 === true) return true;
        return null;
    }
    
    public static function XMAX($arg1, $arg2) {
        $arg1 = T::T3($arg1);
        $arg2 = T::T3($arg2);
        if ($arg1 === false and $arg2 === false) return false;
        if ($arg1 === false and $arg2 === null) return null;
        if ($arg1 === false and $arg2 === true) return true;
        if ($arg1 === null and $arg2 === false) return null;
        if ($arg1 === null and $arg2 === null) return false;
        if ($arg1 === null and $arg2 === true) return true;
        if ($arg1 === true and $arg2 === false) return true;
        if ($arg1 === true and $arg2 === null) return true;
        if ($arg1 === true and $arg2 === true) return false;
        return null;
    }
    
    public static function WEBB($arg1, $arg2) {
        $arg1 = T::T3($arg1);
        $arg2 = T::T3($arg2);
        if ($arg1 === false and $arg2 === false) return null;
        if ($arg1 === false and $arg2 === null) return true;
        if ($arg1 === false and $arg2 === true) return false;
        if ($arg1 === null and $arg2 === false) return true;
        if ($arg1 === null and $arg2 === null) return true;
        if ($arg1 === null and $arg2 === true) return false;
        if ($arg1 === true and $arg2 === false) return false;
        if ($arg1 === true and $arg2 === null) return false;
        if ($arg1 === true and $arg2 === true) return false;
        return null;
    }
    
    public static function IMP($arg1, $arg2) {
        $arg1 = T::T3($arg1);
        $arg2 = T::T3($arg2);
        if ($arg1 === false and $arg2 === false) return true;
        if ($arg1 === false and $arg2 === null) return true;
        if ($arg1 === false and $arg2 === true) return true;
        if ($arg1 === null and $arg2 === false) return null;
        if ($arg1 === null and $arg2 === null) return null;
        if ($arg1 === null and $arg2 === true) return true;
        if ($arg1 === true and $arg2 === false) return false;
        if ($arg1 === true and $arg2 === null) return null;
        if ($arg1 === true and $arg2 === true) return true;
        return null;
    }
    
    public static function IMP1($arg1, $arg2) {
        $arg1 = T::T3($arg1);
        $arg2 = T::T3($arg2);
        if ($arg1 === false and $arg2 === false) return true;
        if ($arg1 === false and $arg2 === null) return true;
        if ($arg1 === false and $arg2 === true) return true;
        if ($arg1 === null and $arg2 === false) return null;
        if ($arg1 === null and $arg2 === null) return true;
        if ($arg1 === null and $arg2 === true) return true;
        if ($arg1 === true and $arg2 === false) return false;
        if ($arg1 === true and $arg2 === null) return null;
        if ($arg1 === true and $arg2 === true) return true;
        return null;
    }
    
    public static function IMP2($arg1, $arg2) {
        $arg1 = T::T3($arg1);
        $arg2 = T::T3($arg2);
        if ($arg1 === false and $arg2 === false) return true;
        if ($arg1 === false and $arg2 === null) return true;
        if ($arg1 === false and $arg2 === true) return true;
        if ($arg1 === null and $arg2 === false) return false;
        if ($arg1 === null and $arg2 === null) return true;
        if ($arg1 === null and $arg2 === true) return true;
        if ($arg1 === true and $arg2 === false) return false;
        if ($arg1 === true and $arg2 === null) return null;
        if ($arg1 === true and $arg2 === true) return true;
        return null;
    }
    
    public static function MEAN($arg1, $arg2) {
        $arg1 = T::T3($arg1);
        $arg2 = T::T3($arg2);
        if ($arg1 === false and $arg2 === false) return false;
        if ($arg1 === false and $arg2 === null) return null;
        if ($arg1 === false and $arg2 === true) return false;
        if ($arg1 === null and $arg2 === false) return null;
        if ($arg1 === null and $arg2 === null) return true;
        if ($arg1 === null and $arg2 === true) return null;
        if ($arg1 === true and $arg2 === false) return false;
        if ($arg1 === true and $arg2 === null) return null;
        if ($arg1 === true and $arg2 === true) return false;
        return null;
    }
    
    public static function MAGN($arg1, $arg2) {
        $arg1 = T::T3($arg1);
        $arg2 = T::T3($arg2);
        if ($arg1 === false and $arg2 === false) return null;
        if ($arg1 === false and $arg2 === null) return false;
        if ($arg1 === false and $arg2 === true) return false;
        if ($arg1 === null and $arg2 === false) return true;
        if ($arg1 === null and $arg2 === null) return null;
        if ($arg1 === null and $arg2 === true) return false;
        if ($arg1 === true and $arg2 === false) return true;
        if ($arg1 === true and $arg2 === null) return true;
        if ($arg1 === true and $arg2 === true) return null;
        return null;
    }

}


// function ternarity($arg) {
//     if (is_null($arg)) print("null <br>");
//     else if ($arg) print("true <br>");
//     else print('false <br>');
// }
// 
// ternarity( T::T3('-1') );    # false
// ternarity( T::T3('T') );     # true
// ternarity( T::T3(+123.45) ); # true
// ternarity( T::T3('Text') );  # null
// ternarity( T::XAND( T::NOT(true), T::BIN(null) ) ); # true

