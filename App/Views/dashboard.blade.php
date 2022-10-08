<!-- Kế thừa lại layout master -->
@extends('layouts.master')

<!-- Truyền giá trị cho những phần thay đổi -->
<!-- yield(tên)  ~ section(tên, giá trị) -->
@section('title', 'DashBoard')

<!-- yield(tên) ~ section(tên) nội dung endsection -->
@section('content-title', 'DashBoard')
@section('content')
<h2>DashBoard</h2>
@endsection
