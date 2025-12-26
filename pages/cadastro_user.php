<h1>Cadastro de Usuários</h1>

<form action="?page=salvar" method="POST">

    <div class="mb-3">
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" class="form-control">
    </div>

    <div class="mb-3">
        <label for="senha">Senha</label>
        <input type="password" name="senha" id="senha" class="form-control">
    </div>

    <div class="mb-3">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" class="form-control">
    </div>

    <div class="mb-3">
        <label for="data-nascimento">Data de Nascimento</label>
        <input type="date" name="data-nascimento" id="data-nascimento" class="form-control">
    </div>

    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>

</form>