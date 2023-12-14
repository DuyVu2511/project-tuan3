<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Them moi thong tin san pham- Tran Duy Vu</title>
</head>
<body>
    <?php
        include("ketnoi_tdv.php");
        $error_messenger_tdv = "";
        if(isset($_POST["btnSubmit_TDV"])){
            $MaSP_TDV = $_POST["MaSP_TDV"];
            $TenSP_TDV = $_POST["TenSP_TDV"];
            $GiaSP_TDV = $_POST["GiaSP_TDV"];
            $TrangThai_TDV = $_POST["TrangThai_TDV"];

            $sql_insert_tdv = "INSERT INTO `sanpham_tdv` (`MaSP_TDV`, `TenSP_TDV`, `GiaSP_TDV`, `TrangThai_TDV`)";
            $sql_insert_tdv .=" VALUES ('$MaSP_TDV', '$TenSP_TDV', '$GiaSP_TDV', '$TrangThai_TDV')";

            if($conn_tdv->query($sql_insert_tdv)){
                header("Location: danhsachsanpham-TDV.php");
            }else{
                $error_messenger_tdv="Loi them moi " . mysqli_error($conn_tdv); 
            }
        }
    ?>
    <section>
        <h1>Thêm mới thông tin sản phẩm - Tran Duy Vu</h1>
        <form name="frm_tdv" method="post" action="">
            <table border="1" width="100%" cellspacing="0" cellpadding="5">
                <tbody>
                    <tr>
                        <td>Mã SP</td>
                        <td>
                            <input type="text" name="MaSP_TDV" id="MaSP_TDV">
                        </td>
                    </tr>
                    <tr>
                        <td>Tên SP</td>
                        <td>
                            <input type="text" name="TenSP_TDV" id="TenSP_TDV">
                        </td>
                    </tr>
                    <tr>
                        <td>Giá</td>
                        <td>
                            <input type="text" name="GiaSP_TDV" id="GiaSP_TDV">
                        </td>
                    </tr>
                    <tr>
                    <tr>
                        <td>Trạng thái</td>
                        <td>
                            <select name="TrangThai_TDV">
                                <option value="1">Còn hàng</option>
                                <option value="0">Hết hàng</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <input type="submit" value="Them -Tran Duy Vu" name="btnSubmit_TDV">
                            <input type="reset" value="Lam lai -Tran Duy Vu" name="btnReset_TDV">
                        </td>
                    </tr>
                </tbody>
                
            </table>
            <div>
                <?php echo $error_messenger_tdv; ?>
            </div>
        </form>
        <a href="danhsachsanpham-TDV.php">Danh sách sản phẩm</a>
    </section>
</body>
</html>