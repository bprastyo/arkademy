<?php
$biodata = [
			"name"=> "Budi Prastyo",
			"age"=> 23,
			"address"=> "Jl. DR. Wahidin SH Gg XIV No. 37 Kebomas, Gresik - Jawa Timur",
			"hobbies" => ["basket","drawing","reading","coding"],
			"is_married" => false,
			"list_school" => [
				[
					"name"=> "SDN 1 Sendangcoyo Lasem",
					"year_in"=> 2003,
					"year_out"=> 2008,
					"major"=> "Elementary School"
				],[
					"name"=> "SMPN 2 Lasem",
					"year_in"=> 2008,
					"year_out"=> 2011,
					"major"=> "Junior High Scholl"
				],
				[
					"name"=> "SMK TI Umar Fatah Rembang",
					"year_in"=> 2011,
					"year_out"=> 2014,
					"major"=> "Senior High Scholl"
				]
			],
			
			"skills" => [
				[
					"skill_name"=> "PHP",
					"level"=> "beginner"
				],[
					"skill_name"=> "CSS",
					"level"=> "beginner"
				],[
					"skill_name"=> "Photoshop",
					"level"=> "advanced"
				]
			],
			"interest_in_coding" => true,
	];
$parse = json_encode($biodata,true);
echo $parse;

?>