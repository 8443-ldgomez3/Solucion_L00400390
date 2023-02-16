<?php
abstract class figura
{
	private $tipo;
	private $a; //area
	private $p; //perimetro

	public static function get_form()
	{
		$html = '
		<header class="bg-gradient-dark">
		<div class="page-header min-vh-75" style="background-image: url();">
			<span class="mask bg-gradient-dark opacity-6"></span>
			<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8 text-center mx-auto my-auto">
				<h1 class="text-white">UNIVERSIDAD DE LAS FUERZAS ARMADAS - ESPE</h1>
				<p class="lead mb-4 text-white opacity-8">TRABAJO AUTONOMO</p>
				<p class="lead mb-4 text-white opacity-8">NOMBRE: Gómez Rosero Luis Daniel</p>
				<p class="lead mb-4 text-white opacity-8">NRC: 8443</p>
				</div>
			</div>
			</div>
		</div>
		</header>

		<div class="page-header align-items-start min-vh-100" loading="lazy">
		<div class="container my-auto">
			<div class="row">
			<div class="col-lg-4 col-md-8 col-12 mx-auto">
				<div class="card z-index-0 fadeIn3 fadeInBottom">
				<div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
					<div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
					<h4 class="text-white font-weight-bolder text-center mt-2 mb-0">INGRESO DATOS DE LA FIGURA</h4>
					</div>
				</div>

				<div class="card-body">

					<form role="form" class="text-start" name="figuras" method="POST" action="">
					<div class="input-group input-group-outline my-3">
						
						<p class="lead mb-4 text-white opacity-8">Tipo: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
						<select id = "tipo" OnChange = "llamar_figura(this);">
						<option value="sel">Seleccione...</option>
						<option value="cuadrado">Cuadrado</option>
						<option value="rectangulo">Rectángulo</option>
						<option value="triangulo">Triángulo</option>
						</select>

					</div>

					<div class="input-group input-group-outline mb-3">

						<p class="lead mb-4 text-white opacity-8">Lado 1: &nbsp;</p>
						<label class="form-label"></label>
						<input type="text" name="lado_1" id = "lado_1" size="4" class="form-control" disabled>

					</div>
					<div class="input-group input-group-outline mb-3">

						<p class="lead mb-4 text-white opacity-8">Lado 2: &nbsp;</p>
						<label class="form-label"></label>
						<input class="form-control" type="text" name="lado_2" id = "lado_2" size="4" disabled>

					</div>
					<div class="input-group input-group-outline mb-3">

						<p class="lead mb-4 text-white opacity-8">Lado 3: &nbsp;</p>
						<label class="form-label"></label>
						<input class="form-control" type="text" name="lado_3" id = "lado_3" size="4" disabled>

					</div>
					<div class="text-center">
						<button type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2">CALCULAR</button>

					</div>

					</form>
				</div>
				</div>
			</div>
			</div>
		</div>
		</div>

		<footer class="footer pt-5 mt-5">
		<div class="container">
			<div class=" row">

				<div>
				<h1 class="text-black">UNIVERSIDAD DE LAS FUERZAS ARMADAS - ESPE</h1>
				<p class="lead mb-4 text-black opacity-8">TRABAJO AUTONOMO</p>
				<p class="lead mb-4 text-black opacity-8">NOMBRE: Gómez Rosero Luis Daniel</p>
				<p class="lead mb-4 text-black opacity-8">NRC: 8443</p>
				</div>

			</div>

			</di>
		</div>
		</footer>
		
		<p id="demo"></p>';
		return $html;
	}

// METODOS ABSTRACTOS	
public abstract function GetArea();


public abstract function GetPerimetro();


public abstract function GetTipo();
}
?>