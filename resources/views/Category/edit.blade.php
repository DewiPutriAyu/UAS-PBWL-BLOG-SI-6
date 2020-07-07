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
	<center><h3><font color="#000">EDIT DATA KATEGORI</font></h3></center>
	<form action="{{ url('/category/' . $row->cat_id)}}" method="post">
	<input name="_method" type="hidden" value="patch">
	@csrf

	<table class="table table-bordered">
		<tr class="bg-info">
			<td>NAMA</td>
			<td><input type="text" name="cat_name" value="{{ $row->cat_name}}"></td>
		</tr>

		<tr class="bg-warning">
			<td>KETERANGAN</td>
			<td><input type="text" name="cat_text" value="{{ $row->cat_text}}"></td>
		</tr>

		<tr class="bg-info">
			<td></td>
			<td><input type="submit" value="UPDATE"></td> 
		</tr>
	</table>
	</form>
</div>
@endsection