<div class="all-user-container">
    <div class="space"></div>
    <div class="container pb-6 pt-6 user-new">


    <div class="jaw user-jaw"></div>

    <div class="form-rest mb-6 mt-6"></div>

    <form action="" method="" autocomplete="off" id="user-form">
        <div class="columns">
            <div class="column">
                <div class="control input-user">
                    <label>Nombre</label>
                    <input class="input" type="text" name="usuario_nombre" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{3,40}" maxlength="40" required >
                </div>
            </div>
            <div class="column">
                <div class="control input-user">
                    <label>Apellidos</label>
                    <input class="input" type="text" name="usuario_apellido" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{3,40}" maxlength="40" required >
                </div>
            </div>
        </div>
        <div class="columns">
            <div class="column">
                <div class="control input-user">
                    <label>Usuario</label>
                    <input class="input" type="text" name="usuario_usuario" pattern="[a-zA-Z0-9]{4,20}" maxlength="20" required >
                </div>
            </div>
            <div class="column">
                <div class="control input-user">
                    <label>Email</label>
                    <input class="input" type="email" name="usuario_email" maxlength="70" >
                </div>
            </div>
        </div>
        <div class="columns">
            <div class="column">
                <div class="control input-user">
                    <label>Clave</label>
                    <input class="input" type="password" name="usuario_clave_1" pattern="[a-zA-Z0-9$@.-]{7,100}" maxlength="100" required >
                </div>
            </div>
            <div class="column">
                <div class="control input-user">
                    <label>Repetir clave</label>
                    <input class="input" type="password" name="usuario_clave_2" pattern="[a-zA-Z0-9$@.-]{7,100}" maxlength="100" required >
                </div>
            </div>
        </div>
        <p class="has-text-centered">
            <button type="submit" class="button is-primary is-rounded">Guardar</button>
            <a class="button is-link is-rounded" href="index.php?vista=login">Login</a>
        </p>
    </form>
    </div>
</div>
