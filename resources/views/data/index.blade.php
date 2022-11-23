@extends('data.template')

<!-- @section('title', 'Data Tabel') -->

@section('content')                
<div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row">                          
              <div class="col-12">
              @if(session('berhasil'))
              <div class="alert alert-primary alert-dismissible show fade">
                <div class="alert-body">
                  <button class="close" data-dismiss="alert">
                    <span>&times;</span>
                  </button>
                        <b>Yeaah</b> {{session('berhasil')}}
                </div>
              </div>
              @endif
                <div class="card">
                  <div class="card-header">
                    <h4>Import Data</h4>
                  </div>
                  <div class="card-body">
                    @auth
                    <!-- <button class="btn btn-primary">Tambah</button> -->
                    <button class="btn btn-success" data-toggle="modal" data-target="#basicModal">Import</button><hr>                    
                    @endauth
                    <div class="table-responsive">
                      <table id="example" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Latitude</th>
                                <th>Longitude</th>
                                <th>Satelit</th>
                                <th>Waktu</th>
                                <th>Tanggal</th>
                                <th>Provinsi</th>
                                <th>Kabupaten</th>
                                <th>Kecamatan</th>                                
                            </tr>
                        </thead>
                        <tbody>
                        @php
                        $no= 1;
                        @endphp
                        @foreach($dataKebakaran as $value)
                            <tr>                            
                              <td>{{$no}}</td>
                                <td>{{$value->kebakaran_latitude}}</td>
                                <td>{{$value->kebakaran_longitude}}</td>
                                <td>{{$value->kebakaran_satelit}}</td>
                                <td>{{$value->kebakaran_waktu}}</td>
                                <td>{{$value->kebakaran_tanggal}}</td>
                                <td>{{$value->kebakaran_provinsi}}</td>                                                              
                                <td>{{$value->kebakaran_kabupaten}}</td>
                                <td>{{$value->kebakaran_kecamatan}}</td>                                                                                              
                            </tr>     
                            @php
                            $no++;
                            @endphp                                                   
                        @endforeach                        
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Latitude</th>
                                <th>Longitude</th>
                                <th>Satelit</th>
                                <th>Waktu</th>
                                <th>Tanggal</th>
                                <th>Provinsi</th>
                                <th>Kabupaten</th>
                                <th>Kecamatan</th>
                            </tr>
                        </tfoot>
                    </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>        
        <div class="modal fade" id="basicModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
          aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">                                        
                <h5 class="modal-title" id="exampleModalLabel">Import Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>              
              </div>
              <form action="{{url('data')}}" method="post" enctype="multipart/form-data">                                  
              {{ csrf_field() }}
                <div class="modal-body">                
                <input type="file" name="import" class="form-group">
                </div>
                <div class="modal-footer bg-whitesmoke br">
                  <button type="submit" class="btn btn-primary">Save changes</button>
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
@endsection