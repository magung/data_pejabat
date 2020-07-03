<?php 
  include "header.php";
  session_start();

  if(isset($_SESSION['nip'])){
    unset($_SESSION['nip']);
    session_unset();
    session_destroy();
  }
?>
   <form method="post" action="" class="ml-2 card p-5 mt-5">
     <!-- untuk memproses form -->
     <?php
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $nip            = $_POST['nip'];
            $password        = $_POST['password'];
            
            
                                            
            if($password=='' || $nip==''){
                echo "<div class='alert alert-warning fade show alert-dismissible mt-2'>
                        Form harus di isi semua !
                    </div>";	
            }else{
                $sql=mysqli_query($koneksi, "SELECT * FROM pejabat WHERE nip='".$nip."' AND password='".$password."'");
                $d=mysqli_fetch_array($sql);
                // var_dump($d);die();
                if(count($d) != 0){
                    session_start();
                    $_SESSION['nip'] = $nip;
                    header('location:index.php');
                }
            }
            

        }
    ?>
    <div class="form-group row" >
        <label class="col-md-2 col-form-label">Nip</label>
        <div class="input-group col-md-6">
            <input type="text" class="form-control" name="nip" placeholder="Masukan NIP">
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