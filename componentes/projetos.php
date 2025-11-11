<?php
// Exemplo de array de projetos
$projetos = [
    [
        "nome" => "IA para Recomendação",
        "descricao" => "Sistema completo de IA multi-agente para análise e recomendação inteligente de compras, integrando:
                        Agente Conversacional (Gerente): Interface natural com delegação inteligente
                        Time de Especialistas (4 agentes): Análise aprofundada da cadeia de suprimentos
                        Fontes de Dados: SQL, RAG, ML, Mercado (Web Search)
                        Ferramentas Avançadas: Previsões, pesquisa de mercado, comparação de fornecedores
                        ",
        "finalizado" => false,
        "data" => 2025,
        "stack" => ["PYTHON", "AGNO", "TAVILY", "SQL", "RAG", "ML"],
        "img" => "/img/multi-agente.png"
    ],
    [
        "nome" => "Assistente FastAPI",
        "descricao" => "Este projeto é um assistente inteligente especializado em FastAPI que utiliza a tecnologia de Geração Aumentada por Recuperação (RAG) e Modelos de Linguagem Grandes (LLMs) para responder a perguntas técnicas com base em uma base de conhecimento personalizada e local. O objetivo é fornecer respostas rápidas e contextuais sobre o framework FastAPI, tirando dúvidas de documentações e tutoriais.",
        "finalizado" => true,
        "data" => 2025,
        "stack" => ["PYTHON", "STREAMLIT", "FASTAPI", "CHROMADB", "RAG", "LLM"],
        "img" => "/img/fast.png"
    ],
    [
        "nome" => "Portfólio Pessoal",
        "descricao" => "Um site de portfólio pessoal desenvolvido para exibir meus projetos, habilidades e informações de contato. O site é responsivo e utiliza Tailwind CSS para estilização.",
        "finalizado" => true,
        "data" => 2025,
        "stack" => ["PHP", "Javascript", "HTML", "CSS"],
        "img" => "/img/projeto.jpg"

    ],
];
$checked = [
    "sim" => "/img/check-ok.png",
    "nao" => "/img/check-no.png"
];

// helper: retorna a imagem conforme booleano
$checkedImage = function(bool $v) use ($checked) {
    return $checked[$v ? 'sim' : 'nao'];
};
?>

<?php foreach ($projetos as $projeto): ?>
    <div class="bg-slate-600 rounded-lg p-3 flex intems-center space-x-3 ">
        <div class="w-1/5 flex intems-center justify-middle ">
            <img class="h-42 rounded-md" src="<?= $projeto['img'] ?>" alt="projeto">
        </div>
        <div class="w-4/5 space-y-3 ">

            <div class="flex gap-3 justify-between ">
                <h3 class=" flex gap-1 font-semibold text-xl">
                    <img class="h-5 self-center  hover:animate-pulse" src="<?= $checkedImage($projeto['finalizado']) ?>" alt="<?= $projeto['finalizado'] ? 'finalizado' : 'em desenvolvimento' ?>">

                    <?= $projeto['nome'] ?>   
                    
                    <?php if ($projeto['finalizado']): ?>        
                        <span class="text-xs text-gray-300 opacity-50 italic m-1">(finalizado em <?= $projeto['data'] ?>)</span>
                    <?php else: ?>
                        <span class="text-xs text-gray-300 opacity-50 italic m-1">(em desenvolvimento)</span>
                    <?php endif; ?>
                </h3>

                <div class="space-x-1">
                    <?php 
                    $colors = ['fuchsia','lime', 'sky', 'rose', 'amber','teal','purple'];
                    foreach ($projeto['stack'] as $posicao => $language):                    
                    ?>
                        <span class="bg-<?=$colors[$posicao]?>-400 text-<?=$colors[$posicao]?>-900 rounded-md px-2 py-1 font-semibold text-xs ">
                            <?=$language?>
                        </span>
                    <?php endforeach; ?>   
                </div>
            
            </div>
            <div>
                <p class="leanding-6">
                    <?= $projeto['descricao'] ?>
                </p>

            </div>
        </div>
    </div>
<?php endforeach; ?>