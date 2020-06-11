<html>
<body>

<?php
echo "<right>";
echo "<table border>";

echo "</tr>";
echo "<td>NAMA</td>";
echo "<td>".$_POST['nama']."</td>";
echo "</tr>";
echo "<tr>";
echo "<td>Umur</td>";
echo "<td>".$_POST['umur']."</td>";
echo "</tr>";
echo "<tr>";
echo "<td>Jenis Kelamin</td>";
echo "<td>".$_POST['kelamin']."</td>";
echo "</tr>";
echo "<td>Program Studi</td>";
echo "<td>".$_POST['prodi']."</td>";
echo "</tr>";

echo "</table>";
echo "</right>";

?>

</body>
</html>