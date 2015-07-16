<?php

//error_reporting(0);

class Database
{

    public $status = false;
    public $message = "";
    public $co = null;
    public function conn($servername ="",$username="", $password="",$database="")
    {
        // Create connection
        $this->co = $conn = new mysqli($servername, $username, $password,$database);

        // Check connection
        if ($conn->connect_error) {
            $this->status = false;
            $this->message = "Connection failed: " . $conn->connect_error;
            return FALSE;
        } 
        else
        {
            $this->status = true;
            $this->message = "Connected successfully";
            return true;
        }
    }
}



$db = new Database();
$db->conn("localhost","root","","test");
