<strong>Database Connected: </strong>

<?php

echo "hi";

// DB_HOST=38.242.214.255
// DB_PORT=3306
// DB_DATABASE=theedupe_db
// DB_USERNAME=theedupe_admin
// DB_PASSWORD=Abbas@1995
$con = mysqli_connect("38.242.214.255","theedupe_admin","Abbas@1995","theedupe_db");


if($con){
    echo " This is Procedure --";
    echo " db okay";
    echo "<br>";
}
?>


<?php
    // try {
    //     \DB::connection()->getPDO();
    //     echo \DB::connection()->getDatabaseName();
    //     } catch (\Exception $e) {
    //     echo 'None';
    // }
    // catch (\Exception $e) {
    //     dump('Database connected: ' . 'None');
    // }
?>

<?php  
 use Illuminate\Support\Facades\DB;
 //....
 try {
      DB::connection()->getPdo();
      if(DB::connection()->getDatabaseName()){
            echo "This is PDO --";
          echo "Yes! Successfully connected to the DB: " . DB::connection()->getDatabaseName();
      }else{
          die("Could not find the database. Please check your configuration.");
      }
  } catch (\Exception $e) {
      die("Could not open connection to database server.  Please check your configuration.");
  }

?>