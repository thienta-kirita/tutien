@extends('tuluyen')

@section('title')
<title>Luyện Khí Sư - Tu Tiên Giới</title>
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
                            <p class="mb-2">Tiên Phẩm Luyện Khí Sư</p>
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

            <h3 class="col-xl-12">Chế Tạo Đồ Đã Học</h3>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 grid-margin stretch-card">
                <div class="card card-statistics">
                    <div class="card-body">
                        <div class="clearfix">
                            <div class="float-left">
                                <a href="" class="mb-0 text-right" data-toggle="modal" data-target="#chetaohoc">Tru Tiên Kiếm Chế Tạo Đồ</a>

                            </div>
                            <div class="modal" id="chetaohoc">
                                <div class="modal-dialog bg-white">
                                    <div class="modal-content">

                                        <div class="modal-header">
                                            <h4 class="text-warning modal-title">Tru Tiên Kiếm Chế Tạo Đồ</h4>
                                        </div>

                                        <div class="modal-body">
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <td class="text-muted">Thành Phẩm</td>
                                                        <td class="text-dark">Tru Tiên Kiếm</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-muted">Phẩm Chất</td>
                                                        <td class="text-dar k">Hậu Thiên Linh Bảo</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-muted">Giới Thiệu</td>
                                                        <td class="text-dark">Phỏng Chế Phẩm Tru Tiên Kiếm Trận.</td>
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

            <h3 class="col-xl-12">Chế Tạo Đồ Trong Túi</h3>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 grid-margin stretch-card">
                <div class="card card-statistics">
                    <div class="card-body">
                        <div class="clearfix">
                            <div class="float-left">
                                <a href="" class="mb-0 text-right" data-toggle="modal" data-target="#chetaotui">Hiên Viên Kiếm Chế Tạo Đồ</a>

                            </div>
                            <div class="modal" id="chetaotui">
                                <div class="modal-dialog bg-white">
                                    <div class="modal-content">

                                        <div class="modal-header">
                                            <h4 class="text-warning modal-title">Hiên Viên Kiếm Chế Tạo Đồ</h4>
                                        </div>

                                        <div class="modal-body">
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <td class="text-muted">Thành Phẩm</td>
                                                        <td class="text-dark">Hiên Viên Kiếm</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-muted">Phẩm Chất</td>
                                                        <td class="text-dar k">Thánh Phẩm Bảo Vật</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-muted">Giới Thiệu</td>
                                                        <td class="text-dark">Một Trong Thập Đại Bảo Vật</td>
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
