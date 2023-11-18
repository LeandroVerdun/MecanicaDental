<div class="all-user-container">
    <div class="space"></div>
    <div class="container pb-6 pt-6 user-new">


    <div class="jaw user-jaw"></div>

    <div class="form-rest mb-6 mt-6 notificacion"></div>

    <form action="./php/save_user.php" method="POST" class="ajaxForm" autocomplete="off" id="user-form">
        <div class="columns">
            <div class="column">
                <div class="control input-user">
                    <label>Nombre</label>
                    <input class="input new" type="text" name="user_name" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{3,40}" maxlength="40" required >
                </div>
            </div>
            <div class="column">
                <div class="control input-user">
                    <label>Apellidos</label>
                    <input class="input new" type="text" name="user_lastname" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{3,40}" maxlength="40" required >
                </div>
            </div>
        </div>
        <div class="columns">
            <div class="column">
                <div class="control input-user">
                    <label>Usuario</label>
                    <input class="input new" type="text" name="user_user" pattern="[a-zA-Z0-9]{4,20}" maxlength="20" required >
                </div>
            </div>
            <div class="column">
                <div class="control input-user">
                    <label>Email</label>
                    <input class="input new" type="email" name="user_email" maxlength="70" >
                </div>
            </div>
        </div>
        <div class="columns">
            <div class="column">
                <div class="control input-user">
                    <label>Clave</label>
                    <input class="input new" type="password" name="user_key_1" pattern="[a-zA-Z0-9]{7,100}" maxlength="100" required >
                </div>
            </div>
            <div class="column">
                <div class="control input-user">
                    <label>Repetir clave</label>
                    <input class="input new" type="password" name="user_key_2" pattern="[a-zA-Z0-9]{7,100}" maxlength="100" required >
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
