
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

    <form action="/update-produto" method="post">

    <input 
        hidden
        placeholder= "Informe Produto"
        id="id" 
        name="id"
        
        value="<?=$produto[0]['idProd']?>"
        />
        
     
    <input 
        
        placeholder= "Informe Produto"
        id="produto" 
        name="produto"
        
        value="<?=$produto[0]['nome']?>"
        />
        
    <input 

        placeholder= "Altera Preço"
        id="preco" 
        name=" preco"
        value="<?=$produto[0]['preco']?>"
        />
    
    
    <select 
        disabled
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

            
            
                Alterar Produto
        

        </button>
   
        
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
    

    function alterar(idProd, nome){
        
        let formData = new FormData();

        
        formData.append('idProd', idProd);
       // formData.append('preco', 'idProd');
        
       


            const url = `/altera`
        
            fetch(url, {
            method: 'POST',
            body: formData
                })
                    .then((res)=>{
                    
                location. reload();
        }) 
    }
</script>


<?php include __DIR__ . '/../footer.php'; ?>
