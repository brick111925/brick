<?php
// สื่อการเรียนรู้ฟิสิกส์ ม.5 เทอม 2 (PHP + Bootstrap)
?>

<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ในหัวข้อ ฟิสิกส์ ม.5 เทอม 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <script defer src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="https://www.patwit.ac.th/wp-content/uploads/2022/10/logoNewjpg400x400-300x300.jpg" alt="โรงเรียนโพนทองพัฒนาวิทยา" width="80" height="80" class="d-inline-block align-top">สื่อการเรียนรู้ ฟิสิกส์</a>
        </div>
    </nav>
    <div class="container mt-4">
        <h2 class="text-center fw-bold">เสนอ คุณครู พรพรรณ พลเยี่ยม โรงเรียนโพนทองพัฒนาวิทยา</h2>
        <h1 class="text-center">ในหัวข้อ ฟิสิกส์ ม.5 เทอม 2</h1>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">เสียง</h5>
                        <p class="card-text">เรียนรู้เกี่ยวกับคลื่นเสียงและความถี่</p>
                        <ul>
                            <li>อัตราเร็วของเสียง: \( v = f \lambda \)</li>
                            <li>ระดับเสียง (dB): \( L = 10 \log \left( \frac{I}{I_0} \right) \)</li>
                            <li>ปรากฏการณ์ดอปเพลอร์: \( f' = f \frac{v \pm v_o}{v \mp v_s} \)</li>
                            <li>ความยาวคลื่น: \( \lambda = \frac{v}{f} \)</li>
                            <li>กำลังของคลื่นเสียง: \( P = I A \)</li>
                            <li>พลังงานของคลื่นเสียง: \( E = P t \)</li>
                            <li>แรงดันเสียง: \( p = \sqrt{2 I \rho v} \)</li>
                        </ul>
                        <a href="sound.php" class="btn btn-primary">ศึกษาเพิ่มเติม</a>
                        <div class="mt-3">
                            <h6>🎥 วิดีโอการเรียนรู้เรื่องเสียง</h6>
                            <iframe width="100%" height="200" src="https://www.youtube.com/embed/videoseries?list=PLm5T1E_Lz1XolqYKIkvaaVVsyavqTeMQW" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">ไฟฟ้าสถิต</h5>
                        <p class="card-text">ศึกษาการเกิดประจุและแรงคูลอมบ์</p>
                        <a href="electrostatic.php" class="btn btn-primary">ศึกษาเพิ่มเติม</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">ไฟฟ้ากระแส</h5>
                        <p class="card-text">เข้าใจวงจรไฟฟ้าและกฎของโอห์ม</p>
                        <a href="current.php" class="btn btn-primary">ศึกษาเพิ่มเติม</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

