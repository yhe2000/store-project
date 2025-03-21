@extends('layouts.admin')

@section('content')
    <div class="container mt-4">
        @if (session('success'))
            <script>
                document.addEventListener("DOMContentLoaded", function() {
                    Swal.fire({
                        title: "تمت العملية بنجاح!",
                        text: "{{ session('success') }}",
                        icon: "success",
                        timer: 3000,
                        showConfirmButton: false
                    });
                });
            </script>
        @endif
        <form action="{{ route('products.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label text-light">اسم المنتج</label>
                <input type="text" class="form-control bg-dark text-light border-secondary" id="name" name="name"
                    placeholder="اسم المنتج">
            </div>

            <div class="mb-3">
                <label for="quantity" class="form-label text-light">الكمية</label>
                <input type="number" class="form-control bg-dark text-light border-secondary" id="quantity"
                    name="quantity" placeholder="أدخل الكمية">
            </div>

            <div class="mb-3">
                <label for="price" class="form-label text-light">السعر</label>
                <input type="number" class="form-control bg-dark text-light border-secondary" id="price" name="price"
                    placeholder="أدخل السعر">
            </div>

            <div class="mb-3">
                <label for="description" class="form-label text-light">الوصف</label>
                <textarea class="form-control bg-dark text-light border-secondary" id="description" name="description" rows="3"
                    placeholder="أدخل وصف المنتج"></textarea>
            </div>

            <div class="mb-3">
                <label for="category">الصنف</label>
                <select name="category_id" class="form-control">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>

            </div>

            <button type="submit" class="btn btn-outline-light"> حفظ </button>
        </form>
    </div>
@endsection
