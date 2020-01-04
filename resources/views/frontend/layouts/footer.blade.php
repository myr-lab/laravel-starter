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

<div class="modal fade" id="newsletter">
  <div class="modal-dialog">
    <div class="modal-content">
 
 <p id="success" style="color: green;font-size"></p>

<form>
  
     <div class="modal-header">
        <h4 class="modal-title">Subscribe our newsletter</h4>
      </div>
      <div class="modal-body">
        <input type="email" name="email" id="email" placeholder="Enter your email" class="form-control">
      </div>
      <div class="modal-footer">
        <button type="submit" id="btnSave" class="btn btn-primary">Submit</button>
      </div>

</form>


    </div>
  </div>
</div>

  <script src="{{asset('User/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('User/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('User/js/clean-blog.min.js')}}"></script>

  <script>
    
    $(document).ready(function(){


      $.ajaxSetup({

         headers: {
             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });

      $('#btnSave').click((e)=>{
       
       e.preventDefault()

       var email = $('#email').val();

       var url = '{{ route('newsletter') }}'

       $.ajax({

           url:url,
           method:'POST',
           data:{ email: email },

           success:function(response){
             
             // $('#success').html(response.message)

             $('#newsletter').modal('hide');

             alert('thanks for subscribing')
            
           },


        });

      })

    });
  </script>

</body>

</html>
