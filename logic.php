<?php

// 1. FizzBuzz
// a. 1~100の数字を順に出力していく。ただし、3の倍数の時は’Fizz’、5の倍数の時は’Buzz’、3と5
// の倍数の時は’FizzBuzz’と出力する。なお、各出力の後には改行を入れること。

for($i=1; $i<=100; $i++){
  if($i % 3 == 0 && $i % 5 == 0){
    echo 'FizzBuzz';
    echo '<br>';
  }elseif($i % 3 == 0) {
    echo 'Fizz';
    echo '<br>';
  }elseif($i % 5 == 0) {
    echo 'Buzz';
    echo '<br>';
  }else{
    echo $i;
    echo '<br>';
  }
}






?>

<!-- 【題目】
下記3問、すべてにお答えください。
1. FizzBuzz
a. 1~100の数字を順に出力していく。ただし、3の倍数の時は’Fizz’、5の倍数の時は’Buzz’、3と5
の倍数の時は’FizzBuzz’と出力する。なお、各出力の後には改行を入れること。

2. 素数算出
a. 1~10000までの数字の中で素数を割り出し、その素数のみを順に出力する。なお、各出力の後
には改行を入れること。

3. 5次元配列
a. 題材を任意とし、5次元の配列変数を定義する。なお、最上位の変数からインデックスまたは
キーの指定で最下層にアクセスできる状態を正とする。
ex) $webService['sns'][0]['users'][0]['name']; -->