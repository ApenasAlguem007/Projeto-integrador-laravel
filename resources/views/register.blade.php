@include('components/include.header')

    <main class="aurora-main">
 
        <div class="register-form">
 
            <form action="{{ route('register.store') }}" method="POST">
                @csrf
                
 
 
                <div class="title-form">
                    <h1 class="font-semibold"> Sign Up </h1>
                </div>
 
 
                <div class="form-container">
                    <input type="text" class="@error('email') is-invalid border-danger @enderror" name="name" id="name" required>
                    @if($errors->has('name'))
                        <div class="invalid-feedback text-center fontsize-small"> The name field is required! </div>
                        @endif 
                    <label for="name"> Nome </label>
                </div>
 
             <div class="form-container">
                <input type="text" class="@error('email') is-invalid border-danger @enderror" name="email" id="email" required>
                 @if($errors->has('email'))
                        <div class="invalid-feedback text-center fontsize-small"> The email field is required! Example: name@domain.com </div>
                        @endif 
                <label for="email"> E-Mail </label>
            </div>
 
            
                <div class="form-container">
                    <input type="password" class="@error('password') is-invalid border-danger @enderror"  name="password" id="password" required>
                     @if($errors->has('password'))
                        <div class="invalid-feedback text-center fontsize-small"> The password field must have at least 8 characters! </div>
                        @endif 
                    <label for="password"> Senha </label>
                </div>
 
 
                <div class="checkbox-form">
                    <input type="checkbox" name="terms" id="terms" value="1" required>
                    <label for="terms"> Accept <a class="font-semibold" href=""> Terms of Use </a> </label>
                </div>
 
 
                <div class="submit-form">
                    <button type="submit" name="submit-button"> Register </button>
                </div>
               
 
                <div class="login-button">
                    <button type="button" name="login-button"> Sign In </button>
                </div>
 
 
            </form>
 
 
        </div>
 
    </main>

@include('components/include.footer')


