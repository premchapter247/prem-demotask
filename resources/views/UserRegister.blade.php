<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src=""></script>
<link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" >
<!------ Include the above in your HEAD tag ---------->
<div class="container register">
    <div class="row">
        <div class="col-md-3 register-left">
            <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
            <h3>Welcome</h3>
            <p>You are 30 seconds away from earning your own money!</p>
            <input type="submit" name="" value="Login"/><br/>
        </div>
        <div class="col-md-9 register-right">
            <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Login</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <h3 class="register-heading">Register</h3>
                    {{-- @if(!empty($success_msg) && isset($success_msg))
                        <h5 class="register-heading"> {{$success_msg}}</h5>
                    @endif --}}
                    <div class="success_message">
                        @if(Session::has('message'))
                            <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
                        @endif
                    </div>
                    <form action="{{url('/user-insert')}}" method="post" id="form_register">
                        @csrf
                        <div class="row register-form">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="first_name" placeholder="First Name *" value="{{ old('first_name') }}" required data-parsley-pattern="[a-zA-Z]+$" data-parsley-trigger="keyup" />
                                    @if($errors->has('first_name'))
                                        <div class="error">{{ $errors->first('first_name') }}</div>
                                    @endif
                                </div>
                               
                                <div class="form-group">
                                    <input type="text" class="form-control" name="last_name" placeholder="Last Name *" value="{{ old('last_name') }}" required data-parsley-pattern="[a-zA-Z]+$" data-parsley-trigger="keyup"/>
                                    @if($errors->has('last_name'))
                                        <div class="error">{{ $errors->first('last_name') }}</div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <input type="password" id="password" class="form-control" name="password" placeholder="Password *" value="" required data-parsley-length="[1,16]" data-parsley-trigger="keyup"/>
                                    @if($errors->has('password'))
                                        <div class="error">{{ $errors->first('password') }}</div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control"  name="password_confirmation" placeholder="Confirm Password *" value="" required data-parsley-equalto="#password" data-parsley-trigger="keyup" data-parsley-equalto-message="The confirm Password should be same as password" />
                                    @if($errors->has('password_confirmation'))
                                        <div class="error">{{ $errors->first('password_confirmation') }}</div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <div class="maxl">
                                        <label class="radio inline"> 
                                            <input type="radio" name="gender" value="male" @if(old("gender")) checked @endif required/>
                                            <span> Male </span> 
                                        </label>
                                        <label class="radio inline"> 
                                            <input type="radio" name="gender" value="female" @if(old("gender")) checked @endif required />
                                            <span>Female </span> 
                                        </label>
                                        @if($errors->has('gender'))
                                            <div class="error">{{ $errors->first('gender') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" placeholder="Your Email *" value="{{ old('email') }}" required data-parsley-type="email" data-parsley-trigger="keyup" />
                                    @if($errors->has('email'))
                                        <div class="error">{{ $errors->first('email') }}</div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <input type="text" minlength="10" maxlength="10" class="form-control" name="phone" placeholder="Your Phone *" value="{{ old('phone') }}" required data-parsley-type="number" data-parsley-trigger="keyup" />
                                    @if($errors->has('phone'))
                                        <div class="error">{{ $errors->first('phone') }}</div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <select class="form-control" name="question" required data-parsley-trigger="onchange" />
                                        <option class="hidden"  selected disabled>Please select your Sequrity Question</option>
                                        <option value="1">What is your Birthdate?</option>
                                        <option value="2">What is Your old Phone Number</option>
                                        <option value="3">What is your Pet Name?</option>
                                    </select>
                                    @if($errors->has('question'))
                                        <div class="error">{{ $errors->first('question') }}</div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="answer" placeholder="Enter Your Answer *" value="{{ old('answer') }}" required data-parsley-trigger="keyup" //>
                                    @if($errors->has('answer'))
                                        <div class="error">{{ $errors->first('answer') }}</div>
                                    @endif
                                </div>
                                <input type="submit" class="btnRegister"  value="Register"/>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <h3  class="register-heading">Login</h3>
                    <div class="row register-form">
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Email *" value="" />
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password *" value="" />
                            </div>
                        </div>
                        <input type="submit" class="btnRegister"  value="Register"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="http://parsleyjs.org/dist/parsley.js"></script>
<script>
jQuery(document).ready(function(){
    jQuery('#form_register').parsley();
});
</script>