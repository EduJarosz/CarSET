<?php

include_once 'conexao.php';
include_once 'usuario.php';

class UsuarioDao {

    public static $instance;

    public function __construct() {
        
    }

    public static function getInstance() {
        if (!isset(self::$instance))
            self::$instance = new UsuarioDao();

        return self::$instance;
    }

    public function consultarLogin(Usuario $usuario) {
        // Prepara a sql para consulta
        $sql = "SELECT  nome from usuario where user = ? and senha = ?";
        $rs = Conexao::getInstance()->prepare($sql);
        $rs->bindValue(1, $usuario->getNome());
        $rs->bindValue(2, $usuario->getSenha());

        $rs->execute();
        if ($rs->rowCount() == 1):
            $dados = $rs->fetch(PDO::FETCH_OBJ);
            $_SESSION['user'] = $dados->usuario;
            $_SESSION['nome'] = $dados->nome;
            $_SESSION['logado'] = true;
            return true;
        else:
            return false;
        endif;
    }

    public function localizar(Usuario $user) {

        // metodo preparament 
        $sql = "SELECT * FROM usuario  where id = :id";
        $rs = Conexao::getInstance()->prepare($sql);

        $rs->bindValue(":id", $user->getId());

        if ($rs->execute()) {
            if ($rs->rowCount() > 0) {
                while ($row = $rs->fetch(PDO::FETCH_OBJ)) {
                    $usario = new Usuario();
                    $usario->setId($row->id);
                    $usario->setNome($row->nome);
                    $usario->setEmail($row->mail);
                    $usario->setUser($row->user);
                    $usario->setSenha($row->senha);
                }
                return $usario;
            } else {
                return false;
            }
        }
    }

    /* cadastrar usuario */
    public function inserir(Usuario $user) {
        
        $sql = "INSERT INTO usuario (user, nome, senha) VALUES (:user, :nome, :senha)";
        $rs = Conexao::getInstance()->prepare($sql);
        $rs->bindValue(":user", $user->getUser());
        $rs->bindValue(":nome", $user->getNome());
        $rs->bindValue(":senha", md5($user->getSenha()));
        if ($rs->execute()) {

        $sql = ("INSERT INTO  cliente (cli_nome, cli_contato, cli_sexo, cli_dtn, cli_cpf, cli_online) VALUES (:cli_nome, :cli_contato, :cli_sexo, :cli_dtn, :cli_cpf,:cli_online)");
        $prepare = Conexao::getInstance()->prepare($sql);
        $prepare->bindValue(':cli_nome', $user->getNome());
        $prepare->bindValue(':cli_contato', $user->getContato());
        $prepare->bindValue(':cli_sexo', $user->getSexo());
        $prepare->bindValue(':cli_dtn', $user->getDtn());
        $prepare->bindValue(':cli_cpf', $user->getCpf());
        $prepare->bindValue(':cli_online', $user = '*');

        
        
        if ($prepare->execute()) {
            echo "Permissões gravadas";
        }else{
            echo 'Permissões não gravadas';
            
        }




            return true;
        } else {
            return false;
        }
    }

    public function alterar(Usuario $user) {

        try {
            
            if($user->getSenha() == null){
                $sql = "UPDATE usuario SET user=:user, nome=:nome, email=:email  where id = :id";
            }else{
                $sql = "UPDATE usuario SET user=:user, nome=:nome, email=:email, senha=:senha where id = :id";
            }
            
            $rs = Conexao::getInstance()->prepare($sql);
            $rs->bindValue(":user", $user->getUser());
            $rs->bindValue(":nome", $user->getNome());
            $rs->bindValue(":email", $user->getEmail());
            
            /* REMOVE SENHA DO UPDATE*/
            if($user->getSenha() != null)
                $rs->bindValue(":senha", md5($user->getSenha()));
                
            $rs->bindValue(":id", $user->getId());

            if ($rs->execute()) {
                return true;
            } else {
                return false;
            }
        } catch (Exception $ex) {
            print_r($ex);
        }
    }

    public function excluir($user_id){
        $sql = 'DELETE FROM usuario where id = :id';
        $rs = Conexao::getInstance()->prepare($sql);
        $rs->bindValue(":id", $user_id);
        
        if($rs->execute()){
            return true;
        }else{
            return false;
        }
    }

    public function listar() {
        try {
            $sql = "SELECT * FROM usuario order by nome";

            $result = Conexao::getInstance()->query($sql);

            $lista = array();
            $i = 0;
            while ($row = $result->fetch(PDO::FETCH_OBJ)) {
                $usario = new Usuario();
                $usario->setId($row->id);
                $usario->setNome($row->nome);
                $usario->setEmail($row->email);
                $usario->setUser($row->user);
                $lista[$i] = $usario;
                $i++;
            }
            return $lista;
        } catch (Exception $e) {
            print "Ocorreu um erro ao tentar executar esta ação, foi gerado um LOG do mesmo, tente novamente mais tarde.";
        }
    }

}
