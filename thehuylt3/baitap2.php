<?php
function daoNguocMang($mang) {
    $mangDaoNguoc = [];
    
    // Duyệt mảng từ cuối đến đầu để tạo mảng đảo ngược
    for ($i = count($mang) - 1; $i >= 0; $i--) {
        $mangDaoNguoc[] = $mang[$i];
    }
    
    return $mangDaoNguoc;
}

// Ví dụ sử dụng hàm
$numbers = [1, 2, 3, 4, 5];
$mangDaoNguoc = daoNguocMang($numbers);
print_r($mangDaoNguoc); // Kết quả: Array ( [0] => 5 [1] => 4 [2] => 3 [3] => 2 [4] => 1 )
?>
