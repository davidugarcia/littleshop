<div class="col-lg-4">
    <div class="texto">
        <h3 class="login">Loging</h3>
    </div>

    <form action="<?=base_url?>usuario/ingresar" method="POST" class="espacio">

        <div class="form-group">
            <div class="col-lg-12 mb-3">
            <label for="user">Correo</label>
            <input type="email" class="form-control is-valid" name="email" value="" required />
            </div>
        </div>

        <div class="form-group">
            <div class="col-lg-12">
            <label for="pass">Contraseña</label>
            <input type="password" class="form-control is-valid" name="pass" value="" required />
            </div>
        </div>

        <button type="submit" class="btn btn-primary espacio">Ingresar</button>

    </form>
    
</div>