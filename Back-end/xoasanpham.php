<?php 
        include("ketnoi_TDV.php");
        $sql_tdv = "SELECT * FROM `sanpham_tdv` WHERE 1=1 ";
        $result_tdv = $conn_tdv->query($sql_tdv);

?>
<?php 
        if(isset($_GET["MaSP_TDV"])){
            $proid_tdv = $_GET["MaSP_TDV"];
            $sql_delete_tdv = "DELETE FROM `sanpham_tdv` WHERE MaSP_TDV='$MaSP_TDV'";
            if($conn_tdv->query($sql_delete_tdv)){
                header("Location:danhsachsanpham-TDV.php");
            }else{
                echo "<script> alert('lỗi xóa'); </script>";
            }
        }
    ?>