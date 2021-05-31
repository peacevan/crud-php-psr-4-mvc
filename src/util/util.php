<?php
namespace app\Util;

class Util {

    public static function  dd() {
        echo '<pre>';
        array_map(function ($x) {
            var_dump($x);
        }, func_get_args());
        die;
    }

   public static function redirect($to) {
        header('Location: ' . BASEURL . $to);
        exit;
    }

}
