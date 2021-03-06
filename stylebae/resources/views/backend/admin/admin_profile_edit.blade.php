@extends('backend.admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<div class="container-full">

		<!-- Main content -->
		<section class="content">

		 <!-- Basic Forms -->
		  <div class="box">
			<div class="box-header with-border">
			  <h4 class="box-title">Admin Profile Update</h4>
			 
			</div>
			<!-- /.box-header -->
			<div class="box-body">
			  <div class="row">
				<div class="col">
					<form method="post" action="{{ route('admin.profile.store')}}" enctype="multipart/form-data">
						@csrf
					  <div class="row">
							<div class="col-6">						
								<div class="form-group">
									<h5>Admin User Name <span class="text-danger">*</span></h5>
									<div class="controls">
										<input type="text" name="name" class="form-control" required=""value="{{$editdata->name}}"  >
										 
									</div>
								
								</div>
							</div>
							<div class="col-6">
								<div class="form-group">
									<h5>Email Field <span class="text-danger">*</span></h5>
									<div class="controls">
										<input type="email" name="email" class="form-control" required="" value="{{$editdata->email}}">
										
									</div>
								</div>
							</div>							
					  </div>
					  <div class="row">
					  		<div class="col-6">
							  <div class="form-group">
									<h5>Profile image <span class="text-danger">*</span></h5>
									<div class="controls">
										<input type="file" id="image" name="profile_photo_path" class="form-control" required="" > </div>
								</div>
							</div>
							<div class="col-6">
								<img src="{{ (!empty($editdata->profile_photo_path))? 
                    			 url('upload/admin-images/'.$editdata->profile_photo_path):url('upload/no_image.jpg') }}" 
								 style="width: 100px; height: 100px;" id="showImage" alt="">
							</div>
					  </div>
					  <div class="text-xs-right">
							<input type="submit" class="btn btn-rounded btn-info" value="Update">
					  </div>			
					</form>

				</div>
				<!-- /.col -->
			  </div>
			  <!-- /.row -->
			</div>
			<!-- /.box-body -->
		  </div>
		  <!-- /.box -->

		</section>
        <!-- /.content -->
</div>

<script>
	$(document).ready(function(){
		$('#image').change(function(e){
			var reader = new FileReader();
			reader.onload = function(e){
				$('#showImage').attr('src',e.target.result);
			}
			reader.readAsDataURL(e.target.files['0']);
		});
	});
</script>

@endsection

