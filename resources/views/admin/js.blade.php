<!-- JavaScript files-->
<script type="text/javascript">
      function confirmation(ev){
        ev.preventDefault();
        var urlToRedirect=ev.currentTarget.getAttribute('href');
        console.log(urlToRedirect);
        swal({
          title:"Are You Delete This?",
          text:"This Delete will be Permanent",
          icon:"warning",
          buttons:true,
          dangerMode:true,
        })
        .then((willCancel) =>{
          if(willCancel){
            window.location.href=urlToRedirect;
          }
        })
      }
</script>

<script src="{{ asset('admincss/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('admincss/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('admincss/js/adminlte.min.js') }}"></script>
<!-- Summernote -->
<script src="{{ asset('admincss/plugins/summernote/summernote-bs4.min.js') }}"></script>
<script src="{{ asset('admincss/plugins/dropzone/dropzone.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('admincss/js/demo.js') }}"></script>
<script>
  Dropzone.autoDiscover = false;    
  $(function () {
      // Summernote
      $('.summernote').summernote({
          height: '300px'
      });
     
      const dropzone = $("#image").dropzone({ 
          url:  "create-product.html",
          maxFiles: 5,
          addRemoveLinks: true,
          acceptedFiles: "image/jpeg,image/png,image/gif",
          headers: {
              'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
          }, success: function(file, response){
              $("#image_id").val(response.id);
          }
      });

  });
</script>
