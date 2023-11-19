

<?php
 $name = $_POST['Name'];
 $email = $_POST['email'];
 $cell = $_POST['cell'];
 $address = $_POST['address'];
 $massage = $_POST['massage'];
 echo $name;
 echo $email;
 echo $cell;
 echo $address;
 echo $massage;
 
 $link =mysqli_connect("localhost", "root","", "table_1");
 if($link == false){
 	die("Error!!!! Could". mysqli_connect_error());
 }
 $sql = "INSERT INTO contacttable(Name, Email, Phone, Address, Massage) VALUES('$name','$email','$cell','$address','$massage')
 if(mysql_query($link,$sql)){
 	echo "Records Added Successfully.";
 	}

 else{
 	echo "Records COULDNOT ADDED Successfully.". mysqli_error($link);
 }
 mysqli_close($link);

?>