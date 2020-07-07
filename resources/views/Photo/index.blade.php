@extends('layouts.app')
@section('content')
<style>
            html, body {
                background-color: #A9A9A9;
                color: #fff;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #fff;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
<div class="container">
	<center><h3><font color="#000">DATA PHOTO</font></h3></center>

	<table class="table table-bordered">
		<tr class="bg-info">
			<th scope="col" class="bg-info">ID</th>
			<th scope="col" class="bg-warning">POST ID</th>
			<th scope="col" class="bg-info">TANGGAL</th>
			<th scope="col" class="bg-warning">JUDUL</th>
			<th scope="col" class="bg-info">KETERANGAN</th>
			<th scope="col" class="bg-warning">EDIT</th>
		</tr>

		@foreach($rows as $row)
		<tr>
			<td class="bg-info">{{ $row->id }}</td>
			<td class="bg-warning">{{ $row->pho_post_id }}</td>
			<td class="bg-info">{{ $row->pho_date }}</td>
			<td class="bg-warning">{{ $row->pho_tittle }}</td>
			<td class="bg-info">{{ $row->pho_text }}</td>
			<td class="bg-warning">
				<a href="{{ url('photo/' . $row->id . '/edit')}}" class="text-muted"><font color="#000">EDIT</font></a>
				
				<form action="{{ url('photo/' . $row->id)}}" method="post" class="d-inline">
					<input name="_method" type="hidden" value="delete">
					@csrf
					<button class="text-muted">DELETE</button>
				</form>
			</td>
		</tr>
		@endforeach
	</table>
	<center><a href="{{ url('photo/create') }}"><font color="#000">TAMBAH DATA PHOTO</font></a></center>
</div>

@endsection