<h1 class="text-center mt-5">Bienvenue</h1>
<p class="text-center mt-5">
    <?php if (isset($_SESSION['token'])  && isset($_GET['token']) && isset($user->token) && $_SESSION['token'] === $user->token && $user->token === $_GET['token']) { ?>
        <?= isset($_SESSION['email']) ? $_SESSION['email'] : '' ?>
    <?php } else {
        header('location:index.php?logout');
    } ?>
</p>