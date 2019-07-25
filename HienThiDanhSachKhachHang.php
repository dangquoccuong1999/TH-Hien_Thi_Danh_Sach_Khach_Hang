<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<style>
    table {
        border-collapse: collapse;
        width: 100%;
    }

    th, td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }
</style>
<body>
<table border="0">
    <caption><h1>Danh sách khách hàng</h1></caption>
    <tr>
        <th>STT</th>
        <th>Tên</th>
        <th>Ngày sinh</th>
        <th>Địa chỉ</th>
    </tr>
    <?php

    $list = array(
        "1" => array(
            "ten" => "Đặng Quốc Cường",
            "ngaysinh" => "15/5/1999",
            "diachi" => "Hà Nội"),
        "2" => array(
            "ten" => "Doãn Quốc Đam",
            "ngaysinh" => "15/8/1999",
            "diachi" => "Hà Nội"),
        "3" => array(
            "ten" => "Doãn Quốc C",
            "ngaysinh" => "15/8/1999",
            "diachi" => "Hà Nội"),
    );

    foreach ($list as $key => $value) {
        echo "<tr>";
        echo "<td>" . $key . "</td>";
        echo "<td>" . $value[ten] . "</td>";
        echo "<td>" . $value[ngaysinh] . "</td>";
        echo "<td>" . $value[diachi] . "</td>";
        echo "</tr>";
    }

    ?>
</table>
</body>
</html>

