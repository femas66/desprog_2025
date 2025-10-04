<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title></title>
</head>
<body>

<table border="1" width="50%" style="border-collapse: collapse;">
    <tr>
        <th>Nama</th>
        <th>Domisili</th>
        <th>Jenis Kelamin</th>
    </tr>
<?php
$Dosen = [
    'nama' => 'Elok Nur Hamdana',
    'domisili' => 'Malang',
    'jenis_kelamin' => 'Perempuan' 
];
echo "<tr>";
echo "<td> {$Dosen ['nama']} </td>";
echo "<td> {$Dosen ['domisili']} </td>";
echo "<td> {$Dosen ['jenis_kelamin']} </td>";
echo "</tr>";
?>
</table>

</body>
</html>