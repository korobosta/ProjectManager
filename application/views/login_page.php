<br />
<form class="form-style-5" action="<?= base_url(); ?>login/doLogin" method="post">
    <h2>Login Page</h2>
    <hr />
    <?php if ($this->session->flashdata()) { ?>
        <div style="color: red" class="alert alert-warning">
            <?= $this->session->flashdata('msg'); ?>
            <?= $this->session->flashdata('message'); ?>
        </div>
    <?php } ?>
    <div class="form-group">
        <label for="email">Username:</label>
        <input type="text" name="username" required class="form-control" id="email">
    </div>
    <div class="form-group">
        <label for="pwd">Password:</label>
        <input type="password" name="password" required class="form-control" id="pwd">
    </div>
    <input type="submit" value="Login">
    
</form>
