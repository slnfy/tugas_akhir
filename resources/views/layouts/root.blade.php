<!--
=========================================================
* Argon Dashboard 2 - v2.0.4
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-dashboard
* Copyright 2022 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="icon" type="image/png" href="{{ asset('img/favicon1.jpeg') }}">
  <title>
    Archive App
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="{{ asset('assets/css/nucleo-icons.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/css/nucleo-svg.css') }}" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset('assets/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link href="{{ asset('assets/css/nucleo-svg.css') }}" rel="stylesheet" />
  <!-- CSS Files -->
  
  <link rel="stylesheet" href="{{ asset('assets/vendor/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/vendor/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/vendor/datatables.net-select-bs4/css/select.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/vendor/datatable-extensions/fixedColumns.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/vendor/select2/dist/css/select2.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/vendor/sweetalert2/dist/sweetalert2.min.css') }}">

  <link id="pagestyle" href="{{ asset('assets/css/argon-dashboard.css?v=2.0.4') }}" rel="stylesheet" />

  <link href="{{ asset('assets/vendor/noty/noty.css') }}" rel="stylesheet">


  <link rel="stylesheet" href="{{ asset('assets/css/custom.css?'.date('Ym')) }}" type="text/css">
  <style>
    .dataTables_scrollBody {
        border-left : none !important;
    }
  </style>

</head>

<body class="g-sidenav-show   bg-gray-100">
  <div class="min-height-300 bg-primary position-absolute w-100"></div>
  @include('layouts.sidebar')
  <main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    @include('layouts.navbar')
    <div class="container-fluid py-1 px-4">
        @yield('breadcrumb')
    </div>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
        @yield('page')
    </div>
  </main>
  <div class="modal fade" id="myModal" data-backdrop="static" data-keyboard="false" tabindex="-1"  >
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modal_title"></h5>
          <button type="button" class="btn close" onclick="function(){ Global.close_modal(); }" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body" id="modal_body"></div>
        <div class="modal-footer" id="modal_footer"></div>
      </div>
    </div>
  </div>
  <!--   Core JS Files   -->

  {{-- <script src="{{ asset('assets/vendor/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/js-cookie/js.cookie.js') }}"></script>
  <script src="{{ asset('assets/js/core/popper.min.js') }}"></script>
  <script src="{{ asset('assets/js/core/bootstrap.min.js') }}"></script>
  <script src="{{ asset('assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
  <script src="{{ asset('assets/js/plugins/smooth-scrollbar.min.js') }}"></script>
  <script src="{{ asset('assets/js/plugins/chartjs.min.js') }}"></script> --}}


  <script src="{{ asset('assets/vendor/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/js-cookie/js.cookie.js') }}"></script>
  <script src="{{ asset('assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js') }}"></script>

  @yield('script')

  <script src="{{ asset('assets/vendor/chart.js/dist/Chart.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/chart.js/dist/Chart.extension.js') }}"></script>
  <script src="{{ asset('assets/vendor/datatables.net/js/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js') }}"></script>
  <script src="{{ asset('js/jszip.js') }}"></script>
  <script src="{{ asset('js/colvis.js') }}"></script>
  <script src="{{ asset('assets/vendor/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/datatables.net-buttons/js/buttons.flash.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/datatables.net-select/js/dataTables.select.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/datatable-extensions/dataTables.fixedColumns.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/select2/dist/js/select2.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/sweetalert2/dist/sweetalert2.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/jquery-block-ui/jquery-block-ui.js') }}"></script>
  <script src="{{ asset('js/autoNumeric.js') }}"></script>
  <script src="{{ asset('js/numeral.js') }}"></script>
  <script src="{{ asset('assets/vendor/summernote/summernote-bs4.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/flatpickr/flatpickr.js') }}"></script>
  <script src="{{ asset('assets/vendor/datatables-buttons-excel-styles/buttons.html5.styles.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/datatables-buttons-excel-styles/buttons.html5.styles.templates.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/datatables-selected-box/dataTables.checkboxes.min.js') }}"></script>


  <script src="{{ asset('js/datatables-language.js') }}"></script>
  <script src="{{ asset('js/datatables-searchbuilder.min.js') }}"></script>
  <script src="{{ asset('js/datatables-datetime.min.js') }}"></script>
  <script src="{{ asset('js/moment.min.js') }}"></script>
  <script src="{{ asset('js/datetime-moment.js') }}"></script>
  <script src="{{ asset('js/jquery.mask.js') }}"></script>
  <script src="{{ asset('js/jquery.maskMoney.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/wizard/jquery.steps.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/wizard/bd-wizard.js') }}"></script>
  <script src="{{ asset('js/apexcharts/apexcharts.js') }}"></script>
  <script src="{{ asset('js/apexcharts/apexcharts.js') }}"></script>
  {{-- Noty JS --}}
  <script src="{{ asset('assets/vendor/noty/noty.js') }}" type="text/javascript"></script>

  {{-- Global js --}}
  <script src="{{ asset('js/global.js') }}"></script>

  <script>
    var base_url = "{{ url('').'/' }}"
  </script>
  
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }

    $('.dt_table thead').addClass('thead-light');
    $('nav .active-manager').addClass('bg-dark');
    $('.select2').select2();
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{ asset('assets/js/argon-dashboard.min.js?v=2.0.4') }}"></script>
</body>

</html>