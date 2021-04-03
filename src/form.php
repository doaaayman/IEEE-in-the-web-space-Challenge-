<?php
    $Name = $_POST['Name']
    $Email = $_POST['Email']
    $How_satisfied_are_you_with_our_Website_and_solutions = $_POST['How_satisfied_are_you_with_our_Website_and_solutions']
    $Do_you_have_suggestion_to_improve_our_Website =  $_POST['Do_you_have_suggestion_to_improve_our_Website']
    //Database connection
    $conn = new mysqli("localhost","root","test");
    if($conn->connect _error){
        die('connection Failed' .$conn->connect_error);
    }else{
        $stmt = %conn->prepare("insert into registration(Name,Email,How_satisfied_are_you_with_our_Website_and_solutions,Do_you_have_suggestion_to_improve_our_Website")
    }values(?,?,?,?);
$stmt->bind_param("sssssi",$How_satisfied_are_you_with_our_Website_and_solutions,$Do_you_have_suggestion_to_improve_our_Website);
    $stmt->execute();
    echo "Form Completed"
   $stmt->close();
   $comm->close();
    }

?>