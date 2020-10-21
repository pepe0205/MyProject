<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="./public/css/menustyle.css" />

<div class="hotline-text custom-font-menu">HOTLINE: 0900109900</div>

<!-- Thanh Menu-->
<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light ">

  <div class="container">
    <a class="navbar-brand" href="#">
      <img src="./public/img/logo.png" style="width: 64px;">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active custom-width">
          <a class="nav-link custom-font-menu" href="http://localhost:88/ProjectWeb/Home">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item dropdown custom-width">
          <a href="http://localhost:88/ProjectWeb/AllProduct" class="nav-link custom-font-menu" id="navbarDropdown">Cửa Hàng
</a>
          <div class="dropdown-content custom-dropdown">
            <a class="dropdown-item custom-font-menu custom-minh" href="http://localhost:88/ProjectWeb/Bama">Bama</a>
            <a class="dropdown-item custom-font-menu custom-minh" href="http://localhost:88/ProjectWeb/BirdyBag">BirdyBag</a>
            <a class="dropdown-item custom-font-menu custom-minh" href="http://localhost:88/ProjectWeb/SgSwagger">SgSwagger</a>
            <a class="dropdown-item custom-font-menu custom-minh" href="http://localhost:88/ProjectWeb/Wiinhouse">Wiinhouse</a>
          </div>
        </li>
        <li class="nav-item Link custom-width">
          <!--<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#cart">Cart (<span class="total-count"></span>)</button>-->
          <a class="nav-link custom-font-menu" href="#" data-toggle="modal" data-target="#cart">Giỏ Hàng(<span class='total-count' id='lblCartCount'>0</span>)</a>
        </li>
       

        <!-- <li class="nav-item Link custom-width">
          <a class="nav-link custom-font-menu" href="http://localhost:88/ProjectWeb/Login">Đăng Nhập</a>
        </li> -->


        <li class="nav-item dropdown custom-width account">
          <a class="nav-link custom-font-menu da-dang-nhap custom-login" href="#">Đăng Nhập</a>
          <div class="dropdown-content custom-dropdown">
            <a class="dropdown-item custom-font-menu custom-minh custom-account-function" href="http://localhost:88/ProjectWeb/Bama">Đơn hàng</a>
            <a class="dropdown-item custom-font-menu custom-minh custom-account-function custom-logout" href="#">Đăng Xuất</a>
          </div>
        </li>

      </ul>
      <form class="form-inline my-2 my-lg-0">
         <input class="form-control mr-sm-2 input-searching "  type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0 custom-font-menu btn-searching"  type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.2/rollups/aes.js"></script>
  <script language="javascript" src="./public/js/cart.js"></script>
  <script language="javascript" src="./public/js/checkuserlogin.js"></script>
  <script language="javascript" src="./public/js/search.js"></script>
 
  <script> 
  
</script>
  <!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script> -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>