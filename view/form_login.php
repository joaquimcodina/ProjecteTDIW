<div class="container">
    <div class="title">Iniciar Sessió</div>
    <div class="content">
        <form action="#">
            <div class="user-sign">
                <div class="input-box">
                    <span class="details">Correu</span>
                    <label>
                        <input type="email" name="correu" placeholder="Escriu el teu correu" required>
                    </label>

                    <span class="details">Contrasenya</span>
                    <label>
                        <input type="password" name="password" placeholder="Escriu la teva contrasenya" minlength="8" required>
                    </label>
                </div>
            </div>
            <div class="button">
                <input type="submit" name="login" value="Iniciar Sessió">
            </div>
        </form>
        <?php include_once __DIR__."/../controller/form_login.php"; ?>
    </div>
</div>