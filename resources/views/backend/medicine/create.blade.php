
@extends('backend.layouts.app')
@section('title',trans('create Users'))
@section('content')



	<!--wrapper-->
	<div class="wrapper">
		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Medicine</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">medicine Create</li>
							</ol>
						</nav>
					</div>
					<div class="ms-auto">
						<div class="btn-group">
							<button type="button" class="btn btn-primary"><a class="text-white" href="{{route('medicine.index')}}">Medicine list</a></button>
							</div>
						</div>
					</div>
				</div>
				<!--end breadcrumb-->
				<div class="row">
					<div class="col-md-11 mx-auto">
						<div class="card">
							<div class="card-header px-4 py-3 bg-primary" >
								<h5 class="mb-0 text-white">medicine Added </h5>
							</div>
							<div class="card-body p-4">
								<form method="post" enctype="multipart/form-data" action="{{route('medicine.store')}}" class="row g-3 needs-validation" novalidate>
                                    @csrf
									<div class="col-md-4">
										<label for="bsValidation1" class="form-label"><b>Company Name<span class="text-danger">*</span></b></label> <br>
                                        <select class="form-control" name="companie_id" id="companie_id">
                                            <option value="">==Select Name==</option>
                                            @forelse ($company as $c )
                                            <option {{old('companie_id')==$c->id}} value="{{$c->id}}">{{$c->name}}</option>
                                            @empty
                                            <option value="">No Company name found</option>
                                            @endforelse

                                        </select>
									</div>

									<div class="col-md-4">
										<label for="bsValidation1" class="form-label"><b>Medicine Brand Name<span class="text-danger">*</span></b></label>
										<input type="text" class="form-control"
										name="bname" id="bname" placeholder=" Brand Name" >

                                        @if($errors->has('bname'))
                                        <span class="text-danger"> {{ $errors->first('bname') }}</span>
                                    @endif
									</div>
									<div class="col-md-4">
										<label for="bsValidation1" class="form-label"><b>Medicine Generic name<span class="text-danger">*</span></b></label>
										<input type="text" class="form-control"
										name="gname" id="gname" placeholder=" Generic Name" >

                                        @if($errors->has('gname'))
                                        <span class="text-danger"> {{ $errors->first('gname') }}</span>
                                    @endif
									</div>
									<div class="col-md-4">
										<label for="bsValidation1" class="form-label"><b>Expire date</b><span class="text-danger">*</span></label>
										<input type="date" class="form-control"
										name="expiredate" id="expiredate" placeholder=" expiredate" >

                                        @if($errors->has('expiredate'))
                                        <span class="text-danger"> {{ $errors->first('expiredate') }}</span>
                                    @endif
									</div>
									<div class="col-md-4">
										<label for="bsValidation1" class="form-label"><b>Strength</b><span class="text-danger">*</span></label>
										<input type="text" class="form-control"
										name="strength" id="strength" placeholder=" expiredate" >

                                        @if($errors->has('strength'))
                                        <span class="text-danger"> {{ $errors->first('strength') }}</span>
                                    @endif
									</div>
									<div class="col-md-4">
										<label for="bsValidation1" class="form-label"><b>Product Code</b><span class="text-danger">*</span></label>
										<input type="text" class="form-control"
										name="product_code" id="product_code" placeholder=" product_code" >

                                        @if($errors->has('product_code'))
                                        <span class="text-danger"> {{ $errors->first('product_code') }}</span>
                                    @endif
									</div>
									<div class="col-md-4">
										<label for="bsValidation1" class="form-label"><b>Manufacture Date</b><span class="text-danger">*</span></label>
										<input type="date" class="form-control"
										name="manufacturedate" id="manufacturedate" placeholder=" manufacturedate" >

                                        @if($errors->has('manufacturedate'))
                                        <span class="text-danger"> {{ $errors->first('manufacturedate') }}</span>
                                    @endif
									</div>
 
									<div class="col-md-4">
										<label for="bsValidation1" class="form-label"><b>Dose Name<span class="text-danger">*</span></b></label>
										<br>
                                        <select class="form-control" name="dose_id" id="dose_id">
                                            <option value="">==Select Name==</option>
                                            @forelse ($dose as $c )
                                            <option {{old('dose_id')==$c->id}} value="{{$c->id}}">{{$c->dose_description}}</option>
                                            @empty
                                            <option value="">No Company name found</option>
                                            @endforelse

                                        </select>
									</div>


									<div class="col-md-4">
										<label for="bsValidation1" class="form-label"><b>Price</b><span class="text-danger">*</span></label>
										<input type="text" class="form-control"
										name="price" id="price" placeholder=" price" >

                                        @if($errors->has('price'))
                                        <span class="text-danger"> {{ $errors->first('price') }}</span>
                                    @endif
									</div>




									<div class="col-md-4">
                                        <div class="form-group">
                                            <label for="status"><b>Status<span class="text-danger">*</span></b></label>
                                            <select id="status" class="form-control" name="status">
                                                <option value="1" @if(old('status')==1) selected @endif>Active</option>
                                                <option value="0" @if(old('status')==0) selected @endif>Inactive</option>
                                            </select>

                                            @if($errors->has('status'))
                                                <span class="text-danger"> {{ $errors->first('status') }}</span>
                                            @endif
                                        </div>
                                    </div>


									<div class="col-md-4">
										<label for="bsValidation1" class="form-label"><b>Category Name</b></label> <br>
                                        <select class="form-control" name="category_id" id="category_id">
                                            <option value="">==Select Name==</option>
                                            @forelse ($category as $c )
                                            <option {{old('category_id')==$c->id}} value="{{$c->id}}">{{$c->medicine_category}}</option>
                                            @empty
                                            <option value="">No Company name found</option>
                                            @endforelse

                                        </select>



									</div>


									<div class="col-md-4">
										<label for="bsValidation1" class="form-label"><b>Supplier Name</b></label> <br>
                                        <select class="form-control" name="supplier_id" id="supplier_id">
                                            <option value="">==Select Name==</option>
                                            @forelse ($supplier as $c )
                                            <option {{old('supplier_id')==$c->id}} value="{{$c->id}}">{{$c->name}}</option>
                                            @empty
                                            <option value="">No Company name found</option>
                                            @endforelse

                                        </select>
									</div>


									<div class="col-md-4">
										<label for="bsValidation1" class="form-label"><b>Medicine Image</b></label>
                                        <input type="file" id="image" class="form-control" placeholder="Image" name="image">

                                        @if($errors->has('image'))
                                        <span class="text-danger"> {{ $errors->first('image') }}</span>
                                    @endif
									</div>

									<div class="col-md-8">
										<label for="bsValidation13" class="form-label"><b>Description</b></label>
										<textarea class="form-control" id="description" placeholder="description ..."
										name="description"rows="1" required></textarea>

                                        @if($errors->has('description'))
                                        <span class="text-danger"> {{ $errors->first('description') }}</span>
                                    @endif
									</div>

									<div class="col-md-12">
										<div class="d-md-flex d-grid align-items-center gap-3">
											<button type="submit" class="btn btn-primary px-4">Submit</button>
											<button type="reset" class="btn btn-light px-4">Reset</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>

@endsection



