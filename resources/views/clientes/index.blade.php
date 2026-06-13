@extends('layouts.app')

@section('title', 'Clientes')

@push('styles')
<link rel="stylesheet"
      href="https://cdn.datatables.net/1.13.8/css/dataTables.bootstrap4.min.css">
@endpush

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="h3 text-gray-800">
        Clientes
    </h1>

    <a href="{{ route('clientes.create') }}"
       class="btn btn-primary">
        <i class="fas fa-plus"></i>
        Novo Cliente
    </a>
</div>

<div class="card shadow mb-4">

    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">
            Listagem de Clientes
        </h6>
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table
                class="table table-bordered table-striped"
                id="clientesTable"
                width="100%">

                <thead>
                    <tr>
                        <th>Foto</th>
                        <th>Nome</th>
                        <th>E-mail</th>
                        <th>Telefone</th>
                        <th width="150">Ações</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($clientes as $cliente)
                        <tr>
                            <td class="text-center">
                                @if($cliente->foto)
                                    <img
                                        src="{{ $cliente->foto_url }}"
                                        width="60"
                                        class="img-thumbnail">

                                @else
                                    <span class="text-muted">
                                        Sem Foto
                                    </span>
                                @endif
                            </td>
                            <td>{{ $cliente->nome }}</td>
                            <td>{{ $cliente->email }}</td>
                            <td>{{ $cliente->telefone }}</td>
                            <td>
                                <a
                                    href="{{ route('clientes.edit', $cliente->id) }}"
                                    class="btn btn-warning btn-sm">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form
                                    action="{{ route('clientes.destroy', $cliente->id) }}"
                                    method="POST"
                                    style="display:inline;">
                                    @csrf
                                    @method('DELETE')

                                    <button
                                        type="submit"
                                        class="btn btn-danger btn-sm"
                                        onclick="return confirm('Deseja excluir este cliente?')">
                                        <i class="fas fa-trash"></i>
                                    </button>

                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@push('scripts')

<script src="https://cdn.datatables.net/1.13.8/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.8/js/dataTables.bootstrap4.min.js"></script>

<script>
$(document).ready(function () {
    $('#clientesTable').DataTable({
        language: {
            url: '//cdn.datatables.net/plug-ins/1.13.8/i18n/pt-BR.json'
        }
    });
});
</script>

@endpush