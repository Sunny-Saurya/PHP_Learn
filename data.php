    <!-- // handiling form  -->

    <?php

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        


        echo "$name:";
        echo '<br>';
        echo "$email:";
        echo '<br>';
        echo "$password:";
        echo '<br>';
        echo '<br>';
        echo "Data submitted successfully";
    }   
    else{
        echo "Data not found";
    }

?>