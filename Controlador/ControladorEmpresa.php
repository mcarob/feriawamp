<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/ProyectoFeria/AppFeria/Modelo/Entidades/Empresa.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/ProyectoFeria/AppFeria/Modelo/Daos/EmpresaDAO.php');

class ControladorEmpresa{

		private $empresas;

		public function darListaEmpresas()
		{
			$this->empresas = new EmpresaDAO();
			return $this->empresas->vistaEmpresas();
		}

		public function darBlob($cod_empresa){
			$this->empresas = new EmpresaDAO();
			return $this->empresas->darBlobxCodigo($cod_empresa);
		}

		public function darListaEmpresasInscritas()
		{
			$this->empresas = new EmpresaDAO();
			return $this->empresas->vistaEmpresasInscritas();
		}

		public function validarEmpresa($COD){
			$this->empresas = new EmpresaDAO();
			return $this->empresas->validar($COD);
		}

		public function actualizarEmpresa($codigo,$nombre,$telefono,$descripcion,$imagen){
			$empresa_DAO=new EmpresaDAO();
			$resultado_empresa=$empresa_DAO->editarEmpresa($codigo,$nombre,$telefono,$descripcion,$imagen);
			return $resultado_empresa;
			
		}
		public function actualizarEmpresaSinLogoYCamara($codigo,$nombre,$telefono,$descripcion){
			$empresa_DAO=new EmpresaDAO();
			$resultado_empresa=$empresa_DAO->editarEmpresaSinLogoYCamara($codigo,$nombre,$telefono,$descripcion);
			return $resultado_empresa;
		}

		public function actualizarEmpresaSoloCamara($codigo,$nombre,$telefono,$descripcion,$camara){
			$empresa_DAO=new EmpresaDAO();
			$resultado_empresa=$empresa_DAO->editarEmpresaConCamara($codigo,$nombre,$telefono,$descripcion,$camara);
			return $resultado_empresa;
		}
		

		public function actualizarEmpresaCamaraYLogo($codigo,$nombre,$telefono,$descripcion,$camara,$logo){
			$empresa_DAO=new EmpresaDAO();
			$resultado_empresa=$empresa_DAO->editarEmpresaConCamaraYLogo($codigo,$nombre,$telefono,$descripcion,$camara,$logo);
			return $resultado_empresa;
		}

		public function darBlobCamara($cod){
			$empresa_DAO=new EmpresaDAO();
			$resultado_empresa=$empresa_DAO->darBlobcc($cod);
			return $resultado_empresa;
		}

		public function editarNotificacion($cod_desde,$cod,$mensaje){
			$this->empresas = new EmpresaDAO();
			return $this->empresas->agregarNoti($cod_desde,$cod, $mensaje);
		}

		public function rechazar($cod){
		 	$this->empresas = new EmpresaDAO();
		 	return $this->empresas->rechazar($cod);
		}


		public function notificacion($cod){
			$this->empresas = new EmpresaDAO();
			return $this->empresas->darNotificacionxEmpresa($cod);
		}

		public function darEmpresaA(){
			$this->empresas = new EmpresaDAO();
			return $this->empresas->totalEmpresasV();
		}
		public function darEmpresaI(){
			$this->empresas = new EmpresaDAO();
			return $this->empresas->totalEmpresasSV();
		}
		public function darEmpresa(){
			$this->empresas = new EmpresaDAO();
			return $this->empresas->totalEmpresas();
		}
	
	}


    ?>