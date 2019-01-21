@extends('tuluyen')

@section('title')
<title>Thiên Tài Địa Bảo - Tu Tiên Giới</title>
<base href="{{asset('')}}">
@endsection

@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-xl-4 col-lg-12 col-md-12 col-sm-6 grid-margin stretch-card">
                <div class="card card-statistics">
                    <div class="card-body">
                        <div class="d-flex justify-content-between" data-toggle="modal" data-target="#kynang">
                            <p class="mb-2">Long Nguyên</p>
                            <p class="mb-2">Tiên Phẩm</p>
                        </div>

                        <div class="modal" id="kynang">
                            <div class="modal-dialog bg-white">
                                <div class="modal-content">
                                <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="text-warning modal-title">Long Nguyên</h4>
                                    </div>
                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <td class="text-muted">Phẩm Chất</td>
                                                    <td class="text-dark">Tiên Phẩm Sơ Giai</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-muted">Tác Dụng</td>
                                                    <td class="text-dark">Tăng 10 năm tu luyện</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary">Sử Dụng</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
