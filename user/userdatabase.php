<?php
class user_all
{

    private static $conn=null;
    public static function  connect()
    {
        self::$conn=mysqli_connect("localhost","root","","shopping_cart");
        return self::$conn;
    }
    public static function disconnect()
    {
        mysqli_close($conn);
        self::$conn=null;
    }
      public function select_all()
    {
        $cnn=user_all::connect();
        $q="select * from user_tbl";
        $result=$cnn->query($q);
        return $result;
        user_all::disconnect();
    }
  public function loginselect($id,$pass)
    {
        $cnn=user_all::connect();
        $q='select * from user_tbl where u_id="'. $id .'"'.' and u_pass="'. $pass .'"';
        $res=$cnn->query($q);
        return $res;
        user_all::disconnect();
    }
      public function insert($uid,$uname,$pass,$mob,$add,$img,$gen,$flag,$token)
    {
        $cnn=user_all::connect();      
        $q="insert into  user_tbl values ('".$uid."','". $uname ."','". $pass ."','". $mob ."','". $add ."','". $img ."','". $gen ."','". $flag ."','". $token ."')";
        echo $q;
        $result=$cnn->query($q);
        return $result;
        user_all::disconnect();

    }
}
?>