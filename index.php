<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>
<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["NIM"])) {
        $nimErr = "Name is required";
      } else {
        $nim = test_input($_POST["NIM"]);
      }
    
      if (empty($_POST["Nama"])) {
        $namaErr = "Email is required";
      } else {
        $nama = test_input($_POST["Nama"]);
      }
    
      if (empty($_POST["website"])) {
        $emailErr = "";
      } else {
        $email = test_input($_POST["Email"]);
      }

      if (empty($_POST["website"])) {
        $alamatErr = "";
      } else {
        $alamat = test_input($_POST["Alamat"]);
      }
    }


// if ($_SERVER["REQUEST_METHOD"] == "POST") {

//     if (empty($_POST["name"])) {
//         $nameErr = "";
//         } else {
//             $name = test_input($_POST["name"]);
//             $nameErr = "Name is required";
//     }
        
//         if (empty($_POST["email"])) {
//             $emailErr = "Email is required";
//             } else {
//                 $email = test_input($_POST["email"]);
//         }
                
//             if (empty($_POST["website"])) {
//                 $website = "";
//                 } else {
//                     $website = test_input($_POST["website"]);
//             }

// }

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

    <h2>PHP Form Validation Example</h2>
    <p><span class="error">* required field</span></p>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
            NIM : <input type="text" name="NIM">
            <span class="error">* <?php echo $nameErr;?></span>
            <br><br>
        
            Nama: <input type="text" name="name">
            <span class="error">* <?php echo $nameErr;?></span>
            <br><br>


            E-mail: <input type="text" name="email">
            <span class="error">* <?php echo $emailErr;?></span>
            <br><br>


            Alamat: <input type="text" name="alamat">
            <span class="error"><?php echo $websiteErr;?></span>
            <br><br>


            <input type="submit" name="submit" value="Submit">  
        </form>


    <!-- <from action= "tampilan.php" method="post">
        Nama : <input type= "text" name= "nama"><br><br>
        Email : <input type= "text" email= "email"><br><br>
        Alamat : <input type= "text" alamat= "alamat"><br><br> -->
</body>
</html>

<!-- Membuat 1 Page Form Handling dan Form Validation dengan ketentuan
1. Field NIM, Nama, Email, Alamat, submit
2. Jika field kosong maka akan menampilkan notifikasi *Nama wajib diisi.... (dsb)
3. gunakan method "POST" atau method "GET" 
4. ditambahkan default hasil "NIM" dan "Nama" pada page diluar inputan field poin no 1 -->