<?php
class Database{
  function __construct($host_name,$user_name,$password,$database_name){
    $this->host_name=$host_name;
    $this->user_name=$user_name;
    $this->password=$password;
    $this->database_name=$database_name;
    $this->result_array=[];
    $this->con = mysqli_connect($this->host_name,$this->user_name,$this->password,$this->database_name) or die("Some error occurred during connection " . mysqli_error($this->con));
    $this->count = count($this->fetch_result($this->query_database("SELECT * FROM `clients`")));

  }

  function read(){
    return $this->fetch_result($this->query_database("SELECT * FROM `clients`"));
  }

  function write(){

  }

  function change(){

  }

  function query_database($sql){
    $this->sql=$sql;
    $this->query = mysqli_query($this->con, $this->sql);
    return $this->query;
  }

  function fetch_result($query){
    while($result = mysqli_fetch_array($query))
    {
      array_push($this->result_array,$result);
    }
    return $this->result_array;
  }

  function __destruct() {
       mysqli_close($this->con);
  }
}
?>
