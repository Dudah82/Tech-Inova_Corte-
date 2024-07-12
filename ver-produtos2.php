<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce DTEC 2024</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <div class="novoMenu">
        <div class="container">
            <div class="navbar2">
                <div class="logo">
                    <img src="assets/img/logo.jpeg" alt="DESPERTARTEC" width="240px">
                </div>
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
                <a href="carrinho.PHP" title="">
                    <img src="assets/img/carrinho.png" alt="" width="120px" height="120px">
                </a>
                <img src="assets/img/menu.png" alt="" class="menu-celular" onclick="menucelular()">
            </div>
        </div>
        <hr>
        <br>
    </div>

    <div class="corpo-categorias ver-produto">
        <div class="linha">
            <div class="col-2">
                <img class="col-2-1" src="assets/img/blusa-preta.jpg" alt="" id="produtoImg">
            </div>
            <div class="col-2">
                <p></p>
                <h2>Regata Prets com Amarração</h2>

                <h3 class="descricao"><br>Descrição:</h3>
                <p>Regata Tie Dye laranja,<br>escrito despertar na cor preta.  </p>
                <h4>R$ 69,99 </h4>

                <!-- Add color and size selection here -->
               <!-- <div class="option-selection">
                    <h4>Escolha a cor:</h4>
                    <div class="color-options">
                        <div class="color-option selected">
                            <img src="assets/img/cor.png" alt="Color 1">
                        </div>
                        <div class="color-option">
                            <img src="assets/img/cor 2.jpg" alt="Color 2">
                        </div>
                        <div class="color-option">
                            <img src="assets/img/cor 3.jpg" alt="Color 2">
                        </div>
                        <div class="color-option">
                            <img src="assets/img/cor4.png" alt="Color 2">
                        </div>
                
                    </div>
                </div> -->
                
                <div class="option-selection">
                    <!-- <h4>Escolha o tamanho:</h4> -->
                    <h4 class="tamanhos">Opções de tamanho:</h4>
                    <div class="size-options">
                        <div class="size-option">PP</div>
                        <div class="size-option">P</div>
                        <div class="size-option">M</div>
                        <div class="size-option">G</div>
                        <div class="size-option">GG</div>
                    </div>
                </div>
                <form action="" method="post">
                    <br>
                    <!-- <input type="number" name="" id="" value="1"> -->
                    <button type="submit" class="btn">Adicionar ao Carrinho</button>
                </form>
                

            </div>
        </div>
    </div>
    
    <div class="corpo-categorias">
        <br> <br> <br>
        <div class="linha linha2">
            <h2>Produtos Relacionados</h2>
            <p>Veja Mais</p>
        </div>
        <br> <br>
    </div>
    
    <div class="corpo-categorias">
        <div class="linha">
            <div class="col-4">
                <img src="assets/img/blusa-laranja-amarrada.jpg" alt="">
                <h4>Relógio Treino Profissional Sun</h4>
                <div class="classificacao">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                </div>
                <p>R$ 4090,90</p>
            </div>
            <div class="col-4">
                <img src="assets/img/blusa-colorida.jpg" alt="">
                <h4>Fones de Ouvido Sem Fio </h4>
                <div class="classificacao">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                </div>
                <p>R$ 788,90</p>
            </div>
            <div class="col-4">
                <img src="assets/img/camisa-caveira-2.jpg" alt="">
                <h4>Meia Treino Profissional</h4>
                <div class="classificacao">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                </div>
                <p>R$ 197,00</p>
            </div>
        </div>
    </div>
    
    <footer class="rodape">
        <div class="container">
            <div class="linha">
                <div class="rodape-col-1">
                    <h3>Baixe o nosso App</h3>
                    <p>Baixe nosso aplicativo nas melhores plataformas.</p>
                    <div class="app-logo">
                        <img src="assets/img/google.png" alt="">
                        <img src="assets/img/apple.png" alt="">
                    </div>
                </div>
                <div class="rodape-col-2">
                    <img src="assets/img/logo-2.png" alt="">
                    <p>orem Ipsum is simply dummy text of the </p>
                </div>
                <div class="rodape-col-3">
                    <h3>Mais Informações</h3>
                    <ul>
                        <li>Cupons </li>
                        <li>Blog </li>
                        <li>Política de Privacidade</li>
                        <li>Contatos</li>
                    </ul>
                </div>
                <div class="rodape-col-4">
                    <h3>Redes Sociais</h3>
                    <ul>
                        <li>Facebook </li>
                        <li>Instagram </li>
                        <li>Youtube</li>
                        <li>Twiter</li>
                    </ul>
                </div>
            </div>
            <hr>
            <p class="direitos">
                &#169; Todos os Direitos Reservados. DTEC 2024.
            </p>
        </div>
    </footer>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="assets/js/app.js"> </script>
</body>

</html>
