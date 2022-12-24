<!-- Button trigger modal -->
<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#update-contact">
    Modifier
</button>

<!-- Modal -->
<div class="modal fade" id="update-contact" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modifier contact</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('contact.update') }}" method="post">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Tel:</label>
                        <input type="tel" class="form-control" name="tel" id="exampleFormControlInput1"
                            placeholder="telephone" value="{{ $contact->tel }}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email:</label>
                        <input type="email" class="form-control" name="email" id="exampleFormControlInput1"
                            placeholder="Email" value="{{ $contact->email }}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Adresse:</label>
                        <input type="text" class="form-control" name="adresse" id="exampleFormControlInput1"
                            placeholder="adresse" value="{{ $contact->adresse }}">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                </div>
            </form>
        </div>
    </div>
</div>
