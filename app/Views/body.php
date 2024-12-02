<main class="container mt-3 mb-3 h-100">
    <div class="card">
        <div class="card-header">
            Tasks
        </div>
        <div class="card-body">
            Hier steht noch nichts...
        </div>
    </div>

    <div class="card mt-4">
        <div class="card-header">
            Spalten
        </div>
        <div class="card-body p-3">
            <button type="button" class="btn btn-primary mb-3">Erstellen</button>
            <table class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Board</th>
                    <th scope="col">Sortid</th>
                    <th scope="col">Spalte</th>
                    <th scope="col">Spaltenbeschreibung</th>
                    <th scope="col">Bearbeiten</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Allgemeine Todos</td>
                    <td>100</td>
                    <td>Zu besprechen</td>
                    <td>Noch zu besprechende Todos</td>
                    <td> <i class="fa-solid fa-trash-can ms-1 me-2" style="color: #361bbb;"></i> <i class="fa-solid fa-pen" style="color: #361bbb;"></i> </td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Allgemeine Todos</td>
                    <td>200</td>
                    <td>In Bearbeitung</td>
                    <td>Todos, die aktuell bearbeitet werden</td>
                    <td> <i class="fa-solid fa-trash-can ms-1 me-2" style="color: #361bbb;"></i> <i class="fa-solid fa-pen" style="color: #361bbb;"></i> </td>
                </tr>
                </tbody>
            </table>
        </div>

    </div>

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


    </div>
</main>