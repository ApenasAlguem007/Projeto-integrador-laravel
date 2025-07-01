@include('components/include.header')
 
    <main class="aurora-main">
 
        <div class="register-form">
 
            <form action="{{ route('register') }}" method="POST">
 
 
 
                <div class="title-form">
                    <h1 class="font-semibold"> Sign In </h1>
                </div>
 
 
 
                <div class="form-container">
                    <input type="text" name="email" id="email" required>
                    <label for="email"> E-mail </label>
                </div>
 
 
                <div class="form-container">
                    <input type="password" name="password" id="password" required>
                    <label for="password"> Password </label>

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