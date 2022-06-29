<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage smarthink
 * @since smarthink 1.0
 */

    get_header();
?>

    <h1 aria-hidden="true" hidden>Smarthink - Somos colaborativos, parceiros e criativos.</h1>

    <section id="hero">
        <div class="container">

            <!-- SLIDER -->
            <div class="slider">

                <div class="slider-wraper">
                    <!-- SLIDER ITEM -->
                    <div class="slider-item slider-item-active slider-colab">
                        <div class="slider-item-texto">
                            <h2>Somos colaborativos,<br/>
                                parceiros e criativos.</h2>
                            <p>Uma Startup com projetos inovadores e disruptivos, que colabora com o crescimento e a viabilidade de outras Startups.</p>
                            <a href="#projetos" class="botao botao-secundario">Nossos projetos <i class="fas fa-caret-right"></i></a>
                        </div>
                        <div class="slider-item-imagem">
                            <img src="<?= get_template_directory_uri(); ?>/assets/slider_mulher_laptop.png" alt="Mulher com laptop">
                        </div>
                    </div>
                    <!-- SLIDER ITEM -->
                    <div class="slider-item slider-inovacao">
                        <div class="slider-item-texto">
                            <h2>Inovação é a chave.<br/>
                                Colaboração é o meio.</h2>
                            <p>A inovação vai muito além da tecnologia!</p>
                            <p>Inovar é, simplesmente, transformar uma idéia em solução usando a criatividade.</p>
                            <a href="#servicos" class="botao botao-principal">Nossos serviços <i class="fas fa-caret-right"></i></a>
                        </div>
                        <div class="slider-item-imagem">
                            <img src="<?= get_template_directory_uri(); ?>/assets/slider_homen_office.png" alt="Homem executivo">
                        </div>
                    </div>
                    <!-- SLIDER ITEM -->
                    <div class="slider-item slider-conexao">
                        <div class="slider-item-texto">
                            <h2>Para nós, criar conexões<br/>
                                é fundamental.</h2>
                            <p>Acreditamos em parcerias colaborativas para construir soluções que tenham valor para a sociedade para outros negócios.</p>
                            <a href="#contato" class="botao botao-alternativo">Fale conosco <i class="fas fa-caret-right"></i></a>
                        </div>
                        <div class="slider-item-imagem">
                            <img src="<?= get_template_directory_uri(); ?>/assets/slider_couple_fistbump.png" alt="Amigas se cumprimentando">
                        </div>
                    </div>


                </div>

                <div class="slider-nav"></div>

            </div>
            <!-- SLIDER's END -->

        </div>
    </section>
    
    <section id="quem-somos">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="quem-somos-mosaico">
                        <img src="<?= get_template_directory_uri(); ?>/assets/smarthink_quemsomos_a.webp" alt="Close de mãos escrevendo" class="quem-somos-mosaico-a to-reveal" data-animation="fromtop" data-delay="0s">
                        <img src="<?= get_template_directory_uri(); ?>/assets/smarthink_quemsomos_b.webp" alt="Mural de planejamento" class="quem-somos-mosaico-b to-reveal" data-animation="fromleft" data-delay=".5s">
                        <img src="<?= get_template_directory_uri(); ?>/assets/smarthink_quemsomos_c.webp" alt="Homem e mulher utilizando laptop" class="quem-somos-mosaico-c to-reveal" data-animation="frombottom" data-delay="1s">
                    </div>
                </div>
                <div class="col">
                    <h2>Quem somos</h2>

                    <p>A Smarthink surgiu em 2019 da idéia de seu <em>founder</em> de mentorar e colaborar com outras Startups, pela larga experiência de vida e profissional que tem. O pensar de forma inteligente deu nome à Consultoria que logo se transformou em uma Startup, dando vida a projetos disruptivos e inovadores.</p>

                    <h3><i class="fas fa-caret-right"></i> Nossa missão</h3>

                    <p>Ser criativos, formar uma rede colaborativa de parceiros, gerar valor, imprimir cultura, compartilhar conhecimento e tornar a vida cada vez melhor.</p>

                    <h3><i class="fas fa-caret-right"></i> Nossa visão</h3>

                    <p>Ser ambientalmente e socialmente responsáveis. Valorizar o trabalho de todos e as parcerias formadas. Ser disruptivo, inovador e colaborativo.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="fundador">
        <div class="container">
            <div class="founder">
                <div class="founder-profile to-reveal">
                    <img src="<?= get_template_directory_uri(); ?>/assets/pablo-oliveira-fundador.jpg" alt="Fundador sentado em uma poltrona">
                    <p class="founder-profile-name">Pablo Oliveira</p>
                    <p class="founder-profile-legend">Fundador da Smarthink</p>
                    <ul class="founder-profile-social">
                        <li><a target="_blank" aria-label="Linkedin" href="https://www.linkedin.com/in/pablo-magalhaes0906/"><i class="fab fa-linkedin"></i></a></li>
                        <li><a target="_blank" aria-label="Email" href="mailto:po@smarthink.tec.br"><i class="fas fa-envelope"></i></a></li>
                        <li><a target="_blank" aria-label="Whatsapp" href="https://wa.me/5527992688664"><i class="fab fa-whatsapp"></i></a></li>
                    </ul>
                </div>
                <div class="founder-text">
                    <p>Natural de São Paulo/SP, morou por 35 anos em Pernambuco e está há 8 anos no Espírito Santo.</p>
                    <p>Empreendedor desde os 20, hoje com 48 anos, é Bacharel em Física pela UFPE, tendo também cursado o Mestrado em Supercondutividade (UFPE). Possui especialização em Marketing Cultural (UFPE), em Gestão Estratégica com Foco na Administração Pública pelo ILB e em Strategic Social Media Marketing, pela Universidade de Boston/EUA.</p>
                    <p>Como atividade complementar é Sommelier Profissional de Vinhos pela Academie du Vin de Franklin Bittencourt e obteve certificação internacional WSET, uma das certificações mais reconhecidas do mundo.</p>
                    <p>Possui mais de 25 anos de experiência em elaboração e gestão de projetos especiais e de fomento, tendo aprovado e executado 26 projetos em Leis de Incentivo à cultura, 3 projetos em Lei de Incentivo ao Esporte, 2 Projetos de financiamento para Bancos de Desenvolvimento e 1 Projeto de grande envergadura na área ambiental junto ao Ministério do Meio Ambiente da Alemanha e a GIZ.</p>
                    <p>Nos últimos 2 anos aprovou 11 projetos em editais de fomento à inovação e tecnologia, atingindo durante sua vida profissional cerca de 92% de eficácia na aprovação de projetos.  Já atuou diretamente em mais de 40 projetos executados em diversas áreas, tendo sido, inclusive, contratado pela UNESCO para Coordenar um Projeto na área Social, além de já ter realizado projetos e atuado em parceria com empresas Canadense, Americanas, Mexicana, Britânicas e Alemãs.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="servicos">
        <div class="container">
            <h2>Nossos principais serviços</h2>
            <p>A <strong>Smarthink</strong> oferece uma gama diversificada de serviços voltados para<br/>o fomento e o crescimento da sua Startup.</p>
            <div class="servicos">
                <div class="servicos-item to-reveal" data-delay="0s">
                    <img src="<?= get_template_directory_uri(); ?>/assets/servicos_projetos.svg" alt="Foguete subindo junto a um gráfico">
                    Elaboração de projetos para submissão a<br/>editais de fomento
                </div>
                <div class="servicos-item to-reveal" data-delay=".25s">
                    <img src="<?= get_template_directory_uri(); ?>/assets/servicos_captacao.svg" alt="Lâmpada com um cifrão dentro">
                    Captação de investimentos a<br/>fundo perdido
                </div>
                <div class="servicos-item to-reveal" data-delay=".5s">
                    <img src="<?= get_template_directory_uri(); ?>/assets/servicos_mentoria.svg" alt="Rosto de perfil com uma engrenagem">
                    Mentoria para<br/>Startups
                </div>
                <div class="servicos-item to-reveal" data-delay=".75s">
                    <img src="<?= get_template_directory_uri(); ?>/assets/servicos_businessplan.svg" alt="Balão de fala com gráfico">
                    Elaboração de<br/>Business Plan
                </div>
                <div class="servicos-item to-reveal" data-delay="1s">
                    <img src="<?= get_template_directory_uri(); ?>/assets/servicos_cordenacao.svg" alt="Uma lâmpada entre duas pessoas">
                    Gerenciamento e coordenação de<br/>projetos de inovação
                </div>
            </div>
        </div>

    </section>

    <section id="projetos">
        <div class="container">

            <div class="projeto">
                <div class="projeto-texto">
                    <h3>Tem um projeto em mente?</h3>
                    <p>Nós podemos ajudar a tirar suas idéias do papel. Vamos conversar e construir caminhos que podem se transformar em uma grande parceria de sucesso.</p>
                </div>
                <div class="projeto-imagem to-reveal" data-animation="fromleft">
                    <img src="<?= get_template_directory_uri(); ?>/assets/projetos_ideia.svg" alt="Desenho, quatro pessoas discutindo uma ideia">
                </div>
            </div>

            <div class="projeto">
                <div class="projeto-imagem to-reveal" data-animation="fromleft">
                    <img src="<?= get_template_directory_uri(); ?>/assets/projetos_novos.svg" alt="Desenho, dois homens se cumprimentando frente a um quebra-cabeças">
                </div>
                <div class="projeto-texto">
                    <h3>Em novos Projetos</h3>
                    <p>Podemos ser parceiros em novos projetos ou em projetos que já estejam acontecendo. Se for disruptivo e inovador, temos total interesse em conversar e conhecer melhor a solução proposta e quem sabe fechar uma parceria.</p>
                </div>
            </div>

            <div class="projeto">
                <div class="projeto-texto">                
                    <h3>No Comercial</h3>
                    <p>Se você tem um produto desenvolvido e precisa de uma parceria comercial para ampliar sua inserção no mercado, podemos te ajudar nesse caminho. Prestamos consultoria para criação de network comercial, plano de negócios ou inserimos teu produto em nosso portfólio.</p>
                </div>
                <div class="projeto-imagem to-reveal" data-animation="fromleft">
                    <img src="<?= get_template_directory_uri(); ?>/assets/projeto_comercial.svg" alt="Desenho, homem apresenta gráfico para outros colaboradores">
                </div>
            </div>

            <div class="projeto">
                <div class="projeto-imagem to-reveal" data-animation="fromleft">
                    <img src="<?= get_template_directory_uri(); ?>/assets/projetos_desenvolvimento.svg" alt="Desenho, homens examinam gráfico de pizza com uma lupa">
                </div>
                <div class="projeto-texto">
                    <h3>No Desenvolvimento</h3>
                    <p>Tirar uma idéia do papel nem sempre em fácil, temos expertise em buscar meios de viabilizar e transformar boas idéias em bons projetos. Conexão com potenciais parceiros, investidores ou até elaborando teu projeto para um edital de fomento, são alguns caminhos que podemos trilhar com você.</p>
                </div>
            </div>

        </div>
    </section>

    <section id="wine-funding">
        <div class="container">
            <div class="wine">
                <div class="wine-texto">
                    <h2><i class="fas fa-caret-right"></i> Wine Funding Brasil</h2>
                    <a target="_blank" href="https://winefunding.com.br">winefunding.com.br</a>
                    <p>Conheça nossa plataforma digital de financiamento coletivo do mundo dos vinhos que vai revolucionar o mercado nacional.</p>
                    <p>Aqui você poderá investir na produção de um vinho de uma vinícola brasileira, entrar numa campanha para adquirir coletivamente vinhos de vinícolas boutiques de vários países do Mundo que não são vendidos no Brasil, participar de um grupo para ter uma experiência exclusiva de enoturismo e até ser investidor de uma vinícola brasileira. Tudo isso forma prática e segura.</p>
                    <p><strong>Em breve, disponível para acesso!</strong></p>
                    <figure>
                        <img src="<?= get_template_directory_uri(); ?>/assets/winefunding_logo_branca.svg" alt="Logomarca da Winefunding">
                        <legend>O <strong>financiamento<br/>coletivo</strong> com corpo, <br/>aroma e acidez.</legend>
                    </figure>
                </div>
            </div>
        </div>
    </section>

    <section id="parceiros">
        <div class="container">
            <h2>Nossos principais parceiros</h2>
            <p>Parceira é algo que prezamos muito e temos orgulho em divulgar.</p>

            <div class="parceiros">
                <div class="parceiro to-reveal" data-delay="0s">
                    <a href="https://base27.com.br" target="_blank">
                        <img src="<?= get_template_directory_uri(); ?>/assets/parceiros_base27.png" alt="Logomarca da Base27">
                    </a>
                </div>
                <div class="parceiro to-reveal" data-delay=".25s">
                    <a href="https://base27.com.br/startups" target="_blank">
                        <img src="<?= get_template_directory_uri(); ?>/assets/parceiros_area9.png" alt="Logomarca da Área 9">
                    </a>
                </div>
                <div class="parceiro to-reveal" data-delay=".75s">
                    <a href="https://fapes.es.gov.br" target="_blank">
                        <img src="<?= get_template_directory_uri(); ?>/assets/parceiros_fapes.png" alt="Logomarca da FAPES">
                    </a>
                </div>
                <div class="parceiro to-reveal" data-delay="1s">
                    <a href="https://itrois.com.br" target="_blank">
                        <img src="<?= get_template_directory_uri(); ?>/assets/parceiros_itrois.png" alt="Logomarca da ITrois">
                    </a>
                </div>
            </div>

        </div>
    </section>

    <section id="contato">
        <div class="container">
            <div class="contato">
                <div class="contato-col">
                    <h2>Estamos aqui para colaborar!</h2>
                    <p>Somos uma Startup Capixaba localizada em <br/><strong>Vila Velha/ES, Brasil</strong>.</p>

                    <ul class="contato-lista">
                        <li>
                            Smarthink Tecnologia e Consultoria<br/>
                            CNPJ: 34.978.723/0001-81
                        </li>
                        <!-- <li>
                            <i class="fas fa-fw fa-map-marker"></i>Rua Luiza Grinalda, 665 / Loja A, Sala 02 <br>
                            Centro, Vila Velha, ES • 29100-240
                        </li> -->
                        <li>
                            <a href="tel:+5502730776697" target="_blank"><i class="fas fa-phone"></i> +55 <span>27 3077-6697</span></a>
                        </li>
                    </ul>

                    <h3>Conecte-se conosco:</h3>
                    <p>Fique sempre por dentro das novidades que a<br/>Smarthink prepara para você.</p>
                    <ul class="contato-social">
                        <li><a target="_blank" aria-label="Instagram" href="https://www.instagram.com/smarthink.tec"><i class="fab fa-instagram"></i></a></li>
                        <li><a target="_blank" aria-label="Facebook" href="https://www.facebook.com/smarthink.tec "><i class="fab fa-facebook"></i></a></li>
                        <li><a target="_blank" aria-label="Youtube" href="https://www.youtube.com/channel/UCJQ4xwDNZ24_eMX_RVq1cCg"><i class="fab fa-youtube"></i></a></li>
                        <li><a target="_blank" aria-label="Whatsapp" href="https://wa.me/5527992688664"><i class="fab fa-whatsapp"></i></a></li>
                    </ul>
                </div>

                <div class="contato-col">
                    <form class="form-contato" action="https://formsubmit.co/80bd247ac95461683bf0e067041757db" method="post">

                        <input type="hidden" name="_next" value="<?= home_url(); ?>?send=true">
                        <input type="hidden" name="_subject" value="Smarthink - Mensagem enviada pelo site">
                        <input type="hidden" name="_cc" value="contato@smarthink.tec.br">
                        <input type="hidden" name="_template" value="box">
                        <input type="hidden" name="_captcha" value="false">

                        <h3>Deseja entrar <br/>em contato conosco?</h3>
                        <p>Mande um email para <a href="mailto:contato@smarthink.tec.br">contato@smarthink.tec.br</a> ou preencha o formulário a seguir.</p>
                        <ul class="form-contato-inputs">
                            <li>
                                <input type="text" name="nome" placeholder="Informe o seu nome">
                                <small><i class="fa-solid fa-arrow-up"></i> É necessário informar o seu nome.</small>
                            </li>
                            <li>
                                <input type="text" name="telefone" class="form-telefone" placeholder="Telefone de contato com DDD">
                                <small><i class="fa-solid fa-arrow-up"></i> Informe um telefone para contato.</small>
                            </li>
                            <li>
                                <input type="text" name="email" placeholder="Informe seu melhor e-mail">
                                <small><i class="fa-solid fa-arrow-up"></i> Informe um endereço de e-mail válido.</small>
                            </li>
                            <li>
                                <input type="text" name="empresa" placeholder="Empresa que você representa">
                            </li>
                            <li>
                                <textarea name="mensagem" rows="5" placeholder="Escreva aqui a sua solicitação"></textarea>
                                <small><i class="fa-solid fa-arrow-up"></i> Não esqueça de escrever sua solicitação!</small>
                            </li>
                        </ul>
                        <button class="botao botao-principal" type="submit"><i class="fas fa-check"></i> Enviar</button>
                        <button class="botao botao-secundario" type="reset"><i class="fas fa-times"></i> Cancelar</button>
                    </form>
                </div>

            </div>
        </div>
    </section>

    <section id="mapa">
        <iframe title="Nossa localização no Google Maps" class="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3741.2143050673494!2d-40.293553678957174!3d-20.332763611311965!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xb83dc6a182eea7%3A0x2e2d9579be99a320!2sCentro%20de%20Vila%20Velha%2C%20Vila%20Velha%20-%20ES!5e0!3m2!1spt-BR!2sbr!4v1656348869979!5m2!1spt-BR!2sbr" style="border:0;" allowfullscreen="" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>



<?php get_footer(); ?>