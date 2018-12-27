<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") { //如果是 POST 請求
    @$leader = $_POST["leader_id"]; //取得 nickname POST 值
    @$member = $_POST["member3_id"]; //取得 gender POST 值
    if ($leader != null && $member != null) { //如果 nickname 和 gender 都有填寫
        //回傳 nickname 和 gender json 資料
		
		$name = 'eric';
		$price = '10';
		$ary = array('a' => 'Eric', 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5);
        echo json_encode($ary);
    } else {
        //回傳 errorMsg json 資料
        echo json_encode(array(
            'errorMsg' => '資料未輸入完全！'
        ));
    }
} else {
    //回傳 errorMsg json 資料
    echo json_encode(array(
        'errorMsg' => '請求無效，只允許 POST 方式訪問！'
    ));
}
?>