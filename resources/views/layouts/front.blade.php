<!doctype html>
<html lang="ar" dir="rtl" data-bs-theme="auto">
  <head>
    <script src="../assets/js/color-modes.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.122.0">
    <title>قالب شرائح العرض · Bootstrap v5.3</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/carousel-rtl/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

    <!-- تصحيح مسار ملف CSS -->
    <link href="{{ asset('assets/dist/css/bootstrap.rtl.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/dist/css/carousel.rtl.css') }}" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
  </head>
  <body>
    <header data-bs-theme="dark">
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">شرائح العرض</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="تبديل التنقل">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">الصفحة الرئيسية</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">حلقة الوصل</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" aria-disabled="true">رابط غير مفعل</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="بحث" aria-label="بحث">
              <button class="btn btn-outline-success" type="submit">بحث</button>
            </form>
          </div>
        </div>
      </nav>
    </header>

    <main>
      @yield('content')
    </main>

    <!-- FOOTER -->
    <footer class="container">
      <p class="float-end"><a href="#">عد إلى الأعلى</a></p>
      <p>&copy; 2017–2024 Company, Inc. &middot; <a href="#">سياسة الخصوصية</a> &middot; <a href="#">شروط الاستخدام</a></p>
    </footer>

    <!-- تصحيح مسار ملف JavaScript -->
    <script src="{{ asset('assets/dist/js/bootstrap.bundle.min.js') }}"></script>
  </body>
</html>
