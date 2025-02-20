<?php
// Khởi tạo danh sách sinh viên
$students = [
    ["hoTen" => "Nguyen Thi Mai", "ngaySinh" => "2000-03-25", "gioiTinh" => "Nữ", "diemToan" => 9, "diemVan" => 8, "diemTiengAnh" => 7],
    ["hoTen" => "Tran Minh Tu", "ngaySinh" => "1999-07-14", "gioiTinh" => "Nam", "diemToan" => 8, "diemVan" => 6, "diemTiengAnh" => 7],
    ["hoTen" => "Le Thi Lan", "ngaySinh" => "2001-05-18", "gioiTinh" => "Nữ", "diemToan" => 6, "diemVan" => 8, "diemTiengAnh" => 8],
    // Thêm 17 sinh viên còn lại vào đây
    // ...
];

// Thêm Điểm Trung Bình (TB)
foreach ($students as &$student) {
    $student['diemTB'] = ($student['diemToan'] + $student['diemVan'] + $student['diemTiengAnh']) / 3;
}

// Hàm in danh sách sinh viên đã sắp xếp theo tên
function inDanhSachSinhVien($students) {
    usort($students, function($a, $b) {
        return strcmp($a['hoTen'], $b['hoTen']);
    });
    
    print_r($students);
}

// Hàm trả về mảng sinh viên nữ
function sinhVienNu($students) {
    $sinhVienNu = array_filter($students, function($student) {
        return $student['gioiTinh'] == 'Nữ';
    });
    
    return $sinhVienNu;
}

// Hàm trả về mảng sinh viên có Điểm TB >= 8.0
function sinhVienDiemTBCao($students) {
    $sinhVienDiemTBCao = array_filter($students, function($student) {
        return $student['diemTB'] >= 8.0;
    });
    
    return $sinhVienDiemTBCao;
}

// Hàm tìm bạn nữ có Điểm TB cao nhất
function sinhVienNuDiemTBCaoNhat($students) {
    $sinhVienNu = sinhVienNu($students);
    
    usort($sinhVienNu, function($a, $b) {
        return $b['diemTB'] <=> $a['diemTB'];
    });
    
    return $sinhVienNu[0]; // Trả về sinh viên nữ có điểm trung bình cao nhất
}

// Thực hiện yêu cầu
// In danh sách sinh viên đã sắp xếp theo tên
echo "Danh sách sinh viên sắp xếp theo tên:\n";
inDanhSachSinhVien($students);

// In danh sách sinh viên nữ
echo "\nDanh sách sinh viên nữ:\n";
print_r(sinhVienNu($students));

// In danh sách sinh viên có Điểm TB >= 8.0
echo "\nDanh sách sinh viên có Điểm TB >= 8.0:\n";
print_r(sinhVienDiemTBCao($students));

// In sinh viên nữ có Điểm TB cao nhất
echo "\nSinh viên nữ có Điểm TB cao nhất:\n";
print_r(sinhVienNuDiemTBCaoNhat($students));
?>
