<?php

namespace crud1\Controller;

use Exception;

class Controller {

    /**
     * @return mixed
     * 
     */
    public function view($view, $data = []) {
        $file = "../src/views/{$view}.php";

        if (file_exists($file)) {
            require_once $file;
        } else {
            throw new Exception("Error Processing Request", 1);
        }
    }

    /**
     * @return  mixed
     * 
     */
    public function model($model) {
        $model = "App\\Models\\" . $model;
        if (class_exists($model)) {
            return new $model;
        } else {
            dd($model . " not found!");
        }
    }

    public function rowCount() {
        
    }

}
