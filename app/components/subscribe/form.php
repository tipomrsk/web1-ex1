<form>
    <div class="mb-12" id="subscribe-form">
        <label for="name" class="form-label">Nome</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Jon Doe">

        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">

        <label for="address" class="form-label">Endereço</label>
        <input type="text" class="form-control" id="address" name="address">

        <label for="phone" class="form-label">Telefone</label>
        <input type="text" class="form-control" id="phone" name="phone" placeholder="(00)00000-0000">
        
        <label for="birth-date" class="form-label">Data de Nascimento</label>
        <input type="date" class="form-control" id="birth-date" name="birth-date">
        
        <label for="photo" class="form-label">Foto</label>
        <input type="file" class="form-control" id="photo" name="photo">

        <div class="d-grid gap-2">
            <br>
            <button type="submit" class="btn btn-primary" id="btnSend">Enviar</button>
        </div>
    </div>
</form>