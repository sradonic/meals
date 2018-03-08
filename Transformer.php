<?php
/**
 * Created by PhpStorm.
 * User: sradonic1
 * Date: 8.3.2018.
 * Time: 14:09
 */

namespace App\Model;


class Transformer
{
    public static function transformForScope($arg) {
        if(strpos($arg, ',') !== false) {
            $new = array_map('intval', explode(',', $arg ));
        } else {
            $new = explode(',', $arg);
        }
        return $new;
    }
}