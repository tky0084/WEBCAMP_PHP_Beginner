<?php
// continue の確認
echo "\n continue　の確認 \n";
for($i = 0; $i < 10; ++$i) {
    echo "{$i} は奇数かな？ \n";
    if ( ($i % 2) === 1 ) {
        //　奇数なのでcontinueする（以降の処理をスキップする
        continue;
    }
    echo "偶数でした \n";
}

// break の確認
echo "\n  break の確認 \n";
$i = 0;
while($i < 10) {
    echo "{$i} \n";
    //
    if  ($i >= 5) {
        // ループを抜ける
        echo "{$i}なのでループをぬけます \n";
        break;
    }
    //
    ++$i;
}