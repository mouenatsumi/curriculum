<?php
$number = ["a", "b", "c", "d", "e"];
echo count($number);
echo '<br>';

$members = ["abc", "a", "ab", "abcd", "abcde"];
sort($members);
var_dump($members);
echo '<br>';

$name = ["rinnko", "monaka", "choko", "hana", "ran"];
if (in_array("monaka", $name)){
    echo "モナカがいる！";
}else{
    echo "モナカがいない！";
}
echo '<br>';

$cats = ["rinnko", "monaka", "choko", "ran", "sou"];
$pets = implode(",", $cats);
var_dump($pets);
echo '<br>';
//reをつけるのはそうゆうルール？//
$re_cats = explode(",", $pets);
var_dump($re_cats);