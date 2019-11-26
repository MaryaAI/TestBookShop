<!DOCTYPE html>
<html lang="ar">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>لوحة الإدارة - مكتبة حسوب</title>

  <!-- Custom fonts for this template-->
  <link href="{!! asset('theme/vendor/fontawesome-free/css/all.min.css') !!}" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="{!! asset('theme/vendor/datatables/dataTables.bootstrap4.css') !!}" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{!! asset('theme/css/sb-admin.css') !!}" rel="stylesheet">

</head>

<body id="page-top" dir="rtl">

  @include('theme.header')

  <div id="wrapper">

    @include('theme.sidebar')

    <div id="content-wrapper" class="text-right" dir="rtl">
        <div class="container-fluid">
          @if(Session::has('flash_message'))
            <div class="p-3 mb-2 bg-success text-white rounded">
              {{session('flash_message')}}
            </div>  
          @endif

          @if(Session::has('warning_message'))
            <div class="p-3 mb-2 bg-danger text-white rounded">
              {{session('warning_message')}}
            </div>  
          @endif

          @yield('content')
        </div>

        @include('theme.footer')
    </div>

  </div>

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">أمستعد للمغادرة؟</h5>
          <button class="ml-0 close" type="button" data-dismiss="modal" aria-label="Close">
            <span  aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body text-right">انقر على "تسجيل الخروج" إذا كنت مستعدًا لإنهاء هذه الجلسة</div>
        <div class="modal-footer" style="justify-content:right">
          <a class="btn btn-primary" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <span class="icon nalika-unlocked author-log-ic"></span> تسجيل الخروج
          </a>
          <button class="btn btn-secondary" type="button" data-dismiss="modal">إلغاء</button>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="{!! asset('theme/vendor/jquery/jquery.min.js') !!}"></script>
  <script src="{!! asset('theme/vendor/bootstrap/js/bootstrap.bundle.min.js') !!}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{!! asset('theme/vendor/jquery-easing/jquery.easing.min.js') !!}"></script>

  <!-- Page level plugin JavaScript-->
  <script src="{!! asset('theme/vendor/chart.js/Chart.min.js') !!}"></script>
  <script src="{!! asset('theme/vendor/datatables/jquery.dataTables.js') !!}"></script>
  <script src="{!! asset('theme/vendor/datatables/dataTables.bootstrap4.js') !!}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{!! asset('theme/js/sb-admin.min.js') !!}"></script>

  @yield('script')
  <script>
    $('div.bg-success').delay(5000).slideUp(300);
    $('div.bg-danger').delay(5000).slideUp(300);
  </script>
  
</body>

</html>
