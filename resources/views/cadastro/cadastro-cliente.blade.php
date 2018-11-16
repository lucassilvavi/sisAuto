@extends('template.app')
@section('title','Cadastro de Cliente')
@section('main')
    @parent
    <section>
        <div class="container">
            <div class="row">
                <h1>Cadastro de Cliente</h1>
                <form action="/save-cliente" method="post">
                    <input type="hidden" name="_token" value=" {{ csrf_token() }}">
                    <div class="form-group">
                        <label>Nome Completo</label>
                        <input type="text" class="form-control" name="nome-completo" placeholder="Nome Completo">
                    </div>
                    <div class="form-group">
                        <label>CPF</label>
                        <input type="number" class="form-control" name="cpf" placeholder="CPF">
                    </div>
                    <div class="form-group">
                        <label>Data de Nascimento</label>
                        <input type="date" class="form-control" name="data_nascimento" placeholder="DD/MM/AA">
                    </div>
                    <div class="form-group">
                        <label>Sexo:</label>
                        <label class="radio-inline">
                            <input type="radio" name="sexo" value="M" checked>Masculino
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="sexo" value="F">Feminino
                        </label>
                    </div>
                    <div class="form-group">
                        <label>E-mail</label>
                        <input type="email" class="form-control" name="email" placeholder="E-mail">
                    </div>
                    <div class="form-group">
                        <label>Senha</label>
                        <input type="password" class="form-control" name="senha" placeholder="Senha">
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox"> Declaro que li os <a href="#">Termos e Condições</a>
                        </label>
                    </div>
                    <button type="submit" class="btn btn-sucess">Cadastrar</button>
                    <div class="possui-login">
                        <br/>
                        Já tenho um cadastro. <a href="#">Fazer Login</a>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection