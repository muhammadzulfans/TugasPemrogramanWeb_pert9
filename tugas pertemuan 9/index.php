<!DOCTYPE HTML>
<html>  
<head>
    <style>
        .error {color: #FF0000;}
    </style>    
</head>
<body>
    <h2>Latihan Membuat Form Validation</h2>
<?php


// define variables and set to empty values
$name = $email = $gender = $comment = $website = "";
$nameErr = $emailErr = $genderErr = $commentErr = $websiteErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["nim"])) {
        $nimErr = "NIM wajib diisi";
      } else {
        $nim = test_input($_POST["nim"]);
      }
    
      if (empty($_POST["nama"])) {
        $namaErr = "Nama wajib diisi";
      } else {
        $nama = test_input($_POST["nama"]);
      }
    
      if (empty($_POST["email"])) {
        $emailErr = "E-mail wajib diisi";
      } else {
        $email = test_input($_POST["email"]);
      }

      if (empty($_POST["alamat"])) {
        $alamatErr = "Alamat wajib diisi";
      } else {
        $alamat = test_input($_POST["alamat"]);
      }

    }

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<p><span class="error">* kolom wajib di isi</span></p>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
        nim: <input type="text" name="nim">
        <span class="error">* <?php echo $nimErr;?></span>

        <br><br>

        nama: <input type="text" name="nama">
        <span class="error">* <?php echo $namaErr;?></span>
        
        <br><br>

        E-mail: <input type="text" name="email">
        <span class="error"><?php echo $emailErr;?></span>
        
        <br><br>

        alamat: <input type="text" name="alamat">
        <span class="error"><?php echo $alamatErr;?></span>
        
        <br><br>

        <input type="submit" name="submit" value="Submit">  
    </form>


<?php
echo "<h2>Hasil Inputan User:</h2>";
echo $nim;
echo "<br>";
echo $nama;
echo "<br>";
echo $email;
echo "<br>";
echo $alamat;
echo "<br>";
?>

</body>
</html>