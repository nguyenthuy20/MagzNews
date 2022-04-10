<?php
if (Auth::checkAuth()){
    ?>
    <a href="<?php echo Route::name('admin.users')?>">
        <i class="fas fa-user"></i>
        <span>Quản lý tài khoản </span>
    </a>
    <?php
}
?>

