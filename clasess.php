<?php


class user{
    public $id;
    protected $password;
    public $name;
    public $role;
    public $email;

    static function login($email,$password)
    {
            $user=null;
            $qry= "select * from user where email='$email' and password ='$password'";
            require_once("config.php");
            $cn =mysqli_connect(DB_HOST,DB_USER_NAME,DB_USER_PW,DB_NAME);
            // echo mysqli_error($cn);
            $rslt =mysqli_query($cn,$qry);
            // var_dump($rslt);
            if ($arr = mysqli_fetch_assoc($rslt)) 
            {
                // var_dump($arr);
                switch ($arr["role"]) {
                    case 'gm':
                        $user =new generalManager($arr["name"],$arr["email"]);
                        $user->id=$arr["ID"];
                        break;
                    case 'dm':
                        $user =new departmentManager($arr["name"],$arr["email"]);
                        $user->id=$arr["ID"];
                        break;    
                    case 'worker':
                        $user =new worker($arr["name"],$arr["email"]);
                        $user->id=$arr["ID"];
                        break;
                }
            }
            mysqli_close($cn);
            return $user;
    }
}
class generalManager extends user 
{
    function __construct($name,$email)
    {
     $this->name = $name;   
     $this->email = $email;
     $this->role = "gm";   
    }
    public function CreateUser($name,$email,$role)
    {
        $password = md5("123456");
        $qry="INSERT INTO `user` (`name`,`password`,`role`,`email`) VALUES('$name','$password','$role','$email')";
        require_once("config.php");
        $cn =mysqli_connect(DB_HOST,DB_USER_NAME,DB_USER_PW,DB_NAME);
        $rslt = mysqli_query($cn,$qry);
        mysqli_close($cn);
        // echo mysqli_error($cn);
        // var_dump($rslt);
        return $rslt;
    }
    public function Get_prog()
    {

        $qry="SELECT * FROM `user_has_order`";
        require_once("config.php");
        $cn =mysqli_connect(DB_HOST,DB_USER_NAME,DB_USER_PW,DB_NAME);
        $rslt = mysqli_query($cn,$qry);
        $data = mysqli_fetch_all($rslt,MYSQLI_ASSOC);           
        mysqli_close($cn);
        // echo mysqli_error($cn);
        // var_dump($rslt);
        return $data;
    }
    public function show_all_dm_informations()
    {
        $qry = "SELECT * FROM `user`";
        require_once("config.php");
        $cn = mysqli_connect(DB_HOST,DB_USER_NAME,DB_USER_PW,DB_NAME);
        $rslt= mysqli_query($cn,$qry);
        $data = mysqli_fetch_all($rslt,MYSQLI_ASSOC);
        mysqli_close($cn);
        return $data;
    }
    public function show_all_orders()
    {
        $qry = "SELECT * FROM `order`";
        require_once("config.php");
        $cn = mysqli_connect(DB_HOST,DB_USER_NAME,DB_USER_PW,DB_NAME);
        $rslt= mysqli_query($cn,$qry);
        $data = mysqli_fetch_all($rslt,MYSQLI_ASSOC);
        mysqli_close($cn);
        return $data;
    }
    public function asign_task($user_id,$order_id)
    {
        $qry="INSERT INTO `user_has_order` (`user_ID`, `order_id`) VALUES ('$user_id', '$order_id');";
        require_once("config.php");
        $cn =mysqli_connect(DB_HOST,DB_USER_NAME,DB_USER_PW,DB_NAME);
        $rslt = mysqli_query($cn,$qry);
        mysqli_close($cn);
        // echo mysqli_error($cn);
        // var_dump($rslt);
        return $rslt;
    }
    public static function is_assiged_task($user_id,$order_id)
    {
        
        $qry="SELECT * FROM `user_has_order`";
        require_once("config.php");
        $cn =mysqli_connect(DB_HOST,DB_USER_NAME,DB_USER_PW,DB_NAME);
        $rslt = mysqli_query($cn,$qry);
        $data = mysqli_fetch_all($rslt,MYSQLI_ASSOC);
        // var_dump($data);
       foreach ($data as $task) {
           if ($task["user_ID"] == $user_id && $task["order_id"] == $order_id) {
               echo $task["user_ID"] ,$task["order_id"];    
            mysqli_close($cn);
            return true;
           }
       }
        mysqli_close($cn);
        // echo mysqli_error($cn);
        // var_dump($rslt);
        return false;
    }

    
}
class departmentManager extends user 
{
    function __construct($name,$email)
    {
        $this->name = $name;   
        $this->email = $email;
        $this->role = "dm";   
    }
    public function Finish_and_Delete_order($id)
    {
        $qry="DELETE FROM `order` WHERE `order`.`id` = $id;";
        require_once("config.php");
        $cn = mysqli_connect(DB_HOST,DB_USER_NAME,DB_USER_PW,DB_NAME);
        $rslt = mysqli_query($cn,$qry);
        mysqli_close($cn);
        return $rslt;
    }
    public function show_all_dm_informations()
    {
        $qry = "SELECT * FROM `user`";
        require_once("config.php");
        $cn = mysqli_connect(DB_HOST,DB_USER_NAME,DB_USER_PW,DB_NAME);
        $rslt= mysqli_query($cn,$qry);
        $data = mysqli_fetch_all($rslt,MYSQLI_ASSOC);
        mysqli_close($cn);
        return $data;
    }
    public function show_all_orders()
    {
        $qry = "SELECT * FROM `order`";
        require_once("config.php");
        $cn = mysqli_connect(DB_HOST,DB_USER_NAME,DB_USER_PW,DB_NAME);
        $rslt= mysqli_query($cn,$qry);
        $data = mysqli_fetch_all($rslt,MYSQLI_ASSOC);
        mysqli_close($cn);
        return $data;
    }
    public function Get_prog()
    {

        $qry="SELECT * FROM `user_has_order`";
        require_once("config.php");
        $cn =mysqli_connect(DB_HOST,DB_USER_NAME,DB_USER_PW,DB_NAME);
        $rslt = mysqli_query($cn,$qry);
        $data = mysqli_fetch_all($rslt,MYSQLI_ASSOC);           
        mysqli_close($cn);
        // echo mysqli_error($cn);
        // var_dump($rslt);
        return $data;
    }

    
}
class worker extends user 
{
    function __construct($name,$email)
    {
        $this->name = $name;   
        $this->email = $email;
        $this->role = "worker";   
    }
    public function show_all_my_tasks($id)
    {

        $qry = "SELECT * FROM `user_has_order` WHERE `user_has_order`.`user_ID` = $id;";
        require_once("config.php");
        $cn = mysqli_connect(DB_HOST,DB_USER_NAME,DB_USER_PW,DB_NAME);
        $rslt= mysqli_query($cn,$qry);
        $data = mysqli_fetch_all($rslt,MYSQLI_ASSOC);           
        mysqli_close($cn);
        return $data;
    }
    public function submit_prog($prog,$user_id,$order_id)
    {

        $qry="UPDATE `user_has_order` SET `prog` = '$prog' WHERE `user_has_order`.`user_ID` = '$user_id' AND `user_has_order`.`order_id` = '$order_id';";
        require_once("config.php");
        $cn =mysqli_connect(DB_HOST,DB_USER_NAME,DB_USER_PW,DB_NAME);
        $rslt = mysqli_query($cn,$qry);
        mysqli_close($cn);
        // echo mysqli_error($cn);
        // var_dump($rslt);
        return $rslt;
    }
    
}
 class customer 
{
     static function order($name,$adress,$fishtype,$cooking,$site,$phone)
    {

        // $qry ="insert into courses ( `name`, `creadit_hours`, `seats_no`, `professor_id`, `tuition`) 
        //     values ('$course->name' ,'$course->creadit_hours' ,'$course->seats_no', '$course->professor_id' , '$course->tuition')";
        
        $qry = "INSERT INTO `order` (`FT`, `Cooking`, `delivery`, `name`, `address`, `phone`) VALUES ( '$fishtype', '$cooking', '$site', '$name', '$adress', '$phone')";
        require_once("config.php");
        $cn =mysqli_connect(DB_HOST,DB_USER_NAME,DB_USER_PW,DB_NAME);
        $rslt = mysqli_query($cn,$qry);
        mysqli_close($cn);
        return $rslt;
    }
}


