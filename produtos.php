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

        <!-- INÍCIO DO CONTEÚDO-->
        <div class="container">

            <!-- INÍCIO NAVEGAÇÃO-->
            <div class="navbar2">

                <div class="logo">
                    <img src="assets/img/logo.jpeg" alt="DESPERTARTEC" width="190px">
                </div>

                <!-- INÍCIO MENU NAVEGAÇÃO -->
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

                <!-- FIM   MENU NAVEGAÇÃO -->

                <a href="carrinho.php" title="">
                    <img src="assets/img/carrinho.png" href="carrinho.php" alt="" width="120px" height="120px">
                    </a>

                <img src="assets/img/menu.png" alt="" class="menu-celular" onclick="menucelular()">

            </div>
            <!-- FIM NAVEGAÇÃO-->

        </div>
        <!-- FIM DO CONTEÚDO-->
        <hr>
        <br>
    </div>


    <!-- INÍCIO PRODUTOS EM DESTAQUE-->
    <div class="corpo-categorias">

        <div class="linha linha2">
            <h2 class="titulo-todos">Todos</h2>
            <select id="selecionarCategoria">
                <option value="produtos.php">Todos </option>
                <option value="blusas.php">Blusas</option>
                <option value="bolsas.php">Bolsas </option>
                <option value="colar.php">Colar</option>
            </select>
        </div>
        <br> <br> <br>


        <!-- INÍCIO LINHA CORPO PRODUTOS EM DESTAQUE-->

        <div class="linha">

            <!-- INÍCIO ITEM PRODUTO-->

            <div class="col-4">
                <a href="ver_produtos.php">
                <img src="assets/img/camiseta-despertar-laranja.jpg" alt="">
                </a>
                <br>

                <h4>Regata Tie Dye Laranja</h4>
                <br>
                <div class="classificacao">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                </div>
                <br>
                <p>R$ 69,99</p>
                <br>
                <button class="btn-adicionar" onclick="adicionarAoCarrinho('Regata Tie Dye Laranja', 69.99)">Adicionar ao Carrinho</button>

            </div>

            <!-- FIM ITEM PRODUTO-->

            <!-- INÍCIO ITEM PRODUTO-->

            <div class="col-4">
            <a href="ver_produtos.php">
                <img src="assets/img/blusa-preta.jpg" alt="">
                </a>
                <br>
                <h4>Regata Preta com Amarração no Ombro  </h4>
                <br>
                <div class="classificacao">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                </div>
                <br>

                <p>R$ 72,80</p>
                <br>
                <button class="btn-adicionar" onclick="adicionarAoCarrinho('Regata Preta com Amarração no Ombro', 72.80)">Adicionar ao Carrinho</button>


            </div>

            <!-- FIM ITEM PRODUTO-->

            <!-- INÍCIO ITEM PRODUTO-->

            <div class="col-4"> 
            <a href="ver_produtos.php">
                <img src="assets/img/blusa-laranja-amarrada.jpg" alt="">
             </a>
             <br>
                <h4>Camiseta com Amarração</h4>
                <br>
                <div class="classificacao">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                </div>
                <br>

                <p>R$ 60,90</p>
                <br>
                <button class="btn-adicionar" onclick="adicionarAoCarrinho('Camiseta com Amarração', 60.90)">Adicionar ao Carrinho</button>


            </div>

            <!-- FIM ITEM PRODUTO-->

            <!-- INÍCIO ITEM PRODUTO-->

            <div class="col-4">
                <img src="assets/img/blusa-colorida.jpg" alt="">
                <br>

                <h4>Blusa Tie Dye Floral</h4>
                <br>
                <div class="classificacao">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                </div>
                <br>

                <p>R$ 70,00</p>
                <br>
                <button class="btn-adicionar" onclick="adicionarAoCarrinho('Blusa Tie Dye Floral', 70.00)">Adicionar ao Carrinho</button>


            </div>
            <br> <br> <br> <br>

            <div class="col-4">
                <img src="assets/img/camiseta-caveira.jpg" alt="">
                <br>

                <h4>T-Shirt com Estampa de Caveira</h4>
                <br>
                <div class="classificacao">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                </div>
                <br>

                <p>R$ 65,99</p>
                <br>
                <button class="btn-adicionar" onclick="adicionarAoCarrinho('Relogio', 500,90)">Adicionar ao Carrinho</button>


            </div>

            <!-- FIM ITEM PRODUTO-->

            <!-- INÍCIO ITEM PRODUTO-->

            <div class="col-4">
                <img src="assets/img/colar-redondo.jpg" alt="">
                <br>

                <h4>Colar Espiral</h4>
                <br>
                <div class="classificacao">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                </div>
                <br>

                <p>R$ 130,50</p>
                <br>
                <button class="btn-adicionar" onclick="adicionarAoCarrinho('Tenis de Caminhar', 220.90)">Adicionar ao Carrinho</button>


            </div>

            <!-- FIM ITEM PRODUTO-->

            <!-- INÍCIO ITEM PRODUTO-->

            <div class="col-4">
                <img src="assets/img/colar-pentagono.jpg" alt="">
                <br>

                <h4>Colar Pentágono</h4>
                <br>
                <div class="classificacao">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                </div>
                <br>

                <p>R$ 150,90</p>
                <br>
                <button class="btn-adicionar" onclick="adicionarAoCarrinho('Colar Pentágono', 150.90)">Adicionar ao Carrinho</button>


            </div>

            <!-- FIM ITEM PRODUTO-->

            <!-- INÍCIO ITEM PRODUTO-->

            <div class="col-4">
                <img src="assets/img/bolsa-rosa-segurando.jpg" alt="">
                <br>

                <h4>Ecobag Rosa com Estampa de Borboletas</h4>
                <br>
                <div class="classificacao">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                </div>
                <br>

                <p>R$ 45,00</p>
                <br>
                <button class="btn-adicionar" onclick="adicionarAoCarrinho('Ecobag Rosa com Estampa de Borboletas', 45.00)">Adicionar ao Carrinho</button>


            </div>
            <br> <br> <br> <br>

            <!-- FIM ITEM PRODUTO-->

            <!-- INÍCIO ITEM PRODUTO-->

            <div class="col-4">
                <img src="assets/img/bolsa-azul-segurando.jpg" alt="">
                <br>

                <h4>Ecobag Estampa em Tons de Azul </h4>
                <br>
                <div class="classificacao">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                </div>
                <br>

                <p>R$ 46,00</p>
                <br>
                <button class="btn-adicionar" onclick="adicionarAoCarrinho('Ecobag Estampa em Tons de Azul', 46.00)">Adicionar ao Carrinho</button>


            </div>

            <!-- FIM ITEM PRODUTO-->

            <!-- INÍCIO ITEM PRODUTO-->

            <div class="col-4">
                <img src="assets/img/bolsa-colorida-em-pé.jpg" alt="">
                <br>

                <h4>Ecobag com Alça Preta e Estampa Colorida</h4>
                <br>
                <div class="classificacao">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                </div>
                <br>

                <p>R$ 42,00</p>
                <br>
                <button class="btn-adicionar" onclick="adicionarAoCarrinho(' Ecobag com Alça Preta e Estampa Colorida', 42.00 )">Adicionar ao Carrinho</button>


            </div>
            <div class="col-4">
                <img src="assets/img/bolsa-florida-em-pé.jpg" alt="">
                <br>

                <h4>Ecobag com Estampa Floral</h4>
                <br>
                <div class="classificacao">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                </div>
                <br>

                <p>R$ 38,00</p>
                <br>
                <button class="btn-adicionar" onclick="adicionarAoCarrinho(' Ecobag com Estampa Floral', 38.00 )">Adicionar ao Carrinho</button>

            </div>
            
            <div class="col-4">
                <img src="assets/img/sacola-laranja.jpg" alt="">
                <br>

                <h4>Mochila Laranja Tipo Saco</h4>
                <br>
                <div class="classificacao">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                </div>
                <br>

                <p>R$ 26,00</p>
                <br>
                <button class="btn-adicionar" onclick="adicionarAoCarrinho(' Mochila Laranja Tipo Saco', 26.00)">Adicionar ao Carrinho</button>

            </div>


            <!-- FIM ITEM PRODUTO-->

            <!-- FIM ITEM PRODUTO-->


        </div>
        <!-- FIM LINHA CORPO PRODUTOS EM DESTAQUE-->

    </div>
    <br> <br> <br> <br>

    <!-- FIM PRODUTOS EM DESTAQUE-->

    <!-- <div class="paginacao">
        <span>1</span>
        <span>2</span>
        <span>3</span>
        <span>4</span>
        <span>&#8594;</span>
    </div> -->

    <!-- INÍCIO RODAPÉ-->
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
    <!-- FIM RODAPÉ-->

    

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="assets/js/app.js"> </script>
</body>

<script>
        
        function adicionarAoCarrinho(nome, preco, imagem) {
    let pedidos = JSON.parse(localStorage.getItem('pedidos')) || [];
    pedidos.push({ nome, preco, imagem });
    localStorage.setItem('pedidos', JSON.stringify(pedidos));
    alert('Produto adicionado ao carrinho!');
}
    </script>

<script>
    // Selecionando o elemento <select>
const selectOrdenacao = document.getElementById('selectOrdenacao');

// Selecionando os produtos
const produtos = document.querySelectorAll('.produto');

// Função para ordenar os produtos por preço
function ordenarProdutos(opcaoSelecionada) {
    const ordenacao = opcaoSelecionada === 'menor-preco' ? -1 : 1;

    // Convertendo NodeList para Array para poder usar sort()
    const produtosArray = Array.from(produtos);

    produtosArray.sort((produtoA, produtoB) => {
        const precoA = parseFloat(produtoA.getAttribute('data-preco'));
        const precoB = parseFloat(produtoB.getAttribute('data-preco'));

        return (precoA - precoB) * ordenacao;
    });

    // Removendo os produtos do DOM
    produtos.forEach(produto => produto.remove());

    // Adicionando os produtos ordenados de volta ao DOM
    produtosArray.forEach(produto => document.getElementById('produtos').appendChild(produto));
}

// Evento de mudança no <select>
selectOrdenacao.addEventListener('change', function() {
    const opcaoSelecionada = this.value;
    ordenarProdutos(opcaoSelecionada);
});

</script>

<script>
    // Selecionando o elemento <select>
const selectCategoria = document.getElementById('selecionarCategoria');

// Evento de mudança no <select>
selectCategoria.addEventListener('change', function() {
    const opcaoSelecionada = this.value;

    // Verifica se uma opção válida foi selecionada
    if (opcaoSelecionada) {
        // Redireciona para a página selecionada
        window.location.href = opcaoSelecionada;
    }
});

</script>

</html>