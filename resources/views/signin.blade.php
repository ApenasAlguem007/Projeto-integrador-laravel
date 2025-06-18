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
 
 
 
 
<div class="new-box">
 
 
 
 <div class="new-password-1"><p>New Password</p></div>
<br><br>
   <!-- Password -->
  <div class="email">
  <input type="password" placeholder="New Password">
  </div>
 
  <div class="email">
  <input type="password" placeholder="Confirm Password">
  </div>
 
 
  <!-- possivel alteração em caso de real mudança de senha -->
 
 
  <div class="enviar">
  <input type="submit" value="Change" id="new-password" required>
  </div>
 
</div>
 
 
 <footer class="aurora-footer">
 
        <div class="footer-container">
 
 
            <div class="copyright-section">
                <p> Copyright &copy; <?php echo date('Y'); ?> Aurora Platform. All Rights Reserved.</p>
            </div>
 
 
        </div>
 
    </footer>
 
 
</body>
</html>
 