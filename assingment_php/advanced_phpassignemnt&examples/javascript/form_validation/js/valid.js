function valid()

{
   if(document.frm.em.value=="")
   {
    
    alert('Please Enter Your Email Address')
    document.frm.em.focus()
    return false;

   }

   var e=/^\s*[\w\-\+_]+(\.[\w\-\+_]+)*\@[\w\-\+_]+\.[\w\-\+_]+(\.[\w\-\+_]+)*\s*$/;

   if(!e.test(document.frm.em.value))

   {

    alert('Please Enter Your valid email address')
    document.frm.em.focus()
    return false;


   }


   if(document.frm.pass.value=="")

   {
     
    alert('Please Enter your password')
    document.frm.pass.focus();
    return false; 


   }



}