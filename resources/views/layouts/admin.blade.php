<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>لوحة القيادة</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        body {
            background-color: #18191A;
            color: white;
            font-family: 'Tajawal', sans-serif;
        }

        .sidebar {
            width: 250px;
            height: 100vh;
            background-color: #242526;
            padding: 20px;
            position: fixed;
            top: 0;
            right: 0;
            /* السايد بار في اليمين */
        }

        .sidebar a {
            color: #b0b3b8;
            /* لون رمادي للأيقونات مثل الصورة */
            text-decoration: none;
            display: flex;
            align-items: center;
            padding: 10px;
            margin: 5px 0;
            border-radius: 5px;
            font-size: 16px;
        }

        .sidebar a i {
            font-size: 18px;
            margin-left: 10px;
            /* لضبط المسافة بين الأيقونة والنص */
        }

        .sidebar a:hover,
        .sidebar a.active {
            background-color: #3A3B3C;
            color: white;
        }

        .content {
            margin-right: 270px;
            /* ضبط المسافة لتناسب السايد بار */
            padding: 20px;
        }

        .navbar {
            background-color: #242526;
            padding: 10px;
            position: fixed;
            top: 0;
            width: calc(100% - 250px);
            right: 250px;
            z-index: 1000;
        }

        .chart-container {
            background-color: #18191A;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.1);
        }


    </style>
</head>

<body>

    <!-- الشريط الجانبي -->
    <div class="sidebar">
        <h4 class="text-center mb-4">اسم الشركة</h4>
        <a href="#" class="active"><i class="fa-solid fa-chart-line"></i> لوحة القيادة</a>
        <a href="#"><i class="fa-solid fa-box"></i> الطلبات</a>
        <a href="#"><i class="fa-solid fa-cart-shopping"></i> المنتجات</a>
        <a href="#"><i class="fa-solid fa-users"></i> الزبائن</a>
        <a href="#"><i class="fa-solid fa-file-alt"></i> التقارير</a>
        <a href="#"><i class="fa-solid fa-cog"></i> الإعدادات</a>
        <h6 class="mt-4">التقارير المحفوظة</h6>
        <a href="#"><i class="fa-solid fa-calendar"></i> الشهر الحالي</a>
        <a href="#"><i class="fa-solid fa-chart-pie"></i> الربع الأخير</a>
        <a href="#"><i class="fa-solid fa-chart-bar"></i> التفاعل الاجتماعي</a>
        <a href="#"><i class="fa-solid fa-sack-dollar"></i> مبيعات نهاية العام</a>
        <h6 class="mt-4">إعدادات</h6>
        <a href="#"><i class="fa-solid fa-sign-out-alt"></i> خروج</a>
    </div>

    <!-- الشريط العلوي -->
    <nav class="navbar">
        <div class="container-fluid">
            <span class="navbar-brand text-white">لوحة القيادة</span>
        </div>
    </nav>

    <!-- المحتوى الرئيسي -->
    <div class="content">
        <div class="mt-5 pt-3">
            <h2>لوحة القيادة</h2>

            <div class="chart-container mt-5">
                @yield('content')
            </div>
        </div>
    </div>



</body>

</html>
