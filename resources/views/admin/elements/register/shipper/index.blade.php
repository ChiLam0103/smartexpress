@extends('admin.app')

@section('title')
    Shipper
@endsection

@section('sub-title')
    danh sách đăng ký
@endsection

@section('content')
    <div class="row">
        @include('admin.partial.log.err_log',['name' => 'delete'])
        @include('admin.partial.log.success_log',['name' => 'success'])
        <div class="col-lg-12">
            @include('admin.table', [
               'id' => 'shipper_register',
               'title' => [
                       'caption' => 'Dữ liệu shipper mới đăng ký',
                       'icon' => 'fa fa-table',
                       'class' => 'portlet box green',
               ],
               'url' => url("/ajax/register/shipper"),
               'columns' => [
                       ['data' => 'id', 'title' => 'Mã'],
                       ['data' => 'name', 'title' => 'Tên'],
                       ['data' => 'email', 'title' => 'Email'],
                       ['data' => 'birth_day', 'title' => 'Ngày sinh'],
                       ['data' => 'id_number', 'title' => 'Số CMND'],
                       ['data' => 'phone_number', 'title' => 'Số điện thoại'],
                       ['data' => 'address', 'title' => 'Địa chỉ'],
                       ['data' => 'bank_account', 'title' => 'Tên chủ khoản'],
                       ['data' => 'bank_account_number', 'title' => 'Số tài khoản'],
                       ['data' => 'bank_name', 'title' => 'Ngân hàng'],
                       ['data' => 'bank_branch', 'title' => 'Chi nhánh'],
                       ['data' => 'action', 'title' => 'Hành động'],
                   ]
               ])
        </div>
    </div>
@endsection
