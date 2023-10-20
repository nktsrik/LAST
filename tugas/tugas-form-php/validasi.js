// validasi.js

function validateForm() {
  // Validasi Kolom Nama (hanya huruf)
  var namaInput = document.getElementById('nama').value;
  if (!/^[A-Za-z\s]+$/.test(namaInput)) {
    alert('Kolom Nama hanya bisa menginput huruf.');
    return false;
  }

  // Validasi Kolom NIM (hanya angka, 10 digit)
  var nimInput = document.getElementById('nim').value;
  if (!/^\d{10}$/.test(nimInput)) {
    alert('Kolom NIM hanya bisa menginput angka dan harus terdiri dari 10 digit.');
    return false;
  }

  // Validasi Kolom Email (harus mengandung @)
  var emailInput = document.getElementById('email').value;
  if (!emailInput.includes('@')) {
    alert('Kolom Email harus mengandung simbol "@".');
    return false;
  }

  // Validasi Kolom No.Handphone (hanya angka)
  var noHpInput = document.getElementById('no-hp').value;
  if (!/^\d+$/.test(noHpInput)) {
    alert('Kolom No.Handphone hanya bisa menginput angka.');
    return false;
  }

  // Mengambil nilai dari form
  var nama = document.getElementById('nama').value;
  var nim = document.getElementById('nim').value;
  var status = document.querySelector('input[name="status"]:checked').value;
  var programStudi = document.getElementById('program-studi').value;
  var jenkel = document.getElementById('jenis-kelamin').value;
  var hobi = document.getElementById('hobi').value;
  var email = document.getElementById('email').value;
  var alamat = document.getElementById('alamat').value;
  var noHp = document.getElementById('no-hp').value;

  // Menampilkan data yang diinput
  var output = 'Data yang Anda masukkan telah tersimpan\n\n';
  output += 'Nama: ' + nama + '\n';
  output += 'NIM: ' + nim + '\n';
  output += 'Jenis Kelamin: ' + jenkel + '\n';
  output += 'Status: ' + status + '\n';
  output += 'Program Studi: ' + programStudi + '\n';
  output += 'Hobi: ' + hobi + '\n';
  output += 'Email: ' + email + '\n';
  output += 'Alamat: ' + alamat + '\n';
  output += 'No.Handphone: ' + noHp + '\n';

  //alert(output);

  // Jika semua validasi sukses, form akan dikirim
  return true;
}
