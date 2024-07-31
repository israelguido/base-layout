<link href="css/form.css" rel="stylesheet" id="form-css">
<div class="container mt-100 mt-60">
    <div class="card-body">
        <h4 class="card-title text-center">Signup</h4>
        <form class="login-form mt-4">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group position-relative">
                        <label>First name <span class="text-danger">*</span></label>
                        <i data-feather="user" class="fea icon-sm icons"></i>
                        <input type="text" class="form-control pl-5" placeholder="First Name" name="s" required="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group position-relative">
                        <label>Last name <span class="text-danger">*</span></label>
                        <i data-feather="user-check" class="fea icon-sm icons"></i>
                        <input type="text" class="form-control pl-5" placeholder="Last Name" name="s" required="">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group position-relative">
                        <label>Your Email <span class="text-danger">*</span></label>
                        <i data-feather="mail" class="fea icon-sm icons"></i>
                        <input type="email" class="form-control pl-5" placeholder="Email" name="email" required="">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group position-relative">
                        <label>Password <span class="text-danger">*</span></label>
                        <i data-feather="key" class="fea icon-sm icons"></i>
                        <input type="password" class="form-control pl-5" placeholder="Password" required="">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                            <label class="custom-control-label" for="customCheck1">I Accept <a href="#" class="text-primary">Terms And Condition</a></label>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <button class="btn btn-primary btn-block">Register</button>
                </div>
                <div class="col-lg-12 mt-4 text-center">
                    <h6>Or Signup With</h6>
                    <ul class="list-unstyled social-icon mb-0 mt-3">
                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="facebook" class="fea icon-sm fea-social"></i></a></li>
                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="github" class="fea icon-sm fea-social"></i></a></li>
                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="twitter" class="fea icon-sm fea-social"></i></a></li>
                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="gitlab" class="fea icon-sm fea-social"></i></a></li>
                    </ul><!--end icon-->
                </div>
                <div class="mx-auto">
                    <p class="mb-0 mt-3"><small class="text-dark mr-2">Already have an account ?</small> <a href="auth-login-three.html" class="text-dark font-weight-bold">Sign in</a></p>
                </div>
            </div>
        </form>
    </div>