
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
					<div class="breadcrumb-title pe-3">Customer</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Customer Edit</li>
							</ol>
						</nav>
					</div>

				</div>
				<!--end breadcrumb-->
				<div class="row">
					<div class="col-md-10 mx-auto">
						<div class="card">
							<div class="card-header px-4 py-3">
								<h5 class="mb-0">Customer Edit</h5>
							</div>
							<div class="card-body p-4">
                                <form class="form" method="post" enctype="multipart/form-data" action="{{route('customer.update',encryptor('encrypt',$customer->id))}}">
                                    @csrf
                                    @method('PATCH')
                                    <div class="row">
									<div class="col-md-5">
										<label for="bsValidation1" class="form-label"><b>Full Name</b></label>
										<input type="text" class="form-control rounded-5"
										name="name" id="name" placeholder="  Name" value="{{old('FullName',$customer->name)}}" >

                                        @if($errors->has('name'))
                                        <span class="text-danger"> {{ $errors->first('name') }}</span>
                                    @endif
									</div>

									<div class="col-md-5">
										<label for="bsValidation3" class="form-label"><b>Contact Num</b></label>
										<input type="text" class="form-control rounded-5" id="contact_num"
										name="contact_num"placeholder="contact_num" value="{{old('ContactNum',$customer->contact_num)}}" >

                                        @if($errors->has('contact_num'))
                                        <span class="text-danger"> {{ $errors->first('contact_num') }}</span>
                                    @endif

									</div>
									<div class="col-md-5">
										<label for="bsValidation4" class="form-label"><b>Email</b></label>
										<input type="email" class="form-control rounded-5"
										name="email" id="email" placeholder="Email" value="{{old('Email',$customer->email)}}" >

                                        @if($errors->has('email'))
                                        <span class="text-danger"> {{ $errors->first('email') }}</span>
                                    @endif
									</div>

                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label for="status"><b>Gender</b></label>
                                            <select id="gender" class="form-control" name="gender">
                                                <option value="male" @if(old('gender')=='male') selected @endif>Male</option>
                                                <option value="female" @if(old('gender')=='female') selected @endif>Female</option>
                                            </select>

                                            @if($errors->has('gender'))
                                                <span class="text-danger"> {{ $errors->first('gender') }}</span>
                                            @endif
                                        </div>
                                    </div>


									 <div class="col-md-5">
                                        <div class="form-group">
                                            <label for="status"><b>Status</b></label>
                                            <select id="status" class="form-control" name="status">
                                                <option value="1" @if(old('status')==1) selected @endif>Active</option>
                                                <option value="0" @if(old('status')==0) selected @endif>Inactive</option>
                                            </select>

                                            @if($errors->has('status'))
                                                <span class="text-danger"> {{ $errors->first('status') }}</span>
                                            @endif
                                        </div>
                                    </div>


									<div class="col-md-5">
										<label for="bsValidation13" class="form-label"><b>Adress</b></label>
										<textarea class="form-control rounded-5" id="address"
										name="address"placeholder="Address ..." rows="3" value="{{old('Adress',$customer->address)}}" ></textarea>

                                        @if($errors->has('address'))
                                        <span class="text-danger"> {{ $errors->first('address') }}</span>
                                    @endif
									</div>
									<div class="col-md-5">
										<label for="bsValidation13" class="form-label"><b>Description</b></label>
										<textarea class="form-control rounded-5" id="description" placeholder="description ..."
										name="description"rows="3" value="{{old('Description',$customer->description)}}" ></textarea>

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
                                </div>
								</form>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>

@endsection



