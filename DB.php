<?php

class DB{

    private $username;
    private $password;
    private $databasename;
    private $server;
    private $connection;


    
    function __construct(){

        $this->username ='root';
        $this->password = '';
        $this->databasename ='crud';
        $this->server ='localhost';

    }

    function connect (){
        $this->connection = mysqli_connect($this->server,$this->username,$this->password,$this->databasename);
    }

    //save data in mysql databse

    function save($data){
        $this->connect();
        extract($data);
        

            
                //create new record/save
                $sql = "INSERT INTO user_data VALUES(null, '$name', '$age', '$religion', '$gender')";
                 $result = mysqli_query($this->connection, $sql);
                 if($result){
           
                    
                         return true;
                    }else{
                        return false;
                    }
            
        
    }

    function check_table(){//fetch all datas
        $this->connect();
        $sql = "SELECT * FROM user_data";
        $result = mysqli_query($this->connection,$sql);
        if ($result == true) {
            $data = [];
            while ($row = mysqli_fetch_assoc($result)) {
                $data[] = $row;
            }
        }
        return $data;
        
    }

    function check_one_table($id)
    { //fetch single datas
        $this->connect();
        $sql = "SELECT * FROM user_data where id='$id' ";
        $result = mysqli_query($this->connection, $sql);
        $row = mysqli_fetch_assoc($result);
                
        return $row;
    }

    function delete($course_id)
    {
        $this->connect();
        
        $sql = " DELETE FROM user_data WHERE id='$course_id' ";
        $result = mysqli_query($this->connection, $sql);
        if ($result == true) {
            return true;
        } else {
            return true;
        }
    }

    function update_data($post){
        $this->connect();
        extract($_POST);
        $sql = "UPDATE user_data SET name='$name', age='$age', religion='$religion',
            gender='$gender' WHERE id='$id'";
        $result = mysqli_query($this->connection, $sql);
        if($result != null){
            
            return true;
        }
    }

    


}//end of class

$db_object = new DB();
