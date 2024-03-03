<?php session_start(); ?>
<!DOCTYPE html>  
 <html>  
      <head>  
           <title>Student Management System</title> 
           <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
      </head>  
        <body>  
           <br />  
           <div class="col-md-3"></div>
                <div class="col-md-6 well">
                    <h3 class="text-primary">STUDENT MANAGEMENT SYSTEM</h3>
                    <hr style="border-top:1px dotted #ccc;"/>
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <?php if(isset($_SESSION['message'])): ?>
                            <div class="alert alert-<?php echo $_SESSION['message']['alert'] ?> msg"><?php echo $_SESSION['message']['text'] ?></div>
                        <script>
                            (function() {
                                // removing the message 3 seconds after the page load
                                setTimeout(function(){
                                    document.querySelector('.msg').remove();
                                },3000)
                            })();
                        </script>
                        <?php 
                            endif;
                            // clearing the message
                            unset($_SESSION['message']);
                        ?>
                    <form action="authenticate.php" method="POST">	
                        <h4 class="text-success">Login here...</h4>
                        <hr style="border-top:1px groovy #000;">
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" class="form-control" name="username" />
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="password" />
                        </div>
                        <br />
                        <div class="form-group">
                            <button class="btn btn-primary form-control" name="login">Login</button>
                        </div>
                        <a href="register.php">Registration</a>
                    </form>
                </div>
	        </div> 
           <br />  
        </body>  
 </html>  