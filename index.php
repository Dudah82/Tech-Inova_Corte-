<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>E-Commerce DTEC Tech Inova </title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href = "assets/css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
  <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
    width: 76%;
    margin: auto;
  }
  </style>
</head>
<body>
    <!--INICIO DO BANNER-->
    <div class ="banner">
        <!--INICIO DO CONTEUDO-->
          <div class ="container">
            <!-- INICIO NAVEGAÇAO-->
              <div class ="navbar">

                <div class="logo">
                <img src="assets/img/logo.jpeg" alt="DESPERTARTEC" width ="150px">
                </div>
                
                <!--INICIO MENU NAVEGAÇAO-->
                <nav>
                    <ul id="MenuItens">
                        <img src="assets/img/casaIcon.png" alt="" width="16px">             
                        <li><a type="a" class="btn" href="index.php">Início</a></li>
                        <img src="assets/img/bolsaIcon.png" alt="" width="16px">
                        <li><a type="a" class="btn" href="produtos.php">Produtos </a></li>
                        <img src="assets/img/sobre_icon.png" alt="" width="16px">
                        <li><a type="a" class="btn" href="sobre-nos.php">Sobre </a></li>
                        <!-- Não sei se vamos realmente ter essa página
                        <img src="assets/img/contatosIcon.png" alt="" width="16px">
                        <li><a type="a" class="btn" href="#">Contatos </a></li> -->
                        <img src="assets/img/minhaContaicon.png" alt="" width="16px">
                        <li><a type="a" class="btn" href="minha-conta.php">Minha Conta </a></li>
                          
                    </ul>
                </nav>

                <!--FIM MENU NAVEGAÇAO-->
             <img src="assets/img/carrinho.png" alt="" width="120px" height="120px">

           </div>
         <!--FIM NAVEGAÇAO-->
         <!--INICIO TEXTO DO BANNER-->
         <div class="linha">

            <div class ="col-2">
              <h1>Tech Inova <br> Corte e Costura !</h1>
              <p>Ei!    Você que está procurando por uma moda <br>diferenciada, com peças e estampas únicas, aqui <br> tem roupas com esse perfil . <br>Navegue pelo nosso site e confira ! </p>
              <!-- <br><a href ="" class="btn">Mais Informaçoes &#8594;</a> -->
            </div>

            <div class ="col-2">
              <img src="assets/img/historia-da-costura-2-1536x1024-1.webp" alt="">

            </div>
              
          </div>
   
      <!--FIM DO TEXTO DO BANNER-->
    </div>
    <!--FIM DO CONTEUDO-->

</div>
 <!--FIM DO BANNER-->

   

<div class="container">
  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">


      <div class="item active">
        <img src="assets/img/alfinetes.JPG" alt="imagens com alfinetes" width="460" height="345">
        <div class="carousel-caption">
          <h3 class="ofertas">OFERTAS DA SEMANA !</h3>
        </div>
      </div>

      <div class="item">
        <img src="assets/img/bolsa-azul-deitada-sem-fundo.JPG" alt="ecobag azul" width="460" height="345">
        <div class="carousel-caption">
          <h3 class="bolsa-azul">Ecobag Azul <br> <br> 5% Off</h3>
          <!-- TIRANDO O TEXTO ABAIXO DAS IMAGENS -->
          <!-- <p>The atmosphere in Chania has a touch of Florence and Venice.</p> -->
        </div>
      </div>

      <div class="item">
        <img src="assets/img/bolsas.JPG" alt="duas bolsas coloridas penduradas" width="460" height="345">
        <div class="carousel-caption">
          <h3 class="bolsas">Nova coleção de<br>Ecobags floral<br><br> 3% Off</h3>
          <!-- <p>The atmosphere in Chania has a touch of Florence and Venice.</p> -->
          <!-- testando mas uma linha de texto na imagem do caroussel -->
          <!-- <p>The atmosphere in Chania has a touch of Florence and Venice.</p> -->
        </div>
      </div>
    
      <div class="item">
        <img src="assets/img/camisetas.JPG" alt="três camisetas" width="460" height="345">
        <div class="carousel-caption">
          <h3 class="camisetas">Blusas<br>Estampadas<br>5%Off</h3>
          <!-- <p>Beautiful flowers in Kolymbari, Crete.</p> -->
        </div>
      </div>

    </div>

  
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<!-- INÍCIO LINHA CORPO PRODUTOS EM DESTAQUE-->
<div class="corpo-categorias">
    <h2 class="titulo">Produtos em Destaque</h2>
<div class="linha">

    <div class="col-4">
        <img src="assets/img/blusa-colorida.JPG" alt="">

        <h4> Blusa Tie Dye Floral</h4>
            <div class ="classificacao">
                <ion-icon name="star"></ion-icon>
                <ion-icon name="star"></ion-icon>
                <ion-icon name="star"></ion-icon>
                <ion-icon name="star"></ion-icon>
                <ion-icon name="star"></ion-icon>
            </div>
            
        <p>R$ 70,00</p>

    </div>
    <div class="col-4">
        <img src="assets/img/colar-pentagono.JPG" alt="">

        <h4> Colar Pentágono</h4>
            <div class ="classificacao">
                <ion-icon name="star"></ion-icon>
                <ion-icon name="star"></ion-icon>
                <ion-icon name="star"></ion-icon>
                <ion-icon name="star"></ion-icon>
                <ion-icon name="star"></ion-icon>
            </div>
            
        <p>R$ 150,90</p>

    </div>
    <div class="col-4">
        <img src="assets/img/blusa-laranja-amarrada.JPG" alt="">

        <h4> Camiseta com Amarração</h4>
            <div class ="classificacao">
                <ion-icon name="star"></ion-icon>
                <ion-icon name="star"></ion-icon>
                <ion-icon name="star"></ion-icon>
                <ion-icon name="star"></ion-icon>
                <ion-icon name="star"></ion-icon>
            </div>
            
        <p>R$ 60,90</p>

    </div>
    <div class="col-4">
        <img src="assets/img/colar-redondo-2.JPG" alt="">

        <h4> Colar Espiral</h4>
            <div class ="classificacao">
                <ion-icon name="star"></ion-icon>
                <ion-icon name="star"></ion-icon>
                <ion-icon name="star"></ion-icon>
                <ion-icon name="star"></ion-icon>
                <ion-icon name="star"></ion-icon>
            </div>
            
        <p>R$ 130,50</p>

    </div>


</div>

<!-- FIM LINHA CORPO PRODUTOS EM DESTAQUE-->

<h2 class="titulo">Novos Produtos</h2>

<!-- INÍCIO LINHA CORPO PRODUTOS EM DESTAQUE-->
<div class="linha">

    <div class="col-4">
        <img src="assets/img/bolsa-rosa-deitada.JPG" alt="">

        <h4> Ecobag Rosa com Estampa de Borboletas</h4>
            <div class ="classificacao">
                <ion-icon name="star"></ion-icon>
                <ion-icon name="star"></ion-icon>
                <ion-icon name="star"></ion-icon>
                <ion-icon name="star"></ion-icon>
                <ion-icon name="star"></ion-icon>
            </div>
            
        <p>R$ 45,00</p>

    </div>
    <div class="col-4">
        <img src="assets/img/bolsa-florida-deitada.JPG" alt="">

        <h4> Ecobag com Estampa Floral</h4>
            <div class ="classificacao">
                <ion-icon name="star"></ion-icon>
                <ion-icon name="star"></ion-icon>
                <ion-icon name="star"></ion-icon>
                <ion-icon name="star"></ion-icon>
                <ion-icon name="star"></ion-icon>
            </div>
            
        <p>R$ 38,00</p>

    </div>
    <div class="col-4">
        <img src="assets/img/bolsa-colorida-deitada-sem-fundo.JPG" alt="">

        <h4> Ecobag com Alça Preta e Estampa Colorida</h4>
            <div class ="classificacao">
                <ion-icon name="star"></ion-icon>
                <ion-icon name="star"></ion-icon>
                <ion-icon name="star"></ion-icon>
                <ion-icon name="star"></ion-icon>
                <ion-icon name="star"></ion-icon>
            </div>
            
        <p>R$ 42,00</p>

    </div>
    <div class="col-4">
        <img src="assets/img/bolsa-azul-deitada.JPG" alt="">

        <h4> Ecobag Estampada em Tons de Azul </h4>
            <div class ="classificacao">
                <ion-icon name="star"></ion-icon>
                <ion-icon name="star"></ion-icon>
                <ion-icon name="star"></ion-icon>
                <ion-icon name="star"></ion-icon>
                <ion-icon name="star"></ion-icon>
            </div>
            
        <p>R$ 46,00</p>

    </div>


</div>

<!-- SEGUNDA FILEIRA DE NOVOS PRODUTOS -->
<div class="linha">

    <div class="col-4">
        <img src="assets/img/bolsa-colorida.JPG" alt="">

        <h4> Ecobag Primavera Florida </h4>
            <div class ="classificacao">
                <ion-icon name="star"></ion-icon>
                <ion-icon name="star"></ion-icon>
                <ion-icon name="star"></ion-icon>
                <ion-icon name="star"></ion-icon>
                <ion-icon name="star"></ion-icon>
            </div>
            
        <p>R$ 38,99</p>

    </div>
    <div class="col-4">
        <img src="assets/img/bolsa-palha.JPG" alt="">

        <h4> Bolsa de Palha Redonda Meia Lua</h4>
            <div class ="classificacao">
                <ion-icon name="star"></ion-icon>
                <ion-icon name="star"></ion-icon>
                <ion-icon name="star"></ion-icon>
                <ion-icon name="star"></ion-icon>
                <ion-icon name="star"></ion-icon>
            </div>
            
        <p>R$ 90,00</p>

    </div>
    <div class="col-4">
        <img src="assets/img/sacola-roxa.JPG" alt="">

        <h4> Mochila Roxa Tipo Saco </h4>
            <div class ="classificacao">
                <ion-icon name="star"></ion-icon>
                <ion-icon name="star"></ion-icon>
                <ion-icon name="star"></ion-icon>
                <ion-icon name="star"></ion-icon>
                <ion-icon name="star"></ion-icon>
            </div>
            
        <p>R$ 25,00</p>

    </div>
    <div class="col-4">
        <img src="assets/img/almofadas.JPG" alt="">

        <h4> Almofadas com Estampas Coloridas</h4>
            <div class ="classificacao">
                <ion-icon name="star"></ion-icon>
                <ion-icon name="star"></ion-icon>
                <ion-icon name="star"></ion-icon>
                <ion-icon name="star"></ion-icon>
                <ion-icon name="star"></ion-icon>
            </div>
            
        <p>R$ 69,99</p>

    </div>


</div>
</div>
<!-- FIM PRODUTOS EM DESTAQUE-->

<!-- INÍCIO SESSÃO OFERTAS-->

<!-- <div class ="ofertas">

<div class="corpo-categorias">

<div class="linha">

    <div class="col-2">

        <img src="assets/img/banner-2.png" alt="" class ="oferta-img">

    </div>

    <div class="col-2">
        <p>Produto Exclusivo da Loja</p>
        <h1>Skate Profissional</h1>
        <small>eahdfashd dfahefioheai fahishioash ashduhsh</small>
        <br><br><a href="" class="btn">Comprar Agora! &#8594; </a>
    </div>

</div> -->


</div>

</div>
<!-- FIM SESSÃO OFERTAS-->

<!-- INÍCIO SESSÃO DEPOIMENTOS-->
<div class="depoimentos">

    <div class="corpo-categorias">
      <div class="linha">
        <div class="col-3">
            <ion-icon name = "ribbon" class ="depoimento-icone"></ion-icon>
            <p> As cores das peças são maavilhosas, e o tecido é muito bom.  Amei !!  </p>
                <div class="classificao">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                </div>

            <img src="assets/img/cliente-1.jpg" alt="">
            <h3>Carol Souza</h3>
        </div>

        <div class="col-3">
            <ion-icon name = "ribbon" class ="depoimento-icone"></ion-icon>
            <p> Tem peças com um estilo diferenciado, achei a cara da minha esposa. Comprei e ela gostou bastate!</p>
                <div class="classificao">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                </div>

            <img src="assets/img/cliente-2.png" alt="">
            <h3>Rodrigo Gonçalves</h3>
        </div>

        <div class="col-3">
            <ion-icon name = "ribbon" class ="depoimento-icone"></ion-icon>
            <p> As roupas são bem despojadas, super fresquinhas e muito bonitas. Valeu muito a pena!</p>
                <div class="classificao">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                </div>

            <img src="assets/img/cliente-3.png" alt="">
            <h3>Marcia Garcia</h3>
        </div>
      </div>

    </div>

</div>

<!-- FIM SESSÃO DEPOIMENTOS-->

    <!-- INÍCIO MARCAS -->
    <div class="marcas">

    <!-- TÍTULO DE INÍCIO DA MARCAS  -->
    <!-- <div class="titulos-marcas"> -->
      <h2 class="titulo">Parceria</h2>
      <h2 class="titulo">Inpirações</h2>
    <!-- </div> -->
 

      <div class="corpo-categorias">
          <div class="linha">

              <div class="col-5">
                <!-- target"_blank" usado para abrir outra aba com site da despertar quando clicar na imagem -->
                <a href="https://www.despertar.org.br" target="_blank"><img src="assets/img/despertar-logo.png" alt=""></a>
              </div>

              <div class="col-5">
               <a href="https://www.lojasrenner.com.br" target="_blank"><img src="assets/img/renner-logo.png" alt=""></a>
              </div>

              <!-- <div class="col-5">
               <img src="assets/img/marca-1.png" alt="">
              </div> -->

              <div class="col-5">
               <a href="https://www.cea.com.br" target="_blank"><img src="assets/img/cea-logo.png" alt=""></a>
              </div>

        </div>

      </div>

  </div>
<!-- FIM MARCAS -->

<!-- INÍCIO RODAPÉ -->

  <footer class="rodape">

      <div class="container">

          <div class="linha">
              <div class="=rodape-col-1">
                  <h3> Baixe o nosso APP</h3>
                  <p> Baixe nosso aplicativo nas melhores plataformas.</p>

                  <div class="app-logo">
                      <img src="assets/img/google.png" alt="">
                      <img src="assets/img/apple.png" alt="">
                  </div>
              </div>

              <div class="rodape-col-2">
                  <img src="assets/img/logo.jpeg" alt="">
                  <!-- <p> orem Ipsum is simply dummy text of the</p> -->
              </div>

              <div class="rodape-col-3">
                  <h3> Mais Informações </h3>
                  <ul>
                      <li>Cupons</li>
                      <li>Blog</li>
                      <li>Política de Privacidade</li>
                      <li>Contatos</li>
                  </ul>
              </div>

              <div class="rodape-col-4">
                  <h3> Redes Sociais </h3>
                  <ul>
                      <li>Facebook</li>
                      <li>Instagram</li>
                      <li>YouTube</li>
                      <li>Pinterest</li>
                  </ul>
              </div>

          </div>

          <!--INÍCIO LINHA FINAL DO RODAPÉ -->
          <hr>
              <p class="direitos">
                  &#169; Todos os Direitos Reservados. Tech Inova 2024.
              </p>
          <!-- FIM LINHA FINAL DO RODAPÉ -->

      </div>

  </footer>
<!-- FIM RODAPÉ -->




<script src="assets/js/app.js"></script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>
</html>