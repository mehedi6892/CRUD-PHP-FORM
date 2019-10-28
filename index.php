<?php include "db.php";?>
<?php include "header.php"; ?>

        <?php    
                if (isset($_POST['login'])) {
                $username = $_POST['username'];
                $password = $_POST['password'];
                
              

                }

        ?>
        <section class="login-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                       <div class="login-box">
                           <h3>Admin Login</h3>
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

                               <div class="form-group">
                                   <input type="submit" name="login" class="btn btn-primary">
                               </div>

                           </form>
                       </div>
                      
                    </div>
                </div>
            </div>
        </section>

        <?php include "footer.php" ?>
    
    