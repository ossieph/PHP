<html>
<body>

<?php
echo "<right>";
echo "<table border>";

echo "</tr>";
echo "<td>NIM</td>";
echo "<td>".$_POST['nim']."</td>";
echo "</tr>";
echo "<tr>";
echo "<td>Nama</td>";
echo "<td>".$_POST['nama']."</td>";
echo "</tr>";
echo "<tr>";
echo "<td>Alamat</td>";
echo "<td>".$_POST['alamat']."</td>";
echo "</tr>";
echo "<tr>";
echo "<td>Jenis Kelamin</td>";
echo "<td>".$_POST['kelamin']."</td>";
echo "</tr>";
echo "<tr>";
echo "<td>Program Studi</td>";
echo "<td>".$_POST['prodi']."</td>";
echo "</tr>";
echo "<tr>";
echo "<td>Bahasa Pemograman yang Dipilih</td>";
echo "<td>".$_POST['bahasa1']."<br>".$_POST['bahasa2']."<br>".$_POST['bahasa3']."</td>";
echo "</tr>";


echo "</table>";
echo "</right>";

?>

</body>
</html>
</html>