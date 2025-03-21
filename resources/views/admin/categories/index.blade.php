@extends('layouts.admin')

@section('content')
<div class="mt-4">
    <a href="{{ route('categories.create') }}" class="btn btn-outline-success mb-3">إضافة صنف جديد</a>

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

    <table class="table table-dark table-striped table-hover text-center">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">اسم الصنف</th>
            <th scope="col">الإجراءات</th>
          </tr>
        </thead>
        <tbody>
          @foreach($categories as $category)
          <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $category->name }}</td>
            <td>
                <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-outline-warning btn-sm">تعديل</a>
                <form action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display:inline-block;">
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
@endsection
