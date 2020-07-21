<?php 
  include "header.php";
?>


<form method="post" action="" class="ml-2 card p-5 mt-5">
<h5 class="text-gray-900 mb-4">Tambah Data Pejabat</h5>
    
    <!-- untuk memproses form -->
    <?php
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $nama           = $_POST['nama'];
            $nip            = $_POST['nip'];
            $jabatan        = $_POST['jabatan'];
            $status         = $_POST['status'];
            
            
                                            
            if($nama=='' | $nip=='' | $jabatan=='' | $status=='disable'){
                echo "<div class='alert alert-warning fade show alert-dismissible mt-2'>
                        Data Belum lengkap harus di selesaikan !
                    </div>";	
            }else{
                //simpan data
                $simpan = mysqli_query($koneksi,
                "INSERT INTO `pejabat` (`id` ,`nama`, `nip`, `jabatan`, `status`, `tanda_tangan`, `username`) 
                VALUES (null, '$nama', '$nip', '$jabatan', '$status', '', 'noregister')");
                
                if($simpan){
                    header('location:index.php');
                }
            }
            

        }
    ?>

    <div class="form-group row">
        <label class="col-md-2 col-form-label">Status</label>
        <div class="input-group col-md-4">
            <select name="status" id="pilih_status"  class="form-control">
                <option value="disable">- Pilih Status -</option>
                <option value="Aktif">Aktif</option>
                <option value="Tidak Aktif">Tidak Aktif</option>  
            </select>
        </div>
    </div>


    <div class="form-group row form-sembunyi" >
        <label class="col-md-2 col-form-label">Nama</label>
        <div class="input-group col-md-6">
            <input type="text"  class="form-control" name="nama" placeholder="Masukan">
        </div>
    </div>

    
    <div class="form-group row form-sembunyi" >
        <label class="col-md-2 col-form-label">Nip</label>
        <div class="input-group col-md-6">
            <input type="text" class="form-control" name="nip" placeholder="Masukan">
        </div>
    </div>

    
    <div class="form-group row form-sembunyi" >
        <label class="col-md-2 col-form-label">Jabatan</label>
        <div class="input-group col-md-6">
            <input type="text"  class="form-control" name="jabatan" placeholder="Masukan">
        </div>
    </div>



    <div class="mb-2">
    <a href="index.php" class="btn btn-danger btn-sm">
        Cancel
    </a>
    <input type="submit" class="btn btn-primary btn-sm" value="Save" />
    </div>
</form>

</body>
</html>