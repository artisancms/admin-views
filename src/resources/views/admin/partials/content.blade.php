<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">

        @yield('content-header')
      {{-- <h1>
        Page Header
        <small>Optional description</small>
      </h1> --}}
      {{-- <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol> --}}
    </section>

    <!-- Main content -->
    <section class="content">

      @yield('content')

    </section><!-- /.content -->
  </div><!-- /.content-wrapper -->
