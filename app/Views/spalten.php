<main class="container mt-3 mb-3">
<div class="card mt-4">
    <div class="card-header">
        Spalten
    </div>
    <div class="card-body p-3">
        <a href="<?= site_url('/spalten/formular') ?>"> <button type="button" class="btn btn-primary mb-3">Erstellen</button> </a>
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
</main>