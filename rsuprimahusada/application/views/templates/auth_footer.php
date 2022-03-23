<script src="<?= base_url('assets/vendor/jquery/jquery.min.js') ?>"></script>

<script>
    function togglePassword() {
        var password = document.getElementById("password");
        var togglePassword = document.getElementById("togglePassword");

        if (password.type === "password") {
            password.type = "text";
            password.autocomplete = "off";
            togglePassword.classList.toggle('fa-eye');
        } else {
            password.type = "password";
            togglePassword.classList.toggle('fa-eye-slash');
        }
    }
</script>

</body>

</html>