
@extends('layouts.frontend')

@section('content')
    @include('layouts.frontend_particals.slider')
    <div class="row body-content">
        <div class="col-md-8">
        <iframe src="{{ SettingHelper::setting('url_map') }}" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        <div class="col-md-4">
			<span class="font-text-15"><b>Trung tâm anh văn TOEIC LN</b></span><br/><br>
            <span><b>Cơ sở 1: </b>274/7 Nguyễn Văn Nghi, phường 7, Gò Vấp, TP.HCM</span><br/>
			<span><b>Cơ sở 2: </b>76/16 Lê Lợi, phường 4, Gò Vấp, TP.HCM</span><br/>
            <span><b>Hotline:</b> 0986 575 189 - 0366 751 757 </span><br>
            <span><b>Email:</b> thanhnghiep9086@gmail.com </span><br>
            
        </div>
    </div>
    @include('layouts.frontend_particals.footer')
@endsection