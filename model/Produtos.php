<?php

/*/
ÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜÜ
±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±
±±ÉÍÍÍÍÍÍÍÍÍÍÑÍÍÍÍÍÍÍÍÍÍËÍÍÍÍÍÍÍÑÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍËÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÑÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍ»±±
±±ºPrograma  ³ NAGMBA01 º Autor ³ Everton Correia       º Data da Criacao  ³ 27/01/2022              						º±±
±±ÌÍÍÍÍÍÍÍÍÍÍØÍÍÍÍÍÍÍÍÍÍÊÍÍÍÍÍÍÍÏÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÊÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÏÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍ¹±±
±±ºDescricao ³ Classe Produtos onde as requisiçõe relacionadas a produtos são processadas                            		º±±
±±º          ³                                                                                                              º±±
±±º          ³                                                                                                              º±±
±±º          ³                                                                                                              º±±
±±ÌÍÍÍÍÍÍÍÍÍÍØÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍ¹±±
±±ºUso       ³ 									                                                                            º±±
±±º          ³                                                                                                              º±±
±±ÌÍÍÍÍÍÍÍÍÍÍØÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍ¹±±
±±ºParametros³ Nenhum						   							                               						º±±
±±ÌÍÍÍÍÍÍÍÍÍÍØÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍ¹±±
±±ºRetorno   ³ Nenhum						  							                               						º±±
±±ÌÍÍÍÍÍÍÍÍÍÍØÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍ¹±±
±±ºUsuario   ³ Nenhum		                                                                            					º±±
±±ÌÍÍÍÍÍÍÍÍÍÍØÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍ¹±±
±±ºSetor     ³ Nenhum					                                                             						º±±
±±ÌÍÍÍÍÍÍÍÍÍÍÏÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍ¹±±
±±º            			          	ATUALIZACOES SOFRIDAS DESDE A CONSTRU€AO INICIAL                   						º±±
±±ÌÍÍÍÍÍÍÍÍÍÍÑÍÍÍÍÍÍÍÍÍÍÑÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÑÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÑÍÍÍÍÍÍÍÍÍÍÍÍÍ¹±±
±±ºAutor     ³ Data     ³ Motivo da Alteracao  				               ³Usuario(Filial+Matricula+Nome)    ³Setor        º±±
±±ºÄÄÄÄÄÄÄÄÄÄÅÄÄÄÄÄÄÄÄÄÄÅÄÄÄÄÄÄÄÄÄÄÄÄÄÄÄÄÄÄÄÄÄÄÄÄÄÄÄÄÄÄÄÄÄÄÄÄÄÄÄÄÄÄÄÄÄÄÄÄÄÄÅÄÄÄÄÄÄÄÄÄÄÄÄÄÄÄÄÄÄÄÄÄÄÄÄÄÄÄÄÄÄÄÄÄÄÅÄÄÄÄÄÄÄÄÄÄÄÄÄº±±
±±º          ³			³                               				   ³                                  ³  	        º±±
±±º----------³----------³--------------------------------------------------³----------------------------------³-------------º±±
±±º          ³          ³                    							   ³                                  ³ 			º±±
±±º----------³----------³--------------------------------------------------³----------------------------------³-------------º±±
±±ÈÍÍÍÍÍÍÍÍÍÍÏÍÍÍÍÍÍÍÍÍÍÏÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÏÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÍÏÍÍÍÍÍÍÍÍÍÍÍÍÍ¼±±
±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±±
ßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßßß
/*/

namespace Loja\Produtos\Model;

use PDO;
require __DIR__ . '/../infra/conexao.php';

class Produtos
{

    private $Nome;

    private $cor;

    private $preco;


    /* public function __construct($nome, $preco, $cor)
    {
        $this->Nome = $nome;
        $this->preco = $preco;
        $this->cor = $cor;
    } */
    


    /**
    * Get the value of Nome
    *
    * @return  mixed
    */
    public function getNome()
    {
    return $this->Nome;
    }

    /**
    * Set the value of Nome
    *
    * @param   mixed  $Nome  
    *
    * @return  self
    */
    public function setNome($Nome)
    {
    $this->Nome = $Nome;
    return $this;
    }

    /**
    * Get the value of cor
    *
    * @return  mixed
    */
    public function getCor()
    {
    return $this->cor;
    }

    /**
    * Set the value of cor
    *
    * @param   mixed  $cor  
    *
    * @return  self
    */
    public function setCor($cor)
    {
    $this->cor = $cor;
    return $this;
    }

    /**
    * Get the value of preco
    *
    * @return  mixed
    */
    public function getPreco()
    {
    return $this->preco;
    }

    /**
    * Set the value of preco
    *
    * @param   mixed  $preco  
    *
    * @return  self
    */
    public function setPreco($preco)
    {
    $this->preco = $preco;
    return $this;
    }


    public function getProduct($id){

        require __DIR__ . '/../infra/conexao.php';

        $stmt = $pdo->query('select * from produtos s INNER JOIN preco p ON p.produtos_idProd = s.idProd WHERE s.idProd = ' .  $id );
        $lista = $stmt->fetchAll(PDO::FETCH_ASSOC);


        
        
        

        return $lista;
    }


    public function getProducts(){

        require __DIR__ . '/../infra/conexao.php';

        $stmt = $pdo->query('select * from produtos s INNER JOIN preco p ON p.produtos_idProd = s.idProd');
        $lista = $stmt->fetchAll(PDO::FETCH_ASSOC);


        
        
        

        return $lista;
    }

    /* public function getPrecos(){

        require __DIR__ . '/../infra/conexao.php';

        $stmt = $pdo->query('select * from preco where produtos_idProd = 1');
        $precos = $stmt->fetchAll(PDO::FETCH_ASSOC);

        
        

        return $precos;

    } */


    public function setProduto($produto, $preco, $cor){

        require __DIR__ . '/../infra/conexao.php';


        $v = floatval($preco);


        $sql =  "INSERT INTO produtos (nome, cor) VALUES (?, ?) ";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(1, $produto);
        $stmt->bindValue(2, $cor);
        //$value = $stmt->lastInsertId();
       
        if($stmt->execute()){
            //$id = mysql_insert_id();
            echo('Produto incluido');
           
            $id = $pdo->lastInsertId();
        

            $sql = "INSERT INTO preco (preco, produtos_idProd) VALUES(?, ? )";
            $stmte = $pdo->prepare($sql);
            $stmte->bindValue(1,$v);
            $stmte->bindValue(2, intval($id));

            if($stmte->execute()){

                echo('preco incluidO');
            }

            return true;
        }

        
        


    

        
    }


    public function DeleteProducts($id){

        require __DIR__ . '/../infra/conexao.php';

        
        $sql = "DELETE FROM preco WHERE produtos_idProd = ?";
        $stmte = $pdo->prepare($sql);        
        $stmte->bindValue(1, $id);
        if($stmte->execute()){

            echo('Produto Excluido');


            $sql = "DELETE FROM produtos WHERE idProd = ?";
            $stmt = $pdo->prepare($sql);        
            $stmt->bindValue(1, $id);
            if($stmt->execute()){

            echo('Produto Excluido');


            
            }
            return true;
        }
        
        
        
        
        
        return false;

    }

    public function UpdateProduto($id, $produto, $preco){

        require __DIR__ . '/../infra/conexao.php';


        //$v = floatval($preco);

        $valor = intval($id);
        //var_dump($preco);

        $sql =  "UPDATE produtos SET nome = '$produto' WHERE idProd = $valor";
        var_dump($sql);
        $stmt = $pdo->prepare($sql);
        //$stmt->bindValue(1, $produto);
        //$stmt->bindValue(2, $cor);
        //$value = $stmt->lastInsertId();
    
        if($stmt->execute()){
            //$id = mysql_insert_id();
            echo('Produto Alterado');
    
            
        

            $sql = "UPDATE preco SET preco = '$preco' WHERE produtos_idProd = $valor";
            $stmte = $pdo->prepare($sql);
           /*  $stmte->bindValue(1,$v);
            $stmte->bindValue(2, intval($id)); */

            if($stmte->execute()){

                echo('preco alterado');
            }

            return true;
        }

    }

    public function pesqisaNome($nome)
    {
        require __DIR__ . '/../infra/conexao.php';


        $stmt = $pdo->query("SELECT * FROM produtos s INNER JOIN preco p ON p.produtos_idProd = s.idProd WHERE s.nome LIKE '%$nome%' ");
        $lista = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $lista;
    }

    public function pesquisaCor($nome)
    {
        require __DIR__ . '/../infra/conexao.php';


        $stmt = $pdo->query("SELECT * FROM produtos s INNER JOIN preco p ON p.produtos_idProd = s.idProd WHERE s.cor = '$nome' ");
        $lista = $stmt->fetchAll(PDO::FETCH_ASSOC);

        

        return $lista;
    }


    public function pesquisaValor($valor, $condicao)
    {
        require __DIR__ . '/../infra/conexao.php';

        if($condicao == 'igual'){

            $stmt = $pdo->query("SELECT * FROM produtos s INNER JOIN preco p ON p.produtos_idProd = s.idProd WHERE p.preco = '$valor' ");
            $lista = $stmt->fetchAll(PDO::FETCH_ASSOC);

        }elseif($condicao == 'maior'){

            $stmt = $pdo->query("SELECT * FROM produtos s INNER JOIN preco p ON p.produtos_idProd = s.idProd WHERE p.preco > '$valor' ");
            $lista = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }else{
            $stmt = $pdo->query("SELECT * FROM produtos s INNER JOIN preco p ON p.produtos_idProd = s.idProd WHERE p.preco < '$valor' ");
            $lista = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        

        return $lista;
    }



}