<?php
// เชื่อมต่อกับฐานข้อมูล
require('ConnSQL.php');

// คำสั่ง SQL สำหรับดึงข้อมูล
$sql = "SELECT * FROM study"; // แทน your_table ด้วยชื่อตารางของคุณ

// ส่งคำสั่ง SQL ไปยังฐานข้อมูล
$result = mysqli_query($conn, $sql);

// ตรวจสอบว่ามีข้อมูลที่ดึงมาหรือไม่
if (mysqli_num_rows($result) > 0) {
    // วนลูปเพื่อแสดงข้อมูลที่ดึงมา
    while($row = mysqli_fetch_assoc($result)) {
        echo "<textarea rows='4' cols='50'>" . $row["fname"] . " " . $row["lname"] . "</textarea>";
        echo "<br>";
    }
} else {
    echo "0 results";
}

// ปิดการเชื่อมต่อกับฐานข้อมูล
mysqli_close($conn);
?>
