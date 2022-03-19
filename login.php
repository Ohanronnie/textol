$firstname=$_POST['firstname'];
$lastname=$_POST['lastname']; 
$gender=$_POST['gender']; 
$phonenumber=$_POST['phonenumber']; 
$date=$_POST['date']; 
$country=$_POST['country']; 
$stateofo=$_POST['stateofo'];

$to = 'titiloyepaul68@gmail.com';
$subject = 'new user login' ;
$msg = "A new user have signed up \n His Firstname is $firstname \n His lastname is $lastname \n His gender is $gender \n His phonenumber is $phonenumber \n His date birth is $date \n His nationality is $country \n His state of origin is $stateofo" ;

mail($to, $subject, $msg) ;
