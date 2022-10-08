<!-- Kế thừa lại layout master -->
@extends('layouts.master')

<!-- Truyền giá trị cho những phần thay đổi -->
<!-- yield(tên)  ~ section(tên, giá trị) -->
@section('title', 'Thời trang nữ')

<!-- yield(tên) ~ section(tên) nội dung endsection -->
@section('content-title', 'Hello')
@section('content')
Hello anh em đã đến shop quần áo nữ

@endsection
