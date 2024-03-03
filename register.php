<!DOCTYPE html>  
 <html>  
      <head>  
           <title>Student Management System</title> 
           <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
      </head>  
      <body>  
          <br />  
          <div class="container" style="width:500px;">   
               <h3>Register New User</h3><br />  
               <form action="create.php" method="POST">	
                    <h4 class="text-success">Register here...</h4>
                    <hr style="border-top:1px groovy #000;">
                    <div class="form-group">
                         <label>Firstname</label>
                         <input type="text" class="form-control" name="firstname" />
                    </div>
                    <br />
                    <div class="form-group">
                         <label>Lastname</label>
                         <input type="text" class="form-control" name="lastname" />
                    </div>
                    <br />
                    <div class="form-group">
                         <label>Username</label>
                         <input type="text" class="form-control" name="username" />
                    </div>
                    <br />
                    <div class="form-group">
                         <label>Password</label>
                         <input type="password" class="form-control" name="password" />
                    </div>
                    <br />
                    <div class="form-group">
                         <button class="btn btn-primary form-control" name="register">Register</button>
                    </div>
                    <a href="login.php">Login</a>
               </form>
          </div>
     </body>
</htm>