@extends('templates.master-admin')

@section('conteudo-view')
<section class="section-principal py-3">

  <div class="container admin">
    <h5 class="my-5 pb-2 border-bottom"> ADMINISTRAR EVENTO </h5>

    <div class="default-table">
	    <table>
	    	<thead>
	    		<th></th>
	    		<th>Nome</th>
	    		<th>Data</th>
	    		<th>Local</th>
	    		<th></th>
	    	</thead>
	    	<tbody>
	    		@foreach ($evento as $evento)
	    		<tr>
	    			<td>
	    				@if ($evento->image)
	    					<img src="{{ url("storage/{$evento->image}") }}" alt="{{$evento->name}}">
	    				@endif
	    			</td>
	    			<td>{{ $evento->name }}</td>
	    			<td>{{ $evento->date }}</td>
	    			<td>{{ $evento->place }}</td>
	    			<td style="display: flex;">
	    				<a href="{{ route('admin.edit',['id' => $evento->id]) }}" class="btn btn-primary btn-rounded btn-edit">Editar</a> 

	    				{!! Form::open(['route' => ['evento.destroy', $evento->id], 'method' => 'DELETE']) !!}
	                  	{!! Form::submit('&#xf1f8;', ['class' => 'btn btn-rounded btn-danger icon']) !!}
	                  	{!! Form::close() !!}
	    			<td>
	    			</td>
	    		</tr>
	    		@endforeach
	    	</tbody>
	    </table>
	</div>

</section></div></section>

@endsection