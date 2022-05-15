<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">@yield('title')</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">@yield('breadcrumb')</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
@if(auth()->user()->role=='Admin')
<section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-6 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{$pelamar}}</h3>
                <p>Pelamar</p>
              </div>
              <div class="icon">
                <i class="ion ion-ios-book-outline"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-6 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{$user}}</h3>

                <p>Users</p>
              </div>
              <div class="icon">
                <i class="fa fa-users"></i>
              </div>
              
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
         
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    @else
    <section class="content">
        <div class="container-fluid">
            <div class="row">
              <div class="col-lg-12 col-12">
                  <!-- small box -->
                  <div class="small-box bg-info">
                      <div class="inner">
                          <span>Selamat Datang Di Portal Pelamar PT. EDII</span>
                      </div>
                  </div>
              </div>

                <!-- right col -->
            </div>
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
    @endif
    