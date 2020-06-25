		<div class="span12">
				<div class="header">
					<div class="pull-left" style="background-color: #025eb1;height:188px">
					<img class="stilogo" src="image/ceb.jpg" width="1170" height="175" min-width="800"><br>
					</div>

					<style>
						.home-div{border:3px solid #000559; background-color: #000559; margin-top: -30px; height: 180px }
						.home{position:absolute;background-color: #025eb1;width:100px;height:30px;padding-top:4px ;text-align: center;margin: 150px 0px 0px 200px;border-right: 5px double white;border-left:5px double white }
						.home:hover{background-color: blue;}

						.log-div{border:3px solid #000559; background-color: #000559; height: 0px }
						.log{position:absolute;background-color: #025eb1;width:100px;height:30px;padding-top:4px ;text-align: center;margin: -36px 0px 0px 400px;border-right: 5px double white;border-left:5px double white }
						.log:hover{background-color: blue;}

						.about-div{border:3px solid #000559; background-color: #000559; height: 0px }
						.about{position:absolute;background-color: #025eb1;width:100px;height:30px;padding-top:4px ;text-align: center;margin: -42px 0px 0px 600px;border-right: 5px double white;border-left:5px double white }
						.about:hover{background-color: blue;}

						.dev-div{border:3px solid #000559; background-color: #000559; height: 0px }
						.dev{position:absolute;background-color: #025eb1;width:150px;height:30px;padding-top:4px ;text-align: center;margin: -48px 0px 0px 800px;border-right: 5px double white;border-left:5px double white }
						.dev:hover{background-color: blue;}

						
						

					</style>
				<div class="home-div">
								<div class="home">	
								<a  rel="tooltip"  data-placement="center" title="Home" id="home"   href="index.php"><span  style="color:white;font-size: 20px"><i class="icon-home icon-large"></i>&nbsp;Casa</span></a>
								</div>
				</div>
				
				<div class="log-div">
								<div class="log">	
								<a rel="tooltip"  data-placement="bottom" title="Click Here to Login" id="login" href="#student"  data-toggle="modal"><span  style="color:white;font-size: 20px"><i class="icon-signin icon-large"></i>&nbsp;Logear</span></a> 
								</div>
				</div>
				
				
					<div class="about-div">
								<div class="about">	
								<a rel="tooltip"  data-placement="bottom" title="About Information" id="signup" href="about.php"><span  style="color:white;font-size: 20px"><i class="icon-home icon-large"></i>&nbsp;Acerca</strong></span></a> 
								</div>
				</div>

				<div class="dev-div">
								<div class="dev">	
								<a rel="tooltip"  data-placement="bottom" title="Developers Information" id="signup" href="developers.php"><span  style="color:white;font-size: 20px"><i class="icon-home icon-large"></i>&nbsp;Desarrollado</strong></span></a> 
								</div>
				</div>

				
				
				</div>
					<div class="alert alert-success"><Strong>¡Aviso!</strong>&nbsp;Bienvenido a la pagina del CBTIS22
							<div class="pull-right">
								<i class="icon-calendar icon-large"></i>
								<?php
								$Today = date('y:m:d');
								$new = date('l, F d, Y', strtotime($Today));
								echo $new;
								?>
							</div>
					</div>
				</div>
				<div id="student" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-header"><div class="alert alert-info">Ingrese los detalles requeridos a continuación.
				</div></div>
				<div class="modal-body">
			<form class="form-horizontal" method="post" action="login.php">

				<div class="control-group">
				<label class="control-label" for="inputEmail">Tipo de usuario</label>
				<div class="controls">
				<select name="user_type" required>
				<option>Estudiante</option>
                <option>Administrador</option>
                 <option>Instructor</option>
                  <option>Oficial BSIT</option>
                   <option>Oficial de BSBA</option>
                    <option>Oficial de BSHM</option>
                     <option>Oficial de BSOA</option>
              </select>
          </div>
      </div>
				<div class="control-group">
					<label class="control-label" for="inputEmail">Nombre de Usuario</label>
					<div class="controls">
					<input type="text" id="inputEmail" name="username" placeholder="username" required>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="inputPassword">Contraseña</label>
					<div class="controls">
					<input type="password" id="inputPassword" name="password" placeholder="Password">
				</div>
				</div>
				<div class="control-group">
					<div class="controls">
					<button type="submit" name="login" class="btn btn-success"><i class="icon-signin icon-large"></i>&nbsp;Login</button>
				</div>
				</div>
			</form>
		</div>
		<div class="modal-footer">
			<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Cerrar</button>
		</div>
    </div>