<main class="container-fluid mt-4 pb-3">
    <div class="card">
        <div class="card-header bg-white">
            <span class="h3">Tasks</span>
        </div>
        <div class="card-body">
            Lorem ipsum dolor sit amet
        </div>
    </div>
</main>

<div class="container-fluid mt-2 pb-3"<p><b> Kontaktformular </b></p>
    <div class="form-floating">
        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">Password</label>
    </div>
</div>

<!-- SCRIPTS -->

<script {csp-script-nonce}>
    document.getElementById("menuToggle").addEventListener('click', toggleMenu);
    function toggleMenu() {
        var menuItems = document.getElementsByClassName('menu-item');
        for (var i = 0; i < menuItems.length; i++) {
            var menuItem = menuItems[i];
            menuItem.classList.toggle("hidden");
        }
    }
</script>

<!-- -->

</body>
</html>
