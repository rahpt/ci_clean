<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light ">
    <a class="navbar-brand" href="/">
        <img src="/assets/p4d_logo.png" width="30" height="30" class="d-inline-block align-top" alt="">P4D</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <?php foreach ($nav_list as $i => $nav_item): ?>
                <li class="nav-item<?= ($nav == $i ? ' active' : '') ?>">
                    <?= anchor($nav_item, $i, 'class="nav-link"') ?>
                </li>
            <?php endforeach ?>
        </ul>
    </div>
</nav>