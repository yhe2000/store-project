@extends('layouts.admin')

@section('content')
<div class="container mt-4">

    @if(session('success'))
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

    <form action="{{ route('categories.update', $category->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label text-light">اسم الصنف</label>
            <input type="text" class="form-control bg-dark text-light border-secondary" id="name" name="name" value="{{ old('name', $category->name) }}">
        </div>

        <button type="submit" class="btn btn-outline-light"> حفظ التعديلات </button>
    </form>
</div>
@endsection
