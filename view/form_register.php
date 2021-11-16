<div class="container">
    <div class="title">Registrar-se</div>
    <div class="content">
        <form action="<?php include_once __DIR__."/../controller/form_register.php"; ?>" method="post">
        <div class="user-register">
                <div class="input-box">
                    <span class="details">Nom</span>
                    <label>
                        <input type="text" name="nom" placeholder="Escriu el teu nom" required>
                    </label>
                </div>
                <div class="input-box">
                    <span class="details">Correu</span>
                    <label>
                        <input type="email" name="correu" placeholder="Escriu el teu correu" required>
                    </label>
                </div>
                <div class="input-box">
                    <span class="details">Contrasenya</span>
                    <label>
                        <input type="password" name="password" placeholder="Escriu la teva contrasenya" minlength="8" required>
                    </label>
                </div>
                <div class="input-box">
                    <span class="details">Confirmar Contrasenya</span>
                    <label>
                        <input type="password" name="confirmpassword" placeholder="Confirma la teva contrasenya" minlength="8" required>
                    </label>
                </div>
                <div class="input-box">
                    <span class="details">Adreça</span>
                    <label>
                        <input type="text" name="address" placeholder="Escriu la teva adreça" maxlength="30" required>
                    </label>
                </div>
                <div class="input-box">
                    <span class="details">Població</span>
                    <label>
                        <input type="text" name="poblacio" placeholder="Escriu la teva població" maxlength="30" required>
                    </label>
                </div>
                <div class="input-box">
                    <span class="details">Codi Postal</span>
                    <label>
                        <input type="number" name="codipostal" placeholder="Escriu el teu codi postal" minlength="5" maxlength="5" required>
                    </label>
                </div>
            </div>
            <p>En crear un compte, accepteu els nostres <a href="#">Termes i privadesa</a>.</p>
            <div class="button">
                <input type="submit" name="register" value="Registrar-se">
            </div>
        </form>
    </div>
</div>