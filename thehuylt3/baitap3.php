<?php
function timGiaTri($giaTri, $mang) {
    // Duyệt mảng để tìm giá trị
    for ($i = 0; $i < count($mang); $i++) {
        if ($mang[$i] == $giaTri) {
            return $i; // Nếu tìm thấy giá trị, trả về chỉ số
        }
    }
    
    return -1; // Nếu không tìm thấy, trả về -1
}

// Ví dụ sử dụng hàm
$traiCay = ["Apple", "Banana", "Cherry"];
$index = timGiaTri("Banana", $traiCay);
echo $index; // Kết quả: 1
?>
