<!-- Kế thừa lại layout master -->
@extends('layouts.master')

<!-- Truyền giá trị cho những phần thay đổi -->
<!-- yield(tên)  ~ section(tên, giá trị) -->
@section('title', 'Danh sách sản phẩm')

<!-- yield(tên) ~ section(tên) nội dung endsection -->
@section('content-title', 'Danh sách sản phẩm')
@section('content')
<table class="table">
    <thead>
      <tr>
        <th scope="col">STT</th>
        <th scope="col">Tên</th>
        <th scope="col">Giá</th>
        <th scope="col">Ảnh</th>
        <th scope="col">Số lượng</th>
        <th scope="col">Chi tiết</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Váy</td>
        <td>1500000</td>
        <td><img src="{{ BASE_URL }}public/image/vayx.jpg" width="100" alt=""></td>
        <td>5</td>
        <td><a class="text-primary" href="{{ BASE_URL }}product/detail">Chi tiết</a></td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Váy</td>
        <td>1500000</td>
        <td><img src="{{ BASE_URL }}public/image/vayx.jpg" width="100" alt=""></td>
        <td>5</td>
        <td><a class="text-primary" href="{{ BASE_URL }}product/detail">Chi tiết</a></td>
      </tr>
    </tbody>
  </table>
  <a href="{{ BASE_URL }}product/create"><button type="button" class="btn btn-primary">Thêm sản phẩm</button></a>


@endsection
