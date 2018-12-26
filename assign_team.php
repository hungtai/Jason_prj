<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") { //如果是 POST 請求
    @$leader = $_POST["leader_id"]; //取得 nickname POST 值
    @$member4 = $_POST["member4_id"]; //取得 gender POST 值
    if ($leader != null && $member4 != null) { //如果 nickname 和 gender 都有填寫
        //回傳 nickname 和 gender json 資料
        echo json_encode(array(
            'name' => 'Eric',
            'price' => 10
        ));
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