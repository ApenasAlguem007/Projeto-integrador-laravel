@include('components/include.header')


    <main class="aurora-main">

        <div class="register-form">

            <form action="{{ route('register') }}" method="POST">

                <div class="title-form pt-5">
                    <h1 class="font-semibold"> Change Password </h1>
                </div>


                <div class="form-container pt-2">
                    <input type="password"  class="@error('email') is-invalid border-danger @enderror" name="new-password" id="new-password" required>
                     @if($errors->has('name'))
                        <div class="invalid-feedback text-center fontsize-small"> The password field must have at least 8 characters! </div>
                        @endif 
                    <label for="new-password"> New Password </label>
                </div>


                <div class="form-container pb-3">
                    <input type="password"  class="@error('email') is-invalid border-danger @enderror" class="@error('email') is-invalid border-danger @enderror"  name="confirm-password" id="confirm-password"  required>
                       <div class="invalid-feedback text-center fontsize-small"> The password field must have at least 8 characters! </div>
                    <label for="confirm-password"> Confirm Password </label>

                </div>


                <div class="submit-form">
                    <button type="submit" name="Change-button"> Change </button>
                </div>

                <div class="login-button">
                    <button type="button"> <a href=""> Cancel </a>  </button>
                </div>

            </form>


        </div>

    </main>

@include('components/include.footer')