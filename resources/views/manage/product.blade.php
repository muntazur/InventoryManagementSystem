@extends('layout.main')

@section('manage')
	 
	 <table id = "brandTable" class = "table table-hover table-condensed table-bordered table-sm">
	 	<thead>
	 		<th>Product</th>
	 		<th>Category</th>
	 		<th>Brand</th>
	 		<th>Price</th>
	 		<th>Quantity</th>
	 		<th>Status</th>
	 		<th>Action</th>
	 	</thead>


		<?php 

			use App\Http\Controllers\ManagementController;
		?>

	    @foreach($products as $product)
		 	<tbody>
		 		<tr>
		 		 	

			 		<td>{{ $product->name }}</td>
                    <?php

						$categoryName = ManagementController::categoryName($product->cid);
						$brandName = ManagementController::brandName($product->bid);

                    ?>

			 		<td>{{ $categoryName }}</td>
			 		<td> {{ $brandName }}</td>
			 		<td>{{ $product->price }}</td>
			 		<td> {{ $product->quantity }}</td>

			 		@if($product->status=='1')

			 		   <td> <p class="btn btn-success btn-sm"> active </p></td>

			 		@else
			 		   <td> <p class = "btn btn-danger btn-sm"> inactive </p>
			 		@endif
			 		<td>
			 			<span>
			 				<a href="#" class="btn btn-info btn-sm">Edit</a>
			 				<a href="#" class="btn btn-danger btn-sm">Delete</a>
			 			</span>
			 		</td>

		 		 	
		 		</tr>
		 	</tbody>

	    @endforeach

	 </table>
@endsection
