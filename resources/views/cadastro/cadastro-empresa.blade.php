@extends('template.app')
@section('Title', 'Cadastro de Empresa')
@section('main')
    @parent
    <section>
        <div class="container">
            <div class="row">
                <h1>Credenciamento de Empresa</h1>
                <form action="/save-empresa" method="post">
                    <input type="hidden" name="_token" value=" {{ csrf_token() }}">
                    <div class="form-group">
                        <label>Nome Fantasia</label>
                        <input type="text" class="form-control" name="nome-fantasia" placeholder="Nome Fantasia">
                    </div>
                    <div class="form-group">
                        <label>Razão Social</label>
                        <input type="text" class="form-control" name="razao-social" placeholder="Razão Social">
                    </div>
                    <div class="form-group">
                        <label>CNPJ</label>
                        <input type="number" class="form-control" name="cnpj" placeholder="CNPJ">
                    </div>

                    <div class="form-group">
                        <label>E-mail</label>
                        <input type="email" class="form-control" name="email" placeholder="E-mail">
                    </div>
                    <div class="form-group">
                        <label>Telefone</label>
                        <input type="number" class="form-control" name="telefone" placeholder="Telefone">
                    </div>
                    <div class="form-group">
                        <label>CEP</label>
                        <input type="number" class="form-control" name="cep" placeholder="CEP">
                    </div>
                    <div class="form-group">
                        <label for="FormControlSelect1">Tipos de Serviços</label>
                        <select class="form-control" name="tipo-servico" id="FormControlSelect1">
                            <option>Blindagem</option>
                            <option>Mecânica em Geral</option>
                            <option>Retifica</option>
                            <option>Lanternagem/Pintura</option>
                            <option>Elétrica</option>
                            <option>Suspensão</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-success">Cadastrar</button>
                </form>
            </div>


        </div>
    </section>
@endsection