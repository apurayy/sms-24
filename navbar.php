<nav class="navbar navbar-expand-lg bg-primary">
    <div class="container">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon">Nav</span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          
          
        </ul>
        

        <div class="profile">
        <?php if(isset($_SESSION['login'])){ ?>
            <li class="nav-item dropdown d-flex">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="bi bi-person-circle"></i> Account
                </a>
                <ul class="dropdown-menu p_bg">
                  <li><a class="dropdown-item" href="admin/index.php">Dashboard</a></li><hr>
                  
                  <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                </ul>
            </li>
            <?php } else{ ?>

            <li><a href="login.php"><i class="bi bi-person-check"></i> Login</a></li>
                <?php } ?>
        </div>

      </div>
    </div>
  </nav>

  <style>
    a{
        color: #fff !important;
    }
    .profile li{
        list-style-type: none;
    }
    .profile a{
        color: #fff !important;
    }
    .p_bg{
        background-color: rgb(11, 143, 99);
    }
    
    .p_bg li a:hover{
        background-color: rgb(36, 174, 160) !important;
    }
  </style>