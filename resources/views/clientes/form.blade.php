@extends('layouts.app')

@section('title', isset($cliente) ? 'Editar Cliente' : 'Novo Cliente')

@section('content')

    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">
                        {{ isset($cliente) ? 'Editar Cliente' : 'Cadastrar Cliente' }}
                    </h6>
                </div>

                <div class="card-body">
                    <form
                        action="{{ isset($cliente) ? route('clientes.update', $cliente) : route('clientes.store') }}"
                        method="POST" enctype="multipart/form-data">
                        @csrf
                        @if (isset($cliente))
                            @method('PUT')
                        @endif

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label>
                                    <strong>Nome</strong>
                                </label>
                                <input type="text" name="nome" class="form-control"
                                    value="{{ old('nome', $cliente->nome ?? '') }}" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>
                                    <strong>E-mail</strong>
                                </label>
                                <input type="email" name="email" class="form-control"
                                    value="{{ old('email', $cliente->email ?? '') }}" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label>
                                    <strong>Telefone</strong>
                                </label>
                                <input type="text" name="telefone" class="form-control" id="telefone"
                                    value="{{ old('telefone', $cliente->telefone ?? '') }}" required>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label>
                                    <strong>Foto</strong>
                                </label>
                                <input type="file" name="foto" class="form-control-file"
                                    accept=".jpg,.jpeg,.png,.webp">
                            </div>

                        </div>

                        @if (isset($cliente) && $cliente->foto)
                            <div class="mb-4">
                                <label>
                                    <strong>Foto Atual</strong>
                                </label>
                                <br>
                                <img src="{{ asset('storage/' . $cliente->foto) }}" width="120" class="img-thumbnail">
                            </div>
                        @endif

                        <hr>

                        <div class="d-flex justify-content-between">
                            <a href="{{ route('clientes.index') }}" class="btn btn-secondary">
                                Voltar
                            </a>

                            <button type="submit" class="btn btn-success">
                                <i class="fas fa-save"></i>
                                {{ isset($cliente) ? 'Atualizar' : 'Salvar' }}
                            </button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @push('scripts')
    <script>
        $(function () {
            $('#telefone').mask('(00) 00000-0000');
        });
    </script>
    @endpush

@endsection
