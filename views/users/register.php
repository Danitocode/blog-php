<h1>Registrarse</h1>


    <form action="<?=base_url?>UserController/save" method="POST">
	<label for="name">Nombre</label>
	<input type="text" name="name">
	<label for="surname">Apellidos</label>
	<input type="text" name="surname">
	<label for="email">Email</label>
	<input type="text" name="email">
	<label for="password">Contraseña</label>
	<input type="text" name="password">
	<input type="submit" name="Registrarse">
    </form>