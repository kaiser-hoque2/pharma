
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
					<div class="breadcrumb-title pe-3">Companies</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Companies Create</li>
							</ol>
						</nav>
					</div>
					<div class="ms-auto">
						<div class="btn-group">
							<button type="button" class="btn btn-primary">Settings</button>
							<button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden">Toggle Dropdown</span>
							</button>
							<div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">	<a class="dropdown-item" href="javascript:;">Action</a>
								<a class="dropdown-item" href="javascript:;">Another action</a>
								<a class="dropdown-item" href="javascript:;">Something else here</a>
								<div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Separated link</a>
							</div>
						</div>
					</div>
				</div>
				<!--end breadcrumb-->
				<div class="row">
					<div class="col-xl-6 mx-auto">
						<div class="card">
							<div class="card-header px-4 py-3">
								<h5 class="mb-0">Companies Create</h5>
							</div>
							<div class="card-body p-4">

                                <form class="form" method="post" enctype="multipart/form-data" action="{{route('companies.update',encryptor('encrypt',$companies->id))}}">
                                    @csrf
                                    @method('PATCH')

									<div class="col-md-12">
										<label for="bsValidation1" class="form-label"><b>Full Name</b></label>
										<input type="text" class="form-control"
										name="name" id="name" placeholder="  Name"  value="{{old('FullName',$companies->name)}}">

                                        @if($errors->has('name'))
                                        <span class="text-danger"> {{ $errors->first('name') }}</span>
                                    @endif
									</div>

									<div class="col-md-12">
										<label for="bsValidation3" class="form-label"><b>Contact Num</b></label>
										<input type="text" class="form-control" id="contact_num"
										name="contact_num"placeholder="contact_num" value="{{old('ContactName',$companies->contact_num)}}"  >

                                        @if($errors->has('contact_num'))
                                        <span class="text-danger"> {{ $errors->first('contact_num') }}</span>
                                    @endif

									</div>
									<div class="col-md-12">
										<label for="bsValidation4" class="form-label"><b>Email</b></label>
										<input type="email" class="form-control"
										name="email" id="email" placeholder="Email" value="{{old('Email',$companies->email)}}">

                                        @if($errors->has('email'))
                                        <span class="text-danger"> {{ $errors->first('email') }}</span>
                                    @endif
									</div>

									<div class="sm-col-12">
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
									<div class="col-md-12">
                                        <div class="form-group">
                                            <label for="division"><b>Division</b></label>
                                            <select id="division" class="form-control" name="division">
												<option value="">select</option>
                                                <option value="Dhaka" @if(old('division') == 'Dhaka') selected @endif>Dhaka</option>
                                                <option value="Chittagong" @if(old('division') == 'Chittagong') selected @endif>Chittagong</option>
                                                <option value="Rajshahi" @if(old('division') == 'Rajshahi') selected @endif>Rajshahi</option>
                                                <option value="Khulna" @if(old('division') == 'Khulna') selected @endif>Khulna</option>
                                                <option value="Barisal" @if(old('division') == 'Barisal') selected @endif>Barisal</option>
                                                <option value="Sylhet" @if(old('division') == 'Sylhet') selected @endif>Sylhet</option>
                                                <option value="Rangpur" @if(old('division') == 'Rangpur') selected @endif>Rangpur</option>
                                            </select>

                                            @if($errors->has('division'))
                                                <span class="text-danger">{{ $errors->first('division') }}</span>
                                            @endif
                                        </div>
                                    </div>




									<div class="col-md-12">
										<label for="bsValidation13" class="form-label"><b>Adress</b></label>
										<textarea class="form-control" id="address"
										name="address"placeholder="Address ..." rows="3" value="{{old('Adress',$companies->address)}}"></textarea>

                                        @if($errors->has('address'))
                                        <span class="text-danger"> {{ $errors->first('address') }}</span>
                                    @endif
									</div>
									<div class="col-md-12">
										<label for="bsValidation13" class="form-label"><b>Description</b></label>
										<textarea class="form-control" id="description" placeholder="description ..."
										name="description"rows="3" required value="{{old('Description',$companies->description)}}"></textarea>

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



