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
    @if($items->isNotEmpty())
    {{ dump($items) }}
    <table class="table table-bordered table-hover">
        <thead class="thead">
            <tr><th>PIC</th><th>Описание</th><th>ASIN</th><th>Цена продажи</th><th>ID</th><th>Цена закупки</th><th>Доставка</th><th>Наличие</th><th>Прибыль</th><th>Delete</th></tr>
        <tbody>
        @foreach($items as $item)
            <tr >
                <td>{{ $item->img }}</td>
                <td>{{ $item->description }}</td>
                <td>{{ $item->asin }}</td>
                <td>{{ $item->price_amazon }}</td>
                <td>{{ $item->walmart_id }}</td>
                <td>{{ $item->price_walmart }}</td>
                <td>{{ $item->shipping }}</td>
                <td>{{ $item->walmart_available }}</td>
                <td>test</td>
                <td>test</td>
            </tr>
        @endforeach
        </tbody>
        </thead>
    </table>
    @endif
</div>
</section>