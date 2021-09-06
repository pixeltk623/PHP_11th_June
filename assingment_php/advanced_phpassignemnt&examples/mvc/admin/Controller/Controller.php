<?php
error_reporting(0);

require_once("Model/Model.php");
class Controller extends Model
{
 public function __construct()
 {

   parent:: __construct();
    
//    //register

//    if(isset($_POST["register"]))
//    {
       
//      $name=$_POST["name"];
//      $email=$_POST["email"];
//      $password=base64_encode($_POST["password"]);
//      $confirmpassword=base64_encode($_POST["confirmpassword"]);
    
//     if($password==$confirmpassword)
//     {
//         $data=array("name"=>$name,"email"=>$email,"password"=>$password);

//         $reg = $this->insertdata('users',$data);

//         if($reg)
//         {
//             echo "<script>
//             alert('Account Registration Sucessfull')
//             window.location = './';
//             </script>";
//         }

//     }
//     else
//     {
        
//         echo "<script>
//         alert('Password does not mach')
//         window.location = '/register';
//         </script>";
//     }


//    }

    //login as customer

   if(isset($_POST["login"]))
   {
      
    $email=$_POST["em"];
    $password=$_POST["password"];
    $chk=$this->login('admin',$email,$password);
 
    if($chk)
    {
        echo "<script>
          
            alert('You are Logged in as a Admin Successfuly')
            window.location='./home';
        
           </script>";
        
    }

    else
    {
        
        echo "<script>
          
            alert('Your email and password are Incorect try again')
            window.location='./';
        
           </script>";
    }


   }

   //insert employee data
   if(isset($_POST["sub"]))
   {
       $name = $_POST["name"];
       $department = $_POST["department"];
       $gender = $_POST["gender"];
       $city = $_POST["city"];

       $data = array("name"=>$name,"gender"=>$gender,"department"=>$department,"city"=>$city);

       $insert = $this->insertdata('employee',$data);

       if($insert)
       {
        echo "<script>
          
        alert('Data insert successfully')
        window.location='./employee_detail';
    
       </script>";
       }
       else
       {
        echo "<script>
          
        alert('Data Wrong')
        window.location='../';
    
       </script>";
       }
   }

   //insert category data
   if(isset($_POST["addcat"]))
   {
       $catname = $_POST["catname"];
       $catdate = $_POST["catdate"];

       $data = array("categories"=>$catname,"date"=>$catdate);

       $insert = $this->insertdata('categories',$data);

       if($insert)
       {
        echo "<script>
          
        alert('Data insert successfully')
        window.location='./AddCategory';
    
       </script>";
       }
       else
       {
        echo "<script>
          
        alert('Data Wrong')
        window.location='./AddCategory';
    
       </script>";
       }
   }

   //insert product data
   if(isset($_POST["addprod"]))
   {    
       //image upload codes
        $tmp_name1=$_FILES["pimg1"]["tmp_name"];
        $path1="uploads/".$_FILES["pimg1"]["name"];
        $type=$_FILES["pimg1"]["type"];
        $size=$_FILES["pimg1"]["size"]/1024;
        move_uploaded_file($tmp_name1,$path1);

        $tmp_name2=$_FILES["pimg2"]["tmp_name"];
        $path2="uploads/".$_FILES["pimg2"]["name"];
        $type=$_FILES["pimg2"]["type"];
        $size=$_FILES["pimg2"]["size"]/1024;
        move_uploaded_file($tmp_name2,$path2);

        $tmp_name3=$_FILES["pimg3"]["tmp_name"];
        $path3="uploads/".$_FILES["pimg3"]["name"];
        $type=$_FILES["pimg3"]["type"];
        $size=$_FILES["pimg3"]["size"]/1024;
        move_uploaded_file($tmp_name3,$path3);

        $cat_id = $_POST["categories"];
        $subcat_id = $_POST["subcategories"];
        $productname = $_POST["pname"];
        $qty = $_POST["qty"];
        $oldprice = $_POST["oldprice"];
        $newprice = $_POST["newprice"];
        $date = $_POST["catdate"];
        $description = $_POST["pdesc"];

        $data = array("Cat_id"=>$cat_id,"subcat_id"=>$subcat_id,"image1"=>$path1,"image2"=>$path2,"image3"=>$path3,"productname"=>$productname,"qty"=>$qty,"oldprice"=>$oldprice,"newprice"=>$newprice,"date"=>$date,"description"=>$description);
        $insert = $this->insertdata('product',$data);

        if($insert)
        {
            echo "<script>
            
            alert('Data insert successfully')
            window.location='./AddProducts';
        
        </script>";
        }
        else
        {
            echo "<script>
            
            alert('Data Wrong')
            window.location='./AddProducts';
        
        </script>";
        }
    }
    //fetch update product data
    if(isset($_GET["edprodcut_id"]))
    {
     $edid=$_GET["edprodcut_id"];
     $edprod=$this->select_edit_data2('product','categories','subcategories','product_id',$edid);
    }

      //delete catagorey here

    if(isset($_GET["del_pro"]))
    {

    $id=$_GET["del_pro"];
    $chk=$this->del_cat('product',$id,'product_id');

   if($chk)

   {
    echo "<script>
    
      alert('Your Data Deleted Successfully')
      window.location='./manageproduct';
     
      </script>";

   }

 }
   //load categoryin view
   $st=$this->selalldata('categories');
  $subcat=$this->managesubcat('subcategories','categories');
  $product=$this->manageproduct('product','categories','subcategories');

  
   //insert subcategory data
   if(isset($_POST["addsubcat"]))
   {
       $catname = $_POST["subcatname"];
       $categories = $_POST["categories"];
       $catdate = $_POST["catdate"];

       $data = array("subcategories"=>$catname,"categories"=>$categories,"date"=>$catdate);
       $insert = $this->insertdata('subcategories',$data);

       if($insert)
       {
        echo "<script>
          
        alert('Data insert successfully')
        window.location='./addsubcategory';
    
       </script>";
       }
       else
       {
        echo "<script>
          
        alert('Data Wrong')
        window.location='./addsubcategory';
    
       </script>";
       }
   }

  //fetch employee data
  
  $employee=$this->selalldata('employee');
  if(isset($_REQUEST["del"]))
  {
    $id=$_GET["del"];
    $result=$this->select_data('employee',$id);

  }


  //delete customer profile here

  if(isset($_POST["delete"]))
  {

    $id=$_GET["del"];
    $chk=$this->del_data('employee',$id);

    if($chk)

    {
     echo "<script>
     
       alert('Your Data Deleted Successfully')
       window.location='./employee_detail';
      
       </script>";

    }

  }

  //delete catagorey here

  if(isset($_GET["del_id"]))
  {

    $id=$_GET["del_id"];
    $chk=$this->del_cat('subcategories',$id,'subcat_id');

    if($chk)

    {
     echo "<script>
     
       alert('Your Data Deleted Successfully')
       window.location='./managesubcategory';
      
       </script>";

    }

  }

   //delete catagorey here

 if(isset($_GET["del_cid"]))
 {

   $id=$_GET["del_cid"];
   $chk=$this->del_cat('categories',$id,'Cat_id');

   if($chk)

   {
    echo "<script>
    
      alert('Your Data Deleted Successfully')
      window.location='./managesubcategory';
     
      </script>";

   }

 }

  //fatch category data for edit

  if(isset($_GET["edcat_id"]))
  {
   $edid=$_GET["edcat_id"];
   $edcat=$this->select_edit_data('categories','Cat_id',$edid);

  }

  //update categeory

  if(isset($_POST["updcat"]))
  {
    $edid=$_GET["edcat_id"];
    $catname = $_POST["catname"];
    $catdate = $_POST["catdate"];

    $data = array("categories"=>$catname,"date"=>$catdate);
    $chk=$this->upddata('categories',$data,$where,'Cat_id',$edid);

    if($chk)

    {

        echo "<script>
     
        alert('Your Data Updated Successfully')
        window.location='./managecategory';
       
        </script>";
 
    }
   }

 //fatch subcategory data for edit

 if(isset($_GET["edsubcat_id"]))
 {
  $edid=$_GET["edsubcat_id"];
  $edsubcat=$this->select_edit_data1('subcategories','categories','subcat_id',$edid);

 }

   //update subcategeory

   if(isset($_POST["updsubcat"]))
   {
     $edid=$_GET["edsubcat_id"];
     $subcatname = $_POST["subcatname"];
     $categories = $_POST["categories"];
     $subcatdate = $_POST["subcatdate"];
     $data = array("subcategories"=>$subcatname,"Cat_id"=>$categories,"date"=>$subcatdate);
     $chk=$this->upddata('subcategories',$data,$where,'subcat_id',$edid);
 
     if($chk)
 
     {
 
         echo "<script>
      
         alert('Your Data Updated Successfully')
         window.location='./managesubcategory';
        
         </script>";
  
     }
    }

    //update product

   if(isset($_POST["updprod"]))
   {

    
    if(($_FILES["pimg1"]["size"]!=0) && ($_FILES["pimg2"]["size"]!=0) && ($_FILES["pimg3"]["size"]!=0))

    {

     $edid=$_GET["edprodcut_id"];
     //image upload codes
     $tmp_name1=$_FILES["pimg1"]["tmp_name"];
     $path1="uploads/".$_FILES["pimg1"]["name"];
     $type=$_FILES["pimg1"]["type"];
     $size=$_FILES["pimg1"]["size"]/1024;
     move_uploaded_file($tmp_name1,$path1);

     $tmp_name2=$_FILES["pimg2"]["tmp_name"];
     $path2="uploads/".$_FILES["pimg2"]["name"];
     $type=$_FILES["pimg2"]["type"];
     $size=$_FILES["pimg2"]["size"]/1024;
     move_uploaded_file($tmp_name2,$path2);

     $tmp_name3=$_FILES["pimg3"]["tmp_name"];
     $path3="uploads/".$_FILES["pimg3"]["name"];
     $type=$_FILES["pimg3"]["type"];
     $size=$_FILES["pimg3"]["size"]/1024;
     move_uploaded_file($tmp_name3,$path3);

     $cat_id = $_POST["categories"];
     $subcat_id = $_POST["subcategories"];
     $productname = $_POST["pname"];
     $qty = $_POST["qty"];
     $oldprice = $_POST["oldprice"];
     $newprice = $_POST["newprice"];
     $date = $_POST["catdate"];
     $description = $_POST["pdesc"];

     $data = array("Cat_id"=>$cat_id,"subcat_id"=>$subcat_id,"image1"=>$path1,"image2"=>$path2,"image3"=>$path3,"productname"=>$productname,"qty"=>$qty,"oldprice"=>$oldprice,"newprice"=>$newprice,"date"=>$date,"description"=>$description);
     $chk=$this->upddata('product',$data,$where,'product_id',$edid);
 
     if($chk)
 
     {
 
         echo "<script>
      
         window.location='./manageproduct';
        
         </script>";
  
     }
    }

    else
    {


        $pimg11 = $_POST["pimg11"];
        $pimg22 = $_POST["pimg22"];
        $pimg33 = $_POST["pimg33"];
        $cat_id = $_POST["categories"];
        $subcat_id = $_POST["subcategories"];
        $productname = $_POST["pname"];
        $qty = $_POST["qty"];
        $oldprice = $_POST["oldprice"];
        $newprice = $_POST["newprice"];
        $date = $_POST["catdate"];
        $description = $_POST["pdesc"];
   
        $data = array("Cat_id"=>$cat_id,"subcat_id"=>$subcat_id,"image1"=>$pimg11,"image2"=>$pimg22,"image3"=>$pimg33,"productname"=>$productname,"qty"=>$qty,"oldprice"=>$oldprice,"newprice"=>$newprice,"date"=>$date,"description"=>$description);
        
        $chk=$this->upddata('product',$data,$where,'product_id',$edid);
    
        if($chk)
    
        {
    
            echo "<script>
         
            window.location='./manageproduct';
           
            </script>";
     
        }
   
    }


}
   //total of customer in admin dashboarad

   $totcust=$this->totalitems('customer','custid');
   
   //total of contact in admin dashboarad

   $totcont=$this->totalitems('contact','contid');

   //manage all customer

   $shwcust=$this->managecustomer('customer','state','city');


   //manage all contacts

   $shwcont=$this->selalldata('contact');

   
   
   //logout as customer

   if(isset($_REQUEST["logout"]))

   {

    $logout=$this->logout();

    if($logout)
    {
        echo "<script>
            alert('You are Logout Successfuly')
            window.location='./';

       </script>";

    }
   }


    //lode your view
    if($_SERVER["PATH_INFO"])
    {
        switch($_SERVER["PATH_INFO"])
        {
            case '/':
                require_once("index.php");
                require_once("login.php");
            
                break;

                case '/home':
                    require_once("header.php");
                    require_once("index.php");
                    require_once("home.php");
                
                    break;


                    case '/ManageCustomer':
                        require_once("header.php");
                        require_once("index.php");
                        require_once("managecustomer.php");
                    
                        break;

                        
                    case '/ManageContact':
                        require_once("header.php");
                        require_once("index.php");
                        require_once("managecontact.php");
                    
                        break;

                    case '/AddCategory':
                        require_once("header.php");
                        require_once("index.php");
                        require_once("addcategory.php");
                    
                        break;

                    case '/addsubcategory':
                        require_once("header.php");
                        require_once("index.php");
                        require_once("addsubcategory.php");
                    
                        break;

                    case '/managecategory':
                        require_once("header.php");
                        require_once("index.php");
                        require_once("managecategory.php");
                    
                        break;
                    
                case '/managesubcategory':
                    require_once("header.php");
                    require_once("index.php");
                    require_once("managesubcategory.php");
                
                    break;
                  
                    case '/editcategory':
                        require_once("header.php");
                        require_once("index.php");
                        require_once("editcategory.php");
                    break;

                    case '/editsubcategory':
                        require_once("header.php");
                        require_once("index.php");
                        require_once("editsubcategory.php");
                    break;
    
                case '/AddProducts':
                    require_once("header.php");
                    require_once("index.php");
                    require_once("addproduct.php");
                    break;
                case '/manageproduct':
                    require_once("header.php");
                    require_once("index.php");
                    require_once("manageproduct.php");
                    break;
                case '/editproduct':
                    require_once("header.php");
                    require_once("index.php");
                    require_once("editproduct.php");
                    break;

                    case '/insert':
                        require_once("header.php");
                        require_once("index.php");
                        require_once("insert.php");

                        break;

                        case '/delete':
                            require_once("header.php");
                            require_once("index.php");
                            require_once("delete.php");
                            break;

                            case '/register':
                                
                                require_once("index.php");
                                require_once("register.php");
                                break;
                



                                  case '/EditEmployee':
                                    require_once("header.php");
                                require_once("index.php");
                                require_once("editemployee.php");

                                break;
                        default:
                                require_once("index.php");
                                require_once("404.php");
                            break;

            
        }
    }

 }

}


$obj=New Controller();
?>
