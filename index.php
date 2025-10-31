<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DataTrends - Em Manutenção</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: #f8f8f8; /* Fundo claro */
            color: #333333; /* Texto principal em cinza escuro */
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 20px;
            text-align: center;
        }

        .container {
            max-width: 800px;
            width: 100%;
            padding: 40px;
            background-color: #ffffff; /* Fundo branco para o container */
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1); /* Sombra mais suave */
            /* backdrop-filter: blur(10px); Não aplicável com fundo sólido */
            border: 1px solid #e0e0e0; /* Borda suave */
        }

        .logo {
            margin-bottom: 30px;
        }

        .logo img {
            max-width: 250px; /* Tamanho da imagem do logo */
            height: auto;
            display: block;
            margin: 0 auto;
        }

        /* Remover H1 e P do logo pois a imagem já os contém */
        /* .logo h1 { ... } */
        /* .logo p { ... } */

        .maintenance-content {
            margin: 40px 0;
        }

        .maintenance-icon {
            font-size: 5rem;
            margin-bottom: 20px;
            color: #00ad43; /* Verde principal do logo */
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.1); }
            100% { transform: scale(1); }
        }

        h2 {
            font-size: 2.2rem;
            margin-bottom: 20px;
            font-weight: 600;
            color: #333333;
        }

        p {
            font-size: 1.1rem;
            line-height: 1.6;
            margin-bottom: 25px;
            color: #555555; /* Cor de texto mais suave */
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        .progress-container {
            width: 100%;
            max-width: 500px;
            height: 8px;
            background-color: #e0e0e0; /* Fundo da barra de progresso mais claro */
            border-radius: 4px;
            margin: 30px auto;
            overflow: hidden;
        }

        .progress-bar {
            height: 100%;
            width: 65%;
            background: linear-gradient(90deg, #00ad43, #66D28C); /* Gradiente com os verdes do logo */
            border-radius: 4px;
            animation: progress-animation 3s infinite;
        }

        @keyframes progress-animation {
            0% { width: 65%; }
            50% { width: 75%; }
            100% { width: 65%; }
        }

        .contact-info {
            margin-top: 40px;
            padding-top: 30px;
            border-top: 1px solid #e0e0e0; /* Borda suave */
        }

        .contact-info p {
            margin-bottom: 10px;
            color: #555555;
        }

        .contact-info a {
            color: #00ad43; /* Verde principal do logo */
            text-decoration: none;
            transition: color 0.3s;
        }

        .contact-info a:hover {
            color: #66D28C; /* Verde secundário no hover */
            text-decoration: underline;
        }

        .social-links {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 20px;
        }

        .social-links a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background-color: #66D28C; /* Verde secundário para os ícones sociais */
            border-radius: 50%;
            color: #ffffff;
            font-size: 1.2rem;
            transition: all 0.3s;
        }

        .social-links a:hover {
            background-color: #00ad43; /* Verde principal no hover */
            transform: translateY(-3px);
        }

        @media (max-width: 768px) {
            .container {
                padding: 30px 20px;
            }

            .logo img {
                max-width: 200px;
            }

            h2 {
                font-size: 1.8rem;
            }

            .maintenance-icon {
                font-size: 4rem;
            }
        }

        @media (max-width: 480px) {
            .logo img {
                max-width: 150px;
            }

            h2 {
                font-size: 1.5rem;
            }

            p {
                font-size: 1rem;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="logo">
            <img src="logo.jpeg" alt="DataTrends Instituto de Pesquisas de Opinião">
            <!-- Os textos h1 e p foram removidos pois a imagem do logo já os contém -->
        </div>

        <div class="maintenance-content">
            <div class="maintenance-icon">
                <i class="fas fa-tools"></i>
            </div>

            <h2>Página em Manutenção</h2>

            <p>Estamos trabalhando para melhorar sua experiência. Nossa página está passando por atualizações e estará de volta em breve com novidades e melhorias.</p>

            <div class="progress-container">
                <div class="progress-bar"></div>
            </div>

            <p>Pedimos desculpas pelo inconveniente e agradecemos sua compreensão. Voltaremos em breve!</p>
        </div>

        <!-- <div class="contact-info">
            <p>Para emergências, entre em contato:</p>
            <p>Email: <a href="mailto:contato@datatrends.com.br">contato@datatrends.com.br</a></p>
            <p>Telefone: <a href="tel:+5511999999999">(11) 99999-9999</a></p>

            <div class="social-links">
                <a target="_blank" href="https://www.facebook.com/institutodatatrends/" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                <a target="_blank" href="https://twitter.com/institutodatatrends" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                <a target="_blank" href="https://www.linkedin.com/company/institutodatatrends" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                <a target="_blank" href="https://www.instagram.com/institutodatatrends/" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
            </div>
        </div> -->
    </div>

    <!-- Font Awesome para ícones -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</body>
</html>