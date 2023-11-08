<div class="main-container">

    <form class="box login" action="" method="POST" autocomplete="off">
        

        <div class="title-and-image">
            <div class="jaw"></div>
            <div class="div-conatiner">
                <h5 id="title-login">Inventario de Mecanica Dental</h5>
    
		        <div class="field">
			        <label class="label">Usuario</label>
			        <div class="control">
			            <input class="input" type="text" name="login_usuario" pattern="[a-zA-Z0-9]{4,20}" maxlength="20" required >
			        </div>
		        </div>

                <div class="field">
                    <label class="label">Contraseña</label>
                    <div class="control">
                        <input class="input" type="password" name="login_clave" pattern="[a-zA-Z0-9$@.-]{7,100}" maxlength="100" required >
                    </div>
                </div>

                <div class="button-container">
                    <p class="has-text-centered mb-4 mt-3">
                        <button type="submit" class="button is-info is-rounded">Iniciar sesion</button>
                    </p> 
                    <p class="has-text-centered mb-4 mt-3">
                        <button type="submit" class="button is-primary is-rounded">Crear usuario</button>
                    </p>   
                </div>   
            </div>
           
        </div>
		 
	</form>

</div>