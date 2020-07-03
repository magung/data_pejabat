<?php 
  include "header.php";
  session_start();

  if(isset($_SESSION['username'])){
    header('location:index.php');
  }
?>
   <form method="post" action="" class="ml-2 card p-5 mt-5">
     <!-- untuk memproses form -->
     <?php
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $username       = md5($_POST['username']);
            $password       = md5($_POST['password']);
            // var_dump($username);die();
            
                                            
            if($password=='' || $username==''){
                echo "<div class='alert alert-warning fade show alert-dismissible mt-2'>
                        Form harus di isi semua !
                    </div>";	
            }else{
                $sql=mysqli_query($koneksi, "SELECT * FROM pejabat WHERE username='".$username."' AND password='".$password."'");
                $d=mysqli_fetch_array($sql);
                // var_dump($d);die();
                if($d){
                    echo '<script> window.setTimeout(alert("Suksess Login"), 3000);</script>';
                    $_SESSION['username'] = $username;
                    echo '<script> window.location.replace("index.php");</script>';
                    // header('location:index.php');
                }else{
                    echo "<div class='alert alert-warning fade show alert-dismissible mt-2'>
                        Username atau password salah !
                    </div>";	
                }
            }
            

        }
    ?>
    <div class="form-group row" >
        <label class="col-md-2 col-form-label">Username</label>
        <div class="input-group col-md-6">
            <input type="text" class="form-control" name="username" placeholder="Masukan Username">
        </div>
    </div>

    <div class="form-group row" >
        <label class="col-md-2 col-form-label">Password</label>
        <div class="input-group col-md-6">
            <input type="password" class="form-control" name="password" placeholder="Masukan Password">
        </div>
    </div>

    <div class="mb-2">
    <input type="submit" class="btn btn-primary btn-sm" value="Login" />
    </div>

</form>

</body>
</html>