@extends('layouts.admin')
@section('content')
    @if (session('success'))
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                Swal.fire({
                    title: "نجاح!",
                    text: "{{ session('success') }}",
                    icon: "success",
                    timer: 3000,
                    showConfirmButton: false
                });
            });
        </script>
    @endif
    <div class="d-flex justify-content-between align-items-center mt-4">
        <h2 class="text-light">قائمة المنتجات</h2>
        <a href="{{ route('products.create') }}" class="btn btn-outline-success">إضافة منتج</a>
    </div>
    <div class="mt-4">
        <table class="table table-dark table-striped table-hover text-center">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">اسم المنتج</th>
                    <th scope="col">الصنف</th>
                    <th scope="col">السعر</th>
                    <th scope="col">الكمية</th>
                    <th scope="col">الإجراءات</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $product->name }}</td>
                        <td>{{ optional($product->category)->name ?? 'بدون تصنيف' }}</td>
                        <td>{{ $product->price }} $</td>
                        <td>{{ $product->quantity }}</td>
                        <td>
                            {{-- زر تعديل --}}
                            <a href="{{ route('products.edit', $product->id) }}"
                                class="btn btn-outline-warning btn-sm">تعديل</a>

                            {{-- زر الحذف --}}
                            <form action="{{ route('products.destroy', $product->id) }}" method="POST"
                                class="d-inline delete-form">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-danger btn-sm">حذف</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // منع الحذف المباشر وإضافة تنبيه SweetAlert2
            document.querySelectorAll(".delete-form").forEach(form => {
                form.addEventListener("submit", function(event) {
                    event.preventDefault();
                    Swal.fire({
                        title: "هل أنت متأكد؟",
                        text: "لن تتمكن من استعادة هذا المنتج!",
                        icon: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#d33",
                        cancelButtonColor: "#3085d6",
                        confirmButtonText: "نعم، احذف!",
                        cancelButtonText: "إلغاء"
                    }).then((result) => {
                        if (result.isConfirmed) {
                            form.submit();
                        }
                    });
                });
            });
        });
    </script>
@endsection
