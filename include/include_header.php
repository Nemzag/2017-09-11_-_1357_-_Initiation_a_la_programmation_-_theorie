<?php
/*
 * Created by PhpStorm.
 * User: Nemzag aka Gaz‑mên Arifi (Shkypi, 1979-09-30).
 * Date: 08/11/2019
 * Time: 13:57
 * Updated: 2019‑11‑14 ‒ 23H12
*/
?>

<header>
	<h1 id="title-h1-<?= str_replace(" ", "", ucwords(str_replace("&amp;nbsp;", " ", htmlentities($title))))
	; ?>" style="text-align: center;"><?= $title; ?></h1>
</header>