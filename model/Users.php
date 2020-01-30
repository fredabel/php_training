<?php

require dirname(__FILE__).'/../conf/db.php';
require dirname(__FILE__).'/../conf/conf.php';
require dirname(__FILE__).'/../lib/db.php';
require dirname(__FILE__).'/../conf/tables.php';


Class Users{

    public $db;

    public function __construct(){
    	$db = new DB; 
    	$this->conn = $db->dbCon();	
    }
    
    public function list()
    {
       
        $query = "SELECT `id`,`name`,  `email` , `age` FROM " .USERS;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $stmt->bind_result($id,$name, $email,$age);
        $data = array();
        while ( $stmt->fetch() ) { 
            $data[] = array(
                'id'        => $id,
                'name'      => $name,
                'email'     => $email,
                'age'       => $age,
            );                  
        }
        
		return $data;
    }

    public function create($datas){

        // var_dump($datas);die();
        $query = "INSERT INTO users (name, email, age) VALUES (?,?,?)";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param('ssi',$datas['name'],$datas['email'],$datas['age']);
        $stmt->execute();
        $affected_rows = $stmt->affected_rows;
        $stmt->close();

        return $affected_rows;


    }

    // function publish_message($topicName, $message)

    // {
    //     $pubsub = new PubSubClient([
    //         'projectId' => PROJECT_ID,
    //         'keyFilePath' => KEYFILEPATH
    //     ]);
    //     $topic = $pubsub->topic($topicName);
    //     $topic->publish(['data' => $message]);
    //     print('Message published' . PHP_EOL);
    // }


}
// $r = new Users;
// $d = $r->select_users();
// print_r($d);
// echo $r->publish_message('RTD', $d);



