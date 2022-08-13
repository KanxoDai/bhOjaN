<?php
include('partials/menu.php');
?>

<div class="main-contain">
    <div class="wrapper">
        <h1> Update User</h1>

        <br /> <br />

        <?php

        //1. get the id of selected admin
        $id = $_GET['id'];


        //2.create sql query to get details
        $sql = "SELECT * FROM tbl_user WHERE id=$id";

        //execute the query
        $res = mysqli_query($conn, $sql);

        //check whether the query is exexuted or not
        if ($res == TRUE) {
            //check whether the data is available or not
            $count = mysqli_num_rows($res);
            //check whether we have user data or not
            if ($count == 1) {
                //get the detail
                //echo "User Available";
                $row = mysqli_fetch_assoc($res);
                $username = $row['username'];
                $fullname = $row['fullname'];
                $gmail = $row['email'];
                $phone = $row['phone'];
                $password = $row['password'];
            } else {
                //redirect to manage admin page
                header('locaton:' . SITEURL . 'admin/manage-user.php');
            }
        }

        ?>

        <form action="" method="POST">

            <table class="tbl-30">
                <tr>
                    <td>Username:</td>
                    <td> <input type="text" name="username" value="<?php echo $username; ?>"> </td>
                </tr>
                <tr>
                    <td>Fullname:</td>
                    <td> <input type="text" name="fullname" value="<?php echo $fullname; ?>"> </td>
                </tr>
                <tr>
                    <td>Gmail:</td>
                    <td> <input type="text" name="email" value="<?php echo $gmail; ?>"> </td>
                </tr>
                <tr>
                    <td>Phone:</td>
                    <td> <input type="text" name="phone" value="<?php echo $phone; ?>"> </td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td> <input type="text" name="password" value="<?php echo $password; ?>"> </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <input type="submit" name="submit" value="Update User" class="btn-secondary">
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>

<?php

//check whether the subbmit button is clicked or nit
if (isset($_POST['submit'])) {
    // echo "Button Clicked";
    //Get all the values from form to update
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $fullname = mysqli_real_escape_string($conn, $_POST['fullname']);
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $gmail = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    //create a sql query to update admin
    $sql = " UPDATE tbl_user SET fullname ='$fullname', username ='$username', email='$gmail', phone='$phone', password='$password'
    WHERE id= '$id' ";
    //create a sql query to update admin
    $res = mysqli_query($conn, $sql);

    //check whether the query executed successfully or not
    if ($res == TRUE) {
        //query executed and admin updated
        $_SESSION['update'] = "<div class='success'>User Updated Successfully </div> ";
        //redirect to manage admin page
        header('location:' . SITEURL . 'admin/manage-user.php');
    } else {
        //failed to create admin
        //query executed and admin updated
        $_SESSION['update'] = "<div class='error'>Failed To Update User </div> ";
        //redirect to manage admin page
        header('location:' . SITEURL . 'admin/manage-user.php');
    }
}

?>

<?php
include('partials/footer.php');
?>