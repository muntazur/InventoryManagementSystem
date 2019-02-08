@extends('layout.main')

@section('content')

<div class="container">

    <div class="row">

        <!Admin description  start>

            <div class="col-md-4">

                <div class="card mx-auto">

                    <img class="card-img-top mx-auto" style="width:60%;" src="./images/ru1.png" alt="Card image cap">

                    <div class="card-body">

                        <h4 class="card-title">Profile Info</h4>
                        <p class="card-text"><i class="fa fa-user">&nbsp;</i>muntaz</p>
                        <p class="card-text"><i class="fa fa-user">&nbsp;</i>Admin</p>
                        <p class="card-text"></p>
                        <a href="#" class="btn btn-primary"><i class="fa fa-edit">&nbsp;</i>Edit Profile</a>

                    </div>

                </div>

            </div>

        <!Admin description end >

        
        <!-- Watch and New order Options start -->

            <div class="col-md-8">

                <div class="jumbotron" style="width:100%;height:100%;background:white">


                    <h1>Welcome Admin</h1>

                    <div class="row ">
                        
                        <!watch option start >

                            <div class="col-sm-6">

                               <iframe src="http://free.timeanddate.com/clock/i616j2aa/n1993/szw160/szh160/cf100/hnce1ead6" frameborder="0" width="160" height="160"></iframe>

                            </div>

                        <! watch option end >

                        
                        <!New Order option start >

                            <div class="col-sm-6">

                                <div class="card">

                                    <div class="card-body">
                                        <h4 class="card-title">New Orders</h4>
                                        <p class="card-text">Here you can make invoices and create new orders</p>
                                        <a href="new_order.php" class="btn btn-primary">New Orders</a>
                                    </div>

                                </div>

                            </div>

                        <!New Order option end >


                    </div>

                </div>

            </div>

        <! watch and New order options end >

    </div>

</div>


<p></p>
<p></p>

	
@endsection

@section('inventory')

<div class="container">

		<div class="row">

        <!Add Category option start >

    			  <div class="col-md-4">

        				    <div class="card">

        						    <div class="card-body">
        						        <h4 class="card-title">Categories</h4>
        						        <p class="card-text">Here you can manage your categories and you add new parent and sub categories</p>
        						        <a href="#" data-toggle="modal" data-target="#form_category" class="btn btn-primary">Add</a>
        						        <a href="manage_categories.php" class="btn btn-primary">Manage</a>
        					      </div>

        				    </div>

                

    			  </div>

        <! Add Category option end >


        <!-- Add Brands start -->

    			  <div class="col-md-4">

    				    <div class="card">

    						    <div class="card-body">

    						        <h4 class="card-title">Brands</h4>
    						        <p class="card-text">Here you can manage your brand and you add new brand</p>
    						        <a href="#" data-toggle="modal" data-target="#form_brand" class="btn btn-primary">Add</a>
    						        <a href="manage_brand.php" class="btn btn-primary">Manage</a>

    					      </div>

    				    </div>

    			  </div>

        <!-- Add Brands end -->


        <! Add product option start >

			      <div class="col-md-4">

				        <div class="card">

						        <div class="card-body">

						            <h4 class="card-title">Products</h4>
						            <p class="card-text">Here you can manage your prpducts and you add new products</p>
						            <a href="#" data-toggle="modal" data-target="#form_products" class="btn btn-primary">Add</a>
						            <a href="manage_product.php" class="btn btn-primary">Manage</a>

					          </div>

				        </div>

			      </div>

        <! Add product option end >

		</div>

</div>

 @endsection




 @section('modals')


  <!-- Modal -->
<div class="modal fade" id="form_category" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="category_form" onsubmit="return false">
          <div class="form-group">
            <label>Category Name</label>
            <input type="text" class="form-control" name="category_name" id="category_name" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="cat_error" class="form-text text-muted"></small>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Parent Category</label>
            <select class="form-control" id="parent_cat" name="parent_cat">
              

              
            </select>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>   <!-- Modal -->
<div class="modal fade" id="form_brand" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New Brand</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="brand_form" onsubmit="return false">
          <div class="form-group">
            <label>Brand Name</label>
            <input type="text" class="form-control" name="brand_name" id="brand_name" placeholder="Enter Brand Name">
            <small id="brand_error" class="form-text text-muted"></small>
          </div>
          <button type="submit" class="btn btn-primary">Add</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>   <!-- Modal -->
<div class="modal fade" id="form_products" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add new products</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="product_form" onsubmit="return false">
          <div class="form-row">
            <div class="form-group col-md-6">
              <label>Date</label>
              <input type="text" class="form-control" name="added_date" id="added_date" value="2019-02-07" readonly/>
            </div>
            <div class="form-group col-md-6">
              <label>Product Name</label>
              <input type="text" class="form-control" name="product_name" id="product_name" placeholder="Enter Product Name" required>
            </div>
          </div>
          <div class="form-group">
            <label>Category</label>
            <select class="form-control" id="select_cat" name="select_cat" required/>
              

              
            </select>
          </div>
          <div class="form-group">
            <label>Brand</label>
            <select class="form-control" id="select_brand" name="select_brand" required/>
              

              
            </select>
          </div>
          <div class="form-group">
            <label>Product Price</label>
            <input type="text" class="form-control" id="product_price" name="product_price" placeholder="Enter Price of Product" required/>
          </div>
          <div class="form-group">
            <label>Quantity</label>
            <input type="text" class="form-control" id="product_qty" name="product_qty" placeholder="Enter Quantity" required/>
          </div>
          <button type="submit" class="btn btn-success">Add Product</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
 </div>

 @endsection
