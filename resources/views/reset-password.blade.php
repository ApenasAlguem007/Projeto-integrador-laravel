@include('components/include.header')
 
 

    <main class="aurora-main">
 
        <div class="register-form">
 
            <form action="{{ route('register') }}" method="POST">
 
 
 
                <div class="title-form">
                    <h1 class="font-semibold"> Reset Password </h1>
                </div>
 
 
 
                <div class="form-container">
                    <input type="text" name="email" id="email" required>
                    <label for="email"> E-mail </label>
                    <p class="fontsize-small mt-4 px-4">We'll send you an email with steps to reset your password.</p>
                </div>
                    
 
                <div class="submit-form">
                    <button type="submit" name="submit-button"> Submit </button>
                </div>
 
 
                <div class="align-self-start login-button">
                   <a href="{{ asset('cadastro')}}"> <button type="button" name="login-button"> Sign Up </button> </a>
                </div>
 

                <div class="align-self-center login-button">
                   <a href="{{ asset('home')}}"> <button type="button" name="cancel-button"> Cancel</button> </a>
                </div>

            </form>
 
 
        </div>
 
    </main>
 @include('components/include.footer')

 