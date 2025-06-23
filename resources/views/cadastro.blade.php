<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Sign Up </title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
 
 
    <header class="aurora-header">
 
            <nav class="aurora-navbar">
 
                <div class="navbar-logo">
 
                    <a href="{{asset('index')}}">
                        <img src="{{asset('images/Aurora-Logo-White.png') }}" alt="The brand logo">
                    </a>
 
                </div>
 
               
                <!-- <div class="aurora-menu">
 
                    <ul class="navbar-menu">
                        <li class="navbar-item">
                            About
                        </li>
 
                        <li class="navbar-item">
                            Docs
                        </li>
 
                        <li class="navbar-item">
 
                        </li>
                    </ul> -->
 
                </div>
 
            </nav>
 
    </header>
 
 
    <main class="aurora-main">
 
        <div class="register-form">
 
            <form action="{{ route('cadastro.adicionar.post') }}" method="POST">
                @csrf
                
 
 
                <div class="title-form">
                    <h1 class="font-semibold"> Sign Up </h1>
                </div>
 
 
                <div class="container-form">
                    <input type="text" name="name" id="name" required>
                    <label for="name"> Nome </label>
                </div>
 
 
                <div class="container-form">
                    <input type="email" name="email" id="email" required>
                    <label for="email"> E-mail </label>
                </div>
 
           
                <div class="container-form">
                    <input type="password" name="password" id="password" required>
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
 
 
    <footer class="aurora-footer">
 
        <div class="footer-container">
 
 
            <div class="copyright-section">
                <p> Copyright &copy; <?php echo date('Y'); ?> Aurora Platform. All Rights Reserved.</p>
            </div>
 
 
        </div>
 
    </footer>
 
 
</body>
</html>


