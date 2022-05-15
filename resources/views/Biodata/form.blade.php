@extends('layouts.backend-dashboard.app')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">{{$title?$title : "Biodata"}}</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">{{$title?$title : "Biodata"}}</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="col-12"> 
              <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col">
                            <h3 class="card-title">Formulir {{$title?$title : "Biodata"}}</h3>
                        </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body" >
                <form action="/biodata/store-biodata" method="POST">
                    {{csrf_field()}}
                    <div class="row">                    
                        <div class="col-md-4">
                            <div class="form-group">
                            <label>Posisi yang dilamar</label>
                            <select class="form-control select2" name="jabatan_id" style="width: 100%;">
                                <option value="" disable selected>-Pilih-</option>
                                @foreach ($jabatan as $item)
                                <option value="{{$item->id}}">{{$item->jabatan}}</option>
                                @endforeach
                            </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label>Nama Lengkap</label>
                            <input type="text" class="form-control" name="nama">
                        </div>
                        <div class="col-md-6">
                            <label>No.Identitas(KTP)</label>
                            <input type="number" class="form-control" name="no_ktp">
                        </div>
                        <hr>
                        <!-- <div class="col-md-12 mb-3">
                            <div class="row">
                                  <div class="col-md-6">
                                    <label>Nama Lengkap</label>
                                    <input type="text" class="form-control" name="nama">
                                  </div>
                                  <div class="col-md-6">
                                    <label>No.Identitas(KTP)</label>
                                    <input type="number" class="form-control" name="no_ktp">
                                  </div>
                            </div>
                        </div> -->
                        <div class="col-md-12 mb-3">
                            <div class="row">
                                  <div class="col-md-4">
                                    <label>Tempat Lahir(Kota)</label>
                                    <input type="text" class="form-control" name="tob">
                                  </div>
                                  <div class="col-md-4">
                                    <label>Tanggal Lahir</label>
                                    <input type="date" class="form-control" name="dob">
                                  </div>
                                  <div class="col-md-4">
                                    <label>Jenis Kelamin</label>
                                    <select class="form-control select2" name="gender" style="width: 100%;">
                                        <option value="" disable selected>-Pilih-</option>
                                        <option value="L">Laki-laki</option>
                                        <option value="P">Perempuan</option>
                                    </select>
                                  </div>
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <div class="row">
                                  <div class="col-md-4">
                                    <label>Agama</label>
                                    <select class="form-control select2" name="agama" style="width: 100%;">
                                        <option value="" disable selected>-Pilih-</option>
                                        <option value="islam">Islam</option>
                                        <option value="kristen">Kristen</option>
                                        <option value="katolik">Katolik</option>
                                        <option value="hindu">Hindu</option>
                                        <option value="budha">Budha</option>
                                        <option value="konghucu">Konghucu</option>
                                        <option value="lainnya">Lainnya</option>
                                    </select>
                                  </div>
                                  <div class="col-md-4">
                                    <label>Golongan Darah</label>
                                    <select class="form-control select2" name="gol_darah" style="width: 100%;">
                                        <option value="" disable selected>-Pilih-</option>
                                        <option value="A">A</option>
                                        <option value="AB">AB</option>
                                        <option value="B">B</option>
                                        <option value="O">O</option>
                                        <option value="tidak tahu">Tidak Tahu</option>
                                    </select>
                                  </div>
                                  <div class="col-md-4">
                                    <label>Status</label>
                                    <select class="form-control select2" name="status" style="width: 100%;">
                                        <option value="" disable selected>-Pilih-</option>
                                        <option value="single">Single</option>
                                        <option value="menikah">Menikah</option>
                                        <option value="janda">Janda</option>
                                        <option value="duda">Duda</option>
                                    </select>
                                  </div>
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <div class="row">
                                  <div class="col-md-6">
                                    <label>Alamat KTP</label>
                                    <textarea class="form-control" name="alamat_ktp"></textarea>
                                  </div>
                                  <div class="col-md-6">
                                    <label>Alamat Tinggal(Domisili)</label>
                                    <textarea class="form-control" name="alamat_domisili"></textarea>
                                  </div>
                            </div>
                        </div>                        
                        <div class="col-md-12 mb-3">
                            <div class="row">
                                  <div class="col-md-4">
                                    <label>Email</label>
                                    <input type="text" class="form-control" name="email" value="{{$email}}" readonly>
                                  </div>
                                  <div class="col-md-4">
                                    <label>No.Telp</label>
                                    <input type="number" class="form-control" name="no_telp">
                                  </div>
                                  <div class="col-md-4">
                                    <label>Kontak Darurat</label>
                                    <input type="text" class="form-control" name="emergency_contact">
                                  </div>
                            </div>
                        </div>          
                        <div class="col-md-12 mb-3">
                            <div class="row">
                                  <div class="col-md-12">
                                    <label>Keahlian</label>
                                    <textarea class="form-control" name="keahlian" placeholder="Tuliskan keahlian dan keterampilan yang saat ini anda miliki..."></textarea>
                                  </div>
                            </div>
                        </div>                                                                  
                        <div class="col-md-12 mb-3">
                            <div class="row">
                                  <div class="col-md-6">
                                    <label>Bersedia ditempatkan di seluruh kantor Perusahaan :</label>                                    
                                  </div>
                                  <div class="col-md-6">
                                    <select class="form-control select2" name="confirm_available_anywhere" style="width: 100%;">
                                        <option value="" disable selected>-Pilih-</option>
                                        <option value="Ya">Ya</option>
                                        <option value="Tidak">Tidak</option>
                                    </select>
                                  </div>
                            </div>
                        </div>                                                                  
                        <div class="col-md-12 mb-3">
                            <div class="row">
                                  <div class="col-md-6">
                                    <label>Penghasilan yang diharapkan/Bulan :</label>                                    
                                  </div>
                                  <div class="col-md-6">
                                    <input type="number" class="form-control" name="request_salary">
                                  </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer" >
                        <div class="row">
                            <button class="btn btn-primary mr-2">Simpan</button>
                            <a href="{{ url()->previous() }}"><button class="btn btn-secondary">Batal</button></a>
                        </div>
                    </div>    
                </form>    
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
          </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>


@push('custom-scripts')
<script src="{{ asset('assets/admin/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('assets/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{ asset('assets/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{ asset('assets/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{ asset('assets/admin/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{ asset('assets/admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{ asset('assets/admin/plugins/jszip/jszip.min.js')}}"></script>
<script src="{{ asset('assets/admin/plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{ asset('assets/admin/plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{ asset('assets/admin/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{ asset('assets/admin/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{ asset('assets/admin/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
  <script>
    var urldatatable = "{{ route('biodata.datatable') }}";
       $(function(){
          $.ajaxSetup({
                headers: {
                         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                      }
                });
  
          $('.user-table').DataTable({
              processing: true,
              serverSide: true,
              ajax: {
                      url: urldatatable,
                      type: 'GET',
                      // data: function (d) {
                      //     // d.perusahaan_id =  $("#perusahaan_id").val();
                      //     // d.periode_id =  $("#periode_id").val();
                      //     // d.status_id =  $("#status_id").val();
                      //     // d.tahun =  $("#tahun").val();
                      // }
              },
              columns: [
                        {data: "id",
                          render: function (data, type, row, meta) {
                                  return meta.row + meta.settings._iDisplayStart + 1;
                              }
                              ,sClass:'text-center',
                              orderable:false
                          },
                          { data: 'nama', name: 'nama'  },
                          { data: 'tob', name: 'tob' },
                          { data: 'jabatan_id', name: 'jabatan_id' },
                          { data: 'action', name:'action' ,sClass:'text-center', orderable:false},
                       ],
              order: [[0, 'desc']]
          });
  
        });	
  </script>
  @endpush
@endsection

