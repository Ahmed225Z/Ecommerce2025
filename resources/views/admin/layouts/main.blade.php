<!DOCTYPE html>
<html lang="en">
 @include('admin.layouts.head')
  <body>
    <div class="container-scroller">

      <!-- partial:partials/_sidebar.html -->
     @include('admin.layouts.sidebar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        @include('admin.layouts.navbar')
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
          @yield('body')
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
     @include('admin.layouts.footer')
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
  @include('admin.layouts.scripts')
    <!-- End custom js for this page -->
  </body>
</html>