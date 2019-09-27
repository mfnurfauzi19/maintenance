@extends('tamplate.main')
@section('title', 'Client Data')
@section('container')
<!--Conten Data Client -->
<div class="col-md-12 p-5 pt-2">
	<h3><i class="fas fa-book mr-2"></i>Data Client</h3><hr>
	<!-- Menampilkan Data Client pada DB -->
	<!-- Seluruh Data Client -->
	<div  id="seluruh-client">
		<h3 class="container ml-4">All client data</h3>
		<div class="card shadow mb-4">
			<div class="card-body">
				<div class="table-responsive">
					<table class="table table-hover" id="dataTable">
						<thead>
							<tr>
								<th>No</th>
								<th>Package</th>
								<th>Name</th>
								<th>E-mail Address</th>
								<th>Phone number</th>
								<th>Company name</th>
								<th>Web Address</th>
								<th>Package active period</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							@foreach($client as $client)
							<tr>
								<td>{{$loop->iteration}}</td>
								<td>{{$client->paket}}</td>
								<td>{{$client->nama}}</td>
								<td>{{$client->email}}</td>
								<td>{{$client->no_telp}}</td>
								<td>{{$client->nama_perusahaan}}</td>
								<td>{{$client->alamat_web}}</td>
								<td>{{$client->masa_aktif}}</td>
								<td>
									<a href="" class="badge badge-warning">Edit</a>
									<a href="" class="badge badge-danger">Delete</a>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<hr>
	</div>
	<!-- End Data Client -->
	
</div>
@endsection