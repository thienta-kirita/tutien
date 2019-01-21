@extends('tuluyen')

@section('title')
<title>Tư Chất - Tu Tiên Giới</title>
<base href="{{asset('')}}">
<script src="js/tuchat.js"></script>
@endsection

@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 grid-margin stretch-card">
                <div class="card card-statistics">
                    <div class="card-body">
                        <form action="" method="">
                            <table class="table table-hover">
                                <tbody>
                                    <tr>
                                        <td><label class="label">Lực Lượng</label></td>
                                        <td>12</td>
                                        <td><input style="width: 60px" name="dLuc" id="dLuc" class="form-control" type="number" max="" min="0" value="0" onclick="tangdiem()"></td>
                                    </tr>
                                    <tr>
                                        <td><label class="label">Thể Chất</label></td>
                                        <td>12</td>
                                        <td><input style="width: 60px" name="dThe" id="dThe" class="form-control" type="number" max="" min="0" value="0" onclick="tangdiem()"></td>
                                    </tr>
                                    <tr>
                                        <td><label class="label">Nhanh Nhẹn</label></td>
                                        <td>12</td>
                                        <td><input style="width: 60px" name="dNhanh" id="dNhanh" class="form-control" type="number" max="" min="0" value="0" onclick="tangdiem()"></td>
                                    </tr>
                                    <tr>
                                        <td><label class="label">Trí Tuệ</label></td>
                                        <td>12</td>
                                        <td><input style="width: 60px" name="dTri" id="dTri" class="form-control" type="number" max="" min="0" value="0" onclick="tangdiem()"></td>
                                    </tr>
                                    <tr>
                                        <td><label class="label">Tinh Thần</label></td>
                                        <td>12</td>
                                        <td><input style="width: 60px" name="dThan" id="dThan" class="form-control" type="number" max="" min="0" value="0" onclick="tangdiem()"></td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="d-flex justify-content-around">
                                <label>Điểm Tiềm Năng</label>
                                <input id="m_dtn" type="hidden" value="5">
                                <span id="o_dtn">5</span>
                                <input type="button" class="btn btn-secondary" value="Xác Nhận">
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 grid-margin stretch-card">
                <div class="card card-statistics">
                    <div class="card-body">
                        <h4 class="card-title text-info">Ghi Chú</h4>
                        <p class="text-left">Lực Lượng giúp tăng mạnh điểm tấn công vật lý.</p>
                        <p class="text-left">Thể Chất tăng điểm sinh lực cùng giáp, kháng phép.</p>
                        <p class="text-left">Nhanh Nhẹn tăng tốc độ, bạo kích.....</p>
                        <p class="text-left">Trí Tuệ tăng điểm tấn công ma pháp và một ít linh lực.</p>
                        <p class="text-left">Tinh Thần tăng mạnh linh lực cùng kháng phép.</p>
                        <p class="text-left">Điểm Tự Do dùng để phân phối Ngũ Đại Thuộc Tính.</p>
                        <p class="text-left">Điểm Tự Do nhận được qua đột phá cảnh giới.</p>
                        <p class="text-left">Mỗi phẩm chất công pháp khác nhau thì được mỗi điểm tự do khác nhau.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
