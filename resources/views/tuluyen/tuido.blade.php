@extends('tuluyen')

@section('title')
<title>Túi Đồ - Tu Tiên Giới</title>
<base href="{{asset('')}}">
<script src="js/tuchat.js"></script>
@endsection

@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
        @for ($i = 0; $i < 12; $i++)
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 grid-margin stretch-card">
                <div class="card card-statistics">
                    <div class="card-body">
                        {{$i}}
                    </div>
                </div>
            </div>
        @endfor
        </div>
    </div>
</div>
@endsection
