<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    />
    <link rel="stylesheet" href="CSS/style.css" />
    <title>Form Data Diri</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <script src="validasi.js"></script>
  </head>
  <body style="background-image: url('Picture/bg.jpg')">
    <div class="container center-containform">
      <div class="row" class="container center-containerInnr" style="border: 5px solid rgb(130, 12, 128)">
        <div class="col-lg-12 mb-4 mb-sm-5">
          <div class="card-body p-1-9 p-sm-2-3 p-md-6 p-lg-7">
            <div class="col-lg-6 px-xl-10">
              <h3 class="h2 text-black mb-0 text-center">RESPONSE FORMULIR DATA PRIBADI</h3>
              <br />
              <br />
              <form action="proses.php" method="post" >
                <div class="mb-2 mb-xl-3 display-28">
                  <label for="nama" class="display-26 text-dark me-2 font-weight-600 fw-bold">Nama Lengkap:</label>
                  <input type="text" id="nama" name="nama" required />
                </div>
                <div class="mb-2 mb-xl-3 display-28">
                  <label for="nim" class="display-26 text-dark me-2 font-weight-600 fw-bold">NIM:</label>
                  <input type="text" id="nim" name="nim" pattern="[0-9]{10}" title="Nim hanya terdiri dari 10 angka!!" required />
                </div>
                <div class="mb-2 mb-xl-3 display-28">
                  <label for="jenis-kelamin" class="display-26 text-dark me-2 font-weight-600 fw-bold">Jenis Kelamin:</label>
                  <select id="jenis-kelamin" name="jenis-kelamin" required>
                    <option value="Perempuan">Perempuan</option>
                    <option value="Laki-Laki">Laki-Laki</option>
                  </select>
                </div>
                <div class="mb-2 mb-xl-3 display-28 radio-group">
                  <span class="display-26 text-dark me-2 font-weight-600 fw-bold">Status:</span>
                  <input type="radio" id="mahasiswa" name="status" value="Mahasiswa" required />
                  <label for="mahasiswa">Mahasiswa/i</label>
                  <input type="radio" id="bekerja" name="status" value="Bekerja" />
                  <label for="bekerja">Bekerja</label>
                  <input type="radio" id="tidak-kuliah-bekerja" name="status" value="Tidak Kuliah/Bekerja" />
                  <label for="tidak-kuliah-bekerja">Tidak Kuliah/Bekerja</label>
                </div>
                <div class="mb-2 mb-xl-3 display-28">
                  <label for="program-studi" class="display-26 text-dark me-2 font-weight-600 fw-bold">Program Studi:</label>
                  <select id="program-studi" name="program_studi" required>
                    <option value="S1 Teknologi Informasi">S1 Teknologi Informasi</option>
                    <option value="S1 Teknik Sipil">S1 Teknik Sipil</option>
                    <option value="S1 Teknik Mesin">S1 Teknik Mesin</option>
                    <option value="S1 Teknik Elektro">S1 Teknik Elektro</option>
                    <option value="S1 Teknik Arsitektur">S1 Teknik Arsitektur</option>
                    <option value="S1 Teknik Industri">S1 Teknik Industri</option>
                    <option value="S1 Teknik Lingkungan">S1 Teknik Lingkungan</option>
                  </select>
                </div>
                <div class="mb-2 mb-xl-3 display-28">
                  <label for="hobi" class="display-26 text-dark me-2 font-weight-600 fw-bold">Hobi:</label>
                  <input type="text" id="hobi" name="hobi" required />
                </div>
                <div class="mb-2 mb-xl-3 display-28">
                  <label for="email" class="display-26 text-dark me-2 font-weight-600 fw-bold">Email:</label>
                  <input type="email" id="email" name="email" required />
                </div>
                <div class="mb-2 mb-xl-3 display-28">
                  <label for="alamat" class="display-26 text-dark me-2 font-weight-600 fw-bold">Alamat:</label>
                  <input type="text" id="alamat" name="alamat" required />
                </div>
                <div class="display-28">
                  <label for="no-hp" class="display-26 text-dark me-2 font-weight-600 fw-bold">No.Handphone:</label>
                  <input type="tel" id="no-hp" name="no-hp" pattern="[0-9]+" title="Contoh: 08--" required />
                </div>
                <div class="mt-3">
                  <button type="submit" class="btn btn-danger" target="_blank">submit</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="validasi.js"></script>
  </body>
</html>
