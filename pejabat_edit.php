<?php 
  include "header.php";

?>
    <form method="post" action="" class="ml-2 card p-5 mt-5">
        
        <h5 class="text-gray-900 mb-4">Edit Data Pejabat</h5>
        <!-- edit data -->
        <?php
            $sqlEdit=mysqli_query($koneksi, "SELECT * FROM pejabat WHERE id='$_GET[id]'");
            $e=mysqli_fetch_array($sqlEdit);
        ?>
        <!-- untuk memproses edit -->
        <?php
            if($_SERVER['REQUEST_METHOD']=='POST'){
                $id             = $_POST['id'];
                $nama           = $_POST['nama'];
                $nip            = $_POST['nip'];
                $jabatan        = $_POST['jabatan'];
                $status         = $_POST['status'];
                        
                
                    //simpan data edit
                    $update = mysqli_query($koneksi, "UPDATE pejabat SET
                                                        nama='$nama',
                                                        nip='$nip',
                                                        jabatan='$jabatan',
                                                        status='$status'
                                                        WHERE id='$id'");
                                                        
                    if($update){
                        header('location:index.php');
                    }
                
            }
        ?>

        <input type="hidden" class="form-control" name="id" value="<?= $e['id'] ?>">
            
        <div class="form-group row">
            <label class="col-md-2 col-form-label">Nama</label>
            <div class="input-group col-md-6">
                <input type="text" class="form-control" name="nama" value="<?= $e['nama'] ?>">
            </div>
        </div>

        
        <div class="form-group row">
            <label class="col-md-2 col-form-label">Nip</label>
            <div class="input-group col-md-6">
                <input type="text" class="form-control" name="nip" value="<?= $e['nip'] ?>">
            </div>
        </div>

        
        <div class="form-group row">
            <label class="col-md-2 col-form-label">Jabatan</label>
            <div class="input-group col-md-6">
                <input type="text" class="form-control" name="jabatan" value="<?= $e['jabatan'] ?>">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-md-2 col-form-label">Status</label>
            <div class="input-group col-md-6">
                <select name="status" id="">
                    <option value="Aktif" <?= $e['status'] == "Aktif" ? "selected" : "" ?>>Aktif</option>
                    <option value="Tidak Aktif" <?= $e['status'] !== "Aktif" ? "selected" : "" ?>>Tidak Aktif</option>  
                </select>
            </div>
        </div>

        <div class="mb-2">
            <a href="index.php" class="btn btn-danger btn-sm">
                Cancel            
            </a>
            <input type="submit" class="btn btn-primary btn-sm" value="Save" />
        </div>
        
    </form>
                
</div>

</body>
</html>