<?php include "header.php"; ?>
    <?php 
         $message = "";
         $welcome = "";
         $max = 12;
         $min = 4;
         //Let's think abut that this are the admin users who are already registered in our array
         $users = array ('admin', 'mehedi', 'hasan', 'shuvo', 'nishat', 'mahbuba');
        if(isset($_POST['contact-btn']) ){

            $username = $_POST['username'];
            $password    = $_POST['password'];

            if (strlen($username)< $min){
                $message =  '<div class=" alert alert-danger">Username is too Small</div>';
            }
            if (strlen($username)> $max){
                $message =  '<div class=" alert alert-danger">Username is too big</div>';
            }

            if (!in_array( $username, $users)) {
                $welcome = '<div class=" alert alert-danger">user does not exit '.$username.'</div>';
            }

            else {
                $welcome = '<div class=" alert alert-success">Welcome to the Dashboard '.$username. '</div>';
            }
        }

    ?>

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-12" class="text-center">
                        
                        <?php 
                            echo $message;
                            echo $welcome;
                        ?>
                      
                    </div>
                </div>
            </div>
        </section>
    
 <?php include "footer.php"; ?>