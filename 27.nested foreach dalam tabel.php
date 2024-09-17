<?php 

$no = 1;
$sales = array (1=>'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember');
$tabel = '
<table>
	<tr>
		<th>No</th>
		<th>Bulan</th>
		<th>Penjualan</th>
	</tr>';
foreach ($sales as $bulan => $nilai) {
	$tabel .= '
	<tr>
		<td>' . $no . '</td>
		<td>' . $bulan . '</td>
		<td>' . $nilai . '</td>
	</tr>';
	$no++;
}
$tabel .= '</table>';
echo $tabel;