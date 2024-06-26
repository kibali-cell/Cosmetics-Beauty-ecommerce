 <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{asset('admincss/assets/vendors/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('admincss/assets/vendors/progressbar.js/progressbar.min.js')}}"></script>
    <script src="{{asset('admincss/assets/vendors/jvectormap/jquery-jvectormap.min.js')}}"></script>
    <script src="{{asset('admincss/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
    <script src="{{asset('admincss/assets/vendors/owl-carousel-2/owl.carousel.min.js')}}"></script>
   
    <script src="{{asset('admincss/assets/js/off-canvas.js')}}"></script>
    <script src="{{asset('admincss/assets/js/hoverable-collapse.js')}}"></script>
    <script src="{{asset('admincss/assets/js/misc.js')}}"></script>
    <script src="{{asset('admincss/assets/js/settings.js')}}"></script>
    <script src="{{asset('admincss/assets/js/todolist.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{asset('admincss/assets/js/dashboard.js')}}"></script>
    <!-- End custom js for this page -->
    <script type="text/javascript">
      function confirmation(ev){
         ev.preventDefault();

         var urlToRedirect = ev.currentTarget.getAttribute('href');

         console.log(urlToRedirect);

         swal({
            title: "Are you sure To Delete This?",
            text:"this delete will be parmanent",
            icon:"warning",
            buttons: true,
            dangerMode:true;
         })

         .then((willCancel)=>{

            if (willCancel) {
               window.location.href=urlToRedirect;
            }

         });
      }
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>