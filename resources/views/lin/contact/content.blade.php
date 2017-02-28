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
		</div>
        <div class="row">
            <div class="col-md-6">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do tempor.</p>

            <!-- Form itself -->
            <form name="sentMessage" id="contactForm"  novalidate>
                <h3>Contact me</h3>
                <div class="control-group">
                    <div class="controls">
                        <input type="text" class="form-control" 
                        placeholder="Full Name" id="name" required
                        data-validation-required-message="Please enter your name" />
                        <p class="help-block"></p>
                    </div>
                </div> 	
                <div class="control-group">
                    <div class="controls">
                        <input type="email" class="form-control" placeholder="Email" 
                        id="email" required
                        data-validation-required-message="Please enter your email" />
                    </div>
                </div> 	

                <div class="control-group">
                    <div class="controls">
                        <textarea rows="10" cols="100" class="form-control" 
                        placeholder="Message" id="message" required
                        data-validation-required-message="Please enter your message" minlength="5" 
                        data-validation-minlength-message="Min 5 characters" 
                        maxlength="999" style="resize:none"></textarea>
                    </div>
                </div> 		 
                <div id="success"> </div> <!-- For success/fail messages -->
                <button type="submit" class="btn btn-primary pull-right">Send</button><br />
            </form>
        </div>
        <div class="col-md-6">
            <script src="https://maps.googleapis.com/maps/api/js?key={{ config('settings.maps_api') }}&language=ua"
                    type="text/javascript">
            </script>
            <div style="overflow:hidden;height:500px;width:600px;"><div id="gmap_canvas" style="height:500px;width:600px;"></div>
                <style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
                <a class="google-map-code" href="http://www.trivoo.net" id="get-map-data">trivoo</a>
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