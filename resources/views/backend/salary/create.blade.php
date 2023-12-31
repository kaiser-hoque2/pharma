
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
					<div class="breadcrumb-title pe-3">Salary</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Salary Create</li>
							</ol>
						</nav>
					</div>

				</div>
				<!--end breadcrumb-->
				<div class="row">
					<div class="col-md-10 mx-auto">
						<div class="card">
							<div class="card-header px-4 py-3">
								<h5 class="mb-0">Salary Create</h5>
							</div>
							<div class="card-body p-4">
								<form method="post" enctype="multipart/form-data" action="{{route('salary.store')}}" class="row g-3 needs-validation" novalidate>
                                    @csrf
									<div class="col-md-6">
										<label for="bsValidation1" class="form-label"><b>Full Name (emp)</b></label>
                                        <select name="emp_id" id="">
                                            <option value="">==Select Name==</option>
                                            @forelse ($employee as $c )
                                            <option {{old('emp_id')==$c->id}} value="{{$c->id}}">{{$c->name}}</option>
                                            @empty
                                            <option value="">No Company name found</option>
                                            @endforelse
                                        </select>

                                        @if($errors->has('emp_id'))
                                        <span class="text-danger"> {{ $errors->first('emp_id') }}</span>
                                    @endif
									</div>

                                    {{-- <div class="col-md-6">
                                        <label for="bsValidation4" class="form-label"><b>Email</b></label>
                                        <input type="email" class="form-control rounded-5"
                                        name="email" id="email" placeholder="Email" >

                                        @if($errors->has('email'))
                                        <span class="text-danger"> {{ $errors->first('email') }}</span>
                                    @endif
                                    </div> --}}

                                    <div class="col-md-6">
                                        <label for="bsValidation4" class="form-label"><b>Month</b></label>
                                        <select name="month" id="" class="form-control">
                                            <option value="January">==select month==</option>
                                            <option value="January">January</option>
                                            <option value="February">February</option>
                                            <option value="March">March</option>
                                            <option value="April">April</option>
                                            <option value="May">May</option>
                                            <option value="June">June</option>
                                            <option value="July">July</option>
                                            <option value="August">August</option>
                                            <option value="September">September</option>
                                            <option value="October">October</option>
                                            <option value="November">November</option>
                                            <option value="December">December</option>
                                        </select>
                                        @if($errors->has('month'))
                                        <span class="text-danger"> {{ $errors->first('month') }}</span>
                                    @endif
                                    </div>

                                    <div class="col-md-6">
										<label for="bsValidation1" class="form-label"><b>Year</b></label>
										<input type="text" class="form-control "
										name="year" id="emp_id" placeholder="  year" >

                                        @if($errors->has('emp_id'))
                                        <span class="text-danger"> {{ $errors->first('year') }}</span>
                                    @endif
									</div>


{{--
									<div class="col-md-6">
										<label for="bsValidation3" class="form-label"><b>Phone</b></label>
										<input type="text" class="form-control rounded-5" id="contact_num"
										name="contact_num"placeholder="contact_num"  >

                                        @if($errors->has('contact_num'))
                                        <span class="text-danger"> {{ $errors->first('contact_num') }}</span>
                                    @endif
                                    </div> --}}

                                    <div class="col-md-6">
                                        <label for="bsValidation13" class="form-label"><b>Advanced salary</b></label>
                                        <input class="form-control" id="advanced_salary"
                                        name="advanced_salary"placeholder="advanced_salary ..." rows="3" >

                                        @if($errors->has('advanced_salary'))
                                        <span class="text-danger"> {{ $errors->first('advanced_salary') }}</span>
                                    @endif
                                    </div>


									 {{-- <div class="col-md-6">
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
                                    </div> --}}


									{{-- <div class="col-md-6">
										<label for="bsValidation13" class="form-label"><b>Description</b></label>
										<textarea class="form-control rounded-5" id="description" placeholder="description ..."
										name="description"rows="3" required></textarea>

                                        @if($errors->has('description'))
                                        <span class="text-danger"> {{ $errors->first('description') }}</span>
                                    @endif
									</div> --}}

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



