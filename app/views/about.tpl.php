<?php
require_once 'incs/header.php' ?>

    <main class="main p-3 mb-2 bg-secondary-subtle text-dark">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <?= $post ?>
                </div>
                <div class="col-md-4">
                    <h3>Resent Post</h3>
                    <ul class="list-group">
                        <?php foreach ($recent_posts as $recent_post): ?>
                            <li class="list-group-item"><a href="post/<?=$recent_post['slug']?>"><?=$recent_post['title']?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    </main>

<?php
require_once 'incs/footer.php' ?>