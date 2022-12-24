<!-- Button trigger modal -->
<button type="button" class="btn btn-success mt-3" data-bs-toggle="modal" data-bs-target="#update-pwd">
    Modifier mot de passe
</button>

<!-- Modal -->
<div class="modal fade" id="update-pwd" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modifier mot de passe</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('profil.updatePassword') }}" method="post">
                @csrf
                <div class="modal-body">

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Ancien mot de passe:</label>
                        <input type="password" class="form-control" name="old_password" id="exampleFormControlInput1"
                            placeholder="Mot de passe">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nouveau mot de passe:</label>
                        <input type="password" class="form-control" name="password" id="exampleFormControlInput1"
                            placeholder="Mot de passe">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Cofirmer nouveau mot de passe:</label>
                        <input type="password" class="form-control" name="confirm_password"
                            id="exampleFormControlInput1" placeholder="Mot de passe">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                </div>
            </form>
        </div>
    </div>
</div>
