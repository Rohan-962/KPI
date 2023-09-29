 <?php

    // Connection
    require 'connection.php';

    //authentication
    if (isset($_POST['login'])) {

        $username = $_POST['user'];
        $password = $_POST['pass'];

        // to prevent from mySQL injection
        $username = stripcslashes($username);
        $password = stripcslashes($password);
        $username = mysqli_real_escape_string($con, $username);
        $password = mysqli_real_escape_string($con, $password);

        $sql = "SELECT * from tbl_user_master where emp_name = '$username' and `password` = '$password';";
        $result = $con->query($sql);
        $result->fetch_all(MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);
        // echo $count;
        

        foreach ($result as $output) {
            $user_role = $output["role"];
            $user_id = $output["emp_id"];
        
        echo $user_type;
        // Redirect to Admin page if user is Admin
        if ($user_type == "Admin") {

            if ($count == 1) {
                session_start();
                echo "you are admin";
                $_session['login'] = true;
                $_session['user_name'] = $username;
                header("Location: Admin.php");
                echo "<script> Login successful </script>";
            } else {
                echo "<h1> Login failed. Invalid username or password.</h1>";
            }
        } 
        // Else Redirect to User 
        elseif ($user_role == "Requestor") {

            if ($count == 1) {

                session_start();
                $_COOKIE['login']  = true;
                $_COOKIE['user_name'] = $username;
                $_COOKIE['user_id'] = $user_id;
                header("Location: RequestorKPI.php");
            } else {
                echo "Record not found";
            }
        }
        elseif ($user_role == "Approver") {

            if ($count == 1) {

                session_start();
                $_COOKIE['login']  = true;
                $_COOKIE['user_name'] = $username;
                $_COOKIE['user_id'] = $user_id;
                header("Location: ApproverKPI.php");
            } else {
                echo "Record not found";
            }
        }
        else {
            // echo "Error : ". mysqli_error($con);
        }
    }

        
        // $con->close();
    }
    ?>
 <script>
     document.getElementbyId('user_id').innerHtml = "user.value";
 </script>

 <?php include 'header.php' ?>

 <br><br>

 <section>
     <div class="container mt-5 pt-5">
         <div class="row">
             <div class="col-12 col-sm-8 col-md-6 m-auto">
                 <div class="card" id="frm">
                     <div class="card-body">
                         <svg class="mx-auto" xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                             <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                             <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                         </svg>
                         <h1>Login</h1>
                         <form name="f1" action="Login.php" method="post">
                             <br>
                             <label for="user_name">User Name</label>
                             <input type="text" class="form-control my-2 py-2" id="user" name="user" placeholder="User Name">
                             <br>
                             <label for="user_password">Password</label>
                             <input type="password" class="form-control  my-2 py-2" id="pass" name="pass" placeholder="Password"><br>
                             <div class="text-center mt-3">
                                 <button type="submit" class="btn btn-primary" id="btn" name="login">Login</button>
                             </div>

                         </form>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>
 
 <script src="kpi.js"></script>

 </body>

 </html>