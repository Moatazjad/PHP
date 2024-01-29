<?php


if ($_SERVER["REQUEST_METHOD"] == "POST")
 {

    $name = isset($_POST["name"]) ? $_POST["name"] : null;
    $lastname = isset($_POST["lastname"]) ? $_POST["lastname"] : null;
    $email = isset($_POST["email"]) ? $_POST["email"] : null;

    echo "The user data";
    echo "<br>";
    echo $name;
    echo "<br>";
    echo $lastname;
    echo "<br>";
    echo $email;

 if ($name !== null && $email !== null) {
   
    $formData = array(
        'name' => $name,
        'email' => $email,
    );

    $existingData = file_get_contents('form_data.json');
    $existingDataArray = json_decode($existingData, true);

    $existingDataArray[] = $formData;

    file_put_contents('form_data.json', json_encode($existingDataArray));
}

else {
   
    echo "Please fill in all fields.";
}
    
 }

 ?>