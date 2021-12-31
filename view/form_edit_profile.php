<div class="container">
    <div class="title">Editar Perfil</div>
    <div class="content">
        <form action="<?php include_once __DIR__."/../index.php?action=editar-perfil"; ?>" method="post" enctype="multipart/form-data">
            <div class="user-register">
                <div class="input-box">
                    <span class="details">Nom</span>
                    <label>
                        <input type="text" name="nom" placeholder="Escriu el teu nom" value="<?php echo $_SESSION['nom_usuari'] ?>" required>
                    </label>
                </div>
                <div class="input-box">
                    <span class="details">Correu</span>
                    <label>
                        <input type="email" name="correu" placeholder="Escriu el teu correu" value="<?php echo $_SESSION['correu'] ?>" required>
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
                        <input type="text" name="address" placeholder="Escriu la teva adreça" maxlength="30" value="<?php echo $_SESSION['adreça'] ?>" required>
                    </label>
                </div>
                <div class="input-box">
                    <span class="details">Població</span>
                    <label>
                        <input type="text" name="poblacio" placeholder="Escriu la teva població" maxlength="30" value="<?php echo $_SESSION['poblacio'] ?>" required>
                    </label>
                </div>
                <div class="input-box">
                    <span class="details">Codi Postal</span>
                    <label>
                        <input type="number" name="codipostal" placeholder="Escriu el teu codi postal" minlength="5" maxlength="5" value="<?php echo $_SESSION['codi_postal'] ?>" required>
                    </label>
                </div>
                <div class="input-box">
                    <span class="details">Foto</span>
                    <label>
                        <input type="file" name="profile_image" />
                    </label>
                </div>
            </div>
            <div class="button">
                <input type="submit" name="register" value="Desar canvis">
            </div>
        </form>
    </div>
</div>

<?php if(isset($alert)) {?>
    <script>alertes('<?php echo $alert ?>');</script>
<?php } unset($alert);?>