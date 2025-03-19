@extends('layouts.admin')
@section('content')
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
          <tr>
            <th scope="row">1</th>
            <td>مثال منتج</td>
            <td>ملابس</td>
            <td>100 جنيه</td>
            <td>10</td>
            <td>
                <a href="#" class="btn btn-outline-danger btn-sm">حذف</a>
                <a href="#" class="btn btn-outline-warning btn-sm">تعديل</a>
            </td>
          </tr>
        </tbody>
      </table>
  </div>
@endsection
