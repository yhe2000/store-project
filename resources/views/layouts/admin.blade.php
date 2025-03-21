<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>لوحة القيادة</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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

        select.form-control {
            background-color: #212529;
            /* لون الخلفية ليكون متناسقًا مع الحقول الأخرى */
            color: white;
            /* لون النص */
            border: 1px soشlid #ced4da;
            /* حدود مثل الحقول */
            padding: 8px;
            border-radius: 5px;
            /* زوايا ناعمة مثل الحقول الأخرى */
            font-size: 16px;
        }

        select.form-control:focus {
            border-color: #80bdff;
            outline: none;
        }
    </style>
</head>

<body>

    <!-- الشريط الجانبي -->
    <div class="sidebar">
        <h4 class="text-center mb-4">اسم الشركة</h4>
        <a href="#" class="active"><i class="fa-solid fa-chart-line"></i> لوحة القيادة</a>
        <a href="{{ route('categories.index') }}"><i class="fa-solid fa-box"></i> الاصناف</a>
        <a href="{{ route('products.index') }}"><i class="fa-solid fa-cart-shopping"></i> المنتجات</a>
        <a href="#"><i class="fa-solid fa-cog"></i> الإعدادات</a>
        <h6 class="mt-4">إعدادات</h6>
        <a href="#"><i class="fa-solid fa-sign-out-alt"></i> خروج</a>


    </div>

    <!-- الشريط العلوي -->
    <nav class="navbar">
        <div class="container-fluid">
            <span class="navbar-brand text-white">&nbsp;</span>
        </div>
    </nav>

    <!-- المحتوى الرئيسي -->
    <div class="content">
        <div class="mt-5 pt-3">


            <div class="chart-container mt-5">
                @yield('content')
            </div>
        </div>
    </div>



</body>

</html>
