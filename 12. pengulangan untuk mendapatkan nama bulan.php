<?php
$bulan = array('1'=>'Januari', 
			'Februari', 
			'Maret' , 
			'April' , 
			'Mei', 
			'Juni', 
			'Juli', 
			'Agustus', 
			'September', 
			'Oktober', 
			'November', 
			'Desember'
		);
$batas_waktu = '2015-11-10';
echo '<table>
		<tr>
			<th> Bulan</th>

			<th> Keterangan</th>
		</tr>';
     echo '<hr>';   
for ($i = 1; $i <= count($bulan); $i++)
{	
	$bln_batas = date("m",strtotime($batas_waktu));
	echo '<tr>
			<td> ' . strtoupper($bulan[$i]) . ' </td>';
		
	if ($bln_batas == $i)
		echo '<td>- batas waktu penulisan</td>';
	else
		echo '<td>-</td>';
		
	echo '</tr>';
}

echo '</table>';
echo "<p><strong>by: fika laura";

