<?php 
    $host = "192.168.4.4";
    $user = "2205551014";
    $pass = "2205551014";
    $db = "db_2205551014";

    $conn = new mysqli($host, $user, $pass, $db);
    if($conn->connect_error){
        die("Koneksi gagal: ").$conn->connect_error;
    }

    $email      = "";
    $nama       = "";
    $nim        = "";
    $univ       = "";
    $prodi      = "";
    $agama      = "";
    $noHp       = "";
    $error      = "";
    $sukses     = "";

    if(isset($_GET['op'])){
        $op = $_GET['op'];
    }else{
        $op = "";
    }

    if($op == 'delete'){
        $id         = $_GET['id'];
        $sql       = "delete from tb_formulir where id = '$id'";
        $q1         = mysqli_query($conn,$sql);
        if ($conn->query($sql) === TRUE) {
            
            $sukses = "Data berhasil dihapus";
        } else {
            
            $error = "Data gagal dihapus";
        }
    }

    if ($op == 'edit') {
        $id         = $_GET['id'];
        $sql       = "select * from tb_formulir where id = '$id'";
        $q1         = mysqli_query($conn, $sql);
        $r1         = mysqli_fetch_array($q1);
        $email      = $r1['email'];
        $nama       = $r1['nama'];
        $nim        = $r1['nim'];
        $univ       = $r1['univ'];
        $prodi      = $r1['prodi'];
        $agama      = $r1['agama'];
        $noHp       = $r1['noHp'];
    
        if ($nim == '') {
            $error = "Data tidak ditemukan";
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email      = $_POST['email'];
        $nama       = $_POST['nama'];
        $nim        = $_POST['nim'];
        $univ       = $_POST['univ'];
        $prodi      = $_POST['prodi'];
        $agama      = $_POST['agama'];
        $noHp       = $_POST['noHp'];
        
        if($op == 'edit'){
                $sql       = "update tb_formulir set email = '$email', nama = '$nama', univ = '$univ', prodi = '$prodi', agama = '$agama', noHp = '$noHp' where id = '$id'";
                if ($conn->query($sql) === TRUE) {
                   
                    $sukses = "Data baru berhasil di-update";
                } else {
                 
                    $error = "Data baru gagal di-update";
                }
        }else{

            $sql = "INSERT INTO tb_formulir (email, nama, nim, univ, prodi, agama, noHp) VALUES ('$email', '$nama', '$nim', '$univ', '$prodi', '$agama', '$noHp')";
        
            if ($conn->query($sql) === TRUE) {
                
                $sukses = "Data baru berhasil ditambahkan";
            } else {
               
                $error = "Data baru gagal ditambahkan";
            }
        }

        // Query untuk menyimpan data ke database
    }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
      integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="CSS/style.css" />
    <title>FORMULIR MAHASISWA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <script src="validasi.js"></script>
  </head>
  <body style="background-image: url('Picture/bg.jpg')">
    <div class="container center-containform">
      <div class="row" class="container center-containerInnr" style="border: 5px solid rgb(130, 12, 128)">
        <div class="col-lg-12 mb-4 mb-sm-5">
          <div class="card-body p-1-9 p-sm-2-3 p-md-6 p-lg-7">
          <?php
                if ($error) {
                ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $error ?>
                    </div>
                <?php
                    
                }
                ?>
                <?php
                if ($sukses) {
                ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo $sukses ?>
                    </div>
                <?php
                    
                }
                ?>
            <div class="col-lg-6 px-xl-10">

              <h3 class="h2 text-black mb-0 text-center">FORMULIR MAHASISWA</h3>
              <br />
              <br />
              <!-- <form method="POST" action="proses.php" onsubmit="return validateForm();"> -->
              <form method="POST" action="" >
                <div class="mb-2 mb-xl-3 display-28">
                  <label for="email" class="display-26 text-dark me-2 font-weight-600 fw-bold">Email:</label>
                  <input type="text" id="email" name="email" required />
                </div>
                <div class="mb-2 mb-xl-3 display-28">
                  <label for="nama" class="display-26 text-dark me-2 font-weight-600 fw-bold">Nama Lengkap:</label>
                  <input type="text" id="nama" name="nama" required />
                </div>
                <div class="mb-2 mb-xl-3 display-28">
                  <label for="nim" class="display-26 text-dark me-2 font-weight-600 fw-bold">NIM:</label>
                  <input type="text" id="nim" name="nim" required />
                </div>
                <div class="mb-2 mb-xl-3 display-28">
                  <label for="univ" class="display-26 text-dark me-2 font-weight-600 fw-bold">Universitas:</label>
                  <input type="text" id="univ" name="univ" required />
                </div>
                <div class="mb-2 mb-xl-3 display-28">
                  <label for="prodi" class="display-26 text-dark me-2 font-weight-600 fw-bold">Program Studi:</label>
                  <input type="prodi" id="prodi" name="prodi" required />
                </div>
                <div class="mb-2 mb-xl-3 display-28">
                  <label for="agama" class="display-26 text-dark me-2 font-weight-600 fw-bold">Agama:</label>
                  <input type="text" id="agama" name="agama" required />
                </div>
                <div class="display-28">
                  <label for="noHp" class="display-26 text-dark me-2 font-weight-600 fw-bold">No.Handphone:</label>
                  <input type="text" id="noHp" name="noHp" pattern="[0-9]+"  required />
                </div>
                <div class="mt-3">
                  <button type="submit" name="simpan" class="btn btn-danger" >Submit</button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="card">
            <div class="card-header text-white bg-secondary">
                BIODATA MAHASISWA
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Email</th>
                            <th scope="col">Nama</th>
                            <th scope="col">NIM</th>
                            <th scope="col">Universitas</th>
                            <th scope="col">Prodi</th>
                            <th scope="col">Agama</th>
                            <th scope="col">No Handphone</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                            <?php 
                            $sql   = "SELECT * FROM tb_formulir";
                            $result = $conn->query($sql);
                            $urut   = 0;
                            if($result->num_rows > 0){
                                while($row = $result->fetch_assoc()){
                                    $id         = $row['id'];
                                    $email      = $row['email'];
                                    $nama       = $row['nama'];
                                    $nim        = $row['nim'];
                                    $univ       = $row['univ'];
                                    $prodi      = $row['prodi'];
                                    $agama       = $row['agama'];
                                    $noHp       = $row['noHp'];
                                    ?>
                                    <tr>
                                        <td scope="row"><?php echo ++$urut ?></td>
                                        <td scope="row"><?php echo $email ?></td>
                                        <td scope="row"><?php echo $nama ?></td>
                                        <td scope="row"><?php echo $nim ?></td>
                                        <td scope="row"><?php echo $univ ?></td>
                                        <td scope="row"><?php echo $prodi ?></td>
                                        <td scope="row"><?php echo $agama ?></td>
                                        <td scope="row"><?php echo $noHp ?></td>
                                        <td scope="row">
                                            <a href="index2.php?op=edit&id=<?php echo $id ?>"><button type="button" class="btn btn-warning">Edit</button></a>
                                            <a href="index2.php?op=delete&id=<?php echo $id?>" onclick="return confirm('Apakah anda yakin ingin menghapus data?')"><button type="button" class="btn btn-danger">Delete</button></a>
                                        </td>

                                    </tr>
                                    <?php
                                }
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="validasi.js"></script>
  </body>
</html>

