  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand" href="index.html">Start Bootstrap</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{Request::is('/companies') ? 'active' : ''}}" href="{{ route('company.get') }}">Company</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{URL::to('contact')}}">Contact</a>
          </li>
           <li class="nav-item">
            <a class="nav-link {{Request::is('/newsletter') ? 'active' : ''}}" href="{{ route('newsletter') }}">Newsletter</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>