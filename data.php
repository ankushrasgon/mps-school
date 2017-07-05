<?php

   if (isset($_POST['submit'])) {  
        echo " First Name : " . $_POST['firstname'] . "<br>";

        echo " Middle Name : " . $_POST['middlename'] . "<br>";

        echo "Last Name : " . $_POST['lastname'] . "<br>";

        echo "Email : " . $_POST['email'] . "<br>";
        
       
        echo " password : " . $_POST['password'] . "<br>";

        echo " Phone no : " . $_POST['phone_no'] . "<br>";

        echo " DOB : " . $_POST['Day'];

        echo "/". $_POST['Month'];

        echo "/". $_POST['year'] . "<br>";

        echo " Address : " . $_POST['address'] . "<br>";

        echo "  City : " . $_POST['city'] . "<br>";

        echo " Pincode : " . $_POST['pincode'] . "<br>";
       
       echo " Country : " . $_POST['country'] . "<br>";
      
   
       
       
       if(!empty($_POST["Qualification"]))
       {
           echo'<h4>you have selected following language</h4>';
           
           foreach($_POST["Qualification"] as $Qualification)
      
           {
               
               echo'' .$Qualification.'</p>';
           }
       
       
       }
       
       
       
       
   }
       
  else {

    echo "Your form is not submitted yet please fill the form and visit again";
  }
?>