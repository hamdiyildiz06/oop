<?php

class defaultController extends Controller implements FrontController {

    public function indexAction(){
        $data = array();
        $indexModel = new defaultModel();
//        $data["user"] = $indexModel->indexModel($id);

        $this->renderLayout("main","default","index", $data);
    }

    public function detailAction(){

        $data = [];
        $this->renderLayout("main","default","detail", $data);
    }

    public function loginAction(){
        $data = [];
        $this->renderLayout("main","default","login", $data);
    }
}