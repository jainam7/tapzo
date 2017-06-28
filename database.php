<?php
class product_all
{
    private static $conn=null;
    public static function connect()
    {
        self::$conn=mysqli_connect("localhost","root","","shopping_cart");
        return self::$conn;
    }
    public static function disconnect()
    {
        mysqli_close(self::$conn);
        self::$conn=null;
    
    }
    public function getallpro()
    {
        $conn=product_all::connect();
        $sql="select * from product_tbl";
        $result=$conn->query($sql);
        return $result;
        product_all::disconnect();
    }
    public function insertpro($p_id,$p_name,$p_color,$p_prize,$p_manu,$p_warr,$p_img,$p_stock)
    {
         $conn=product_all::connect();
        $sql="insert into product_tbl values('". $p_id ."','". $p_name."','". $p_color ."','". $p_prize ."','". $p_manu ."','". $p_warr ."','". $p_img ."','". $p_stock ."')";
        $result=$conn->query($sql);
        return $result;
        product_all::disconnect();
    }
  
 }

?>