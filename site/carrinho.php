<?php
if(!isset($_SESSION)){
    session_start();
}
if(!isset($_SESSION['email'])){
    die('Você não está logado!<a href="login.html"> Clique aqui para logar</a>');
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja</title>
    <link rel="stylesheet" href="zampe.css">
    <script src="https://kit.fontawesome.com/338e9a4e7e.js" crossorigin="anonymous"></script>
    <script src="carrinho.js"></script>
    
</head>
<body class="container-adote">
    <header id="cabecalho-responsi">
        <div id="carrinho-loja">
            <a id="carro" href="cadastro.html">Cadastre-se |</a>
            <a id="carro" href="login.html"> Login</a>
            <a id="carro" href="#carrinho-final" ><i class="fa-solid fa-cart-shopping fa-2xl" style="color: #583f8b;"></i></a></div>
            <nav class="logo">
                <a href="zampe.html">Zampe</a>
            </nav>
            </header>
            <nav class="nav1">
                <a href="sobre.html" target="_blank">Sobre</a>
                <a href="#cachorro" >Cachorro</a>
                <a href="#gato" >Gato</a>
                <a href="#outrosanimais" >Outros Animais</a>
               
            </nav>
        
            <nav class="nav2">
                <a href="adote.html" target="_blank">Adote</a>
                <a  href="logout.php">Sair</a>
                
            </nav>
            <section class="main1">
               
               
              </header>
             
          
              <main class="main-section">
                <section class="container-loja normal-section">
                 
                 <a href="#" id="#cachorro"><h2 class="section-title">Cachorro</h2></a>
                 
          
                  <div class="products-container">
                    <div class="movie-product">
                      <strong class="product-title">Ração Golden Special</strong>
                      
                      <img src="https://images.petz.com.br/fotos/1658429301983_mini.jpg" alt="Poster 1" class="product-image">
                      <div class="product-price-container">
                        <span class="product-price">R$149,99</span>
                        <button type="button" class="button-hover-background">Adicionar ao carrinho</button>
                      </div>
                    </div>
          
                    <div class="movie-product">
                      <strong class="product-title">Ração Golden Fórmula</strong>
                      
                      <img src="https://images.petz.com.br/fotos/1658419164771_mini.jpg" alt="Poster 1" class="product-image">
                      <div class="product-price-container">
                        <span class="product-price">R$165,50</span>
                        <button type="button" class="button-hover-background">Adicionar ao carrinho</button>
                      </div>
                    </div>

                    
            
                    <div class="movie-product">
                      <strong class="product-title">Ração Premier Fórmula</strong>
                     
                      <img src="https://images.petz.com.br/fotos/1669836858199_mini.jpg" alt="Poster 3" class="product-image">
                      <div class="product-price-container">
                        <span class="product-price">R$215,85</span>
                        <button type="button" class="button-hover-background">Adicionar ao carrinho</button>
                      </div>
                    </div>
            
                    <div class="movie-product">
                      <strong class="product-title">Ração Premier Raças Especiais</strong>
                     
                      <img src="https://images.petz.com.br/fotos/1669836951520_mini.jpg" alt="Poster 3" class="product-image">
                      <div class="product-price-container">
                        <span class="product-price">R$115,85</span>
                        <button type="button" class="button-hover-background">Adicionar ao carrinho</button>
                      </div>
                    </div>

                    <div class="movie-product">
                      <strong class="product-title">Ração Premier Nutrição</strong>
                     
                      <img src="https://images.petz.com.br/fotos/1669223888508_mini.jpg" alt="Poster 3" class="product-image">
                      <div class="product-price-container">
                        <span class="product-price">R$175,85</span>
                        <button type="button" class="button-hover-background">Adicionar ao carrinho</button>
                      </div>
                    </div>
          
                    <div class="movie-product">
                      <strong class="product-title">Ração Úmida Premier</strong>
                      
                      <img src="https://images.petz.com.br/fotos/1669226523527_mini.jpg" alt="Poster 2" class="product-image">
                      <div class="product-price-container">
                        <span class="product-price">R$7,49</span>
                        <button type="button" class="button-hover-background">Adicionar ao carrinho</button>
                      </div>
                    </div>
            
                    <div class="movie-product">
                      <strong class="product-title">Ração Úmida</strong>
                     
                      <img src="https://images.petz.com.br/fotos/1660164154077_mini.jpg" alt="Poster 4" class="product-image">
                      <div class="product-price-container">
                        <span class="product-price">R$15,99</span>
                        <button type="button" class="button-hover-background">Adicionar ao carrinho</button>
                      </div>
                    </div>

                    <div class="movie-product">
                      <strong class="product-title">Ração Golden</strong>
                     
                      <img src="https://images.petz.com.br/fotos/1658414480198.jpg" alt="Poster 4" class="product-image">
                      <div class="product-price-container">
                        <span class="product-price">R$129,99</span>
                        <button type="button" class="button-hover-background">Adicionar ao carrinho</button>
                      </div>
                    </div>
            
                  

                    <div class="movie-product">
                      <strong class="product-title">Ração Quatree Supreme</strong>
                    
                      <img src="https://images.petz.com.br/fotos/1636742599071.jpg" alt="Poster 1" class="product-image">
                      <div class="product-price-container">
                        <span class="product-price">R$250,99</span>
                        <button type="button" class="button-hover-background">Adicionar ao carrinho</button>
                      </div>
                    </div>
          
                    <div class="movie-product">
                      <strong class="product-title">Ração GranPlus</strong>
                      
                      <img src="https://images.petz.com.br/fotos/1674141793989.jpg" alt="Poster 2" class="product-image">
                      <div class="product-price-container">
                        <span class="product-price">R$143,99</span>
                        <button type="button" class="button-hover-background">Adicionar ao carrinho</button>
                      </div>
                    </div>
            
                    <div class="movie-product">
                      <strong class="product-title">Tapete Higiênico</strong>
                     
                      <img src="https://images.petz.com.br/fotos/1683908522136_mini.jpg" alt="Poster 3" class="product-image">
                      <div class="product-price-container">
                        <span class="product-price">R$25,99</span>
                        <button type="button" class="button-hover-background">Adicionar ao carrinho</button>
                      </div>
                    </div>


                    <div class="movie-product">
                      <strong class="product-title">Shampoo Realça Cor</strong>
                     
                      <img src="https://images.petz.com.br/fotos/1621366329484.jpg" alt="Poster 2" class="product-image">
                      <div class="product-price-container">
                        <span class="product-price">R$25,00</span>
                        <button type="button" class="button-hover-background">Adicionar ao carrinho</button>
                      </div>
                    </div>


            



                    <div class="movie-product">
                      <strong class="product-title">Kit Banho</strong>
                     
                      <img src="https://images.petz.com.br/fotos/1587571122700.jpg" alt="Poster 1" class="product-image">
                      <div class="product-price-container">
                        <span class="product-price">R$29,90</span>
                        <button type="button" class="button-hover-background">Adicionar ao carrinho</button>
                      </div>
                    </div>
          
                    <div class="movie-product">
                      <strong class="product-title">Shampoo Pele Delicada</strong>
                     
                      <img src="https://images.petz.com.br/fotos/1621366553662_mini.jpg" alt="Poster 2" class="product-image">
                      <div class="product-price-container">
                        <span class="product-price">R$27,50</span>
                        <button type="button" class="button-hover-background">Adicionar ao carrinho</button>
                      </div>
                    </div>
            
                    <div class="movie-product">
                      <strong class="product-title">Shampoo Sanol</strong>
                      
                      <img src="https://images.petz.com.br/fotos/1587569378642.jpg" alt="Poster 4" class="product-image">
                      <div class="product-price-container">
                        <span class="product-price">R$18,99</span>
                        <button type="button" class="button-hover-background">Adicionar ao carrinho</button>
                      </div>
                    </div>
            
                    <div class="movie-product">
                      <strong class="product-title">Brinquedo Chalesco</strong>
                     
                      <img src="https://images.petz.com.br/fotos/1688143004271.jpg" alt="Poster 4" class="product-image">
                      <div class="product-price-container">
                        <span class="product-price">R$28,50</span>
                        <button type="button" class="button-hover-background">Adicionar ao carrinho</button>
                      </div>
                    </div>
                    <div class="movie-product">
                      <strong class="product-title">Brinquedo Napi</strong>
                     
                      <img src="https://images.petz.com.br/fotos/1600364353771_mini.jpg" alt="Poster 4" class="product-image">
                      <div class="product-price-container">
                        <span class="product-price">R$5,99</span>
                        <button type="button" class="button-hover-background">Adicionar ao carrinho</button>
                      </div>
                    </div>
            
                    <div class="movie-product">
                      <strong class="product-title">Brinquedo Líder</strong>
                      
                      <img src="https://images.petz.com.br/fotos/1582822321392.jpg" alt="Poster 4" class="product-image">
                      <div class="product-price-container">
                        <span class="product-price">R$7,00</span>
                        <button type="button" class="button-hover-background">Adicionar ao carrinho</button>
                      </div>
                    </div>

                    <div class="movie-product">
                        <strong class="product-title">Brinquedo Chalesco</strong>
                        
                        <img src="https://images.petz.com.br/fotos/1606160818082.jpg" alt="Poster 4" class="product-image">
                        <div class="product-price-container">
                          <span class="product-price">R$8,50</span>
                          <button type="button" class="button-hover-background">Adicionar ao carrinho</button>
                        </div>
                      </div>

                      <div class="movie-product">
                        <strong class="product-title">Mordedor Ossinho</strong>
                       
                        <img src="https://images.petz.com.br/fotos/1608211837627.jpg" alt="Poster 4" class="product-image">
                        <div class="product-price-container">
                          <span class="product-price">R$15,00</span>
                          <button type="button" class="button-hover-background">Adicionar ao carrinho</button>
                        </div>
                      </div>
                  </div>
                </section>






                <section class="container-loja normal-section">
                    <a href="#" id="gato"><h2 class="section-title">Gato</h2></a>







            
                    <div class="products-container">
                      <div class="movie-product">
                        <strong class="product-title">Ração Salmão</strong>
                        
                        <img src="https://images.petz.com.br/fotos/1658414757689_mini.jpg" alt="Poster 1" class="product-image">
                        <div class="product-price-container">
                          <span class="product-price">R$30,99</span>
                          <button type="button" class="button-hover-background">Adicionar ao carrinho</button>
                        </div>
                      </div>
            
                      <div class="movie-product">
                        <strong class="product-title">Ração Carne</strong>
                        
                        <img src="https://images.petz.com.br/fotos/1658413687056.jpg" alt="Poster 2" class="product-image">
                        <div class="product-price-container">
                          <span class="product-price">R$25,50</span>
                          <button type="button" class="button-hover-background">Adicionar ao carrinho</button>
                        </div>
                      </div>
              
                      <div class="movie-product">
                        <strong class="product-title">Ração Premier Frango</strong>
                       
                        <img src="https://images.petz.com.br/fotos/1656356405951.jpg" alt="Poster 3" class="product-image">
                        <div class="product-price-container">
                          <span class="product-price">R$30,00</span>
                          <button type="button" class="button-hover-background">Adicionar ao carrinho</button>
                        </div>
                      </div>
              
                      <div class="movie-product">
                        <strong class="product-title">Ração Premier Castrados</strong>
                        
                        <img src="https://images.petz.com.br/fotos/1656094961537.jpg" alt="Poster 4" class="product-image">
                        <div class="product-price-container">
                          <span class="product-price">R$71,25</span>
                          <button type="button" class="button-hover-background">Adicionar ao carrinho</button>
                        </div>
                      </div>
                      <div class="movie-product">
                        <strong class="product-title">Ração Premium</strong>
                       
                        <img src="https://images.petz.com.br/fotos/1508264765505.jpg" alt="Poster 1" class="product-image">
                        <div class="product-price-container">
                          <span class="product-price">R$81,99</span>
                          <button type="button" class="button-hover-background">Adicionar ao carrinho</button>
                        </div>
                      </div>
            
                      <div class="movie-product">
                        <strong class="product-title">Ração Royal</strong>
                        
                        <img src="https://images.petz.com.br/fotos/1664543779890_mini.jpg" alt="Poster 2" class="product-image">
                        <div class="product-price-container">
                          <span class="product-price">R$32,49</span>
                          <button type="button" class="button-hover-background">Adicionar ao carrinho</button>
                        </div>
                      </div>
              
                      <div class="movie-product">
                        <strong class="product-title">Ração Úmida Gourmet</strong>
                       
                        <img src="https://images.petz.com.br/fotos/1658159516177.jpg" alt="Poster 4" class="product-image">
                        <div class="product-price-container">
                          <span class="product-price">R$2,99</span>
                          <button type="button" class="button-hover-background">Adicionar ao carrinho</button>
                        </div>
                      </div>
              
                      <div class="movie-product">
                        <strong class="product-title">Ração Premium Adultos</strong>
                        
                        <img src="https://images.petz.com.br/fotos/1508264900505.jpg" alt="Poster 4" class="product-image">
                        <div class="product-price-container">
                          <span class="product-price">R$85,20</span>
                          <button type="button" class="button-hover-background">Adicionar ao carrinho</button>
                        </div>
                      </div>
                      <div class="movie-product">
                        <strong class="product-title">Ração Fórmula Natural</strong>
                      
                        <img src="https://images.petz.com.br/fotos/1627916362617.jpg" alt="Poster 1" class="product-image">
                        <div class="product-price-container">
                          <span class="product-price">R$210,50</span>
                          <button type="button" class="button-hover-background">Adicionar ao carrinho</button>
                        </div>
                      </div>
            
                      <div class="movie-product">
                        <strong class="product-title">Ração GranPlus</strong>
                        
                        <img src="https://images.petz.com.br/fotos/1673298613874.jpg" alt="Poster 2" class="product-image">
                        <div class="product-price-container">
                          <span class="product-price">R$140,99</span>
                          <button type="button" class="button-hover-background">Adicionar ao carrinho</button>
                        </div>
                      </div>
              
                      <div class="movie-product">
                        <strong class="product-title">Luva tira Pelos</strong>
                       
                        <img src="https://images.petz.com.br/fotos/1633380471179.jpg" alt="Poster 3" class="product-image">
                        <div class="product-price-container">
                          <span class="product-price">R$41,30</span>
                          <button type="button" class="button-hover-background">Adicionar ao carrinho</button>
                        </div>
                      </div>
              
                      <div class="movie-product">
                        <strong class="product-title">Eliminador de Odores</strong>
                       
                        <img src="https://images.petz.com.br/fotos/1577126047799.jpg" alt="Poster 4" class="product-image">
                        <div class="product-price-container">
                          <span class="product-price">R$38,99</span>
                          <button type="button" class="button-hover-background">Adicionar ao carrinho</button>
                        </div>
                      </div>
                      <div class="movie-product">
                        <strong class="product-title">Educador Cat</strong>
                       
                        <img src="https://images.petz.com.br/fotos/1600091541304.jpg" alt="Poster 1" class="product-image">
                        <div class="product-price-container">
                          <span class="product-price">R$35,90</span>
                          <button type="button" class="button-hover-background">Adicionar ao carrinho</button>
                        </div>
                      </div>
            
                      <div class="movie-product">
                        <strong class="product-title">Areia Higiênica</strong>
                       
                        <img src="https://images.petz.com.br/fotos/1617027230585.jpg" alt="Poster 2" class="product-image">
                        <div class="product-price-container">
                          <span class="product-price">R$37,50</span>
                          <button type="button" class="button-hover-background">Adicionar ao carrinho</button>
                        </div>
                      </div>
              
                      <div class="movie-product">
                        <strong class="product-title">Areia Higiênica Grãos Finos</strong>
                        
                        <img src="https://images.petz.com.br/fotos/1633434917617.jpg" alt="article" alt="Poster 4" class="product-image">
                        <div class="product-price-container">
                          <span class="product-price">R$18,99</span>
                          <button type="button" class="button-hover-background">Adicionar ao carrinho</button>
                        </div>
                      </div>
              
                      <div class="movie-product">
                        <strong class="product-title">TV Tubo Papelão</strong>
                       
                        <img src="https://images.petz.com.br/fotos/1665517157324.jpg" alt="article" alt="Poster 4" class="product-image">
                        <div class="product-price-container">
                          <span class="product-price">R$95,00</span>
                          <button type="button" class="button-hover-background">Adicionar ao carrinho</button>
                        </div>
                      </div>
                      <div class="movie-product">
                        <strong class="product-title">Brinquedo Laser</strong>
                       
                        <img src="https://images.petz.com.br/fotos/1608212092046.jpg" alt="Poster 4" class="product-image">
                        <div class="product-price-container">
                          <span class="product-price">R$29,48</span>
                          <button type="button" class="button-hover-background">Adicionar ao carrinho</button>
                        </div>
                      </div>
              
                      <div class="movie-product">
                        <strong class="product-title">Kit Degraus</strong>
                        
                        <img src="https://images.petz.com.br/fotos/1640027732979.jpg" alt="Poster 4" class="product-image">
                        <div class="product-price-container">
                          <span class="product-price">R$110,15</span>
                          <button type="button" class="button-hover-background">Adicionar ao carrinho</button>
                        </div>
                      </div>
  
                      <div class="movie-product">
                          <strong class="product-title">Arranhador Cat</strong>
                          
                          <img src="https://images.petz.com.br/fotos/1663178736890.jpg" alt="Poster 4" class="product-image">
                          <div class="product-price-container">
                            <span class="product-price">R$28,50</span>
                            <button type="button" class="button-hover-background">Adicionar ao carrinho</button>
                          </div>
                        </div>
  
                        <div class="movie-product">
                          <strong class="product-title">Brinquedo Ratinhos</strong>
                         
                          <img src="https://images.petz.com.br/fotos/1688064311183.jpg" alt="Poster 4" class="product-image">
                          <div class="product-price-container">
                            <span class="product-price">R$11,00</span>
                            <button type="button" class="button-hover-background">Adicionar ao carrinho</button>
                          </div>
                        </div>
                    </div>
                  </section>





                  <section class="container-loja normal-section">
                    <a href="#" id="outrosanimais"><h2 class="section-title">Outros Animais</h2></a>




            
                    <div class="products-container">
                      <div class="movie-product">
                        <strong class="product-title">Ração Coelho</strong>
                        
                        <img src="https://images.petz.com.br/fotos/1626379151598.jpg" alt="Produt1" class="product-image">
                        <div class="product-price-container">
                          <span class="product-price">R$45,20</span>
                          <button type="button" class="button-hover-background">Adicionar ao carrinho</button>
                        </div>
                      </div>
            
                      <div class="movie-product">
                        <strong class="product-title">Ração Porquinho da India</strong>
                        
                        <img src="https://images.petz.com.br/fotos/1490381652599.jpg" alt="Produt2" class="product-image">
                        <div class="product-price-container">
                          <span class="product-price">R$38,90</span>
                          <button type="button" class="button-hover-background">Adicionar ao carrinho</button>
                        </div>
                      </div>
              
                      <div class="movie-product">
                        <strong class="product-title">Caixa de Transporte para Roedores</strong>
                       
                        <img src="https://images.petz.com.br/fotos/1602005626940.jpg" alt="Produt3" class="product-image">
                        <div class="product-price-container">
                          <span class="product-price">R$140,50</span>
                          <button type="button" class="button-hover-background">Adicionar ao carrinho</button>
                        </div>
                      </div>
              
                      <div class="movie-product">
                        <strong class="product-title">Bebedouro para Roedores</strong>
                        
                        <img src="https://images.petz.com.br/fotos/1628021396472.jpg" alt="Produt4" class="product-image">
                        <div class="product-price-container">
                          <span class="product-price">R$20,45</span>
                          <button type="button" class="button-hover-background">Adicionar ao carrinho</button>
                        </div>
                      </div>
                      <div class="movie-product">
                        <strong class="product-title">Alimento Tartarugas</strong>
                       
                        <img src="https://images.petz.com.br/fotos/1656510544376.jpg" alt="Produt5" class="product-image">
                        <div class="product-price-container">
                          <span class="product-price">R$41,20</span>
                          <button type="button" class="button-hover-background">Adicionar ao carrinho</button>
                        </div>
                      </div>
            
                      <div class="movie-product">
                        <strong class="product-title">Alimento Para Tartarugas</strong>
                        
                        <img src="https://images.petz.com.br/fotos/1656705368474.jpg" alt="Produt6" class="product-image">
                        <div class="product-price-container">
                          <span class="product-price">R$15,90</span>
                          <button type="button" class="button-hover-background">Adicionar ao carrinho</button>
                        </div>
                      </div>
              
                      <div class="movie-product">
                        <strong class="product-title">Ração Tartarugas</strong>
                       
                        <img src="https://images.petz.com.br/fotos/1635969222374.jpg" alt="Poster 4" class="product-image">
                        <div class="product-price-container">
                          <span class="product-price">R$20,99</span>
                          <button type="button" class="button-hover-background">Adicionar ao carrinho</button>
                        </div>
                      </div>
              
                      <div class="movie-product">
                        <strong class="product-title">Suplemento para Tartarugas</strong>
                        
                        <img src="https://images.petz.com.br/fotos/1454964871671.jpg" alt="Poster 4" class="product-image">
                        <div class="product-price-container">
                          <span class="product-price">R$19,30</span>
                          <button type="button" class="button-hover-background">Adicionar ao carrinho</button>
                        </div>
                      </div>
                      <div class="movie-product">
                        <strong class="product-title">Ração de Peixe</strong>
                      
                        <img src="https://images.petz.com.br/fotos/1656942223479.jpg" alt="Poster 1" class="product-image">
                        <div class="product-price-container">
                          <span class="product-price">R$16,99</span>
                          <button type="button" class="button-hover-background">Adicionar ao carrinho</button>
                        </div>
                      </div>
            
                      <div class="movie-product">
                        <strong class="product-title">Ração Para Peixe</strong>
                        
                        <img src="https://images.petz.com.br/fotos/1656703184203.jpg" alt="Poster 2" class="product-image">
                        <div class="product-price-container">
                          <span class="product-price">R$53,90</span>
                          <button type="button" class="button-hover-background">Adicionar ao carrinho</button>
                        </div>
                      </div>
              
                      <div class="movie-product">
                        <strong class="product-title">Aquário Grande</strong>
                       
                        <img src="https://images.petz.com.br/fotos/1594742810709_mini.jpg" alt="settings" alt="Poster 3" class="product-image">
                        <div class="product-price-container">
                          <span class="product-price">R$999,99</span>
                          <button type="button" class="button-hover-background">Adicionar ao carrinho</button>
                        </div>
                      </div>

                      <div class="movie-product">
                        <strong class="product-title">Aquário</strong>
                       
                        <img src="https://images.petz.com.br/fotos/1593553335792_mini.jpg" alt="settings" alt="Poster 3" class="product-image">
                        <div class="product-price-container">
                          <span class="product-price">R$639,99</span>
                          <button type="button" class="button-hover-background">Adicionar ao carrinho</button>
                        </div>
                      </div>
              
                      

                      <div class="movie-product">
                        <strong class="product-title">Ração de Pássaros</strong>
                       
                        <img src="https://images.petz.com.br/fotos/1631632121850.jpg" alt="Poster 1" class="product-image">
                        <div class="product-price-container">
                          <span class="product-price">R$35,90</span>
                          <button type="button" class="button-hover-background">Adicionar ao carrinho</button>
                        </div>
                      </div>
            
                      <div class="movie-product">
                        <strong class="product-title">Ração Para Pássaros</strong>
                       
                        <img src="https://images.petz.com.br/fotos/1443741118609.jpg" alt="Poster 2" class="product-image">
                        <div class="product-price-container">
                          <span class="product-price">R$37,50</span>
                          <button type="button" class="button-hover-background">Adicionar ao carrinho</button>
                        </div>
                      </div>
              
                      <div class="movie-product">
                        <strong class="product-title">Viveiro de Pássaros Pequenos</strong>
                        
                        <img src="https://images.petz.com.br/fotos/1617109909022.jpg" alt="Poster 4" class="product-image">
                        <div class="product-price-container">
                          <span class="product-price">R$ 800,99</span>
                          <button type="button" class="button-hover-background">Adicionar ao carrinho</button>
                        </div>
                      </div>
              
                      <div class="movie-product">
                        <strong class="product-title">Viveiro Pássaros Pequenos</strong>
                       
                        <img src="https://images.petz.com.br/fotos/1627927530988.jpg" alt="Poster 4" class="product-image">
                        <div class="product-price-container">
                          <span class="product-price">R$320,50</span>
                          <button type="button" class="button-hover-background">Adicionar ao carrinho</button>
                        </div>
                      </div>
                      <div class="movie-product">
                        <strong class="product-title">Cama de Furão</strong>
                       
                        <img src="https://images.petz.com.br/fotos/40014100000037-1.jpg" alt="Poster 4" class="product-image">
                        <div class="product-price-container">
                          <span class="product-price">R$65,99</span>
                          <button type="button" class="button-hover-background">Adicionar ao carrinho</button>
                        </div>
                      </div>
              
                      <div class="movie-product">
                        <strong class="product-title">Ração Para Furão</strong>
                        
                        <img src="https://images.petz.com.br/fotos/1649082810149.jpg" alt="Poster 4" class="product-image">
                        <div class="product-price-container">
                          <span class="product-price">R$171,15</span>
                          <button type="button" class="button-hover-background">Adicionar ao carrinho</button>
                        </div>
                      </div>

                      <div class="movie-product">
                        <strong class="product-title">Cama para 
                          Furão</strong>
                       
                        <img src="https://images.petz.com.br/fotos/40014090000019-1.jpg" alt="Poster 4" class="product-image">
                        <div class="product-price-container">
                          <span class="product-price">R$49,99</span>
                          <button type="button" class="button-hover-background">Adicionar ao carrinho</button>
                        </div>
                      </div>
  
                     

  
                        <div class="movie-product">
                          <strong class="product-title">Feno Para Roedores</strong>
                         
                          <img src="https://images.petz.com.br/fotos/40013040000095-1.jpg" alt="Poster 4" class="product-image">
                          <div class="product-price-container">
                            <span class="product-price">R$25,90</span>
                            <button type="button" class="button-hover-background">Adicionar ao carrinho</button>
                          </div>
                        </div>
                    </div>
                  </section>
            
            
          
              
          
                <section class="container-loja normal-section">
                  <a href="#" id="carrinho-final"><h2 class="section-title">Carrinho</h2></a>
          
                  <table class="cart-table">
                    <thead>
                      <tr>
                        <th class="table-head-item first-col">Item</th>
                        <th class="table-head-item second-col">Preço</th>
                        <th class="table-head-item third-col">Quantidade</th>
                      </tr>
                    </thead>
          
                    <tbody>
                      <!-- <tr class="cart-product">
                        <td class="product-identification">
                          <img src="images/produto2.png" alt="Miniatura" class="cart-product-image">
                          <strong class="cart-product-title">Miniatura</strong>
                        </td>
                        <td>
                          <span class="cart-product-price">R$69,90</span>
                        </td>
                        <td>
                          <input type="number" value="2" min="0" class="product-qtd-input">
                          <button type="button" class="remove-product-button">Remover</button>
                        </td>
                      </tr>
                      <tr class="cart-product">
                        <td class="product-identification">
                          <img src="images/poster3.png" alt="Poster 3" class="cart-product-image">
                          <strong class="cart-product-title">Poster 3</strong>
                        </td>
                        <td>
                          <span class="cart-product-price">R$19,99</span>
                        </td>
                        <td>
                          <input type="number" value="1" min="0" class="product-qtd-input">
                          <button type="button" class="remove-product-button">Remover</button>
                        </td>
                      </tr> -->
                    </tbody>
          
                    <tfoot>
                      <tr>
                        <td colspan="3" class="cart-total-container">
                          <strong>Total</strong>
                          <span>R$0,00</span>
                        </td>
                      </tr>
                    </tfoot>
                  </table>
          
                  <button type="button" class="purchase-button">Finalizar Compra</button>
                </section>
              </main>

              
            </section>







            <footer class="main-footer1">
                <p class="action1">Nos Siga:</p>
                <a class="action" href="https://instagram.com/"><img src="banner/instagram.png" alt="instagram" width="30px"></a>
                <a class="action" href="https://facebook.com/"><img src="banner/facebook.png" alt="instagram" width="30px"></a>
                <p class="action">&copy;Todos os direitos reservados 2023</p>
        
                </footer>
    
    
</body>
</html>