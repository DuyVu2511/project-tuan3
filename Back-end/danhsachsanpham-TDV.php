<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DANH SÁCH SẢN PHẨM - TRẦN DUY VŨ</title>
</head>
<body>
    <?php 
        include("ketnoi_tdv.php");
        $sql_tdv = "SELECT * FROM `sanpham_tdv` WHERE 1=1 ";
        $result_tdv = $conn_tdv->query($sql_tdv);

    ?>
    <section>
        <h1>DANH SÁCH SẢN PHẨM - TRẦN DUY VŨ</h1>
        <hr/>
        <table width="100%" border="1px">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Mã</th>
                    <th>Tên</th>
                    <th>Đơn giá</th>
                    <th>Trạng thái</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    if($result_tdv->num_rows>0){
                        $stt=0;
                        while($row_tdv=$result_tdv->fetch_array()):
                            $stt++;
                ?>
                    <tr>
                        <td><?php echo $stt; ?></td>
                        <td><?php echo $row_tdv["MaSP_TDV"]; ?></td>
                        <td><?php echo $row_tdv["TenSP_TDV"]; ?></td>
                        <td><?php echo $row_tdv["GiaSP_TDV"]; ?></td>
                        <td><?php echo $row_tdv["TrangThai_TDV"]; ?></td>
                        <td>
                            <a href="suasanpham.php?MaSP_TDV=<?php echo $row_tdv["MaSP_TDV"];?>">
                                Sửa
                            </a>
                            |
                            <a href="xoasanpham.php?MaSP_TDV=<?php echo $row_tdv["MaSP_TDV"];?>"
                                onclick="if(confirm('Bạn có muốn xóa không')){return true;}else{return false;}">
                                Xóa
                            </a>
                        </td>
                    </tr>
                <?php 
                        endwhile;
                    }else{
                ?>
                    <tr>
                        <td colspan="9">Chưa có dữ liệu</td>
                    </tr>
                <?php
                    };
                ?>
            </tbody>
        </table>
        <a href="themsanpham-TDV.php">Thêm sản phẩm</a>
    </section>
</body>
</html>