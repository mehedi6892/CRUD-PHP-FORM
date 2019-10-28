<?php include "db.php";?>
<?php include "header.php"; ?>
       <?php 
        //To read all the information of an user
        if(isset ($_GET['update'])) {
            $user_id = $_GET['update'];
            $query = "SELECT * FROM users WHERE user_id = $user_id";
            $select_user_id = mysqli_query ($conn, $query);
        }

        while ($row = mysqli_fetch_assoc($select_user_id)) {

            $user_id     = $row['user_id'];
            $user_name   = $row['user_name'];
            $password    = $row['password'];
            $user_email  = $row['user_email'];
            $user_phone  = $row['user_phone'];
            $user_address= $row['user_address'];

            ?>
            <section class="login-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                       <div class="login-box">
                           <h3>Update User Information</h3>
                           <form action="" method="POST" >

                               <!-- Username Field-->
                               <label>Username</label>
                               <div class="form-group">
                                    <input type="text" name="username" class="form-control" value ="<?php echo $user_name;?>">
                               </div>

                               <!-- Password Field-->
                               <label >Password</label>
                               <div class="form-group">
                                    <input type="password" name="password" class="form-control" value ="<?php echo  $password;?>">
                               </div>

                                 <!-- Email Field-->
                                 <label >Email Address</label>
                               <div class="form-group">
                                    <input type="email" name="email" class="form-control"value ="<?php echo $user_email;?>">
                               </div>

                                <!-- Phone Number Field-->
                                <label >Phone Number</label>
                               <div class="form-group">
                                    <input type="text" name="phone" class="form-control"value ="<?php echo $user_phone;?>">
                               </div>

                                <!-- Address Field-->
                                <label >User Address</label>
                               <div class="form-group">
                                    <input type="text" name="address" class="form-control"value ="<?php echo $user_address;?>">
                               </div>


                               <div class="form-group">
                                   <input type="submit" name="update" class="btn btn-primary" value = "Update User Info">
                               </div>
                           </form>
                       </div>
                       
                    </div>
                </div>
            </div>
        </section>

        <?php
        }
       
       ?>
       
       <?php 
            //To update the user info into the user database.

            if (isset($_POST['update']) ){
               
                $username = $_POST['username'];
                $password = $_POST['password'];
                $email    = $_POST['email'];
                $phone    = $_POST['phone'];
                $address  = $_POST['address'];

                //Encrypted Password
                $hassedPass = sha1($password);

                $query = "UPDATE users SET user_name = '$username', password ='$hassedPass', user_email='$email', user_phone='$phone',user_address='$address' WHERE user_id = '$user_id' ";

                $update_query = mysqli_query($conn, $query);

                if (!$update_query){
                    die("Query Failed" . mysqli_error($conn));
                }
                else {
                    header("Location: all-users.php");
                }
            }
       
       ?>
    
<?php include "footer.php"; ?>