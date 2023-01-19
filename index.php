<?php
/*
	Waktu Solat Melaka
	(R) 2021 Ikmal Said Systems
*/
	$title	= "Waktu Solat Melaka";
	$solat	= "Solat";
	$time	= "Masa";
	$wise	= "Kata Hikmah Hari Ini";
	$words	= "Solatlah kamu sebelum kamu disolatkan...";
	$copy	= "(R) 2021 Ikmal Said Systems";
	
	$url1	= "http://waktu-solat-api.herokuapp.com/api/v1/prayer_times.json?negeri=melaka";
	$url2	= "http://quotes.rest/qod?category=life&language=en";
	$data1	= file_get_contents($url1);
	$data2	= file_get_contents($url2);	
	$data1	= json_decode($data1, true);
	$data2	= json_decode($data2, true);

	$an	= $data1['data']['zon'][0]['waktu_solat'][0]['name'];
	$bn = $data1['data']['zon'][0]['waktu_solat'][1]['name'];
	$cn = $data1['data']['zon'][0]['waktu_solat'][2]['name'];
	$dn = $data1['data']['zon'][0]['waktu_solat'][3]['name'];
	$en = $data1['data']['zon'][0]['waktu_solat'][4]['name'];
	$fn = $data1['data']['zon'][0]['waktu_solat'][5]['name'];
	$gn = $data1['data']['zon'][0]['waktu_solat'][6]['name'];

	$at = $data1['data']['zon'][0]['waktu_solat'][0]['time'];
	$bt = $data1['data']['zon'][0]['waktu_solat'][1]['time'];
	$ct = $data1['data']['zon'][0]['waktu_solat'][2]['time'];
	$dt = $data1['data']['zon'][0]['waktu_solat'][3]['time'];
	$et = $data1['data']['zon'][0]['waktu_solat'][4]['time'];
	$ft = $data1['data']['zon'][0]['waktu_solat'][5]['time'];
	$gt = $data1['data']['zon'][0]['waktu_solat'][6]['time'];

	echo '<hr>'.'<center><h1>'.$title.'</h1></center>'.'<hr><br>';
	echo '<style>table, th, td {border: 3px solid black;} table.center {width:300px; margin-left:auto; margin-right:auto;border-collapse: collapse;} th, td {padding: 10px;}</style>';
	echo '<table class="center"><tr><th>'.$solat.'</th><th>'.$time.'</th></tr>';
	echo '<tr><td><center>'.$an.'</center></td><td><center>'.$at.'</center></td></tr>';
	echo '<tr><td><center>'.$bn.'</center></td><td><center>'.$bt.'</center></td></tr>';
	echo '<tr><td><center>'.$cn.'</center></td><td><center>'.$ct.'</center></td></tr>';
	echo '<tr><td><center>'.$dn.'</center></td><td><center>'.$dt.'</center></td></tr>';
	echo '<tr><td><center>'.$en.'</center></td><td><center>'.$et.'</center></td></tr>';
	echo '<tr><td><center>'.$fn.'</center></td><td><center>'.$ft.'</center></td></tr>';
	echo '<tr><td><center>'.$gn.'</center></td><td><center>'.$gt.'</center></td></tr>';
	echo '</table><br><hr><center><b>'.$wise.'</b></center>'.'<center><i>'.$data2['contents']['quotes'][0]['quote'].' - '.$data2['contents']['quotes'][0]['author'].'</i></center>';
	echo '<hr><br><center>'.$copy.'</center>';
	
	print_r($data2);
?>