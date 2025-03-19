@extends('layouts.admin')

@section('content')
<div class="container mt-4">
    <form action="" method="POST">
        <div class="mb-3">
            <label for="name" class="form-label text-light">اسم المنتج</label>
            <input type="text" class="form-control bg-dark text-light border-secondary" id="name" name="name" placeholder="اسم المنتج">
        </div>

        <div class="mb-3">
            <label for="quantity" class="form-label text-light">الكمية</label>
            <input type="number" class="form-control bg-dark text-light border-secondary" id="quantity" name="quantity" placeholder="أدخل الكمية">
        </div>

        <div class="mb-3">
            <label for="price" class="form-label text-light">السعر</label>
            <input type="number" class="form-control bg-dark text-light border-secondary" id="price" name="price" placeholder="أدخل السعر">
        </div>

        <div class="mb-3">
            <label for="description" class="form-label text-light">الوصف</label>
            <textarea class="form-control bg-dark text-light border-secondary" id="description" name="description" rows="3" placeholder="أدخل وصف المنتج"></textarea>
        </div>

        <div class="mb-3">
            <label for="category" class="form-label">اختر الفئة</label>
            <select class="form-select bg-dark text-white border-secondary" id="category" name="category">
                <option value="ملابس">ملابس</option>
                <option value="احذية">أحذية</option>
                <option value="اكسسوارات">إكسسوارات</option>
            </select>
        </div>



        <button type="submit" class="btn btn-outline-light"> حفظ </button>
    </form>
</div>
@endsection
