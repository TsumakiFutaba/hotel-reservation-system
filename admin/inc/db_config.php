<?php   
  
   $hname = 'localhost';
   $uname = 'root';
   $pass = '';
   $db = 'hotel_reservation_system';

   $con = mysqli_connect($hname,$uname,$pass,$db);

   if(!$con){
    die("Cannot connect to the Database".mysqli_connect_error());
   }

   function filteration($data){
     foreach($data as $key => $value){
       $value = trim($value);
       $value = stripslashes($value);
       $value = strip_tags($value);
       $value = htmlspecialchars($value);
       $data[$key] = $value;
     }
     return $data;
   }

   function selectAll($table)
{
    $con = $GLOBALS['con'];
    

    $table = mysqli_real_escape_string($con, $table);
    $res = mysqli_query($con, "CALL SelectAllFromTable('$table')");

    if (!$res) {
        die("Query failed: " . mysqli_error($con));
    }
    while (mysqli_next_result($con)) {
        if ($result = mysqli_store_result($con)) {
            mysqli_free_result($result);
        }
    }
    return $res;
}

   function select($sql,$values,$datatypes)
   {
    $con = $GLOBALS['con'];
    if($stmt = mysqli_prepare($con,$sql))
    {
      mysqli_stmt_bind_param($stmt,$datatypes,...$values);
      if(mysqli_stmt_execute($stmt)){
        $res = mysqli_stmt_get_result($stmt);
        mysqli_stmt_close($stmt);
        return $res;
      }
      else{
        mysqli_stmt_close($stmt);
        die("Query cannot be executed - Select");
      }
    }
    else{
      die("Query cannot be prepared - Select");
    }
   }

   function update($sql,$values,$datatypes)
   {
    $con = $GLOBALS['con'];
    if($stmt = mysqli_prepare($con,$sql))
    {
      mysqli_stmt_bind_param($stmt,$datatypes,...$values);
      if(mysqli_stmt_execute($stmt)){
        $res = mysqli_stmt_affected_rows($stmt);
        mysqli_stmt_close($stmt);
        return $res;
      }
      else{
        mysqli_stmt_close($stmt);
        die("Query cannot be executed - Update");
      }
    }
    else{
      die("Query cannot be prepared - Update");
    }
   }

   function insert($sql,$values,$datatypes)
   {
    $con = $GLOBALS['con'];
    if($stmt = mysqli_prepare($con,$sql))
    {
      mysqli_stmt_bind_param($stmt,$datatypes,...$values);
      if(mysqli_stmt_execute($stmt)){
        $res = mysqli_stmt_affected_rows($stmt);
        mysqli_stmt_close($stmt);
        return $res;
      }
      else{
        mysqli_stmt_close($stmt);
        die("Query cannot be executed - Insert");
      }
    }
    else{
      die("Query cannot be prepared - Insert");
    }
   }

   function delete($sql,$values,$datatypes)
   {
    $con = $GLOBALS['con'];
    if($stmt = mysqli_prepare($con,$sql))
    {
      mysqli_stmt_bind_param($stmt,$datatypes,...$values);
      if(mysqli_stmt_execute($stmt)){
        $res = mysqli_stmt_affected_rows($stmt);
        mysqli_stmt_close($stmt);
        return $res;
      }
      else{
        mysqli_stmt_close($stmt);
        die("Query cannot be executed - Delete");
      }
    }
    else{
      die("Query cannot be prepared - Delete");
    }
   }

?>