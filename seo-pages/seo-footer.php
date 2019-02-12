<!-- CTA -->
<div class="container">
<div class="banner_footer">
<div class="espacinho-xs"></div>
<div class="row">
	<div class="col-md-8 col-sm-12 text-center esquerdo_footer">
		<h2 class="titulo-banner_footer"><?php echo $meta1['titulo']; ?></h2>
		<p>Temos Tudo o Que Você precisa a um Clique <br> Fale Conosco Por Whatsapp ou Preencha o Formulário ao Lado</p>
	</div>
	<div class="col-md-4 col-sm-12">
		<div class="row">
			<div class="col-6 text-right">
				<a href="https://api.whatsapp.com/send?phone=5511975811767&text=quero%20saber%20mais"><button class="bto-whatss"><p class="text-whatss"><i class="fab fa-whatsapp"></i> <br>11 97581.1767 </p></button></a>
			</div>
			<div class="col-6">
				<button type="button" class="bto-email" data-toggle="modal" data-target="#modal_footer"><p class="text-whatss"><i class="fa fa-envelope"></i> <br>Fale Conosco</p></button>
			</div>
		</div>
	</div>

</div>
<div class="espacinho-xs"></div>
</div>
<!-- Modal -->
<div class="modal fade" id="modal_footer" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Em Breve Retornaremos o Contato</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="envio.php">
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Seu E-mail">
  </div>
  <div class="form-group">
    <label for="nome">Nome</label>
    <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome">
  </div>
    <div class="form-group">
    <label for="telefone">Telefone</label>
    <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Telefone">
  </div>
    <div class="form-group">
    	<!-- <fieldset disabled> -->
    <label for="assunto">Assunto</label>
    <input type="text" class="form-control" id="assunto" name="assunto" value="<?php echo $meta1['titulo']; ?>" placeholder="<?php echo $meta1['titulo']; ?>">
		<!-- </fieldset> -->
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>
      </div>

    </div>
  </div>
</div>
</div>
	<div class="espacinho"></div>
<!-- RODAPÉ -->
<footer>
	<div class="col-12" id="rodape">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-3 col-sm-6" id="footer-l">
					<h2>Informações Gerais</h2>
					<p><i class="fas fa-globe-americas"></i> Av. Teresa Campanela, 169 <br>&nbsp;&nbsp;&nbsp; Boa Vista<br>&nbsp;&nbsp;&nbsp; São Caetano do Sul 
					<br class="espacinho-xs"><i class="fa fa-phone"></i> 11 3565.5167
					<br><i class="fab fa-whatsapp"></i> 11 97581.1767
					<br><i class="fa fa-envelope"></i> atendimento@grupoarzul.com.br 
					<br><i class="fa fa-clock"></i> das 8hrs até as 18hrs</p>
				</div>
				<div class="col-md-9 col-sm-6" id="footer-r">
					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14619.477791393338!2d-46.55562!3d-23.644846!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce4327e3ca3a93%3A0x1713c5c371ecf1ee!2sAv.+Teresa+Campanela%2C+169+-+Boa+Vista%2C+S%C3%A3o+Caetano+do+Sul+-+SP%2C+09561-210!5e0!3m2!1spt-BR!2sbr!4v1542905087787" width="100%" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</div>
	<div class="col-12" id="final-rodape">
		<div class="container final-baixo">
			<p> Grupo Arzul - <script>document.write(new Date().getFullYear());</script> - Todos os Direitos Reservados | Desenvolvido e Otimizado com <i class="far fa-heart"></i> por <a target="_blank" href="https://agenciasense.com.br">Agência Sense</a></p>
		</div>
	</div>
</footer>
<!-- JavaScript -->
<script type="text/javascript" src="./seo-js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<!-- Fim JavaScript -->

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-73906138-41"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-73906138-41');
</script>


</body>
</html>
