<div class="container-login" id="container">
<div class="spinner">
            <div class="double-bounce1"></div>
            <div class="double-bounce2"></div>
    </div>
        
<div class="form-container sign-in-container">
    <form>
        <h1>SIGN IN</h1>
        <span>Masukan username dan password</span>
        <input type="text" id="user" name="user" placeholder="Username" autofocus required>
        <input type="password" id="pwd" name="pwd" placeholder="Password"required>
        <button type="submit" onclick="proses_login()" id="login">LOG IN</button>
    </form>
</div>
<div class="overlay-container">
    <div class="overlay">
        <div class="overlay-panel overlay-right">
            <h1>SIM-MITRA</h1>
            <div class="logo" alt="bps">
            <img src="<?= base_url(); ?>assets/sbadmin/img/logobpslogin.png">
            </div>
            <p>Badan Pusat Statistik</p>
        </div>
    </div>
</div>
</div>


<script src="<?= base_url(); ?>assets/js/jquery.min.js"></script>
<script src="<?= base_url(); ?>assets/js/login.js"></script>
<?php if($this->session->flashdata('Pesan')): ?>
<?= $this->session->flashdata('Pesan'); ?>
<?php else: ?>
<script>
$(document).ready(function() {

    let timerInterval
    Swal.fire({
        title: 'Memuat...',
        timer: 1000,
        onBeforeOpen: () => {
            Swal.showLoading()
        },
        onClose: () => {
            clearInterval(timerInterval)
        }
    }).then((result) => {
        $("#card").addClass("bounceIn");
    })
});
</script>
<?php endif; ?>