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
    @if(!isset($items))
    <table class="table table-bordered table-hover">
        <thead class="thead">
            <tr><th>PIC</th><th>Описание</th><th>ASIN</th><th>Цена продажи</th><th>ID</th><th>Цена закупки</th><th>Доставка</th><th>Наличие</th><th>Прибыль</th><th>Delete</th></tr>
        <tbody>
            <tr >
                <td>test</td>
                <td>test</td>
                <td>test</td>
                <td>test</td>
                <td>test</td>
                <td>test</td>
                <td>test</td>
                <td>test</td>
                <td>test</td>
                <td>test</td>
            </tr>
        </tbody>
        </thead>
    </table>
    @else
    <!-- Form -->
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">Add new item</div>
                <div class="panel-body">
                    
                    <form novalidate class="form-horizontal" role="form" method="POST" action="{{ route('services') }}">
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
    @endif
</div>
</section>
