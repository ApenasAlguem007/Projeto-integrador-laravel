<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> New Password </title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>


<header class="aurora-header">

            <nav class="aurora-navbar">

                    <div class="aurora-logo">

                        <a href="{{ asset('/home') }}"> 
                            <img src="{{ asset('icons/brand-logo.png') }}" alt="The Brand Logo"> 
                        </a>

                    </div>


                @if ($page != 'register' && 
                        $page != 'login')

                    <div class="aurora-menu">

                        <div class="menu-icon" id="menu-icon">
                            <span class="bi bi-list"> </span>
                        </div>

                        <ul class="navbar-menu" id="navbar-menu">

                            <li class="navbar-item">
                                <a href="{{ asset('/about') }}"> About </a>
                            </li>

                            <li class="navbar-item">
                                <a href="{{ asset('/home') }}"> Home </a>
                            </li>

                            <li class="navbar-item">
                                <a href="{{ asset('/courses') }}"> Courses </a>
                            </li>

                            <li class="navbar-item">
                                <a href="{{ asset('/login') }}"> Login </a>
                            </li>

                            <li class="navbar-item">
                                <a href="{{ asset('/register') }}"> Register </a>
                            </li>

                        </ul>

                    </div>

                @endif

            </nav>

    </header>

    <main class="aurora-main">

        <div class="register-form">

            <form action="{{ route('register') }}" method="POST">

                <div class="title-form pt-5">
                    <h1 class="font-semibold"> Change Password </h1>
                </div>


                <div class="form-container pt-2">
                    <input type="password" name="new-password" id="new-password" required>
                    <label for="new-password"> New Password </label>
                </div>


                <div class="form-container pb-3">
                    <input type="password" name="confirm-password" id="confirm-password"  required>
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

     
 <footer class="aurora-footer">

        <div class="footer-container">

        @if ($page != 'register' && 
                $page != 'login')

            <div class="footer-main">

                <div class="footer-section">

                    <nav>

                        <ul class="footer-menu">

                            <li class="footer-item">
                                <a href="{{ asset('/about') }}"> About </a>
                            </li>

                            <li class="footer-item">
                                <a href="{{ asset('/home') }}"> Home </a>
                            </li>

                            <li class="footer-item">
                                <a href="{{ asset('/courses') }}"> Courses </a>
                            </li>

                            <li class="footer-item">
                                <a href="{{ asset('/login') }}"> Login </a>
                            </li>

                            <li class="footer-item">
                                <a href="{{ asset('/register') }}"> Register </a>
                            </li>

                        </ul>

                    </nav>

                </div>

                <div class="footer-section">

                    <div class="footer-icons">
                        <a href="https://github.com/ApenasAlguem007/aurora-platform" target="_blank">
                            <span class="bi bi-github"></span>
                        </a>
                    </div>

                </div>

            </div>

        @else

            <div class="footer-section justify-content-center fontsize-small">

                <nav>

                    <ul class="footer-menu">

                        <li class="footer-item">
                            <a href="{{ asset('/about') }}"> About </a>
                        </li>

                        <li class="footer-item">
                            <a href="{{ asset('/home') }}"> Home </a>
                        </li>

                        <li class="footer-item">
                            <a href="{{ asset('/courses') }}"> Courses </a>
                        </li>

                        <li class="footer-item">
                            <a href="{{ asset('/login') }}"> Login </a>
                        </li>

                        <li class="footer-item">
                            <a href="{{ asset('/register') }}"> Register </a>
                        </li>

                    </ul>

                </nav>

            </div>

        @endif

            <div class="footer-bottom 
                            border-top">

                <div class="copyright-section">
                    <p> Copyright &copy; <?php echo date('Y'); ?> Aurora Platform. All Rights Reserved. </p>
                </div>

                <div class="verify-certificate">
                    <a href="#"> Verify Certificate </a>
                </div>

            </div>

        </div>

    </footer>


    <!-- <script src="{{ asset('js/bootstrap.js') }}"> </script>
    <script src="{{ asset('js/script.js') }}"> </script> -->


</body>
</html>