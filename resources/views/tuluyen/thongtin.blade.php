@extends('tuluyen')

@section('title')
<title>Thông Tin Cá Nhân - Tu Tiên Giới</title>
<base href="{{asset('')}}">
@endsection
@section('content')
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                    <i class="fa fa-heart text-danger icon-sm"></i>
                    </div>
                    <div class="float-right">
                      <p class="mb-0 text-success">Sinh Lực</p>
                      <div class="fluid-container">
                        <h3 class="font-weight-medium text-secondary mb-0">321342</h3>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                    <i class="fa fa-tint text-primary icon-sm"></i>
                    </div>
                    <div class="float-right">
                      <p class="mb-0 text-success">Linh Lực</p>
                      <div class="fluid-container">
                        <h3 class="font-weight-medium text-secondary mb-0">2462342</h3>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                    <i class="mdi mdi-sword text-warning icon-sm"></i>
                    </div>
                    <div class="float-right">
                      <p class="mb-0 text-success">Vật Lý</p>
                      <div class="fluid-container">
                        <h3 class="font-weight-medium text-secondary mb-0">2462342</h3>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                    <i class="fa fa-magic text-info icon-sm"></i>
                    </div>
                    <div class="float-right">
                      <p class="mb-0 text-success">Ma Pháp</p>
                      <div class="fluid-container">
                        <h3 class="font-weight-medium text-secondary mb-0">2462342</h3>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                    <i class="fa fa-shield text-dark icon-sm"></i>
                    </div>
                    <div class="float-right">
                      <p class="mb-0 text-success">Giáp</p>
                      <div class="fluid-container">
                        <h3 class="font-weight-medium text-secondary mb-0">2462342</h3>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                    <i class="mdi mdi-checkbox-blank-circle text-dark icon-sm"></i>
                    </div>
                    <div class="float-right">
                      <p class="mb-0 text-success">Kháng Phép</p>
                      <div class="fluid-container">
                        <h3 class="font-weight-medium text-secondary mb-0">2462342</h3>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-6 grid-margin stretch-card">
                <div class="card card-statistics">
                    <div class="card-body">
                        <div class="mb-0 text-info" data-toggle="collapse" href="#thong-tin" aria-expanded="false" aria-controls="thong-tin">
                            Thông Tin Chi Tiết
                        </div>
                        <div class="row collapse" id="thong-tin">
                            <table class="table">
                                <tbody>
                                    <tr>
                                    <td class="text-muted">Tên Nhân Vật</td>
                                    <td class="text-dark">Thiên Tà</td>
                                    </tr>
                                    <tr>
                                    <td class="text-muted">Thuộc Tính</td>
                                    <td class="text-dar k">Hỏa && Mộc</td>
                                    </tr>
                                    <tr>
                                    <td class="text-muted">Giới Tính</td>
                                    <td class="text-dark">Nam</td>
                                    </tr>
                                    <tr>
                                    <td class="text-muted">Gia Tộc</td>
                                    <td class="text-dark">Tiếu Gia</td>
                                    </tr>
                                    <tr>
                                    <td class="text-muted">Tông Môn - Bang Hội</td>
                                    <td class="text-dark">Ngạo Thiên Tông</td>
                                    </tr>
                                    <tr>
                                    <td class="text-muted">Quốc Gia</td>
                                    <td class="text-dark">Hỏa Quốc</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h2 class="card-title text-primary mb-5">Tiến Độ Tu Luyện</h2>
                  <div class="wrapper mt-4">
                    <div class="d-flex justify-content-between">
                      <p class="mb-2">Tu Vi</p>
                      <p class="mb-2">Tiên Đế Hậu Kỳ</p>
                      <p class="mb-2 text-success">56%</p>
                    </div>
                    <div class="progress">
                      <div class="progress-bar bg-success progress-bar-striped progress-bar-animated" role="progressbar" style="width: 56%" aria-valuenow="56"
                        aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="d-flex text-muted justify-content-center">
                        <p class="mb-2">123 </p>
                        <p class="mb-2"> &nbsp;/&nbsp; </p>
                        <p class="mb-2"> 1231</p>
                    </div>
                  </div>
                  <div class="wrapper mt-4">
                    <div class="d-flex justify-content-between">
                      <p class="mb-2">Thể Chất</p>
                      <p class="mb-2">Thánh Thể Tiểu Thành</p>
                      <p class="mb-2 text-info">56%</p>
                    </div>
                    <div class="progress">
                      <div class="progress-bar bg-info progress-bar-striped progress-bar-animated" role="progressbar" style="width: 56%" aria-valuenow="56"
                        aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="d-flex text-muted justify-content-center">
                        <p class="mb-2">123 </p>
                        <p class="mb-2"> &nbsp;/&nbsp; </p>
                        <p class="mb-2"> 1231</p>
                    </div>
                  </div>
                  <div class="wrapper mt-4">
                    <div class="d-flex justify-content-between">
                      <p class="mb-2">Huyết Mạch</p>
                      <p class="mb-2">Bàn Cổ Chi Huyết</p>
                      <p class="mb-2 text-danger">90%</p>
                    </div>
                    <div class="progress">
                      <div class="progress-bar bg-danger progress-bar-striped progress-bar-animated" role="progressbar" style="width: 90%" aria-valuenow="90"
                        aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="d-flex text-muted justify-content-center">
                        <p class="mb-2">123 </p>
                        <p class="mb-2"> &nbsp;/&nbsp; </p>
                        <p class="mb-2"> 1231</p>
                    </div>
                  </div>
                  <div class="wrapper mt-4">
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
                  <div class="wrapper mt-4">
                    <div class="d-flex justify-content-between">
                      <p class="mb-2">Linh Hồn</p>
                      <p class="mb-2">Đế Cảnh</p>
                      <p class="mb-2 text-dark">70%</p>
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
                  </div>
                </div>
              </div>
            </div>
          </div>
@endsection
