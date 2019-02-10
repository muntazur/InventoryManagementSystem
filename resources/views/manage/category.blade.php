@extends('layout.main')

@section('manage')
	 
	 <table id = "brandTable" class = "table table-hover table-condensed table-bordered table-sm">
	 	<thead>
	 		<th>Category</th>
	 		<th>Parent Category</th>
	 		<th>Status</th>
	 		<th>Action</th>
	 	</thead>

	    @foreach($categories as $category)
		 	<tbody>
		 		<tr>
		 		 	

			 		<td>{{ $category->name }}</td>
			 		<td>{{ $category->parent_category }}</td>

			 		@if($category->status=='1')

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
