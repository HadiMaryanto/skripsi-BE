@extends('layouts.template')


@section('content')

<div class="main-content">
				<section class="section">
					<div class="row">
						<div class="col-xl-3 col-lg-6">
							<div class="card">
								<div class="card-bg">
									<div class="p-t-20 d-flex justify-content-between">
										<div class="col">
											<h6 class="mb-0">Titik Hotspot Hari Ini</h6>
											<span class="font-weight-bold mb-0 font-40">@php echo $dataTglSekarang @endphp</span>
										</div>
									</div>
									<canvas id="cardChart1" height="80"></canvas>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-lg-6">
							<div class="card">
								<div class="card-bg">
									<div class="p-t-20 d-flex justify-content-between">
										<div class="col">
											<h6 class="mb-0">Titik Hotspot Kemaren</h6>
											<span class="font-weight-bold mb-0 font-40">@php echo $dataKemarin @endphp</span>
										</div>										
									</div>
									<canvas id="cardChart2" height="80"></canvas>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-lg-6">
							<div class="card">
								<div class="card-bg">
									<div class="p-t-20 d-flex justify-content-between">
										<div class="col">
											<h6 class="mb-0">Titik Hotspot Bulan Ini</h6>
											<span class="font-weight-bold mb-0 font-40">@php echo $dataBulanSekarang @endphp</span>
										</div>										
									</div>
									<canvas id="cardChart3" height="80"></canvas>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-lg-6">
							<div class="card">
								<div class="card-bg">
									<div class="p-t-20 d-flex justify-content-between">
										<div class="col">
											<h6 class="mb-0">Titik Hotspot Tahun Ini</h6>
											<span class="font-weight-bold mb-6 font-40">@php echo $dataTahunSekarang @endphp</span>
										</div>										
									</div>
									<canvas id="cardChart4" height="80"></canvas>
								</div>
							</div>
						</div>
					</div>														
			
			<div class="row">
              <div class="col-12">
                <div class="card">                  
                  <div class="card-body">
                    <div class="panel">
					<div class="form-group">
                      <label>Tahun</label>
                      <select class="form-control" name="tahun" id="tahun">
						  <option>pilih tahun</option>
						  @foreach($tahun as $value)
                        <option value={{$value}}>{{$value}}</option>  
						  @endforeach                      
                      </select>
                    </div>
						<div id="chart"></div>
					</div>
                  </div>                  
                </div>
              </div>
            </div>
			<div class="row">
              <div class="col-12">
                <div class="card">                  
                  <div class="card-body">
				  <div class="panel">
				  <!-- <div class="form-group"> -->
                      <!-- <label>Tahun</label> -->
                      <!-- <select class="form-control" name="tahun" id="barTahun">
						  <option>pilih tahun</option>
						  @foreach($tahun as $value)
                        <option value={{$value}}>{{$value}}</option>  
						  @endforeach                      
                      </select> -->
                    <!-- </div>                 -->
						<div id="barchart"></div>
					</div>
                  </div>                  
                </div>
              </div>
            </div>
				<!-- </section>				 -->
			</div>
@endsection
