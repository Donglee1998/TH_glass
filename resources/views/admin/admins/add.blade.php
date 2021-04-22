@extends('admin.layouts.master')
@section('content')
<div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>
                            <form class="user" method="post" action="#">
                            	{{csrf_field()}}
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" name="name" 
                                            placeholder="Name ...">
                                    </div>
                                    
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" id="exampleInputEmail" name="email" 
                                        placeholder="Email Address">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user" name="password" 
                                            id="exampleInputPassword" placeholder="Password">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user" name="re-password" 
                                            id="exampleRepeatPassword" placeholder="Repeat Password">
                                    </div>
                                </div>
                                <h6>Role:</h6>
                                <div class="form-check">
								  <input
								    class="form-check-input"
								    type="radio"
								    value = "admin"
								    name="role"

								  />
								  <label class="form-check-label" for="flexRadioDefault1">Admin</label>
								</div>

								<!-- Default checked radio -->
								<div class="form-check">
								  <input
								    class="form-check-input"
								    type="radio"
								    value = 'manager'
								    name="role"
								  />
								  <label class="form-check-label" for="flexRadioDefault2">Manager</label>
								</div>
								<div class="form-check">
								  <input
								    class="form-check-input"
								    type="radio"
								    name="role"
								    value="normal"
								    checked/>
								  <label class="form-check-label" for="flexRadioDefault2">Normal</label>
								</div>
                                <button type="submit"  class="btn btn-primary btn-user btn-block">
                                	Add Account	
                                </button>
                                
                                
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection