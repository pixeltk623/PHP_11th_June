<?php
error_reporting(0);
require_once("Model/Model.php");
class Controller extends Model
{
 public function __construct()

 {

   parent:: __construct();
   
   //load state in view
   $st=$this->selalldata('state');

   //load city in register view
   $ct=$this->selalldata('city');

   //insert data in customer table

   if(isset($_POST["sub"]))

   {

    //image upload codes

    $tmp_name=$_FILES["img"]["tmp_name"];
    $path="uploads/".$_FILES["img"]["name"];
    $type=$_FILES["img"]["type"];
    $size=$_FILES["img"]["size"]/1024;
    

    $fname=$_POST["fname"];
    $lname=$_POST["lname"];
    $em=$_POST["em"];
    $mob=$_POST["mob"];
    $h=implode(",",$_POST["chk"]);
    $g=$_POST["gender"];
    $pass=base64_encode($_POST["pass"]);
    $cpass=base64_encode($_POST["cpass"]);
    $pin=$_POST["pin"];
    $add=$_POST["address"];
    $stt=$_POST["state"];
    $ctt=$_POST["city"];

    if($pass==$cpass)
    {

    move_uploaded_file($tmp_name,$path);     

   $data=array("photo"=>$path,"firstname"=>$fname,"lastname"=>$lname,"email"=>$em,"mobile"=>$mob,"hobby"=>$h,"gender"=>$g,"password"=>$pass,"pincode"=>$pin,"address"=>$add,"sid"=>$stt,"ctid"=>$ctt);

   $chk=$this->insalldata('customer',$data);

   if($chk)

   {
    echo "<script>
    
    alert('Thanks For Create Your Account')
    window.location='Login';
    
    </script>";

   }

}
else
{

    echo "<script>
    
    alert('Your Password and Confirmed Password does not matched try again')
    window.location='Register';
    
    </script>";
    }
    
}


//load category products 


if(isset($_GET["subcattid"]))

{
   
    $subcatid=$_GET["subcattid"];
    $shwprod=$this->selallcat('product',$subcatid); 
 


}



   //contact insert data

   if(isset($_POST["cont"]))

   {


    $nm=$_POST["name"];
    $phone=$_POST["phone"];
    $em=$_POST["em"];
    $msg=$_POST["msg"];   
    $data=array("name"=>$nm,"phone"=>$phone,"email"=>$em,"message"=>$msg);

    $chk=$this->insalldata('contact',$data);

    if($chk)

    {


        echo "<script>
    
        alert('Thanks For contact with Us Our admin will contact with you soon!')
        window.location='Contact';
        
        </script>";

    }
   }


   //login as customer

   if(isset($_POST["log"]))
   {
      
    $em=$_POST["em"];
    $pass=base64_encode($_POST["pass"]);
    $chk=$this->loguser('customer',$em,$pass);
 
    if($chk)
    {
        echo "<script>
          
            alert('You are Logged in Successfuly')
            window.location='./';
        
           </script>";
        
    }

    else
    {
        
        echo "<script>
          
            alert('Your email and password are Incorect try again')
            window.location='Login';
        
           </script>";
    }


   }


   //logout as customer

   if(isset($_REQUEST["lg"]))

   {

    $lg=$this->logout();

    if($lg)
    {
     echo "<script>
     
     alert('You are Logout Successfuly')
     window.location='./';
     
     </script>";

    }
   }


   //forget password

   if(isset($_POST["frg"]))
   {

    $em=$_POST["em"];
    $chk=$this->frgpassword('customer',$em);
     
    if($chk)

    {

    echo "<script>
    alert('Your Password are :'+'$chk')
    window.location='Login';    
    
    </script>";

    }

    else

    {
        echo "<script>
        alert('Your Email does not Exist Please Create Account with us!')
        window.location='ForgetPassword';    
        </script>";
    }
    


   }


   //display customer profile here

   if(isset($_SESSION["custid"]))
   {
       $custid=$_SESSION["custid"];
       $prof=$this->sellprofile('customer','state','city','custid',$custid);


   }

   //delete customer profile here

    if(isset($_GET["del_id"]))
    {

      $id=$_GET["del_id"];
      $id=array("custid"=>$id);
      $chk=$this->del_data($c,'customer',$id);

      if($chk)

      {

      unset($_SESSION["custid"]);
      unset($_SESSION["em"]);  
      session_destroy();
      
       echo "<script>
       
         alert('Your Data Deleted Successfully')
         window.location='./';
        
         </script>";



      }




    }


    //change pasword of customer


    if(isset($_POST["chng"]))
    {
     
        $custid=$_SESSION["custid"];

        $opass=base64_encode($_POST["opass"]);
        
        $npass=base64_encode($_POST["npass"]);
        
        $cpass=base64_encode($_POST["cpass"]);
        
        $chk=$this->chngpassword('customer',$opass,$npass,$cpass,$custid);

        if($chk)

        {

            echo "<script>
            
            alert('Your Password successfully changed')
            window.location='ManageProfile';

            </script>";

        }

        else

        {

            echo "<script>
            
            alert('opass, npass and confirm password does not matched try again')
            window.location='ChangePassword';

            </script>";


        }

    }


    //load subcategory in menu

    $subcat=$this->selalldata('subcategories');

    //display all products in customer panel

    $prod=$this->selalldata('product');

    //products details

    if(isset($_GET["pid"]))

    {

        $pid=base64_decode($_GET["pid"]);
        $proddetails=$this->sellproductsdetails('product','product_id',$pid);  

    }


    //add product in cart



    if(isset($_POST["addtocart"]))

    {
 
     $pid=$_POST["pid"];
     $custid=$_SESSION["custid"];
     $pname=$_POST["pname"];
     $qty=$_POST["qty"];
     $price=$_POST["price"];
     $subtot=$price*$qty;
     
    $data=array("product_id"=>$pid,"custid"=>$custid,"pname"=>$pname,"qty"=>$qty,"price"=>$price,"subtotal"=>$subtot);

 
    $chk=$this->insalldata('cart',$data);
 
    if($chk)
 
    {
     echo "<script>
     
     alert('Product Added in Cart Successfully')
     window.location='ViewCart';
     
     </script>";
 
    }
 
 }
    


 //count cart added by customer

 $custid=$_SESSION["custid"];
 $shwtotcart=$this->totalitems('cart','custid',$custid);


 //show cart here
 $custid=$_SESSION["custid"];
 $shwcart=$this->shwcart('cart','product','custid',$custid);

 
 //subtotals of products
 $custid=$_SESSION["custid"];
 $subtotal=$this->sumproducts('cart','subtotal','custid',$custid);


 //load your view 

   if($_SERVER["PATH_INFO"])

   {
     
    switch($_SERVER["PATH_INFO"])
     {
        case '/':
        require_once("inc/header.php");    
        require_once("inc/menu.php");
        require_once("index.php");
        require_once("inc/slider.php");
        require_once("content.php");
        require_once("inc/footer.php");
            break;
        
        case '/Contact':
        require_once("inc/header.php");    
        require_once("inc/menu.php");
        require_once("index.php");
        require_once("contact.php");
        require_once("inc/footer.php");
            break;

            
        case '/MensProducts':
        require_once("inc/header.php");    
        require_once("inc/menu.php");
        require_once("index.php");
        require_once("mensproducts.php");
        require_once("inc/footer.php");
            break;


            
        case '/WomensProducts':
        require_once("inc/header.php");    
        require_once("inc/menu.php");
        require_once("index.php");
        require_once("womensproducts.php");
        require_once("inc/footer.php");
            break;


            
        case '/KidsProducts':
        require_once("inc/header.php");    
        require_once("inc/menu.php");
        require_once("index.php");
        require_once("kidsproducts.php");
        require_once("inc/footer.php");
            break;



            
        case '/ProductsDetails':
        require_once("inc/header.php");    
        require_once("inc/menu.php");
        require_once("index.php");
        require_once("productsdetails.php");
        require_once("inc/footer.php");
            break;
        

            
            
        case '/ViewCart':
        require_once("inc/header.php");    
        require_once("inc/menu.php");
        require_once("index.php");
        require_once("viewcart.php");
        require_once("inc/footer.php");
            break;



            
            
        case '/Checkout':
        require_once("inc/header.php");    
        require_once("inc/menu.php");
        require_once("index.php");
        require_once("checkout.php");
        require_once("inc/footer.php");
            break;



            
        case '/PaymentSuccess':
            require_once("inc/header.php");    
            // require_once("inc/menu.php");
            require_once("index.php");
            require_once("paymentsuccess.php");
            // require_once("inc/footer.php");
                break;



                
            
        case '/PaymentFailure':
            require_once("inc/header.php");    
           
            require_once("index.php");
            require_once("paymentfailure.php");
            // require_once("inc/footer.php");
                break;



                
            
        case '/PrintInvoice':
            
            require_once("index.php");
            require_once("invoice.php");
            // require_once("inc/footer.php");
                break;
        
        case '/Login':
        require_once("inc/header.php");    
        
        require_once("index.php");
        require_once("login.php");
        // require_once("inc/footer.php");
            break;



                 
        case '/Register':
        require_once("inc/header.php");    
        require_once("inc/menu.php");
        require_once("index.php");
        require_once("register.php");
        require_once("inc/footer.php");
            break;
        

        case '/ForgetPassword':
        require_once("inc/header.php");    
        require_once("inc/menu.php");
        require_once("index.php");
        require_once("forgetpassword.php");
        require_once("inc/footer.php");
            break;


            
        case '/ManageProfile':
        require_once("inc/header.php");    
        require_once("inc/menu.php");
        require_once("index.php");
        require_once("myprofile.php");
        require_once("inc/footer.php");
            break;


            
        case '/ChangePassword':
        require_once("inc/header.php");    
        require_once("inc/menu.php");
        require_once("index.php");
        require_once("changepassword.php");
        require_once("inc/footer.php");
            break;
        
        default:
            
        require_once("inc/header.php");    
        require_once("inc/menu.php");
        require_once("404.php");    
        require_once("inc/footer.php");

            break;
    }
   




   }




 }




}


$obj=new Controller();




?>