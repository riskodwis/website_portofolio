<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="topnav" id="myTopnav">
        <a href="#home" class="active">Home</a>
        <a href="#news">Portofolio</a>
        <a href="#contact">Sertifikat</a>
        <div class="dropdown">
          <button class="dropbtn">Project
            <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-content">
            <a href="#">Link 1</a>
            <a href="#">Link 2</a>
            <a href="#">Link 3</a>
          </div>
        </div>
        <a href="#about">About</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
      </div>

      <table border="1" cellpadding="10" cellspacing="0"l>
		
        <tr>
          <th>No</th>
          <th>Suhu</th>
          <th>Operasi</th>
        </tr>
    
        <?php $i = 1;  ?>
    
        <!--pengulangan array $data ke $row-->
        <?php foreach ($suhu as $row) : ?>
        <tr>
          <td><?= $i;  ?></td>
          <td><?= $row["suhu"]; ?></td>
          <td>
            <a href="ubah.php?id=<?= $row["id"]; ?>">Ubah</a>
            <a href="hapus.php?id=<?= $row["id"]; ?>">Hapus</a>
          </td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
    
      </table>

</body>

<script>
  /* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
  function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
      x.className += " responsive";
  } else {
      x.className = "topnav";
  }
}
</script>

</html>