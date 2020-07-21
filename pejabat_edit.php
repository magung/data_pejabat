<?php 
  include "header.php";
  include "upload.php";
  session_start();
  $username = $_SESSION['username'];
?>



    <form method="post" action="" class="ml-2 card p-5 mt-5" enctype="multipart/form-data">
        
        <!-- edit data -->
        <?php
            $sqlEdit=mysqli_query($koneksi, "SELECT * FROM pejabat WHERE id='$_GET[id]'");
            $e=mysqli_fetch_array($sqlEdit);
        ?>
        <!-- untuk memproses edit -->
        <?php
            if($_SERVER['REQUEST_METHOD']=='POST'){
                $u = new Upload();
                $hasil = $u->uploadFile($_FILES["profile"]);

                $id             = $_POST['id'];
                $nama           = $_POST['nama'];
                $nip            = $_POST['nip'];
                $jabatan        = $_POST['jabatan'];
                $status         = $_POST['status'];
                if ($hasil["status"] == "0"){
                    die ($hasil["info"]. "<p><a href='#' onClick='window.history.back()'>Coba lagi</a></p>");
                }else{
                    //simpan data edit
                    $update = mysqli_query($koneksi, "UPDATE pejabat SET
                                                        nama='$nama',
                                                        nip='$nip',
                                                        jabatan='$jabatan',
                                                        status='$status',
                                                        profile='$hasil[info]'
                                                        WHERE id='$id'");
                                                        
                    if($update){
                        header('location:index.php');
                    }
                }
                
                
            }
        ?>

        <?php if($username == $e["username"]){ ?>
        <h5 class="text-gray-900 mb-4">Edit Pejabat</h5>
        <?php }else{?>
        <h5 class="text-gray-900 mb-4">View Pejabat</h5>
        <?php }?>

        <input type="hidden" class="form-control" name="id" value="<?= $e['id'] ?>">
            
        <div class="form-group row">
            <label class="col-md-2 col-form-label">Nama</label>
            <div class="input-group col-md-6">
                <input type="text" class="form-control" name="nama" value="<?= $e['nama'] ?>" <?php echo $username == $e["username"] ? "" : "readonly"; ?>>
            </div>
        </div>

        
        <div class="form-group row">
            <label class="col-md-2 col-form-label">Nip</label>
            <div class="input-group col-md-6">
                <input type="text" class="form-control" name="nip" value="<?= $e['nip'] ?>" <?php echo $username == $e["username"] ? "" : "readonly"; ?>>
            </div>
        </div>

        
        <div class="form-group row">
            <label class="col-md-2 col-form-label">Jabatan</label>
            <div class="input-group col-md-6">
                <input type="text" class="form-control" name="jabatan" value="<?= $e['jabatan'] ?>" <?php echo $username == $e["username"] ? "" : "readonly"; ?>>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-md-2 col-form-label">Status</label>
            <div class="input-group col-md-6">
                <?php 
                    if($username == $e["username"]){
                ?>
                <select name="status" id="" class="form-control">
                    <option value="Aktif" <?= $e['status'] == "Aktif" ? "selected" : "" ?>>Aktif</option>
                    <option value="Tidak Aktif" <?= $e['status'] !== "Aktif" ? "selected" : "" ?>>Tidak Aktif</option>  
                </select>
                    <?php }else{?>
                        <input type="text" class="form-control"  value="<?= $e['status'] ?>" readonly>
                    <?php }?>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-md-2 col-form-label">Photo Profile</label>
            <div class="input-group col-md-6">
                <input type="file" class="form-control" name="profile" id="uploadImg" <?php echo $username == $e["username"] ? "" : "hidden"; ?> >
                <img src="images/<?= $e['profile'] ?>" alt="" width=100 height=100 id="uploadPreview">
            </div>
        </div>

        <div class="mb-2">
            <?php if($username == $e["username"]){ ?>
            <a href="index.php" class="btn btn-danger btn-sm">
                Cancel            
            </a>

            <input type="submit" class="btn btn-primary btn-sm" value="Save" />
            <?php }else{?>
            <a href="index.php" class="btn btn-danger btn-sm">
                Back            
            </a>
            <?php }?>
        </div>
        
    </form>
                
</div>
<script type="text/javascript">
    function bacaGambar(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
        
            reader.onload = function (e) {
                $('#uploadPreview').attr('src', e.target.result);
            }
        
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#uploadImg").change(function(){
        bacaGambar(this);
    });
</script>
</body>
</html>