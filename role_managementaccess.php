
<?php
include 'app_manage/header.php';
?>
<body>
    <div class="container-fluid shadow indexreg text-center ">
    </div>
<div class="container-fluid">
    <div class="row">
        <?php
            include 'app_manage/menu.php';
        ?>
        <div class="col-md-10 text-center bodyarea relative">
            <div class="container-fluid">
                <div class="row mt-5">
                    <div class="col-md-3"></div>
                    <div class="col-md-5 reg ">
                    <div class="h3 text-center   mt-2">Access For Role Management</div>
                      
                      <form method="post" action="role_management_process.php">
                          <div class="row shadow">
                              <div class="col-md-3  ">
                                  <label for="email">Email:</label>
                              </div>
                              <div class="col-md-9  ">
                              <input type="email" class="form-control" name="email" required><br>
                              </div>
      
                              <div class="col-md-3  ">
                                  <label for="email">Password:</label>
                              </div>
                              <div class="col-md-9  ">
                              <input type="password" class="form-control" name="password" required><br>
                              </div>
                          </div>
                          <div class="col-md-12 text-center mb-4"><input type="submit" value="Login"></div>
                          <div class="userguide    ">
                              Login info : <br/>
                              User name : admin Email:admin@com password: 12345<br/>
                              User name : manager Email:manager@com password : 12345<br/>
                              User name : user Email:user@com password : 12345
                          </div>
                          
                      </form>
                    </div>
                    <div class="col-md-4"></div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
include 'app_manage/footer.php';
?>