<?php
# -- this is insert.php --

/**
 * The follwing Condition checks whether a client requested the insert.php through
 * the POST method with the u_name, u_age, and u_email
 * 
 * u_name, u_age, and u_email - You can also see these in the HTML Form (index.html) -
 * These are keys to access the actual data provided by a user.
 */
if (isset($_POST['Full_name']) && isset($_POST['Email']) && isset($_POST['Telephone_Number']) && isset($_POST['Message'])) :

    # Database Connection my_test_db is the Database name.
    $host_name = 'db5015391732.hosting-data.io';
    $database = 'dbs12607811';
    $user_name = 'dbu899522';
    $password = 'Cholinho2017!';
  
    $link = new mysqli($host_name, $user_name, $password, $database);
  
    if ($link->connect_error) {
      die('<p>La connexion au serveur MySQL a échoué: '. $link->connect_error .'</p>');
    } else {
      echo '<p>Connexion au serveur MySQL établie avec succès.</p>';
    }

    # Assigning user data to variables for easy access later.
    $name = $_POST['Full_name'];
    $email = $_POST['Email'];
    $telnumber = $_POST['Telephone_Number'];
    $message = $_POST['Message'];

    # SQL query for Inserting the Form Data into the users table.
    $sql = "INSERT INTO `Contacts` (`name`, `email`, `telephone_number`, `message`) VALUES ('$name', '$email', '$telnumber', '$message')";

    # Executing the Above SQL query.
    $query = mysqli_query($link, $sql);

    # Checks that the query executed successfully
    if ($query) {
        echo 'New data inserted successfully. <a href="./FashionUp.html">Go back</a>';
    } else {
        echo "Failed to insert new data.";
    }
    exit;
endif;

/**
 * This message occurs when a user tries to access Insert.php without -
 * the required method and credentials.
 */
echo "404 Page Not Found. <div class=\"main-container\" style=\"text-align: center; padding-top:30px;'\">
<a href=\"./fashionup.html\">Go Home</a>
</div>";