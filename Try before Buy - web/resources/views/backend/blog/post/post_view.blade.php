@extends('admin.admin_master')
@section('admin')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="container-full">
		<!-- Main content -->
		<section class="content">

		 <!-- Basic Forms -->
		  <div class="box">
			<div class="box-header with-border">
			  <h4 class="box-title">Add blog post</h4>
			</div>
			<!-- /.box-header -->
    <div class="box-body">
    <div class="row">
        <div class="col">
            <form method="post" action="{{route('post-store')}}" enctype="multipart/form-data">
                @csrf
            <div class="row">
                <div class="col-12">	

                    <div class="row"> <!-- start 2nd row -->
                       
                        <div class="col-md-6">
                        <div class="form-group">
                        <h5>Post title En <span class="text-danger">*</span></h5>
                        <div class="controls">
                            <input type="text" name="post_title_en" class="form-control" required="">
                                    @error('post_title_en')
						<span class="text-danger">{{$message}}</span>
						@enderror</div></div>
                        </div> <!-- end col md 4 -->
                        <div class="col-md-6">
                        <div class="form-group">
                        <h5>Post title Ro <span class="text-danger">*</span></h5>
                        <div class="controls">
                            <input type="text" name="post_title_ro" class="form-control" required="">
                                    @error('post_title_ro')
						<span class="text-danger">{{$message}}</span>
						@enderror</div></div>
                        </div> <!-- end col md 4 -->
                    </div> <!-- end 2nd row-->
                    
                    <div class="row"> <!-- start 6th row -->
                    <div class="col-md-6">
                        <div class="form-group">
								<h5>Blog category select <span class="text-danger">*</span></h5>
								<div class="controls">
									<select name="category_id" class="form-control" required="">
										<option value="" selected="" disabled="">Select the blog category</option>
                                        @foreach($blogcategory as $category)
										<option value="{{$category->id}}">{{$category->blog_category_name_en}}</option>
                                        @endforeach
									</select>
                                    @error('category_id')
						<span class="text-danger">{{$message}}</span>
						@enderror
								</div>
							</div>
                        </div> <!-- end col md 4 -->


                        <div class="col-md-6">
                        <div class="form-group">
                        <h5>Post main image <span class="text-danger">*</span></h5>
                        <div class="controls">
                            <input type="file" name="post_image" class="form-control" onChange="mainThumbUrl(this)" required="">
                                    @error('post_image')
						<span class="text-danger">{{$message}}</span>
						@enderror
                        <div><img src="" id="mainThmb"></div>
                            </div></div>
                        </div> <!-- end col md 4 -->

                    </div> <!-- end 6th row-->



                    <div class="row"> <!-- start 8th row -->
                        <div class="col-md 6">
                        <div class="form-group">
                        <h5>Post details English <span class="text-danger">*</span></h5>
                        <div class="controls">
                            <textarea name="post_details_en" id="editor1" rows="10" cols="80" required="">Post details in english</textarea>
                        </div>
                        </div>
                        </div> <!-- end col md 6 -->


                        <div class="col-md 6">
                        <div class="form-group">
                        <h5>Post details Romanian <span class="text-danger">*</span></h5>
                        <div class="controls">
                            <textarea name="post_details_ro" id="editor2" rows="10" cols="80" required="">Post details in romanian</textarea>
                        </div>
                        </div>
                        </div> <!-- end col md 6 -->


                    </div> <!-- end 8th row-->

                    <hr>

                </div>
            </div>
                <div class="text-xs-right">
                    <input type="submit" class="btn btn-rounded btn-primary mb-5" value="Add Post"></button>
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

    <script type="text/javascript">
        function mainThumbUrl(input){
            if (input.files && input.files[0]){
                var reader = new FileReader();
                reader.onload = function(e){
                    $('#mainThmb').attr('src',e.target.result).width(80).height(80);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
   
@endsection