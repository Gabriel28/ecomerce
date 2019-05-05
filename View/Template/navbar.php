<?php 
error_reporting(0);

session_start();?>
<nav>
	<!-- Header desktop -->
	<div class="container-menu-desktop">
		<!-- Topbar -->
		<div class="top-bar">
			<div class="content-topbar flex-sb-m h-full container">
				<div class="left-top-bar">
					Compre 3 games no valor de R$100,00 e o quarto é por nossa conta!
				</div>

				<div class="right-top-bar flex-w h-full">
					<?php 
						
						// Valido se o usuário está logado ou não
						if(!empty($_SESSION)) {
							echo 
							'<a href="#" class="flex-c-m trans-04 p-lr-25">
								Bem vindo(a)&nbsp
								<strong>'. 
									$_SESSION["nomeUsuario"] .
								'</strong>
							</a>
							<a href="#" class="flex-c-m p-lr-10 trans-04">
								Minha Conta
							</a>';
						}else {
							echo 
							"<a href='login.php' class='flex-c-m trans-04 p-lr-25'>
								Login
							</a>
							
							<a href='cadastro.php' class='flex-c-m trans-04 p-lr-25'>
								Cadastre-se
							</a>";
						} 
					?>
					

					<a href="https://www.infomoney.com.br/mercados/cambio" class="flex-c-m trans-04 p-lr-25">
						INFO CONVERSÃO USD  
					</a>

					<?php
						if(!empty($_SESSION)) {
							echo <<<LOGOUT
							<form id="logout" action="../Controller/loginController.php" method="POST" style="margin-left:-10px;">
								<a href="#" class="flex-c-m trans-04 p-lr-25" onclick="document.getElementById('logout').submit();">Logout</a>
								<input type="hidden" name="origem" class="form-control" value="deslogar"/>
							</form>
LOGOUT;
						}

					?>
				</div>
			</div>
		</div>

		<div class="wrap-menu-desktop" id="login-menu">
			<nav class="limiter-menu-desktop container">
				
				<!-- Logo desktop -->		
				<a href="index.php" class="logo">
					<img src="../public/images/icons/logo-01.png" alt="IMG-LOGO">
				</a>

				<!-- Menu desktop -->
				<div class="menu-desktop">
					<ul class="main-menu">
						<li class="active-menu">
							<a href="index.php">Home</a>
						</li>

						<li class="label1" data-label1="HOT">
							<a href="produtos.php"> Todos os Games</a>
						</li>
						<?php
							if(!empty($_SESSION)) {
								echo "
								<li>
									<a href='carrinho.php'>Ver Carrinho</a>
								</li>";
							}
						?>
						<li>
							<a href="contato.php">Contato</a>
						</li>
					</ul>
				</div>	

				<!-- Icon header -->
				<div class="wrap-icon-header flex-w flex-r-m">	
					<?php
						if(!empty($_SESSION)) {
							echo "
							<div class='icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti js-show-cart' data-notify='0'>
								<i class='zmdi zmdi-shopping-cart'></i>
							</div>";
						}
					?>	
				</div>
						<div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-modal-search">
					<i class="zmdi zmdi-search">
					</i>
				</div>
			</nav>
		</div>	
	</div>

	<!-- Header Mobile -->
	<div class="wrap-header-mobile">
		<!-- Logo para Mobile -->		
		<div class="logo-mobile">
			<a href="index.html"><img src="../public/images/icons/logo-01.png" alt="IMG-LOGO"></a>
		</div>

		<!-- Icon -->
		<div class="wrap-icon-header flex-w flex-r-m">	
				<?php
					if(!empty($_SESSION)) {
						echo "
						<div class='icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti js-show-cart' data-notify='0'>
							<i class='zmdi zmdi-shopping-cart'></i>
						</div>";
					}
				?>	
		</div>
		
	

		<!-- Botão de menu -->
		<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
			<span class="hamburger-box">
				<span class="hamburger-inner"></span>
			</span>
		</div>
	</div>


	<!-- Menu para Mobile -->
	<div class="menu-mobile">
		<ul class="topbar-mobile">
			<li>
				<div class="left-top-bar">
					Compre 3 games no valor de R$100,00 e o quarto é por nossa conta!
				</div>
			</li>

			<li>
				<div class="right-top-bar flex-w h-full">
				<?php 
						// Valido se o usuário está logado ou não
						if(!empty($_SESSION)) {
							echo 
							'<a href="#" class="flex-c-m trans-04 p-lr-25">
								Bem vindo(a)&nbsp
								<strong>'. 
									$_SESSION["nomeUsuario"] .
								'</strong>
							</a>
							<a href="#" class="flex-c-m p-lr-10 trans-04">
								Minha Conta
							</a>';
						}else {
							echo 
							"<a href='login.php' class='flex-c-m trans-04 p-lr-25'>
								Login
							</a>
							
							<a href='cadastro.php' class='flex-c-m trans-04 p-lr-25'>
								Cadastre-se
							</a>";
						} 
					?>

					
					<a href="https://www.infomoney.com.br/mercados/cambio" class="flex-c-m p-lr-10 trans-04">
						INFO CONVERSÃO USD
					</a>

					<?php
						if(!empty($_SESSION)) {
							echo <<<LOGOUT
							<form id="logout" action="../Controller/loginController.php" method="POST">
								
								<a href="#" class="flex-c-m trans-04 p-lr-25" onclick="document.getElementById('logout').submit();">Logout</a>
								<input type="hidden" name="origem" class="form-control" value="deslogar"/>
							</form>
LOGOUT;
						}

					?>
				</div>
			</li>
		</ul>

		<ul class="main-menu-m">
			<li>
				<a href="index.php">Home - BRAZIL GAMING WORLD </a>
				<span class="arrow-main-menu-m">
					<i class="fa fa-angle-right" aria-hidden="true"></i>
				</span>
			</li>

			<li>
				<a href="produtos.php" class="label1 rs1" data-label1="HOT">Todos os Games</a>
			</li>

			<?php
				if(!empty($_SESSION)) {
					echo "
					<li>
						<a href='carrinho.php'>Ver Carrinho</a>
					</li>";
				}
			?>

			<li>
				<a href="contato.php">Contato</a>
			</li>
		</ul>
	</div>

	<!-- Modal Busca -->
	<div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
		<div class="container-search-header">
			<button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
				<img src="../public/images/icons/icon-close2.png" alt="CLOSE">
			</button>

			<form class="wrap-search-header flex-w p-l-15">
				<button class="flex-c-m trans-04">
					<i class="zmdi zmdi-search"></i>
				</button>
				<input class="plh3" type="text" name="search" placeholder="O que busca?...">
			</form>
		</div>
	</div>
</nav>