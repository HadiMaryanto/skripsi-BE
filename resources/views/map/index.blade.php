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
                    <select id="selecteDate" name="cars">
                      <option value="2016">2016</option>
                      <option value="2017">2017</option>
                      <option value="2018">2018</option>
                      <option value="2019">2019</option>
                    </select>
                  </div>
                </div>
                <div class="col mb-1 ml-1 mr-1 ">
                  <div class="form-group">
                    <button class="btn btn-primary">Mulai</button>
                  </div>
                </div>
              </div>
            </div>
            <!-- <div class="card-body">
                    <div id="map" class="map" ></div>
                  </div> -->
          </div>
        </div>
      </div>
    </div>
    <iframe id="map" src="http://localhost:3000/" title="description"></iframe>
  </section>
</div>

<script>
  function updateYear() {
    const year = $('#selecteDate option:selected').val();
    $('#map')[0]['src'] = `http://localhost:3000/?year=${year}`;
  }


  window.onload = function() {
    if (window.jQuery) {
      updateYear();

      $('#selecteDate').on('change', function(eo) {
        updateYear();
      });
    }
  }
</script>
@endsection