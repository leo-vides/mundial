<?php
  
	include'../config/conexion.php';
  
	class Listar extends conexion{
		public $consulta;// asi declaramos atributos (variables y atributos es lo mismo) 
		public $filas;
		public function MostrarDatos(){//function es metodo
			$this->consulta=$this->con->query("SELECT * FROM usuarios ORDER BY usuario ASC");//$this->consulta es para llamar a la variable consulta- con query es para hacer consulta mysql quiere deckr q se va a hacer una consuta de una base da datos
			while ($this->filas=$this->consulta->fetch_array()) {//fecth_array es para ordernar los datos
				?>
				
						<tr>
              <td><?php echo $this->filas['usuario'];?></td>
              <td><?php echo $this->filas['password'];?></td>
							<td><?php echo $this->filas['privilegio'];?></td>
 <?php 
      
      }
    }
    
  }
       	class datos extends conexion{
		public $idusuario;
		public $consulta;
		public $mostrardatos;
		public function mostrar($id){
			$this->idusuario = $id;
			$this->consulta = $this->con->query("SELECT * FROM usuarios WHERE idusuario='$this->idusuario'");
			if ($this->mostrardatos = $this->consulta->fetch_array()) {
				?>
				<form method="Post" action="modificar.php" class="consulta_form"> <!--//el post envia los datos de forma ocultatodos los datos que  se carguen se estaran de forma oculta  el get se visualizan en la barra de navegacion y puede enviar la cantidad de caracteres que yo quiera el get me limita-->

               
              <div class="form-group">
                <label for="dni">Usuario</label>
                <input type="text" id="usuario" class="form-control" name="usuario" value="<?php echo $this->mostrardatos['usuario'];?>"required="required">
              </div>
              <div class="form-group">
                <label for="dni">Contraseña</label>
                <input type="text" id="password" class="form-control" name="password" value="<?php echo $this->mostrardatos['password'];?>"required="required">
              </div>
 							<div class="form-group">
                <label for="privilegio">Privilegio</label>
                <input type="text" id="privilegio" class="form-control" name="privilegio" value="<?php echo $this->mostrardatos['privilegio'];?>"required="required">
              </div>
            

              <div class="form-group">
                <button class="btn btn-success" >Modificar datos</button>
              </div>
      
            </form>
				
			}
			
		}
				
	}	
	
?>

