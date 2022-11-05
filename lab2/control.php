
<?php
//$dtls=file_get_contents('demo.json');
//$dtlsOK=json_encode($dtls);

$nameError="";
$passError="";
$genderError="";
$educationError="";
$fathernameError ="";
$mothernameError="";
$DOBError = "";
$emailError ="";
$usernameError="";
$myjsondata="";
$hasError=false;


function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }


if(isset($_REQUEST["submit"]))
{
    if(empty($_REQUEST["name"]))
    {
        $nameError= "Name is Required";
        $hasError=true;
    }

    else 
    {
        $nameError= "Your Name is: ".$_REQUEST["name"];
    

        $name = test_input($_POST["name"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
          $nameError = "Only letters and white space allowed";
        }
    }

    if(empty($_REQUEST["fathername"]))
    {
        $fathernameError= " father Name is Required";
        $hasError=true;

    }

    else 
    {
        $fathernameError= "father Name is: ".$_REQUEST["fathername"];
    }
    
    if(empty($_REQUEST["mothername"]))
    {
        $mothernameError= " mother Name is Required";
        $hasError=true;

    }

    else 
    {
        $mothernameError= "mother name is: ".$_REQUEST["mothername"];
    }


    if(isset($_REQUEST["gender"]))
    {
        $genderError= "Your  are: ".$_REQUEST["gender"];
       
    }

    else 
    {
        $genderError= "gender is Required";
        $hasError=true;

    }
    

    if(empty($_REQUEST["DOB"]))
    {
        $DOBError= " DOB is Required";
        // $hasError=true;

    }

    else 
    {
        $DOBError= "Your Name is: ".$_REQUEST["DOB"];
    }



    if(isset($_REQUEST["education"]))
    {
        $educationError= $_REQUEST["education"];
    }
    else
    {
        $educationError= "You must select your education status";
    }
    
    if(empty($_REQUEST["username"]))
    {
        $usernameError= " Username is Required";
        $hasError=true;

    }

    else 
    {
        $usernameError= "your User name is: ".$_REQUEST["username"];
    }
    

    if(strlen($_REQUEST["password"])<8)
    {
        $passError= "Password must have 8 char";
        $hasError=true;

    }
    else
    {
        $passError= "";



    }
    if($hasError==false){

        $existingdata = file_get_contents('data.json');
        $existingdatainphp = json_decode($existingdata);
    
        $myarray=array(
        "Name"=> $_REQUEST["name"],
        "Fathername"=> $_REQUEST["fathername"],
        "Mothername"=> $_REQUEST["mothername"],
        "Gender"=> $_REQUEST["gender"],
        //"SSC"=> $_REQUEST["ssc"],
      //  "HSC"=> $_REQUEST["hsc"],
      //  "BSC"=> $_REQUEST["bsc"],
     //   "MSC"=> $_REQUEST["msc"],
     //   "Address"=> $_REQUEST["address"],
       // "NID"=> $_REQUEST["nid"],
       // "Passport"=> $_REQUEST["passport"],
      //  "Email"=>$_REQUEST["email"],
      //  "Mobile number"=> $_REQUEST["mobile"],
        
    
    );


    $existingdatainphp[]=$myarray;
        $myjsondata = json_encode( $existingdatainphp, JSON_PRETTY_PRINT);
        file_put_contents("data.json", $myjsondata);
    
    }
}

?>


