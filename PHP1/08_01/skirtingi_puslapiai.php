<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>web</title>
</head>
<body>
<a href="?page1=pirmas">Apie mus</a>

<a href="?page2=antras">Struktura</a>

<a href='?page=news'>Naujienos</a>

<?php 

$turinys = array (
		pirmas => array (
				'name' => 'Apie mus',
				'text' => '<p>Klaipėdos universitetas – tai daugiasritis, į tarptautinius akademinius tinklus integruotas nacionalinis ir Baltijos regiono jūros mokslų ir studijų lyderis, kultūros paveldo puoselėtojas ir mokymosi visą gyvenimą centras.</p>
							<p>Klaipėdos universitetas įsteigtas 1991 m. sausio 1 d. Savo veiklą jis pradėjo turėdamas tris fakultetus, o 25-ąjį jubiliejų pasitinka išaugęs į 4 fakultetus: Humanitarinių ir ugdymo mokslų, Jūros technologjų ir gamtos mokslų, Socialinių ir Sveikatos mokslų; 1 studijų (Tęstinių studijų) ir 1 mokslo (Baltijos regiono istorijos ir archeologijos) institutus, Menų akademiją. Sparčiai augančiame universitete studijuoja apie 4500 studentų. Šioje Alma Mater studijas yra baigę daugiau nei 32 500 absolventų, kurių gretose yra mokslo daktarai, Seimo ir Vyriausybės nariai, stambių įmonių vadovai, inžinieriai, mokytojai, solistai ir teatralai.</p>',
				'image' => 'http://alkas.lt/wp-content/uploads/2011/07/klaipedos-universitetas.jpg',
				'gallery' => array (
						'http://www.jjc.edu/admissions/SiteAssets/Happy-students1.jpg',
						'https://cache-blog.credit.com/wp-content/uploads/2013/04/student-loans-ts-1360x860.jpg'
				)
		),
		antras => array (
				'name' => 'Struktūra',
				'text' => '<p>Klaipėdos universiteto Taryba yra kolegialus Klaipėdos universiteto valdymo organas. Taryba vadovaujasi Lietuvos Respublikos Mokslo ir studijų įstatymu, Lietuvos Respublikos  teisės aktais, Universiteto statutu ir Tarybos darbo reglamentu. Taryba tvirtina universiteto viziją ir misiją, Rektoriaus pateiktą strateginį veiklos planą, svarsto ir tvirtina Rektoriaus teikiamus universiteto struktūros pertvarkos planus, nustato universiteto Rektoriaus rinkimų viešo konkurso būdu organizavimo tvarką, renka, skiria į pareigas ir atleidžia iš jų Rektorių, nustato universiteto lėšų ir turto valdymo, naudojimo ir disponavimo jais tvarką, svarsto ir tvirtina svarbiausius su tuo susijusius sprendimus, rūpinasi parama universitetui bei atlieka kitas funkcijas. Universiteto Taryba sudaroma 5 metams iš 9 narių.</p>',
				'image' => 'http://senas.ku.lt/en/wp-content/uploads/2015/08/DSC_1882-770x510.jpg',
				'gallery' => array (
						'http://www.jjc.edu/admissions/SiteAssets/Happy-students1.jpg',
						'https://cache-blog.credit.com/wp-content/uploads/2013/04/student-loans-ts-1360x860.jpg'
				)
		),
);

$news=array(
		'2016-12-16' => array(
				'name'=>'Naujienos pavadinimas',
				'text'=>'Naujienos tekstas ilgas',
				'description'=>'Naujienos trumpas aprašymas'
		),
		'2016-12-14' => array(
				'name'=>'Naujienos pavadinimas',
				'text'=>'Naujienos tekstas ilgas',
				'description'=>'Naujienos trumpas aprašymas'
		)
			
); ?>

<?php
if ($_GET['page1'] == 'pirmas') {
   echo '<h1>Apie mus</h1>';
   foreach ($turinys as $pirmas => $pirmasPuslapis) {
		echo '<h3>'.$pirmasPuslapis['name'].'</h2>';
		echo '<h4>'.$pirmasPuslapis['text'].'</h2>';
		echo '<p>'.$pirmasPuslapis['image'].'</p>';
		echo '<p>'.$pirmasPuslapis['gallery'].'</p>';
		
	}
}
?>

<?php
if ($_GET['page2'] == 'antras') {
   echo '<h1>Struktura</h1>';
   foreach ($turinys as $antras => $antrasPuslapis) {
		echo '<h3>'.$antrasPuslapis['name'].'</h2>';
		echo '<h4>'.$antrasPuslapis['text'].'</h2>';
		echo '<p>'.$antrasPuslapis['image'].'</p>';
		echo '<p>'.$antrasPuslapis['gallery'].'</p>';
		
	}
}
?>

<?php
if ($_GET['page'] == 'news') {
   echo '<h1>Naujienos</h1>';
   foreach ($news as $data => $straipsnis) {
        echo '<h3>Data: '.$data.'</h3>';
		echo '<h3>'.$straipsnis['name'].'</h2>';
		echo '<h4>'.$straipsnis['text'].'</h2>';
        echo '<p>'.$straipsnis['description'].'</p>';
	}
}
?>

</body>
</html>