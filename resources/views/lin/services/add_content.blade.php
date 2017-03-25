<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="pageTitle">Services</h2>
			</div>
		</div>
	</div>
</section>
<section id="content">
<div class="container">

    <!-- Form -->
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">Add new item</div>
                <div class="panel-body">
                    
                   <form class="form-horizontal" role="form"  method="post" action="{{ route('add') }}" enctype="multipart/form-data" novalidate>
                    {{ csrf_field() }}
                        <div class="form-group">
                        
                            <label for="addItem" class="col-md-4 control-label">ASIN</label>

                            <div class="col-md-6">
                                <input id="addItem" type="text" class="form-control" name="addItem" autofocus required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Add
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Form -->
</div>
</section>