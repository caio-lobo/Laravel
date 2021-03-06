<?php
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
$total =0;
if (Session::has('user')) {
  $total = ProductController::cartItem();
}


?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">E-Comm</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/my_orders">Orders</a>
          </li>
          <li>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </li>
          
          
        </ul>
        <ul class="nav navbar-bar navbar-right">
          @if (Session::has('user'))
            <li><a class="nav-link" href="/cart_list">  Cart({{$total}}) </a></li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                {{Session::get('user')['name']}}
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><hr class="dropdown-divider"></li>
                <li>
                  
                  <a class="dropdown-item" href="/logout" onclick="submit">Logout</a></form> 
                  
                </li>
              </ul>
            </li>
            @else
            <li><a class="nav-link" href="/login " >Login</a></li>
                      
                  @endif
        </ul>
        
        
        
      </div>
    </div>
  </nav>