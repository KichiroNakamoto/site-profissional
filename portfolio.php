<!doctype html>
<html lang="pt-br">
	<head>
		<?php include_once("meta-tags.php"); ?>

		<title>Portfólio | Lígia 'Lilly' Freitas</title>

			<style type="text/css">
				.nav-portfolio { border-bottom: 2px solid #59359A; }
			</style>

	</head>
	<body>

<?php include_once("navegacao.php"); ?>

<div class="col-xxl-8 mx-auto p-3 ty-md-5">
	<main>

		<?php include_once("cabecalho.php"); ?>

		<div class="row mt-4 px-4">
			<h2>Portfólio</h2>
			<p>Atuo como <strong class="text-purple-500">consultora freelancer para soluções digitais</strong> com foco nas áreas de arquitetura da informação e de desenvolvimento de sites.</p>

			<p>A seguir destaco alguns trabalhos realizados, além deste site.</p>
		</div>

			<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
				<div class="col">
					<div class="card shadow-sm h-100">
						<img class="border-bottom" src="portfolio/imagens/lfreitas-portfolio-ai-01-visao-geral.png" alt="Mapa do site e wireframe de versão mobile" />
						<div class="card-body">
							<span class="badge rounded-pill bg-purple-500 text-white"><i class="bi bi-diagram-3-fill" aria-label="Arquitetura da informação"></i></span>
							<span class="badge bg-light text-dark">Balsamiq</span>
							<h5 class="card-title mt-3">Reformulação de site de entidade de classe</h5>
							<p class="card-text">Criação de mapa do site, inventário de conteúdo e telas desktop e mobile para reformulação de site de conselho profissional.</p>
						</div>
						<div class="card-footer bg-white border-white text-end">
							<a href="portfolio/ai-01" title="Veja mais detalhes e telas do projeto" class="btn btn-outline-secondary btn-sm">Detalhes</a>
						</div>
					</div>
				</div>
				<div class="col">
					<div class="card shadow-sm h-100">
						<img class="border-bottom" src="portfolio/imagens/lfreitas-portfolio-lfmed.png" alt="Imagem do sistema com agenda mensal" />
						<div class="card-body">
							<span class="badge rounded-pill bg-purple-500 text-white"><i class="bi bi-code-slash" aria-label="Desenvolvimento web"></i></span>
							<span class="badge bg-light text-dark">PHP</span>
							<span class="badge bg-light text-dark">MySQL</span>
							<span class="badge bg-light text-dark">Bootstrap</span>
							<h5 class="card-title mt-3">Agenda para consultório médico</h5>
							<p class="card-text">Sistema para gerenciar agenda de clínica médica de pequeno porte, projeto realizado para especialização em Desenvolvimento de Aplicações Web (PUC-MINAS).</p>
						</div>
						<div class="card-footer bg-white border-white text-end">
							<a href="https://github.com/ligiadf/lfmed" title="Veja o projeto no GitHub" class="btn btn-outline-secondary btn-sm"><i class="bi-github" role="img" aria-label="GitHub"></i> Código-fonte</a>
							<a href="portfolio/lfmed" title="Veja mais detalhes e telas do projeto" class="btn btn-outline-secondary btn-sm">Detalhes</a>
						</div>
					</div>
				</div>
				<div class="col">
					<div class="card  shadow-sm h-100">
						<img class="border-bottom" src="portfolio/imagens/lfreitas-portfolio-arb.png" alt="Tela da página inicial do site" />
						<div class="card-body">
							<span class="badge rounded-pill bg-purple-500 text-white"><i class="bi bi-code-slash" aria-label="Desenvolvimento web"></i></span>
							<span class="badge bg-light text-dark">WordPress</span>
							<h5 class="card-title mt-3">Site de entidade associativa</h5>
							<p class="card-text">Site da Associação Rio-Grandense de Bibliotecários (ARB), desenvolvido de forma voluntária com WordPress desde 2012, reformulado em 2020.</p>
						</div>
						<div class="card-footer bg-white border-white text-end">
							<a href="https://arb.org.br" title="Acesse o site" class="btn btn-outline-secondary btn-sm">Acessar</a>
						</div>
					</div>
				</div>
				<div class="col">
					<div class="card shadow-sm h-100">
						<img class="border-bottom" src="portfolio/imagens/lfreitas-portfolio-biblioteconomianerd.png" alt="Tela da página inicial do blog" />
						<div class="card-body">
							<span class="badge rounded-pill bg-purple-500 text-white"><i class="bi bi-code-slash" aria-label="Desenvolvimento web"></i></span>
							<span class="badge bg-light text-dark">WordPress</span>
							<h5 class="card-title mt-3">Biblioteconomia Nerd</h5>
							<p class="card-text">Blog desenvolvido e mantido por mim, criado em 2008 e desenvolvido com WordPress desde 2012.</p>
						</div>
						<div class="card-footer bg-white border-white text-end">
							<a href="https://biblioteconomianerd.com.br" title="Acesse o site" class="btn btn-outline-secondary btn-sm">Acessar</a>
						</div>
					</div>
				</div>
				<div class="col">
					<div class="card shadow-sm h-100">
						<img class="border-bottom" src="portfolio/imagens/lfreitas-portfolio-arb-diadobibliotecario.png" alt="Tela da página inicial do site" />
						<div class="card-body">
							<span class="badge rounded-pill bg-purple-500 text-white"><i class="bi bi-code-slash" aria-label="Desenvolvimento web"></i></span>
							<span class="badge bg-light text-dark">Bootstrap</span>
							<h5 class="card-title mt-3">Site comemorativo</h5>
							<p class="card-text">Site estático comemorativo ao Dia do Bibliotecário, criado para ARB em 2007.</p>
						</div>
						<div class="card-footer bg-white border-white text-end">
							<a href="https://arb.org.br/diadobibliotecario" title="Acesse o site" class="btn btn-outline-secondary btn-sm">Acessar</a>
						</div>
					</div>
				</div>


			</div>

<?php include_once("rodape.php"); ?>