<?php
	//создаем 2 массива
	$array_one = array("hi", "hi2", 89, 'iu&', "People", "RiseOfSun", 100, "be happy", "agent007");
	$array_two = array("HI", "Strong", 98, "people", 7703, "be happy", "agent007", 100);

	//прохождение и сравнение 2х массивов с учётом регистра. Если совпало, вывести на экран совпадение.
	$count_one = 0;

	foreach ($array_one as $ar) {
		foreach ($array_two as $ar1) {
			if ($ar == $ar1) {
				$count_one ++;
				echo $ar . "</br>";
			}
		}
	}
	echo $count_one . " matches found.";

	echo "</br> --------------------------------------------------- </br>";

	//прохождение и сравнение 2х массивов без учёта регистра. Если совпало, вывести на экран совпадение.
	$count_two = 0;
	
	foreach ($array_one as $ar) {
		foreach ($array_two as $ar1) {
			if (strnatcasecmp($ar, $ar1) == 0) {
				$count_two ++;
				echo $ar . "</br>";
			}
		}
	}
	echo $count_two . " matches found.";

	echo "</br> --------------------------------------------------- </br>";
?>