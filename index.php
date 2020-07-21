<?php 
  include "header.php";
  session_start();
  $username = "";
  if(!isset($_SESSION['username'])){
    header('location:login.php');
  }else{
    $username = $_SESSION['username'];
  }
  

?>  
    <div class="table-responsive p-5">
        <h1 class="text-gray-900">Tabel Pejabat</h1>
        
        <table id='dataTables-example' class="text-gray-900 table">
            <thead>
            <tr> 
                <th>Nama</th>
                <th>Nip</th>
                <th>Jabatan</th>
                <th>Status</th>
                <th class="text-center">
                    <a href="pejabat_tambah.php" class="btn btn-primary btn-sm">
                        <i class="fas fa-plus"></i>
                    </a>
                </th>
            </tr>
            </thead>
            <tbody>
            <?php
            $sql=mysqli_query($koneksi, "SELECT * FROM pejabat");
            
            while($d=mysqli_fetch_array($sql)){
                // $Password = md5($d['Password']);
                echo "<tr id='search'>
                        <td style='color:".($d['status'] == "Aktif" ? "black" : "grey")."'>$d[nama]</td>
                        <td style='color:".($d['status'] == "Aktif" ? "black" : "grey")."'>$d[nip]</td>
                        <td style='color:".($d['status'] == "Aktif" ? "black" : "grey")."'>$d[jabatan]</td>
                        <td style='color:".($d['status'] == "Aktif" ? "black" : "grey")."'>$d[status]</td>    
                        <td align='center' width='70px'>";
                            
                        if($username == $d["username"]){
                            echo "<a class='btn btn-success btn-sm' href='pejabat_edit.php?id=$d[id]'>
                            <i class='fas fa-edit'></i></a>
                            
                            <a href='#myModal' class='hapus-pejabat btn btn-danger btn-sm' data-id='$d[id]' 
                            role='button' data-toggle='modal' data-nama='$d[nama]'>
                            <i class='fas fa-times'></i></a>";
                            
                        }else{
                            echo " <a class='btn btn-primary btn-sm' href='pejabat_edit.php?id=$d[id]'>
                            <i class='fas fa-eye'></i></a>";
                        }

                            echo "<div class='modal small fade' id='myModal' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>
                                <div class='modal-dialog'>
                                    <div class='modal-content'>
                                        <div class='modal-header'>
                                            <h5 id='myModalLabel'>Informasi penghapusan</h5>
                                        </div>
                                        <div class='row modal-body p-3'>
                                            <div class='col-md-12'>
                                                <span class='h6'>Nama Pejabat</span>
                                                <p id='nama_pejabat' class='h5 text-info mb-3'></p>
                                            </div>
                                            <div class='col-md-12 mb-3'>
                                                <h5> Apakah Anda yakin ingin menghapus data ini ?</h5>
                                            </div>
                                            <div class='col-md-12 float-center'>
                                                <a href='' class='btn btn-primary btn-sm' data-dismiss='modal' aria-hidden='true'>Cancel</a> 
                                                <a href='#' class='btn btn-danger btn-sm'  id='modalDelete' >Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    ";
            }
            ?>
            </tbody>
        </table>

    <a href="logout.php" class='btn btn-danger btn-sm'>LOGOUT</a>
    </div>
<script>
// Peringatan hapus buku
$('.hapus-pejabat').click(function(){

    var nama = $(this).attr('data-nama');
    $('#nama_pejabat').text(nama);

    var id=$(this).data('id');
    $('#modalDelete').attr('href','pejabat_hapus.php?id='+id);
});
</script>
</body>
</html>