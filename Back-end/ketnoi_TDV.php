<?php
    $conn_tdv = new mysqli("localhost","root","","webbangame_tdv");
    if($conn_tdv->errno){
        echo "Lỗi kết nối, ". $conn_tdv->error;
    }else{
        echo "<h1> Xin chào, Tran Duy Vu - 2210900138 </h1>";
    }
?>
