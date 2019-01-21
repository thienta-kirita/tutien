@extends('tuluyen')

@section('title')
<title>Công Pháp - Tu Tiên Giới</title>
<base href="{{asset('')}}">
@endsection

@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-6 grid-margin stretch-card">
                <div class="card card-statistics">
                    <div class="card-body">
                    <div class="d-flex justify-content-between">
                      <p class="mb-2">Công Pháp</p>
                      <p class="mb-2">Cửu Cực Huyền Công</p>
                      <p class="mb-2 text-warning">70%</p>
                    </div>
                    <div class="progress">
                      <div class="progress-bar bg-warning progress-bar-striped progress-bar-animated" role="progressbar" style="width: 70%" aria-valuenow="70"
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
                                        <td class="text-muted">Tên Công Pháp</td>
                                        <td class="text-dark">Cửu Cực Huyền Công</td>
                                    </tr>
                                    <tr>
                                        <td class="text-muted">Thuộc Tính</td>
                                        <td class="text-dark">Hỏa Thuộc Tính</td>
                                    </tr>
                                    <tr>
                                        <td class="text-muted">Phẩm Chất</td>
                                        <td class="text-dark">Thiên Giai Đỉnh Cấp Công Pháp</td>
                                    </tr>
                                    <tr>
                                        <td class="text-muted">Giới Thiệu</td>
                                        <td class="text-dark">Là Đỉnh Cấp Công Pháp Luyện Thể Chất</td>
                                    </tr>
                                </tbody>
                            </table>

                            <button data-toggle="modal" data-target="#bequan" class="btn btn-primary">Đả Tọa</button>

                            <div class="modal fade" data-backdrop="static" id="bequan">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Đả Tỏa</h4>
                                        </div>
                                        <div class="modal-body">
                                            <div>
                                                <input class="form-control" type="text" min="0" id="h_val" placeholder="0" value="0"/>
                                                <input class="form-control" type="text" min="0" id="m_val" placeholder="0" value="0"/>
                                                <input class="form-control" type="text" min="0" id="s_val" placeholder="0" value="0"/>
                                                <input class="form-control bg-secondary" type="button" value="Start" onclick="start()"/>
                                                <input class="form-control bg-warning" type="button" value="Stop" onclick="stop()"/> <br>
                                            </div>

                                            <div class="d-flex justify-content-around">
                                                <p class="mb-2" id="h">Giờ </p> ----
                                                <p class="mb-2" id="m">Phút </p> ----
                                                <p class="mb-2" id="s">Giây </p>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Công Pháp Hiệu Quả</h4>
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                    <th>Cấp Bậc</th>
                                    <th>Điểm Tiềm Năng</th>
                                    <th>Lực Lương</th>
                                    <th>Thể Chất</th>
                                    <th>Nhanh Nhẹn</th>
                                    <th>Trí Tuệ</th>
                                    <th>Tinh Thần</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <td>Nhập Môn</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    </tr>
                                    <tr>
                                        <td>Tiểu Thành</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Đại Thành</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Lô Hỏa Thuần Thanh</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Đăng Phong Tạo Cực</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <h3 class="col-xl-12">Công Pháp Đang Có</h3>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                    <a href="" class="mb-0 text-right" data-toggle="modal" data-target="#congphap">Càn Khôn Luyện Thiên</a>

                    </div>
                    <div class="modal" id="congphap">
                        <div class="modal-dialog bg-white">
                            <div class="modal-content">
                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="text-warning modal-title">Càn Khôn Luyện Thiên</h4>
                            </div>
                            <!-- Modal body -->
                            <div class="modal-body">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td class="text-muted">Tên Công Pháp</td>
                                            <td class="text-dark">Cửu Cực Huyền Công</td>
                                        </tr>
                                        <tr>
                                            <td class="text-muted">Thuộc Tính</td>
                                            <td class="text-dar k">Hỏa Thuộc Tính</td>
                                        </tr>
                                        <tr>
                                            <td class="text-muted">Phẩm Chất</td>
                                            <td class="text-dark">Thiên Giai Đỉnh Cấp Công Pháp</td>
                                        </tr>
                                        <tr>
                                            <td class="text-muted">Giới Thiệu</td>
                                            <td class="text-dark">Là Đỉnh Cấp Công Pháp Luyện Thể Chất</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary">Tu Luyện</button>
                            </div>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
              <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
@endsection
