<?php

require_once 'model/record.php';

class basic {

    public function index (){

        require_once 'view/header.php';

        $records = new record('','', '');
        $records = $records->getRecords();

        require_once 'view/presentation.php';
    }

    public function save(){

        $firstname = $_GET['firstname'] ;
        $lastname  = $_GET['lastname'] ;
        $phone  = $_GET['phone'] ;


        $records = new record($firstname,$lastname,$phone);
        $records->saveRecords();

        header('Location: http://localhost/contact-book/index.php');

    }


}