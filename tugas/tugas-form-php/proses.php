<!DOCTYPE html>
<html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $nim = $_POST["nim"];
    $jenis_kelamin = $_POST["jenis-kelamin"];
    $status = $_POST["status"];
    $program_studi = $_POST["program_studi"];
    $hobi = $_POST["hobi"];
    $email = $_POST["email"];
    $alamat = $_POST["alamat"];
    $no_hp = $_POST["no-hp"];
}
?>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="CSS/style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <title>Response Formulir Data Diri</title>

    <style>
        .center-text {
            text-align: center;
        }

        .pink-background {
            background-color: pink;
        }
    </style>
</head>

<body>
    <script src="validasi.js"></script>
    <h2 class="center-text mt-3">Response Formulir Data Diri</h2>
    <br><br>
    <div class="container center-containform">
        <table class="table table-striped-columns">
            <thead>
                <tr>
                    <th class="pink-background" scope="col">Formulir Diri</th>
                    <th class="table-secondary" scope="col">Data</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th class="pink-background" scope="col">Nama</th>
                    <td><?php echo $nama ?></td>
                </tr>
                <tr>
                    <th class="pink-background" scope="col">NIM</th>
                    <td><?php echo $nim ?></td>
                </tr>
                <tr>
                    <th class="pink-background" scope="col">Jenis Kelamin</th>
                    <td><?php echo $jenis_kelamin ?></td>
                </tr>
                <tr>
                    <th class="pink-background" scope="col">Status</th>
                    <td><?php echo $status ?></td>
                </tr>
                <tr>
                    <th class="pink-background" scope="col">Program Studi</th>
                    <td><?php echo $program_studi ?></td>
                </tr>
                <tr>
                    <th class="pink-background" scope="col">Hobi</th>
                    <td><?php echo $hobi ?></td>
                </tr>
                <tr>
                    <th class="pink-background" scope="col">Email</th>
                    <td><?php echo $email ?></td>
                </tr>
                <tr>
                    <th class="pink-background" scope="col">Alamat</th>
                    <td><?php echo $alamat ?></td>
                </tr>
                <tr>
                    <th class="pink-background" scope="col">No hp</th>
                    <td><?php echo $no_hp ?></td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Tempatkan JavaScript validasi Anda di sini -->
    <script type="text/javascript" src="validasi.js"></script>
</body>

</html>
