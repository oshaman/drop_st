<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="pageTitle">Contact Us</h2>
			</div>
		</div>
	</div>
</section>
<section id="content">
	<div class="container">
		<div class="row"> 
            <div class="col-md-12">
                <div class="about-logo">
                    <h3>Voluptatem Accusantium Doloremque</h3>
                    <p>Sed ut perspiciaatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas</p>
                    <p>Sed ut perspiciaatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas</p>
                </div>  
            </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do tempor.</p>
		</div>
        <div class="row">
            <div class="col-md-6">

        @if (count($errors) > 0)
            <div class="box-area box">
                
            @foreach ($errors->all() as $error)
                <p class="text-danger">{{ $error }}</p>
            @endforeach
   
            </div>
        @endif
        @if (session('status'))
            <div  class="box-area box">  <!-- For success/fail messages -->
                <h3 class="text-success">{{ session('status') }}</h3>
            </div>
        @endif
            
            <!-- Form itself -->
            <form name="sentMessage" id="contactForm"  method="post" action="{{ route('contacts') }}" enctype="multipart/form-data" novalidate>
                {{ csrf_field() }}
                <h3>Contact me</h3>
                <div class="control-group">
                    <div class="controls">
                        <input type="text" class="form-control" 
                        placeholder="Full Name" id="name" name="name" value="{{ old('name') }}" required />
                        <p class="help-block"></p>
                    </div>
                </div> 	
                <div class="control-group">
                    <div class="controls">
                        <input type="email" class="form-control" placeholder="Email" 
                        id="email"  value="{{ old('email') }}" name="email" required />
                    </div>
                </div> 	

                <div class="control-group">
                    <div class="controls">
                        <textarea rows="10" cols="100" class="form-control"
                        placeholder="Message" id="message" required minlength="5" name="text" 
                        maxlength="999" style="resize:none">{{ old('text') ?? '' }}</textarea>
                    </div>
                </div>
                <p class="help-block"></p>
                <!-- Captcha -->
                <div class="form-group">
                <button type="submit" class="btn btn-primary pull-right">Send</button>
                    <div class="g-recaptcha" data-sitekey="6LdnXxkUAAAAACrXl92Wjn97T7m9tQhk09C1DSd_"></div>
                </div>
            </form>
        </div>
        <div class="col-md-6">
            <script src="https://maps.googleapis.com/maps/api/js?key={{ config('settings.maps_api') }}&language=ua"
                    type="text/javascript">
            </script>
            <div style="overflow:hidden;height:500px;width:600px;"><div id="gmap_canvas" style="height:500px;width:600px;"></div>
            </div>
            <script type="text/javascript">
                function init_map(){var myOptions = {
                        zoom:14,center:new google.maps.LatLng(50.395870, 30.647371),
                        mapTypeId: google.maps.MapTypeId.ROADMAP};
                        map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);
                        marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(50.395870, 30.647371)});
                        infowindow = new google.maps.InfoWindow({content:"<b>OShaman</b><br/>Darnica<br/> Kyiv" });
                        google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});
                        infowindow.open(map,marker);}
                        google.maps.event.addDomListener(window, 'load', init_map);
            </script>
        </div>
        </div>
	</div>
</section>