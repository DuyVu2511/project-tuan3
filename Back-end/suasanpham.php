<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa thông tin sản phẩm - Tran Duy Vu</title>
</head>
<body>
    <?php
        include("ketnoi_TDV.php");
        if(isset($_GET["MaSP_TDV"])){
            $PROID_TDV = $_GET["MaSP_TDV"];
            $sql_edit_tdv = "SELECT * FROM `sanpham_tdv` WHERE MaSP_TDV ='MaSP_TDV'";
            $result_edit_tdv = $conn_tdv->query($sql_edit_tdv);
            $row_edit_tdv = $result_edit_tdv->fetch_array();
        }else{
            header("Location: danhsachsanpham-TDV.php");
        }
    ?>
    <section>
        <h1>Sửa thông tin sản phẩm - Tran Duy Vu</h1>
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
                        <td>Trang thai</td>
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
                            <input type="submit" value="Sua -Tran Duy Vu" name="btnSubmit_TDV">
                            <input type="reset" value="Lam lai -Tran Duy Vu" name="btnReset_TDV">
                        </td>
                    </tr>
                </tbody>
                
            </table>
        </form>
        <a href="danhsachsanpham-TDV.php">Danh sách sản phẩm</a>
    </section>
    <?php
        if (isset($_POST["btnSubmit_TDV"])) {
            $MaSP_TDV = $_POST["MaSP_TDV"];
            $TenSP_TDV = $_POST["TenSP_TDV"];
            $GiaSP_TDV = $_POST["GiaSP_TDV"];
            $TrangThai_TDV = $_POST["TrangThai_TDV"];
            
            $sql_update_tdv = "UPDATE sanpham_tdv SET MaSP_TDV='$MaSP_TDV', TenSP_TDV='$TenSP_TDV', GiaSP_TDV='$GiaSP_TDV', TrangThai_TDV='$TrangThai_TDV' WHERE MaSP_TDV='$MaSP_TDV'";

            if ($conn_tdv->query($sql_update_tdv)) {
                header("Location: danhsachsanpham-TDV.php");
            } else {
                echo "<script>alert('Lỗi cập nhật')</script>";
            }
        }
    ?>
</body>
</html>