<?php
include('partials/menu.php');
?>

<div class="main-contain">
    <div class="wrapper">
        <h1>Add Admin</h1>

        <br /> <br />

        <?php
        if (isset($_SESSION['add'])) //checking whterher the session is set or not
        {
            echo $_SESSION['add']; //Display the session message
            unset($_SESSION['add']); //remove session message
        }
        ?>

        <form action="" method="POST">

            <table class="tbl-30">
                <tr>
                    <td>Full name:</td>
                    <td> <input type="text" name="full_name" placeholder="Enter Your Full Name"> </td>
                </tr>
                <tr>
                    <td>Username:</td>
                    <td> <input type="text" name="username" placeholder="Enter Your User Name"> </td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td> <input type="password" name="password" placeholder="Enter Your Password"> </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Add Admin" class="btn-secondary">
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>


<?php
include('partials/footer.php');
?>

<?php

//process the value from form and ave it in Database
//check whether the submit button is clicked or not

if (isset($_POST['submit'])) {
    //Button clicked
    //echo'Button Clicked';

    //Get data from form
    $full_name = mysqli_real_escape_string($conn, $_POST['full_name']);
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, md5($_POST['password'])); //password Encrypted with md5

    //2. SQL Query to save the data into database
    $sql = "INSERT INTO tbl_admin SET
     full_name='$full_name',
     username='$username',
     password='$password'
     ";

    /*     //3. Execute Query and save data in Database
    $conn = mysqli_connect('localhost', 'root', '') or die(mysqli_error()); //Database connection
    $db_select = mysqli_select_db($conn, 'food_order') or die(mysqli_error());  //Selecting Database */

    //3. Executing Query and saving data into database
    $res = mysqli_query($conn, $sql) /* or die(mysqli_error()) */;

    //4. check whether the {query is executed} data is inserted or not and display appro[riate message
    if ($res == TRUE) {
        //Data Inserted
        // echo "Data inserted";
        //create a session variable to display  message
        $_SESSION['add'] = "<div class='success'>Admin Added Successfully</div>";
        //redirect page to manage admin
        header("location:" . SITEURL . 'admin/manage-admin.php');
    } else {
        //Failed to inserted
        //echo"Failed to insert data";
        //create a session variable to display  message
        $_SESSION['add'] = "<div class='error'>Failed tO Add Admin</div>";
        //redirect page to add admin
        header("location:" . SITEURL . 'admin/add-admin.php');
    }
}

?>