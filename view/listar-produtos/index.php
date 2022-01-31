
<?php include __DIR__ . '/../header.php'; ?>
<section>
    <!--    
        <h1>Cadastro de produto</h1>
        <hr>
        <form action="">
            <input type="text" placeholder="Produtos">
            <input type="text" placeholder="Preços">
            <input type="text" placeholder="Informe a cor">
            
            
        </form>
        <hr>
    -->

    <form action="/gravar-produto" method="post">

    <input 

        placeholder= "Informe o Produto"
        id="produto" 
        name="produto"/>
    <input 
   
            placeholder= "Informe o Preço"

        id="preco" 
        name=" preco"/>
    
    
    <select 
        id="cor" 
        name="cor"
        
        
    >         
        <option value="vermelho" >            
            Vermelho
        </option>
        <option value="azul" >
            Azul
        </option>
        <option value="amarelo" >
            Amarelo
        </option>
    </select>
    <br>
        <button 
            class="btnCadastrar">

           
                Cadastrar Produto
             

        </button>
    </form>

    <hr>
    <section>
   
        <table>
            <tr>
                
                <td>Codigo</td>
                <td>Produto</td>
                <td>Cor</td>
                <td>Valor</td>
                <td>Valor com Desconto</td>
                <td>Funçoes</td>
                
            
            
                
            </tr>
            

            <?php 
            
            
                foreach($produtos as $produto){  
            ?> 
                <tr>      
                    <td>  <?= $produto['idProd'] ?>  </td>
                    <td>  <?= $produto['nome'] ?>  </td>
                    <td>  <?= $produto['cor'] ?>  </td>
                    <td>  R$ <?=  $produto['preco'] ?>  </td>
                    <td>  
                        <?php if($produto["cor"] == 'azul')  {

                            $desc = (floatval($produto['preco']) * 0.2);
                            echo  "R$ " . number_format(((floatval($produto['preco']) - $desc)),2) ;
                        
                        }elseif (($produto["cor"] == 'vermelho') AND ($produto['preco'] > 50)){                            

                            $desc = (floatval($produto['preco']) * 0.05);
                            echo  "R$ " . number_format(((floatval($produto['preco']) - $desc)),2) ;

                        }elseif(($produto["cor"] == 'vermelho') AND ($produto['preco'] < 50)){

                            $desc = (floatval($produto['preco']) * 0.2);
                            echo  "R$ " . number_format(((floatval($produto['preco']) - $desc)),2) ;

                        }elseif (($produto["cor"] == 'amarelo') AND ($produto['preco'] > 50)){                            

                            $desc = (floatval($produto['preco']) * 0.5);
                            echo  "R$ " . number_format(((floatval($produto['preco']) - $desc)), 2) ;

                        }else{

                            echo "R$ " . number_format( floatval($produto['preco']),2);
                        }
                        
                        ?> 
                    </td>
                    <a>

                        <td>
                            <button class="btnFuncoes" id="excluir" name="excluir" onclick="excluir(<?=$produto['idProd']?>)">Excluir</button>
                            
                            
                            <form action="/alterar" method="post">
                            

                                
                                    <button class="btnFuncoes"  id="alterar"  value="<?= $produto['idProd']?>" name="alterar" onclick="alterar(<?= $produto['idProd']?>)">Alterar</button>                    
                                    
                                </form>
                        </td>
                        

                    </a>
                </tr>
            <?php
                }
            
            ?>

            
        </table>
        
    </section>

</section>

<script>

    function excluir(idProd){
        
        let formData = new FormData();


        formData.append('produtos_idProd', idProd);


            const url = `/deleta`
        
            fetch(url, {
            method: 'POST',
            body: formData
                })
                    .then((res)=>{
                    
            location. reload();
        })
    }
    

    function alterar(idProd){
        
        let formData = new FormData();

        
        formData.append('idProd', idProd);
       // formData.append('preco', 'idProd');
        
       


            const url = `/alterar`
        
            fetch(url, {
            method: 'POST',
            body: formData
                })
                    /* .then((res)=>{
                    
                location = "/alterar"
        })  */
    }
</script>


<?php include __DIR__ . '/../footer.php'; ?>
