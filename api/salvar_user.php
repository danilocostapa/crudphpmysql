<?

//switch para receber as ações que iremos criar - API
switch ($_REQUEST["acao"]) {

    case 'cadastrar':
        //pegando os dados da tela
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $data_nascimento = $_POST['data-nascimento'];

        $sql = "INSERT INTO usuarios (nome, email, senha, data_nascimento) VALUES ({$nome}, {$email}, {$senha}, {$data_nascimento})";
        break;

    case 'editar':
        break;

    case 'escluir':
        break;
}
