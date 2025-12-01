<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bool Technology</title>
    <link rel="stylesheet" href="styles.css">
    <!-- Fonte opcional do Google (pode remover se quiser) -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
</head>

<body>
    <!--menu de navegação-->
    <header>
        <nav>            
          
        
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#empresa">Empresa</a></li>
                <li><a href="#portfolios">Portfólios</a></li>
                <li><a href="#services">Serviços</a></li>
                <li><a href="#contato">Contato</a></li>
            </ul>
        </nav>
    </header>

    <!--home-->
    <section id="home" class="reveal">
        <div class="container">
            <div class="content">
                <div class="badge">
                    <span class="badge-dot"></span>
                    Tecnologia que transforma negócios
                </div>
                <h1>Bem-vindo à <span>Bool Technology</span></h1>
                <p>
                    Lógica, criatividade e tecnologia trabalhando juntas para transformar ideias
                    em soluções digitais reais, escaláveis e eficientes.
                </p>
                <div class="hero-actions">
                    <a href="#portfolios" class="btn-primary">Ver portfólios</a>
                    <a href="#contato" class="btn-outline">Falar com a gente</a>
                </div>
            </div>
        </div>
    </section>

  <!-- Empresa -->
<section id="empresa" class="reveal">
    <div class="container">
        <h2>Sobre a Bool Technology</h2>
        <p class="section-subtitle">
            Uma empresa criada para simplificar o acesso à tecnologia e gerar impacto real em pessoas e negócios.
        </p>

        <div class="empresa-grid reveal">
            <!-- Bloco de História -->
            <div class="empresa-bloco">
                <img src="imagem.jpg" alt="História da empresa" class="empresa-image">
                <div class="empresa-bloco-content">
                    <h3>Nossa história</h3>
                    <p class="empresa-texto" id="historia">
                        A Bool Technology nasceu da inquietação de jovens desenvolvedores... 
                        <span class="more-text">[texto completo aqui]</span>
                    </p>
                    <button class="btn-expand" onclick="toggleTexto('historia')">Leia mais</button>
                </div>
            </div>

            <!-- Bloco de Missão -->
            <div class="empresa-bloco">
                <img src="img/dev programando.png" alt="Missão da empresa" class="empresa-image">
                <div class="empresa-bloco-content">
                    <h3>Nossa missão</h3>
                    <p class="empresa-texto" id="missao">
                        Desenvolver soluções tecnológicas inovadoras, acessíveis e seguras...
                    </p>
                    <button class="btn-expand" onclick="toggleTexto('missao')">Leia mais</button>
                </div>
            </div>

            <!-- Bloco de Visão -->
            <div class="empresa-bloco">
                <img src="imagem.jpg" alt="Visão da empresa" class="empresa-image">
                <div class="empresa-bloco-content">
                    <h3>Nossa visão</h3>
                    <p class="empresa-texto" id="visao">
                        Ser reconhecida como referência em inovação tecnológica no Brasil...
                    </p>
                    <button class="btn-expand" onclick="toggleTexto('visao')">Leia mais</button>
                </div>
            </div>

            <!-- Bloco de Valores -->
            <div class="empresa-bloco">
                <img src="imagem.jpg" alt="Valores da empresa" class="empresa-image">
                <div class="empresa-bloco-content">
                    <h3>Nossos valores</h3>
                    <p class="empresa-texto" id="valores">
                        <strong>Inovação contínua:</strong> buscamos sempre novas formas de resolver problemas reais...
                    </p>
                    <button class="btn-expand" onclick="toggleTexto('valores')">Leia mais</button>
                </div>
            </div>
        </div>
    </div>
</section>

    <!--portfolios-->
    <section id="portfolios">
        <div class="container">
            <h3 class="section-title">Portfólios</h3>
            <p class="section-subtitle">
                Alguns projetos que mostram como transformamos código em resultado.
            </p>

            <div class="portfolios-grid">
                <!--SITE FORNALHA DOCES E SALGADOS-->
                <div class="portfolios-card">
                    <h3>Fornalha - Doces e Salgados</h3>
                    <p>
                        O <strong>Fornalha - Doces e Salgados</strong> é um site criado para proporcionar uma experiência
                        única aos clientes, facilitando a visualização e o pedido de produtos artesanais de forma
                        intuitiva e acessível.
                    </p>
                    <p>
                        Utilizando tecnologias modernas, o site é totalmente responsivo, adaptando-se a qualquer
                        dispositivo (desktop, tablet ou celular), com navegação fluida e design otimizado para rapidez
                        e usabilidade.
                    </p>

                    <h4>Tecnologias usadas</h4>
                    <ul>
                        <li><strong>Tailwind CSS</strong> – Layout moderno, responsivo e clean.</li>
                        <li><strong>Alpine.js</strong> – Interatividade leve, incluindo controle de carrinho.</li>
                        <li><strong>HTML5</strong> – Estrutura semântica e acessível.</li>
                        <li><strong>JavaScript</strong> – Interações dinâmicas e controle de produtos.</li>
                    </ul>

                    <p class="quote">
                        “Transformando ideias em soluções digitais para um futuro mais conectado e eficiente.”
                    </p>
                    <p class="quote">
                        “A experiência de navegar e comprar no site da Fornalha foi incrível! É fácil de usar, as
                        informações são claras e as fotos dos produtos são maravilhosas. A funcionalidade de visualizar
                        o cardápio e fazer pedidos diretamente pelo site é excelente. A qualidade dos produtos também é
                        excepcional. Definitivamente, vou voltar sempre para mais!”
                        <br>
                        <strong>Maria Oliveira, cliente satisfeita</strong>
                    </p>

                    <div class="btn-link">
                        <button onclick="window.open('https://github.com/GitParaAula/Nicolas-Upload', '_blank');">
                            Ver repositório
                        </button>
                    </div>
                </div>

                <!-- To-Do List CRUD -->
                <div class="portfolios-card">
                    <h3>Aplicativo To-Do List com CRUD Completo</h3>
                    <p>
                        Sistema de gerenciamento de tarefas (To-Do List) que permite adicionar, editar, excluir e marcar
                        tarefas como concluídas. Construído com foco em produtividade, simplicidade e organização.
                    </p>

                    <p>
                        Utilizando um back-end robusto e uma interface intuitiva, o sistema facilita o controle das
                        atividades do dia a dia, garantindo persistência dos dados e uma experiência fluida.
                    </p>

                    <h4>Tecnologias usadas</h4>
                    <ul>
                        <li><strong>PHP</strong> – Back-end para processamento e regras de negócio.</li>
                        <li><strong>MySQL</strong> – Armazenamento e gestão das tarefas.</li>
                        <li><strong>HTML5</strong> – Estrutura semântica da aplicação.</li>
                        <li><strong>CSS</strong> – Estilização e layout responsivo.</li>
                        <li><strong>jQuery</strong> – Interatividade dinâmica sem recarregar a página.</li>
                    </ul>

                    <p class="quote">
                        “Transformando ideias em soluções digitais para um futuro mais organizado e produtivo.”
                    </p>

                    <p class="quote">
                        “A experiência de usar o sistema de gerenciamento de tarefas foi ótima! O design é simples,
                        intuitivo, e a funcionalidade de editar e excluir tarefas facilita muito a organização do meu
                        dia. A velocidade e o desempenho são excepcionais, e agora consigo gerenciar minhas tarefas com
                        muito mais eficiência!”
                        <br>
                        <strong>João Costa, usuário satisfeito</strong>
                    </p>

                    <div class="btn-link">
                        <button onclick="window.open('https://github.com/PaREMonDcOno/portfolio1.git', '_blank');">
                            Ver repositório
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Serviços -->
    <section id="services">
        <div class="container reveal">
            <h2>Serviços</h2>
            <p class="section-subtitle">
                Do conceito ao deploy: entregamos soluções completas, com foco em eficiência e resultado.
            </p>

            <div class="services-container reveal">
                <div class="service-card reveal">
                    <h3>Desenvolvimento de Sites e Sistemas Web</h3>
                    <p>
                        Criação de sites institucionais, landing pages e sistemas web sob medida, focados em performance,
                        responsividade e experiência do usuário.
                    </p>
                </div>

                <div class="service-card reveal">
                    <h3>Aplicações Personalizadas & Integrações</h3>
                    <p>
                        Desenvolvimento de aplicações customizadas, automações e integrações entre sistemas (APIs,
                        bancos de dados e ferramentas de terceiros) para otimizar processos e reduzir trabalho manual.
                    </p>
                </div>

                <div class="service-card reveal">
                    <h3>Consultoria em Transformação Digital</h3>
                    <p>
                        Análise de processos, diagnóstico tecnológico e definição de soluções digitais que geram
                        resultado real para o negócio, com visão estratégica e prática.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contato -->
    <section id="contato">
        <div class="container reveal">
            <h2>Contato</h2>
            <p class="section-subtitle reveal">
                Tem um projeto em mente, precisa de ajuda técnica ou quer trocar ideia sobre tecnologia?
                Fale com a Bool Technology.
            </p>

            <div class="contato-layout reveal">
                <div>
                    <p class="contato-intro reveal">
                        Preencha o formulário ao lado com o máximo de detalhes possível sobre seu projeto ou necessidade.
                        Assim conseguimos entender melhor o contexto e te responder com algo realmente útil.
                    </p>

                    <form action="formulario.php" method="post">
                        <div class="form-group reveal">
                            <label for="nome">Nome</label>
                            <input type="text" id="nome" name="nome" placeholder="Seu nome completo" required>
                        </div>

                        <div class="form-group reveal">
                            <label for="email">E-mail</label>
                            <input type="email" id="email" name="email" placeholder="seuemail@exemplo.com" required>
                        </div>

                        <div class="form-group reveal">
                            <label for="assunto">Assunto</label>
                            <input type="text" id="assunto" name="assunto" placeholder="Sobre o que quer falar?" required>
                        </div>

                        <div class="form-group reveal">
                            <label for="mensagem">Mensagem</label>
                            <textarea id="mensagem" name="mensagem" rows="5"
                                placeholder="Descreva seu projeto, ideia ou problema com o máximo de detalhes possível."
                                required></textarea>
                        </div>

                        <button type="submit">Enviar mensagem</button>
                    </form>
                </div>

                <div class="contato-info ">
                    <h3>Outros canais</h3>
                    <p><strong>E-mail:</strong> contato@booltechnology.com</p>
                    <p><strong>Telefone/WhatsApp:</strong> (11) 99999-9999</p>
                    <p><strong>Cidade:</strong> São Paulo - SP</p>
                    <p>
                        <strong>Disponibilidade:</strong> Horário comercial, com possibilidade de reuniões remotas
                        agendadas.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <footer>
        &copy; <span id="year"></span> Bool Technology. Todos os direitos reservados.
    </footer>

    <script>
        // Chama a função assim que o DOM carrega
        document.addEventListener("DOMContentLoaded", revealOnScroll);
    // Chama de novo toda vez que der scroll
    window.addEventListener("scroll", revealOnScroll);

        function revealOnScroll() {
        const reveals = document.querySelectorAll(".reveal");
        const windowHeight = window.innerHeight;
        const elementVisible = 150; // quanto antes do fim da tela o elemento começa a aparecer

        reveals.forEach((el) => {
        const elementTop = el.getBoundingClientRect().top;

        if (elementTop < windowHeight - elementVisible) {
            el.classList.add("active");
        } else {
            el.classList.remove("active");
        }
    });
}
        // Atualiza o ano no rodapé automaticamente
        document.getElementById("year").textContent = new Date().getFullYear();


        function toggleTexto(id) {
        const texto = document.getElementById(id);
        var btn = texto.querySelector('.btn-expand');

        // Alterna a classe 'expanded'
        texto.classList.toggle('expanded');

        // Altera o texto do botão conforme a expansão
        if (texto.classList.contains('expanded')) {
        btn.textContent = "Leia menos"; // Muda para "Leia menos"
    } else {
        btn.textContent = "Leia mais"; // Muda para "Leia mais"
    }
}
    </script>
</body>

</html>
