<?php
$h = file_get_contents('scraped_doctors.html');
// find any img or doctor names
preg_match_all('/Dr\.\s+[A-Za-z\s\.\(\)]+/i', $h, $names);
echo "Doctors in doctors.html:\n";
print_r(array_unique($names[0]));

$hHome = file_get_contents('scraped_home.html');
preg_match_all('/Dr\.\s+[A-Za-z\s\.\(\)]+/i', $hHome, $namesHome);
echo "\nDoctors in home.html:\n";
print_r(array_unique($namesHome[0]));

// Print middle part of doctors.html
$start = strpos($h, '<div class="span8');
if ($start === false) $start = strpos($h, '<div class="span9');
if ($start === false) $start = strpos($h, '<div class="container"');
echo "\n\nHTML snippet around middle:\n" . substr($h, $start, 3500);
