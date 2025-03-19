@extends('layouts.admin')
@section('content')
  <div class="mt-4">
    <table class="table table-dark table-striped table-hover text-center">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">اسم الصنف</th>
            <th scope="col">الإجراءات</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th>{{ $loop->iteration }}</th>
            <td>{{ $product->name }}</td>
            <td>{{ $product->category }}</td>
            <td>{{ $product->price }} $</td>
            <td>{{ $product->quantity }}</td>
            <td>
                <a href="#" class="btn btn-outline-danger btn-sm">حذف</a>
                <a href="#" class="btn btn-outline-warning btn-sm">تعديل</a>
            </td>
          </tr>
        </tbody>
      </table>
  </div>
@endsection
