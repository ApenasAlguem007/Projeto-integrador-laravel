@include('components/include.header')
 
    <main class="aurora-main">
 
        <div class="register-form">
 
            <form action="{{ route('register') }}" method="POST">
 
 
 
                <div class="title-form">
                    <h1 class="font-semibold"> Sign In </h1>
                </div>
 
 
 
                <div class="form-container">
                    <input type="text" class="@error('email') is-invalid border-danger @enderror" name="email" id="email" required>
                       @if($errors->has('email'))
                        <div class="invalid-feedback text-center fontsize-small">  The email field is required! Example: name@domain.com  </div>
                        @endif 
                    <label for="email"> E-mail </label>
                </div>
 
 
                <div class="form-container">
                    <input type="password" class="@error('email') is-invalid border-danger @enderror"  name="password" id="password" required>
                    <label for="password"> Password </label>
                    @if($errors->has('password'))
                        <div class="invalid-feedback text-center fontsize-small"> The password field must have at least 8 characters! </div>
                        @endif 

                        <div class="fontsize-small link-hover" id="password">
                            <a href="{{ asset('../reset-password') }}"> <p class="text-end mt-4 px-5"> Forgot Password? </p> </a>
                        </div>
                

                </div>
 
             
 
 
 
                <div class="submit-form">
                    <button type="submit" name="submit-button"> Login</button>
                </div>
 
 
                <div class="login-button">
                   <a href="{{ asset('cadastro')}}"> <button type="button" name="login-button"> Sign Up </button> </a>
                </div>
 
 
            </form>
 
 
        </div>
 
    </main>
 
 @include('components/include.footer')