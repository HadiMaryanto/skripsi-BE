@extends('map.template')

<!-- @section('title', 'Data Tabel') -->


@section('content')         
<div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Peta Indonesian</h4>
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col mb-1 ml-1 mr-1 ">
                        <div class="form-group">
                          <label>Provinsi</label>
                          <input type="text" class="form-control">
                        </div>
                      </div>
                      <div class="col mb-1 ml-1 mr-1 ">
                        <div class="form-group">
                          <label>Kabupaten</label>
                          <input type="text" class="form-control">
                        </div>
                      </div>
                      <div class="col mb-1 ml-1 mr-1 ">
                        <div class="form-group">
                          <label>Kecamatan</label>
                          <input type="text" class="form-control">
                        </div>
                      </div>
                      <div class="col mb-1 ml-1 mr-1 ">
                        <div class="form-group">
                          <label>Tgl Awal - Tgl Akhir</label>
                          <input type="date" class="form-control">
                        </div>
                      </div>
                      <div class="col mb-1 ml-1 mr-1 ">
                        <div class="form-group">
                          <button class="btn btn-primary">Mulai</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <div id="map" class="map" ></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <iframe src="http://localhost:3000/" title="description" ></iframe>
        </section>        
      </div>
@endsection