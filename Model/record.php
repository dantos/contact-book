<?php

class record {


    private $firstname = '';
    private $lastname = '';
    private $phone = '';

    function __construct($firstname, $lastname, $phone){
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->phone = $phone;
    }


    public function getRecords(){

        $records = unserialize( file_get_contents( 'data.ser' ) );

        print_r('<pre>');

       return $records;

    }

    public function saveRecords(){

        $data = unserialize( file_get_contents( 'data.ser' ) );
        $data[] = array( 'firstname' => $this->firstname, 'lastname' => $this->lastname, 'phone' => $this->phone );
        file_put_contents( 'data.ser', serialize( $data ) );

    }

    public function deleteRecords($recordId){

        $data = unserialize( file_get_contents( 'data.ser' ) );
        $data[] = array( 'firstname' => $this->firstname, 'lastname' => $this->lastname, 'phone' => $this->phone );
        unset($data[$recordId]);
        file_put_contents( 'data.ser', serialize( $data ) );

    }

}