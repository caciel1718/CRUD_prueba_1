<form action="{{ route('user.create') }}" method="post">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="name" name="name" required>
    </div>
    <div class="mb-3">
        <label for="lastname" class="form-label">Apellido</label>
        <input type="text" class="form-control" id="lastname" name="lastname" required>
    </div>
    <div class="mb-3">
        <label for="edad" class="form-label">Edad</label>
        <input type="number" class="form-control" id="edad" name="edad" required>
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Correo</label>
        <input type="text" class="form-control" id="email" name="email" required>
    </div>

    <div class="mb-3">
        <label for="edad" class="form-label">Contraseña</label>
        <input type="password" class="form-control" id="password" name="password" required>
    </div>
    <button type="submit" class="btn btn-primary">Guardar</button>
</form>
