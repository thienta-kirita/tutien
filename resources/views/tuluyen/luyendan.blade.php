@extends('tuluyen')

@section('title')
<title>Luyện Đan Sư - Tu Tiên Giới</title>
<base href="{{asset('')}}">
<script src="js/tuchat.js"></script>
@endsection

@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-6 grid-margin stretch-card">
                <div class="card card-statistics">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <p class="mb-2">Phẩm Bậc</p>
                            <p class="mb-2">Cửu Phẩm Luyện Dược Sư</p>
                            <p class="mb-2 text-success">70%</p>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-success progress-bar-striped progress-bar-animated" role="progressbar" style="width: 70%" aria-valuenow="70"
                                aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="d-flex text-muted justify-content-center">
                                <p class="mb-2">123 </p>
                                <p class="mb-2"> &nbsp;/&nbsp; </p>
                                <p class="mb-2">1231</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <h3 class="col-xl-12">Đan Phương Đã Học</h3>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 grid-margin stretch-card">
                <div class="card card-statistics">
                    <div class="card-body">
                        <div class="clearfix">
                            <div class="float-left">
                                <a href="" class="mb-0 text-right" data-toggle="modal" data-target="#danphuonghoc">Thánh Nguyên Đan</a>

                            </div>
                            <div class="modal" id="danphuonghoc">
                                <div class="modal-dialog bg-white">
                                    <div class="modal-content">

                                        <div class="modal-header">
                                            <h4 class="text-warning modal-title">Thánh Nguyên Đan</h4>
                                        </div>

                                        <div class="modal-body">
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <td class="text-muted">Tên Đan Phương</td>
                                                        <td class="text-dark">Thánh Nguyên Đan Phương</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-muted">Phẩm Chất</td>
                                                        <td class="text-dar k">Cửu Phẩm Sơ Giai Đan Dược</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-muted">Giới Thiệu</td>
                                                        <td class="text-dark">Đỉnh Cấp Đan Dược, sử dụng lập túc thành Thánh.</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        <div class="modal-footer">
                                            <button type="button" data-toggle="modal" data-target="#luyenduoc" data-dismiss="modal" class="btn btn-primary">Luyện Dược</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <h3 class="col-xl-12">Đan Phương Trong Túi</h3>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 grid-margin stretch-card">
                <div class="card card-statistics">
                    <div class="card-body">
                        <div class="clearfix">
                            <div class="float-left">
                                <a href="" class="mb-0 text-right" data-toggle="modal" data-target="#danphuongtui">Sinh Tử Luân Hồi Đan</a>

                            </div>
                            <div class="modal" id="danphuongtui">
                                <div class="modal-dialog bg-white">
                                    <div class="modal-content">

                                        <div class="modal-header">
                                            <h4 class="text-warning modal-title">Sinh Tử Luân Hồi Đan</h4>
                                        </div>

                                        <div class="modal-body">
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <td class="text-muted">Tên Đan Phương</td>
                                                        <td class="text-dark">Sinh Tử Luân Hồi Đan</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-muted">Phẩm Chất</td>
                                                        <td class="text-dar k">Tiên Phẩm Sơ Giai Đan Dược</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-muted">Giới Thiệu</td>
                                                        <td class="text-dark">Sử Dung lập tức luân hồi</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        <div class="modal-footer">
                                            <button type="button" data-toggle="modal" data-target="#luyenduoc" data-dismiss="modal" class="btn btn-primary">Luyện Dược</button>
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
