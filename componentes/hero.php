<?php
$itens = [
    [
        'href' => 'https://www.linkedin.com/in/guilherme-fernandes-do-bem/',
        'src' => '/img/linkedin.png',
        'alt' => 'Linkedin logo',
    ],
    [
        'href' => 'https://github.com/GuilhermeFer29',
        'src' => '/img/github.png',
        'alt' => 'Github Logo'
    ],
    [
        'href' => 'https://wa.me/5543988623697',
        'src' => '/img/whatsapp.png',
        'alt' => 'Whatsapp Logo',
    ],


];
?>

<section class="flex gap-x-3">
    <!-- Titulo e Descrição -->
    <div class="w-2/3">
        <h1 class="text-3xl font-bold">Olá, eu sou Guilherme Fernandes</h1>
        <p class="text-xl leanding-6 mt-6 ">Desenvolvedor em início de carreira com base sólida em lógica e
            estruturas de dados. Atuo
            com back-end Python (APIs REST/FastAPI) e dados (ETL/SQL) e em evolução em PHP. Trabalho com Git e
            Docker, colaborando em rituais ágeis e priorizando código
            limpo, testes e documentação. </p>
        <ul class="flex gap-3 mt-6">

            <?php foreach ($itens as $item): ?>
                <li><a href="<?= $item['href'] ?>" target="_blank">
                        <img class="h-8 hover:animate-bounce " src="<?= $item['src'] ?>" alt="<?= $item['alt'] ?>">
                    </a></li>
            <?php endforeach; ?>

        </ul>

    </div>
    <!-- Imagem -->
    <div class="w-1/3  flex justify-center items-center">
        <div>
            <img class="h-60 -mt-6 hover:animate-pulse" src="/img/avatar.svg" alt="avatar">
        </div>
    </div>
</section>