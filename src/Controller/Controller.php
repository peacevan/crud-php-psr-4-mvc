<?php

namespace src\Controller;

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
        $model = "app\\Model\\" . $model;
        if (class_exists($model)) {
            return new $model;
        } else {
            dd($model . " model  not found!");
        }
    }

    /**
     * @return  mixed
     * 
     */
    public function repository($repository) {
        $model = "app\\repository\\" . $repository;
        if (class_exists($model)) {
            return new $model;
        } else {
            dd($repository . "repository not found!");
        }
    }

    public function rowCount() {
        
    }
    
    /**
     * @param $view
     * @param array $data
     * @param bool $layout
    
     */
    
    protected function render($view, $data =[], $layout = true) {
        //$data['mahasiswa'] = $this->model('Home')->getAll();
        //$data['title'] = $title;
        if ($layout) {
            $this->view("templates/header", $data);
        }
        $this->view("produto/" . $view, $data);
        if ($layout) {
            $this->view("templates/footer");
        }
    }

}
