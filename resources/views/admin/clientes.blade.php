@extends('templates.master-admin')

@section('conteudo-view')
    <section class="section-principal py-3">
      <div class="container">
        <div class="eventos-lista py-3">
      </div>
      <div class="container list">
        <h5 class="my-5 pb-2 border-bottom">
          <i class="fas fa-user"></i> LISTA DE CLIENTES <small class="badge badge-warning">QTDE.</small>
        </h5>
        <div class="default-table">
          <table>
            <thead>
              <th>Nome</th>
              <th>E-mail</th>
              <th>Contato</th>
              <th></th>
            </thead>
            <tbody>
              @foreach($users as $user)
              <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->phone }}</td>
                <td>
                  {!! Form::open(['route' => ['cadastro.destroy', $user->id], 'method' => 'DELETE']) !!}
                  {!! Form::submit('&#xf1f8;', ['class' => 'btn btn-rounded btn-danger icon']) !!}
                  {!! Form::close() !!}
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>    
    </section>
  </div>
@endsection