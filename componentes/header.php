<!-- Geader Dinamico Com Php -->
<?php
    $itens = [
        [
            'href' => '#projetos','texto'=> 'Projetos',
        ],
        [
            'href' => 'https://www.linkedin.com/in/guilherme-fernandes-do-bem/','texto'=> 'Linkedin',
        ],
        [
            'href' => 'https://github.com/GuilhermeFer29','texto'=> 'Github',
        ],

    ];
?>
<header class=" mx-auto max-w-screen-lg px-3 py-6 flex justify-between items-center ">
    <!-- Logo -->
    <div class="font-bold text-xl text-cyan-600 ">
        Meu Portifólio
    </div>

    <!-- Links -->
    <div class="">
        <!-- Elementos Dinamicos -->
        <ul class="flex gap-3 font-medium text-grayn-200 ">
            <?php foreach($itens as $item): ?>
            <li><a href="<?= $item['href'] ?>" class="hover:underline"><?= $item['texto'] ?></a></li>
            <?php endforeach; ?>
        </ul>
    </div>
</header>