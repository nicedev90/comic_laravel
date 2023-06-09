<nav class="hidden md:flex md:px-16 bg-primaryDark text-lg text-white tracking-wider font-irish">
	<div class="flex w-1/4 items-start">
		<a href=""><img src="{{ asset('images/logo.png') }}" alt="imagen logo" class="ml-4 w-16 h-16"></a>
	</div>

	<div class="hidden md:flex w-full items-center space-x-4 justify-end">
		<li class="list-none">
			<a class="p-3 is-active" href=""> INICIO</a>
		</li>

		<li class="list-none">
			<a class="p-3 is-inactive" href=""> CAPITULOS</a>
		</li>

		<li class="list-none ">
			<a class="p-3 is-inactive" href=""> AUTOR</a>
		</li>

		<li class="list-none">
			<a class="p-3 is-inactive" href="' ?>">
				<i class="fa-solid fa-user fa-1x"></i> INICIAR SESION
			</a>
		</li>
	</div>
</nav>

<!-- BEGIN MOBILE MENU -->
<nav id="navbar-mobile" class="flex justify-around bg-primaryDark md:hidden">
  <div id="logo-mobile" class="w-1/4">
		<a href=""><img src="{{ asset('images/logo.png') }}" alt="imagen logo" class="w-12 h-12"></a>
	</div>

	<div class="bg-cta rounded-t-xl text-white hover:text-dark">
		<a href="" class="flex p-2 space-x-2 items-center justify-center">
			<i class="fa-solid fa-user fa-1x text-xl"></i> 
			<span class="text-xl">Iniciar Sesion </span>
		</a>
	</div>

  <!-- mobile hamburger button -->
  <button id="mobile-btn" class="mx-3 block hamburger focus:outline-none">
    <span class="hamburger-top bg-cta"></span>
    <span class="hamburger-middle bg-cta"></span>
    <span class="hamburger-bottom bg-cta"></span>
  </button>
</nav>

<!-- mobile hamburger menu -->
<div class="md:hidden">
  <div id="mobile-menu" class="hidden bg-primary divide-y flex-col items-center text-xl text-white left-0 right-0 tracking-wider font-irish">
  	<a href="" class="w-full text-center py-4 hover:bg-ctaLight hover:text-dark">Inicio</a>
  	<a href="" class="w-full text-center py-4 hover:bg-ctaLight hover:text-dark">Capitulos</a>
    <a href="" class="w-full text-center py-4 hover:bg-ctaLight hover:text-dark">Autor</a>
  </div>
</div>
<!-- END MOBILE MENU -->

<!-- banner encabezado -->
<div class="flex relative">
	<img src="{{ asset('images/banner.png') }}" alt="imagen logo" class="md:h-44 object-cover w-screen">
	<div class="w-1/3 md:w-1/4 absolute m-auto left-0 right-0 bottom-1">
		<img src="{{ asset('images/logo-letra.png') }}" alt="imagen logo" class="">
	</div>
</div>