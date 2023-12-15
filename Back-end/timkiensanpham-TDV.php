<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DANH SÁCH SẢN PHẨM - TRẦN DUY VŨ</title>
</head>
<body>
    <?php 
        include("ketnoi_TDV.php");
        $sql_tdv = "SELECT * FROM sanpham_tdv WHERE 1=1 ";
        if(isset($_GET["btnSearch"])){
            $keyword = $_GET["keyword"];
            if(isset($keyword)){
                $sql_tdv .=" and TenSP_TDV like '%$keyword%'";
            }
        }
        $result_tdv = $conn_tdv->query($sql_tdv);
    ?>
    <section>
        <h1>DANH SÁCH SẢN PHẨM - TRẦN DUY VŨ</h1>
        <hr/>
        <form action="" method="get">
            <div>
                <label for="keyword">Tên sản phẩm</label>
                <input type="search" name="keyword" value="" id="keyword" placeholder="Nhập tên cần tìm..."/>
                <input type="submit" name="btnSearch" value="Tìm kiếm" />
            </div>
        </form>
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
                        <td><?php echo $row_tdv["GiaSP_TDV"]*$row_tdv["GiaSP_TDV"]; ?></td>
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
    </section>
</body>
</html>