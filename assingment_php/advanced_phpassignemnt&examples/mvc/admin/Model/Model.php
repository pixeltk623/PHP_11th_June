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


        }
        catch(Exception $e)

        {

        die(mysqli_error($this->connection,$e));

        }
         


    }

        //cerate a meber function for selectall custome profile data

        public function managecustomer($table,$table1,$table2)
        {
            $select="select $table.*,sname,ctname from $table join $table1 on  $table.sid=$table1.sid join $table2 on $table.ctid=$table2.ctid";
            $query=mysqli_query($this->connection,$select);
            while($result=mysqli_fetch_array($query))
            {
              
                $arr[]=$result;
    
            }
    
            return $arr;
    
    
        }
        
        //cerate a meber function for selectall product data

        public function manageproduct($table,$table1,$table2)
        {
            
            $select="select $table.*,$table1.categories,$table2.subcategories from $table join $table1 on  $table.Cat_id=$table1.Cat_id join $table2 on $table.subcat_id=$table2.subcat_id";

            $query=mysqli_query($this->connection,$select);
            while($result=mysqli_fetch_array($query))
            {
                
                $arr[]=$result;
    
            }
    
            return $arr;
    
    
        }

      //cerate a meber function for join two tabel data

      public function managesubcat($table,$table1)
      {
          $select="select $table.*,categories from $table join $table1 on $table.Cat_id=$table1.Cat_id";
        /*  select subcategories.subcategories,categories.categories,subcategories.date from categories join subcategories on categories.Cat_id = subcategories.categories */
          $query=mysqli_query($this->connection,$select);
          while($result=mysqli_fetch_array($query))
          {
            
              $arr[]=$result;
  
          }
  
          return $arr;
  
  
      }

    public function insertdata($table,$data)
    {
        $key = array_keys($data);
        $keys = implode(",",$key);

        $value = array_values($data);
        $values = implode("','",$value);

        $insert = "INSERT INTO $table ($keys) VALUES ('$values')";

        $query = mysqli_query($this->connection,$insert);

        return $query;
    }

    //create a member function for login as a customer


    public function login($table,$email,$password)
    {
      $select="select * from $table where email='$email' and password='$password'";
      $query=mysqli_query($this->connection,$select);
      $results=mysqli_fetch_array($query);
      $no=mysqli_num_rows($query);
      if($no==1)
      {
        $_SESSION["aid"]=$results["aid"];
        $_SESSION["em"]=$results["email"];
        
       
        
        return true;

      } 

      else
      {
          return false;
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
 



     

    //create function for select all where id

    public function select_data($table,$id)
    {
        $select="select * from $table where employeeid=$id";
        $query=mysqli_query($this->connection,$select);
        while($result=mysqli_fetch_assoc($query))

        {
          
            $arr[]=$result;


        }

        return $arr;


    }






    
    //create function for total items

    public function totalitems($table,$columnname)
    {
        $select="select count($columnname) as total from $table";
        $query=mysqli_query($this->connection,$select);
        while($result=mysqli_fetch_assoc($query))

        {
            $arr[]=$result;
        }
        return $arr;

    }




     //create function for select all where id

     public function select_edit_data($table,$id,$edid)
     {
        echo  $select="select * from $table where $id='$edid'"; exit();
         $query=mysqli_query($this->connection,$select);
         $result=mysqli_fetch_assoc($query);
         $arr[]=$result;
         return $arr;
 
 
     }


     
     //create function for select all where id

     public function select_edit_data1($table,$table1,$id,$edid)
     {
        $select="select $table.*,categories from $table join $table1 on $table.Cat_id=$table1.Cat_id where $id='$edid'";
         $query=mysqli_query($this->connection,$select);
         $result=mysqli_fetch_assoc($query);
         $arr[]=$result;
         return $arr;
 
 
     }
     //create function for select all where id

     public function select_edit_data2($table,$table1,$table2,$id,$edid)
     {
        $select="select $table.*,$table1.categories,$table2.subcategories from $table join $table1 on  $table.Cat_id=$table1.Cat_id join $table2 on $table.subcat_id=$table2.subcat_id where $id=$edid";
         $query=mysqli_query($this->connection,$select);
         $result=mysqli_fetch_assoc($query);
         $arr[]=$result;
         return $arr;
     }

     //update all data create a member function

     public function upddata($table,$data,$where,$id,$edid)

     {
        //echo $where;
        $kk=array_keys($data);
        $vv=array_values($data);
      
        $key=array_keys($where);
        $value=array_values($where);
        
        $i=0;
        $k=0;
      
        $sql="update $table set"; 
        $size=sizeof($data);
      
        foreach($data as $v)
      
        {
          if($size==$i+1)    
      
          {
              
            $sql.=" ".$kk[$i]."= '".$vv[$i]."'";
      
      
          }
          else
          {
      
            $sql.=" ".$kk[$i]."= '".$vv[$i]."',";
      
          }
      
          $i++;
      
        }
      
          $sql.=" where $id='$edid'";
            
            foreach($where as $val)
      
            {
      
              $sql.=" and ".$key[$k]."= '".$value[$k]."' "; 
      
              $k++;
      
            }
      
            $query=mysqli_query($this->connection,$sql);
      
            return $query;
      
          }
      

         

     

    //create function for delete all data

    public function del_data($table,$id)
    {

    $del="delete from $table where employeeid=$id";
    $query=mysqli_query($this->connection,$del);
    return $query;
    
    }

     //create function for delete all catageroy

     public function del_cat($table,$id,$where)
     {
 
     $del="delete from $table where $where=$id";
     $query=mysqli_query($this->connection,$del);
     return $query;
     
     }

     
    //create a member function for logout as customer

    public function logout()

    {
        unset($_SESSION["aid"]);
        unset($_SESSION["em"]);
        
        session_destroy();
    
  
        return true;

    }
}