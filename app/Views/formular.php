<main class="container mt-3 mb-3">
<div class="card mt-4">
    <div class="card-header">
        Spalte erstellen
    </div>
    <div class="card-body">
        <div class="form-floating mb-3">
            <input type="text" class="form-control" placeholder="Example input">
            <label for="floatingInput">Spaltenbezeichnung</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" placeholder="Example input">
            <label for="floatingInput">Spaltenbeschreibung</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" placeholder="Example input">
            <label for="floatingInput">Sortid</label>
        </div>
        <div class="form-floating">
            <select class="form-select" id="boardSelect" aria-label="Board auswählen">
                <option selected>Allgemeine Todos</option>
                <option value="1">Board 1</option>
                <option value="2">Board 2</option>
                <option value="3">Board 3</option>
            </select>
            <label for="boardSelect">Board auswählen</label>
        </div>

        <button type="button" class="btn btn-primary mt-3 me-1">Speichern</button>
        <button type="button" class="btn btn-secondary mt-3 ">Abbrechen</button>

    </div>
</main>