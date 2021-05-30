@extends('layout.main')

@section('tittle', 'Pasien')

@section('container')
<div class="container">
    <div class="row">
      <div class="col-10">
        <h1 class="mt-2">Data Pasien</h1> 

        <table class="table">
        	<thead class='thead-dark'>
        		<tr>
        			<th scope="col">No</th>
        			<th scope="col">Nama Pasien</th>
        			<th scope="col">Suhu Tubuh 07.00</th>
        			<th scope="col">Suhu Tubuh 19.00</th>
        			<th scope="col">Saturasi Oksigen 07.00</th>
        			<th scope="col">Saturasi Oksigen 19.00</th>
        			<th scope="col">Detail</th>
        		</tr>
        	</thead>
        	<tbody>
        		<tr>
        			<th scope="row">1</th>
        			<th>Dian Niyaza</th>
        			<th>36 C</th>
        			<th>36,5 C</th>
        			<th>95%</th>
        			<th>94%</th>
        			<th>View Detail</th>
        		</tr>
        	</tbody>
        </table>
      </div>
    </div>
</div>

@endsection