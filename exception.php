<?php
//
try {
    //自力で例外を発生させる
    throw new \Exception("自力で投げた例外");
    
    //例外を発生させる
    $obj = new SplFileObject('dummy');
    
    // その後の処理
    echo "例外が起きた後の処理　ここは通る？ \n";
} catch(\Throwable $e) {
    //
    echo "例外が発生したらここを通る \n";
    var_dump($e->getMessage());
}
//
echo "fin. \n";