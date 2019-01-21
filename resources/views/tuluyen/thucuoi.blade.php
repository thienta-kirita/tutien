@extends('tuluyen')

@section('title')
<title>Thú Cưỡi - Tu Tiên Giới</title>
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
                      <p class="mb-2">Trưởng Thành Kỳ</p>
                      <p class="mb-2">Ngũ Trảo Kim Long</p>
                      <p class="mb-2 text-danger">70%</p>
                    </div>
                    <div class="progress">
                      <div class="progress-bar bg-danger progress-bar-striped progress-bar-animated" role="progressbar" style="width: 70%" aria-valuenow="70"
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

        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-6 grid-margin stretch-card">
                <div class="card card-statistics">
                    <div class="card-body">
                        <div class="mb-0 text-info" data-toggle="collapse" href="#thong-tin" aria-expanded="false" aria-controls="thong-tin">
                            Thông Tin Công Pháp
                        </div>

                        <div class="row collapse" id="thong-tin">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td class="text-muted">Tên Thú Cưỡi</td>
                                        <td class="text-dark">Ngũ Trảo Kim Long</td>
                                    </tr>
                                    <tr>
                                        <td class="text-muted">Thuộc Tính</td>
                                        <td class="text-dark">Kim Thuộc Tính</td>
                                    </tr>
                                    <tr>
                                        <td class="text-muted">Cấp Bậc</td>
                                        <td class="text-dark">Thần Thú</td>
                                    </tr>
                                    <tr>
                                        <td class="text-muted">Giới Thiệu</td>
                                        <td class="text-dark">Vương Giả Long Tộc</td>
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
@endsection
