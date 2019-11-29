 <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">

          <ul class="list-inline text-center">
           
           @foreach ($links as $key => $value)
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-{{$key}} fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
           @endforeach
           
   
          </ul>

          <p class="copyright text-muted">Copyright &copy; Your Website 2019</p>
        </div>
      </div>
    </div>
  </footer>

  <script src="{{asset('User/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('User/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('User/js/clean-blog.min.js')}}"></script>

</body>

</html>
