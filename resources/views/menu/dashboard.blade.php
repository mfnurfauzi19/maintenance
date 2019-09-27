@extends('tamplate.main')

@section('title', 'Maintenance Client')

@section('container')
	<!-- Conten Dashboard -->  
	<div class="col-md-12 p-5 pt-2">
	    <h3><i class="fas fa-tachometer-alt mr-2"></i>DASHBOARD</h3><hr>


	            <!-- Card  -->
	            <div class="row text-white">
	                <!-- Card Paket Silver -->
	                <div class="card  ml-3" id="card-silver" style="width: 18rem;">
	                    <div class="card-body">
	                        <div class="card-body-icon">
	                            <i class="far fa-star   ml-2"></i>
	                        </div>
	                        <center>
	                        <h5 class="card-title">Paket Silver</h5>
	                        </center>
	                        <div class="display-4">
	                        <p>12</p>
	                        </div>
	                        <a href="#"><p class="card-text text-white"> Data Client Paket Silver<i class="fas fa-angle-double-right ml-2"></i></i></p></a>
	                    </div>
	                </div>

	                <!-- Card Paket Gold -->
	                <div class="card ml-3 " id="card-gold" style="width: 18rem;">
	                    <div class="card-body">
	                        <div class="card-body-icon">
	                            <i class="fas fa-star-half-alt   ml-2"></i>
	                        </div>
	                        <center>
	                        <h5 class="card-title">Paket Gold</h5>
	                        </center>
	                        <div class="display-4">
	                        <p>13</p>
	                        </div>
	                        <a href="#"><p class="card-text text-white"> Data Client Paket Gold<i class="fas fa-angle-double-right ml-2"></i></i></p></a>
	                    </div>
	                </div>
	                
	                <!-- Card Paket Platinum -->
	                <div class="card ml-3" id="card-platinum" style="width: 18rem;">
	                    <div class="card-body">
	                        <div class="card-body-icon">
	                            <i class="fas fa-star   ml-2"></i>
	                        </div>
	                        <center>
	                        <h5 class="card-title">Paket Platinum</h5>
	                        </center>
	                        <div class="display-4">
	                        <p>24</p>
	                        </div>
	                        <a href="#"><p class="card-text text-white"> Data Client Paket Platinum<i class="fas fa-angle-double-right ml-2"></i></i></p></a>
	                    </div>
	                </div>
	            </div><br /><hr>
	            <!-- End Card -->
	</div>
	<!-- End Conten Dashboard -->
@endsection