<nav id="sidebar">
	<div class="sidebar-header">
		<h3>Bootstrap Sidebar</h3>
	</div>

	<ul class="list-unstyled components">
		<p>Dummy Heading</p>
		<li>
			<a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Home</a>
			<ul class="collapse list-unstyled" id="homeSubmenu">
				<li>
					<a href="#">Home 1</a>
				</li>
				<li>
					<a href="#">Home 2</a>
				</li>
				<li>
					<a href="#">Home 3</a>
				</li>
			</ul>
		</li>
		<li>
			<a href="#">About</a>
		</li>
		<li>
			<a href="#productsSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Productos</a>
			<ul class="collapse list-unstyled" id="productsSubmenu">
				<li>
					<a href="{{route('products.index')}}">Todos</a>
				</li>
				<li>
					<a href="{{route('products.create')}}">Registrar</a>
				</li>
			</ul>
		</li>
		<li>
			<a href="#">Portfolio</a>
		</li>
		<li>
			<a href="#">Contact</a>
		</li>
	</ul>

	<ul class="list-unstyled CTAs">
		<li>
			<a href="https://bootstrapious.com/tutorial/files/sidebar.zip" class="download">Download source</a>
		</li>
		<li>
			<a href="https://bootstrapious.com/p/bootstrap-sidebar" class="article">Back to article</a>
		</li>
	</ul>
</nav>