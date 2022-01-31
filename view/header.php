<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php __DIR__ . "/../../public/"?>css/style.css">
    <title>Cadastro de produto</title>
</head>
<body>
        <nav >
           <a href="/index"> <ul class="navUl" src='/index' >Home</ul> </a>
        </nav>
    <section>

    
        <div class="topo ">

        

        

            <form class="inputPesquisa" action="/pesquisa-nome" method="post">
            
             <div>
                 <label  for="">Informe o produto</label>
             </div>
                <input class="inputPesquisa" type="text" placeholder="Pesquise o produto desejado" id="item" name="item"/>
                
                <div>
                 <label for="">Informe a Cor</label>
             </div>
                <select class="inputPesquisa" type="text" placeholder="Pesquise o produto desejado" id="cor" name="cor">
                    
                    <option value=""> - </option>
                    <option value="vermelho">Vermelho</option>
                    <option value="azul">Azul</option>
                    <option value="amarelo">Amarelo</option>
                    
                </select>
                
                

                <div>
                    <label for="">Informe o condição e o valor</label>
                </div>
                
                <select class="inputPesquisa" type="text" placeholder="Pesquise o produto desejado" id="condicao" name="condicao">
                    
                    <option value=""> - </option>
                    <option value="maior">Maior</option>
                    <option value="menor">menor</option>
                    <option value="igual">igual</option>
                    
                </select>
                <input class="inputPesquisa " type="text" placeholder="Pesquise o produto desejado" id="valor" name="valor">
                
                
                
                <br>
                <button class="btnPesquisar">Pesquisar</button>
            </form>
      
            
            
            <h1 class="topoh1"><?= $titulo; ?></h1>


        </div>


    </section>