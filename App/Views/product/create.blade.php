<!-- Kế thừa lại layout master -->
@extends('layouts.master')

<!-- Truyền giá trị cho những phần thay đổi -->
<!-- yield(tên)  ~ section(tên, giá trị) -->
@section('title', 'Thêm sản phẩm')

<!-- yield(tên) ~ section(tên) nội dung endsection -->
@section('content-title', 'Danh sách sản phẩm')
@section('content')
<div class="addProducts contain">
    <div class="addProducts__Content">
        <div class="addProducts__title">
            <h5>Thêm sản phẩm</h5>
        </div>
        <div class="addProducts_form">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="exampleInputEmail1">Mã sản phẩm</label>
                    <input type="number" class="form-control" disabled id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="auto number">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Tên sản phẩm</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="tenks" aria-describedby="emailHelp" placeholder="">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Số lượng</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="tenks" aria-describedby="emailHelp" placeholder="">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Mô tả</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="tenks" aria-describedby="emailHelp" placeholder="">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Ảnh</label>
                    <input type="file" class="form-control" id="exampleInputEmail1" name="tenks" aria-describedby="emailHelp" placeholder="">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Giá</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="tenks" aria-describedby="emailHelp" placeholder="">
                </div>
                <input type="submit" name="themmoi" value="Thêm mới" class="btn btn-success">
                <button type="reset" class="btn btn-danger">Nhập lại</button>
                <a href="{{ BASE_URL }}product/show "><button type="button" class="btn btn-info">Danh sách</button></a>
            </form>
        </div>
    </div>
</div>
@endsection