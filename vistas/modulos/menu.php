<aside class="main-sidebar">

	<section class="sidebar">

		<ul class="sidebar-menu">

			<li <?php if(!isset($_GET["ruta"]) || $_GET["ruta"] == "inicio") echo 'class="active"'; ?>>

				<a href="index.php?ruta=inicio">

					<i class="fa fa-home"></i>
					<span>Inicio</span>

				</a>

			</li>

			<li <?php if(isset($_GET["ruta"]) && $_GET["ruta"] == "usuarios") echo 'class="active"'; ?>>

				<a href="index.php?ruta=usuarios">

					<i class="fa fa-users"></i>
					<span>Usuarios</span>

				</a>

			</li>

			<li <?php if(isset($_GET["ruta"]) && $_GET["ruta"] == "categorias") echo 'class="active"'; ?>>

				<a href="index.php?ruta=categorias">

					<i class="fa fa-th"></i>
					<span>Categorías</span>

				</a>

			</li>

			<li <?php if(isset($_GET["ruta"]) && $_GET["ruta"] == "productos") echo 'class="active"'; ?>>

				<a href="index.php?ruta=productos">

					<i class="fa fa-product-hunt"></i>
					<span>Productos</span>

				</a>

			</li>

			<li <?php if(isset($_GET["ruta"]) && $_GET["ruta"] == "clientes") echo 'class="active"'; ?>>

				<a href="index.php?ruta=clientes">

					<i class="fa fa-users"></i>
					<span>Clientes</span>

				</a>

			</li>

			<li class="treeview <?php if(isset($_GET["ruta"]) && ($_GET["ruta"] == "ventas" || $_GET["ruta"] == "crear-venta" || $_GET["ruta"] == "reportes")) echo 'active'; ?>">

				<a href="#">

					<i class="fa fa-list-ul"></i>
					
					<span>Ventas</span>
					
					<span class="pull-right-container">
					
						<i class="fa fa-angle-left pull-right"></i>

					</span>

				</a>

				<ul class="treeview-menu">
					
					<li <?php if(isset($_GET["ruta"]) && $_GET["ruta"] == "ventas") echo 'class="active"'; ?>>
						
						<a href="index.php?ruta=ventas">
							
							<i class="fa fa-circle-o"></i>
							<span>Administrar ventas</span>

						</a>

					</li>

					<li <?php if(isset($_GET["ruta"]) && $_GET["ruta"] == "crear-venta") echo 'class="active"'; ?>>
						
						<a href="index.php?ruta=crear-venta">
							
							<i class="fa fa-circle-o"></i>
							<span>Crear venta</span>

						</a>

					</li>
					
					<li <?php if(isset($_GET["ruta"]) && $_GET["ruta"] == "reportes") echo 'class="active"'; ?>>
						
						<a href="index.php?ruta=reportes">
							
							<i class="fa fa-circle-o"></i>
							<span>Reporte de ventas</span>

						</a>

					</li>

				</ul>

			</li>

		</ul>

	</section>

</aside>