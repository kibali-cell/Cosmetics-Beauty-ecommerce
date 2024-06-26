<!DOCTYPE html>
<html lang="en">
    <head>
  @include('admin.css')
    </head>
  <body>
    <div class="container-scroller">
    @include('admin.sidebar')
      <!-- partial -->
      @include('admin.header')
        <!-- partial -->
        
              @include('admin.body')
            </div>
          <!-- partial -->
        
      
   @include('admin.script')
  </body>
</html>