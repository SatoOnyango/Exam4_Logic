<?php

// 1. FizzBuzz
// a. 1~100の数字を順に出力していく。ただし、3の倍数の時は’Fizz’、5の倍数の時は’Buzz’、3と5
// の倍数の時は’FizzBuzz’と出力する。なお、各出力の後には改行を入れること。

for($i=1; $i<=100; $i++){
    if($i % 3 == 0 && $i % 5 == 0){
        echo 'FizzBuzz';
    }elseif($i % 3 == 0) {
        echo 'Fizz';
    }elseif($i % 5 == 0) {
        echo 'Buzz';
    }else{
        echo $i;
    }
    echo '<br>';
}

echo '<hr>';

// 2. 素数算出
// a. 1~10000までの数字の中で素数を割り出し、その素数のみを順に出力する。なお、各出力の後
// には改行を入れること。

for($i=1; $i<=10000; $i++){
    $halfMinusOne = ($i / 2) - 1;
    if ($halfMinusOne > 1) {
        $num = 0;
        for ($j = $i; $j > 1; $j--) {
            if ($i % $j == 0) {
                $num++;
            }
        }
        if ($num == 1) {
        echo $i;
        echo '<br>';
        }
    } elseif ($i == 2 || $i == 3) {
        echo $i;
        echo '<br>';
    }
}


echo '<hr>';


// 3. 5次元配列
// a. 題材を任意とし、5次元の配列変数を定義する。なお、最上位の変数からインデックスまたは
// キーの指定で最下層にアクセスできる状態を正とする。
// ex) $webService['sns'][0]['users'][0]['name']; 


$character1 = ['name' => 'Nobita','gender' => 'male'];
$character2 = ['name' => 'Takeshi','gender' => 'male'];
$character3 = ['name' => 'Suneo','gender' => 'fale'];
$character4 = ['name' => 'Shizuka','gender' => 'female'];
$character5 = ['name' => 'Doraemon','gender' => 'none'];


$regular_members = [$character1, $character2, $character3, $character4, $character5,];

// echo $regular_members[1]['name'];

// echo '<hr><br>';


$new_friend1 = ['name' => 'Thio','gender' => 'male'];
$new_friend2 = ['name' => 'Ishumaru','gender' => 'male'];
$new_friend3 = ['name' => 'Kuku','gender' => 'female'];

$new_friends = [$new_friend1,$new_friend2,$new_friend3];

$casts = ['last_boss','heals','new_friends'=>$new_friends,'regular_members' => $regular_members];

// echo $casts['regular_members'][4]['name'];
// echo '<hr><br>';

$BGMs = ['BGM'=>'opening', 'BGM'=>'endding', 'BGM'=>'action_seen', 'BGM'=>'normal_seen',];
$serifs = ['serif'=>'taisetsuna_tomodachi','serif'=>'matane'];

$doraemon_movie_taiyou = ['casts'=>$casts, 'BGMs'=>$BGMs, 'serifs'=>$serifs];

// echo $doraemon_movie_taiyou['casts']['regular_members'][3]['name'];
// echo '<hr><br>';

$doraemon_movies = ['taiyou'=>$doraemon_movie_taiyou, 'nezimaki', 'gingaSL', 'nankai',];


echo $doraemon_movies['taiyou']['casts']['regular_members'][0]['name'];



?>