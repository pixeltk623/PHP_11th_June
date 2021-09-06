<?php
class Model
{
    public $connection="";
    public function __construct()
    {
        session_start();

        try
        {

            $this->connection=new mysqli("localhost","root","","luxury_watch");

            //echo "connection stablished";

        }
        catch(Exception $e)

        {

        die(mysqli_error($this->connection,$e));

        }
         


    }


    //cerate a meber function for selectall data

    public function selalldata($table)
    {
        $select="select * from $table";
        $query=mysqli_query($this->connection,$select);
        while($result=mysqli_fetch_array($query))
        {
          
            $arr[]=$result;

        }

        return $arr;


    }





     //cerate a meber function for selectallcategory of products data

     public function selallcat($table,$subcatid)
     {
         $select="select * from $table where subcat_id='$subcatid'";
         $query=mysqli_query($this->connection,$select);
         while($result=mysqli_fetch_array($query))
         {
           
             $arr[]=$result;
 
         }
 
         return $arr;
 
 
     }
 

      //cerate a member function for selectall products details data

      public function sellproductsdetails($table,$id,$pid)
      {
          $select="select * from $table where $id='$pid'";
          $query=mysqli_query($this->connection,$select);
          while($result=mysqli_fetch_array($query))
          {
            
              $arr[]=$result;
  
          }
  
          return $arr;
  
  
      }
  
    //cerate a meber function for selectall custome profile data

    public function sellprofile($table,$table1,$table2,$id,$custid)
    {
        $select="select $table.*,sname,ctname from $table join $table1 on  $table.sid=$table1.sid join $table2 on $table.ctid=$table2.ctid where $id='$custid'";
        $query=mysqli_query($this->connection,$select);
        while($result=mysqli_fetch_array($query))
        {
          
            $arr[]=$result;

        }

        return $arr;


    }


    //create a member function for insrtalldata

    public function insalldata($table,$data)

    {
      
        $k=array_keys($data);
        $kk=implode(",",$k);

        $v=array_values($data);
        $vv=implode("','",$v);

        $insert="insert into $table($kk) values('$vv')";
        $query=mysqli_query($this->connection,$insert);
        return $query;

    }


    //create a member function for login as a customer

    public function loguser($table,$em,$pass)
    {
      $select="select * from $table where email='$em' and password='$pass'";
      $query=mysqli_query($this->connection,$select);
      $result=mysqli_fetch_array($query);
      $no=mysqli_num_rows($query);
      if($no==1)
      {

        $_SESSION["custid"]=$result["custid"];
        $_SESSION["em"]=$result["email"];
        $_SESSION["fname"]=$result["firstname"];
        
        return true;

      }

      else
      {
          return false;
      }


    }


    //create member function for forget password
    public function frgpassword($table,$em)
    {
        $select="select password from $table where email='$em'";
        $query=mysqli_query($this->connection,$select);
        $result=mysqli_fetch_array($query);
        $no=mysqli_num_rows($query);
        if($no==1)

        {

            $p=base64_decode($result["password"]);
            return $p;
            
        }

        else

        {
            return false;
        }
    }


    //create function for delete all data

    public function del_data($c,$table,$id)
    {
    $k=array_keys($id);
    $field=implode(",",$k);

    $v=array_values($id);
    $value=implode("','",$v);

    $del="delete from $table where $field='$value'";
    $query=mysqli_query($this->connection,$del);
    return $query;

    }


    //create a member function for change password

    public function chngpassword($table,$opass,$npass,$cpass,$custid)

    {
        
        $sel="select password from $table where custid='$custid'";
        $query=mysqli_query($this->connection,$sel);
        $result=mysqli_fetch_array($query);
        $p=$result["password"];
        if($p==$opass && $npass==$cpass)
        {

            $upd="update $table set password='$npass' where custid='$custid'";
            $query=mysqli_query($this->connection,$upd);
            return $query;
        }

        else

        {

            return false;
        }


    }



    //create function for total items

    public function totalitems($table,$columnname,$custid)
    {
        $select="select count($columnname) as total from $table where $columnname='$custid'";
        $query=mysqli_query($this->connection,$select);
        while($result=mysqli_fetch_assoc($query))

        {
            $arr[]=$result;
        }
        return $arr;

    }


    //create a member function for show cart

    //cerate a meber function for selectall data

    public function shwcart($table,$table1,$id,$custid)
    {
        $select="select $table.*,image1 from $table join $table1 on $table.product_id=$table1.product_id where $id='$custid'";
        $query=mysqli_query($this->connection,$select);
        while($result=mysqli_fetch_array($query))
        {
          
            $arr[]=$result;

        }

        return $arr;


    }



    //create function for calculate subtotals of products

    public function sumproducts($table,$columnname,$id,$custid)
    {
        $select="select sum($columnname) as total from $table where $id='$custid'";
        $query=mysqli_query($this->connection,$select);
        while($result=mysqli_fetch_assoc($query))

        {
            $arr[]=$result;
        }
        return $arr;

    }


    //create a member function for logout as customer

    public function logout()

    {
       
        unset($_SESSION["custid"]);
        unset($_SESSION["em"]);
        unset($_SESSION["fname"]);
       
        return true;

    }


}




?>