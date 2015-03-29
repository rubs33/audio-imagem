<section id="conteudo-principal" class="container" role="main">
	<header class="page-header">
		<h1><i class="glyphicon glyphicon-heart"></i> Ajudando o AudioWeb</h1>
	</header>
	<?= Helper_Trilha::exibir($trilha) ?>
	<div class="row">
		<div class="col-lg-12 margem-inferior">
			<p class="lead">O AudioWeb não está pronto ainda e precisa da sua ajuda. Somente o módulo AudioImagem está pronto, e ainda precisa de muitas melhorias.</p>
			<p>A equipe de desenvolvimento do AudioWeb conta com o apoio de várias entidades, tais como o <abbr title="Conselho Nacional de Desenvolvimento Científico e Tecnológico">CNPq</abbr>, <abbr title="Centro de Nacional de Referência em Tecnologia Assistiva">CNRTA</abbr>, <abbr title="Incubadora de Empresas de Base Tecnológica">Inbatec</abbr>/<abbr title="Universidade Federal de Lavras">UFLA</abbr>, Núcleo de Acessibilidade da UFLA, o <abbr title="Centro de Educação e Apoio às Necessidades Auditivas e Visuais">CENAV</abbr> de Lavras/<abbr title="Minas Gerais">MG</abbr>, e a própria <abbr title="Universidade Federal de Lavras">UFLA</abbr>. Porém estes apoios não são suficientes para completar o AudioWeb. Mais do que nunca, a equipe do AudioWeb precisa do apoio de seus usuários, tantos os que têm alguma deficiência visual como aqueles que os auxiliam no dia-a-dia. A equipe do AudioWeb acredita que somente na interação com os usuários é que o AudioWeb poderá ser melhorado e completado. Afinal, AudioWeb está sendo construído especialmente para estes usuários, portanto o seu funcionamento deve ser guiado por suas necessidades.</p>
			<p>Como o AudioImagem está em fase de aperfeiçoamento (versão beta), optamos por fazer com que todas as fotos e imagens preparadas no AudioWeb possam ser acessadas, vistas, ouvidas e alteradas por todos os demais usuários do AudioWeb, de forma compartilhada. Numa versão posterior, as figuras e fotos continuarão a poder ser vistas e ouvidas por todos, mas somente quem preparou uma imagem poderá alterá­la.</p>
			<p>A melhor forma de ajudar é usar o AudioWeb e depois comentar sobre o que conseguiu fazer, e o que não conseguiu fazer; contar as suas dificuldades no uso do AudioWeb, criticar e propor melhorias; além de sugerir o que gostariam que o AudioWeb fizesse para auxiliá­los em suas atividades acadêmicas e profissionais. Desde já a equipe do AudioWeb agradece encarecidamente a sua preciosa ajuda.</p>
			<p>Para comentar sobre o AudioWeb, no final desse texto há um <a href="formulario-contato">formulário de contato</a>, em que o usuário pode preencher, comentando e sugerindo ideias novas. Além desse formulário, os usuários estão convidados a se juntar ao Grupo AudioWeb, no facebook. Por meio dele, os usuários poderão interagir, não somente com a equipe de desenvolvimento, mas também com todos os demais usuários, podendo levantar e discutir os problemas no uso do AudioWeb, e suas possíveis soluções. Link <a href="https://www.facebook.com/groups/921877751165668/">AudioWeb no facebook</a>.</p>
			<p>Caso queira usar imediatamente o AudioWeb, sinta-se a vontade e comece agora mesmo a usar. Para isso, primeiro é necessário se cadastrar no AudioWeb, através do link Cadastre-se, localizada na barra de menu principal. Após acessar a página de cadastro, é preciso que o usuário preencha os seus dados, que são o nome, e-mail e senha. Além disso, é preciso que o usuário assinale explicitamente que concorda com a licença de uso do AudioWeb, e com a política de privacidade do AudioWeb.</p>
			<p>O passo seguinte é ouvir com atenção a página do link Funcionamento, também na barra de menu principal, que explica em detalhes com usar o AudioWeb. E, por fim, entrar no sistema com seu login e senha, selecionar o módulo AudioImagem, escolher uma figura qualquer, e finalmente interagir e ouvir a imagem escolhida. Link <a href="<?= Route::url('acao_padrao', array('directory' => 'usuario', 'controller' => 'cadastrar')) ?>">Cadastre-se</a>.</p>
		</div>
		<div class="col-md-8 col-md-offset-2">
			<?= View::factory('informacoes/ajudar/form_ajudar')->set('mensagens', $mensagens)->set('form_ajudar', $form_ajudar) ?>
		</div>
	</div>
</section>


