<footer>
    <div class="footer" id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 first-footer">
                    <img class="logo" src="{{ config('blog.default_logo') }}" alt="Logo">   
                </div>
                <div class="col-md-4 second-footer">
                    <h3> {{ SettingHelper::setting('page_title') }} </h3>
                    @foreach(WidgetHelper::contacts() as $contact)
                        <span>{{ $contact->officename }} : {{ $contact->address }}</span><br/>
						<span> Cơ sở 2: 76/16 Lê Lợi, phường 4, Gò Vấp TP.HCM </span><br/>
                    @endforeach
                    @foreach(WidgetHelper::contacts() as $contact)
                        <span>Hotline : {{ $contact->phonenumber }}</span><br/>
                    @endforeach
                </div>
                <div class="col-md-4">
                    <h3> Theo dõi chúng tôi </h3>
                    <ul class="social-nav">
                        <li><a href="{{ SettingHelper::setting('facebook_link') }}" target="_blank" title="Facebook" rel="nofollow" class="facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="{{ SettingHelper::setting('twitter_link') }}" target="_blank" title="Twitter" rel="nofollow" class="twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="{{ SettingHelper::setting('google_link') }}" target="_blank" title="Google plus" rel="nofollow" class="google"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="{{ SettingHelper::setting('rss_link') }}" target="_blank" title="Rss" rel="nofollow" class="rss"><i class="fa fa-rss"></i></a></li>
                    </ul>
                </div>
            </div>
            <!--/.row-->
        </div>
        <!--/.container-->
    </div>
    <!--/.footer-->

    <div class="footer-bottom">
        <div class="container">
            <p class="pull-left"> Copyright © 2017, Toeic LN. All rights reserved.</p>
        </div>
		
		<!--<div id="myModal" class="modal fade" role="dialog">
		  <div class="modal-dialog">
			<div class="modal-content">
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			  </div>
			  <div class="modal-body">
				<img style="width: 100%;" src="http://toeicln.edu.vn/storage/images/images/25990581_1662508777176344_797449145_n.png" / alt="">
			  </div>
			</div>
		  </div>
		</div>-->
		
		
		
    </div>
    <!--/.footer-bottom-->
</footer>