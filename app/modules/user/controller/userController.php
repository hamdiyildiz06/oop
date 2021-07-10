<?php

class userController extends Controller {

    public function indexAction(){
        $data = array();

        $this->renderLayout("main","user","index", $data);
    }

    public function detailAction(){
        $data = [];

        $this->renderLayout("main","user","detail", $data);
    }
}