@extends('layouts.app')

@section('content')
	<div class="indicators">
	    <div>
	        <p class="h1">Info</p>
	        <p class="h5">Info / <a href="siswa">home</a></p>
	    </div>
	    <div>
	        <a href="barang/tambahBarang" class="btn btn-primary"><i class="fas fa-plus"></i></a>
	    </div>
	</div>
	<div class="container-admin">
		<div class="row">
			<div class="col-12 col-md-12">
				<div class="card">
					<div class="card-header">
						<i class="fas fa-info-circle"></i> <b>INFO APLIKASI</b>
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col-4">
								<p>Pembuat</p>
								<p>Dari</p>
								<p>Label</p>
								<p>Materi</p>
								<p>Guru</p>
								<p>Tanggal Selesai</p>
							</div>
							<div class="col-8">
								<p><b>: Romadhan Edy Prasetyo</b></p>
								<p><b>: SMK Negeri 10 Jakarta</b></p>
								<p><b>: UAS Semester 3</b></p>
								<p><b>: Web Design and Development</b></p>
								<p><b>: Arief Setya Pambudi</b></p>
								<p><b>: Jum'at, 30 November 2018</b></p>
							</div>
						</div>
						<a href="http://www.romadhanedy.ga/" class="btn btn-primary"><b>MY WEBSITE</b></a>
						<a href="http://www.repject.tk/" class="btn btn-success"><b>MY PROJECT</b></a>
						<a href="http://www.github.com/dyprast" class="btn btn-primary"><b>MY GITHUB</b></a>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection