@extends('tuluyen')

@section('title')
<title>Kỹ Năng - Tu Tiên Giới</title>
<base href="{{asset('')}}">
@endsection

@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-6 grid-margin stretch-card">
                <div class="card card-statistics">
                    <div class="card-body">
                        <div class="d-flex justify-content-between" data-toggle="modal" data-target="#kynang">
                            <p class="mb-2">Hỏa Chi Thuộc Tính</p>
                            <p class="mb-2">Bị Động</p>
                            <p class="mb-2 text-muted">70%</p>                      
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-dark progress-bar-striped progress-bar-animated" role="progressbar" style="width: 70%" aria-valuenow="70"
                            aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="d-flex text-muted justify-content-center">
                            <p class="mb-2">123 </p>
                            <p class="mb-2"> &nbsp;/&nbsp; </p>
                            <p class="mb-2">1231</p>
                        </div>

                        <div class="modal" id="kynang">
                            <div class="modal-dialog bg-white">
                                <div class="modal-content">
                                <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="text-warning modal-title">Hỏa Chi Thuộc Tính</h4>
                                    </div>
                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <td class="text-muted">Tên Kỹ Năng</td>
                                                    <td class="text-dark">Hỏa Chi Thuộc Tính</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-muted">Cấp Bậc</td>
                                                    <td class="text-dar k">Đại Thành</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-muted">Phẩm Chất</td>
                                                    <td class="text-dark">Thiên Giai Đỉnh Cấp Kỹ Năng</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-muted">Tác Dụng</td>
                                                    <td class="text-dark">Tăng 10% dame</td>
                                                </tr>
                                            </tbody>
                                        </table>
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
