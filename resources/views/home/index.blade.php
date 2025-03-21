@extends('layouts.front')
@section('content')
    <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true"
                aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
                    aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <rect width="100%" height="100%" fill="var(--bs-secondary-color)" />
                </svg>
                <div class="container">
                    <div class="carousel-caption text-start">
                        <h1>عنوان المثال.</h1>
                        <p class="opacity-75">تشير الدراسات الإحصائية حسب الجمعية الأمريكية للغات بأن الإقبال على العربية
                            زاد %126 في الولايات المتحدة الأمريكية وحدها بين عامي 2002 و2009م.</p>
                        <p><a class="btn btn-lg btn-primary" href="#">سجل اليوم</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
                    aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <rect width="100%" height="100%" fill="var(--bs-secondary-color)" />
                </svg>
                <div class="container">
                    <div class="carousel-caption">
                        <h1>عنوان مثال آخر.</h1>
                        <p>حسب المجلس الثقافي البريطاني فإن تعليم الإنجليزية داخل بريطانيا يسهم في تعزيز اقتصادها بما يتجاوز
                            ملياري جنيه سنوياً، كما أنه وفر أكثر من 26 ألف وظيفة.</p>
                        <p><a class="btn btn-lg btn-primary" href="#">أعرف أكثر</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
                    aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <rect width="100%" height="100%" fill="var(--bs-secondary-color)" />
                </svg>
                <div class="container">
                    <div class="carousel-caption text-end">
                        <h1>واحد أكثر لقياس جيد.</h1>
                        <p>الإحصاءات لحجم الاستثمار اللغوي خارج بريطانيا تتفاوت من سنة لأخرى إلا أن المدير التنفيذي للمجلس
                            الثقافي البريطاني إدي بايرز يرى أن استثمار تعليم الإنجليزية في الخارج لا يحسب على المستوى المالي
                            فحسب بل على المستوى السياسي أيضاً.</p>
                        <p><a class="btn btn-lg btn-primary" href="#">تصفح المعرض</a></p>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">السابق</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">التالي</span>
        </button>
    </div>


    <!-- Marketing messaging and featurettes
              ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

        <!-- Three columns of text below the carousel -->
        <div class="row">
            @foreach ($products as $product)
                <div class="col-lg-4">
                    <svg class="bd-placeholder-img rounded-circle" width="140" height="140"
                        xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder"
                        preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="var(--bs-secondary-color)" />
                    </svg>
                    <h2 class="fw-normal">{{$product->name}}</h2>
                    <p>{{$product->description}}</p>
                    <p><a class="btn btn-secondary" href="#">عرض التفاصيل</a></p>
                </div><!-- /.col-lg-4 -->
            @endforeach

        </div><!-- /.row -->


        <!-- START THE FEATURETTES -->

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading fw-normal lh-1">العنوان الأول المميز. <span class="text-body-secondary">
                        سيذهل عقلك. </span></h2>
                <p class="lead">وجه الإنسان هو جزء معقَّد ومتميِّز للغاية من جسمه. وفي الواقع، إنه أحد أكثر أنظمة
                    الإشارات المتاحة تعقيداً لدينا؛ فهو يتضمَّن أكثر من 40 عضلة مستقلة هيكلياً ووظيفياً، بحيث يمكن تشغيل كل
                    منها بشكل مستقل عن البعض الآخر؛ وتشكِّل أحد أقوى مؤشرات العواطف.</p>
            </div>
            <div class="col-md-5">
                <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
                    height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500"
                    preserveAspectRatio="xMidYMid slice" focusable="false">
                    <title>Placeholder</title>
                    <rect width="100%" height="100%" fill="var(--bs-secondary-bg)" /><text x="50%" y="50%"
                        fill="var(--bs-secondary-color)" dy=".3em">500x500</text>
                </svg>
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7 order-md-2">
                <h2 class="featurette-heading fw-normal lh-1">أوه نعم، هذا جيد. <span class="text-body-secondary"> شاهد
                        بنفسك. </span></h2>
                <p class="lead">عندما نضحك أو نبكي، فإننا نعرض عواطفنا، مما يسمح للآخرين بإلقاء نظرة خاطفة على أذهاننا
                    أثناء "قراءة" وجوهنا بناءً على التغييرات في مكوّنات الوجه الرئيسة، مثل: العينين والحاجبين والجفنين
                    والأنف والشفتين.</p>
            </div>
            <div class="col-md-5 order-md-1">
                <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
                    height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500"
                    preserveAspectRatio="xMidYMid slice" focusable="false">
                    <title>Placeholder</title>
                    <rect width="100%" height="100%" fill="var(--bs-secondary-bg)" /><text x="50%" y="50%"
                        fill="var(--bs-secondary-color)" dy=".3em">500x500</text>
                </svg>
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading fw-normal lh-1">وأخيرًا، هذا. <span class="text-body-secondary"> كش ملك.
                    </span></h2>
                <p class="lead">إن جميع العضلات في أجسامنا مدعمة بالأعصاب المتصلة من كافة أنحاء الجسم بالنخاع الشوكي
                    والدماغ. وهذا الاتصال العصبي هو ثنائي الاتجاه، أي إن العصب يتسبَّب في تقلصات العضلات بناءً على إشارات
                    الدماغ، ويقوم في الوقت نفسه بإرسال معلومات عن حالة العضلات إلى الدماغ</p>
            </div>
            <div class="col-md-5">
                <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
                    height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500"
                    preserveAspectRatio="xMidYMid slice" focusable="false">
                    <title>Placeholder</title>
                    <rect width="100%" height="100%" fill="var(--bs-secondary-bg)" /><text x="50%" y="50%"
                        fill="var(--bs-secondary-color)" dy=".3em">500x500</text>
                </svg>
            </div>
        </div>

        <hr class="featurette-divider">

        <!-- /END THE FEATURETTES -->

    </div><!-- /.container -->
@endsection
