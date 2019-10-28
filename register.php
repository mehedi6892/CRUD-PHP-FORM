<?php include "db.php";?>
<?php include "header.php"; ?>
        <?php
            $message ="";
            if (isset($_POST['register'])) {
                $username = $_POST['username'];
                $password = $_POST['password'];
                $email    = $_POST['email'];
                $phone    = $_POST['phone'];
                $address  = $_POST['address'];

                //Encrypted Password
                $hassedPass = sha1($password);

                $query = "INSERT INTO users (user_name,password, user_email, user_phone,      	user_address) VALUES ('$username', '$hassedPass', ' $email', '$phone','$address')";
                $create_new_user = mysqli_query($conn, $query);

                if (!$create_new_user){
                    die("Query Failed!" . mysqli_error($conn));
                }
               
                else{
                    $message = '<div class="alert alert-success" >Congratulations! New User Register Successfully.</div>';
                }
            }   
        ?>    

        <section class="login-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                       <div class="login-box">
                           <h3>Register New User</h3>
                           <form action="" method="POST">

                               <!-- Username Field-->
                               <label>Username</label>
                               <div class="form-group">
                                    <input type="text" name="username" class="form-control">
                               </div>

                               <!-- Password Field-->
                               <label >Password</label>
                               <div class="form-group">
                                    <input type="password" name="password" class="form-control">
                               </div>

                                 <!-- Email Field-->
                                 <label >Email Address</label>
                               <div class="form-group">
                                    <input type="email" name="email" class="form-control">
                               </div>

                                <!-- Phone Number Field-->
                                <label >Phone Number</label>
                               <div class="form-group">
                                    <input type="text" name="phone" class="form-control">
                               </div>

                                <!-- Address Field-->
                                <label >User Address</label>
                               <div class="form-group">
                                    <input type="text" name="address" class="form-control">
                               </div>


                               <div class="form-group">
                                   <input type="submit" name="register" class="btn btn-primary">
                               </div>

                           </form>
                       </div>
                        <?php
                            echo $message;
                        ?>
                    </div>
                </div>
            </div>
        </section>
        <?php include "footer.php"; ?>
    