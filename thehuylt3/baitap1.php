<?php
function xapXep($mang) {
    $n = count($mang);
    
    // Sử dụng thuật toán sắp xếp nổi bọt (Bubble Sort)
    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = 0; $j < $n - 1 - $i; $j++) {
            if ($mang[$j] > $mang[$j + 1]) {
                // Hoán đổi hai phần tử
                $temp = $mang[$j];
                $mang[$j] = $mang[$j + 1];
                $mang[$j + 1] = $temp;
            }
        }
    }
}

// Ví dụ sử dụng hàm
$numbers = [4, 2, 8, 1];
xapXep($numbers);
print_r($numbers); // Kết quả: Array ( [0] => 1 [1] => 2 [2] => 4 [3] => 8 )
?>
