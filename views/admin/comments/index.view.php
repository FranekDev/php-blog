<?php require base_path('views/partials/head.php') ?>

<?php require base_path('views/partials/nav.php') ?>

<main class="w-full h-full flex flex-col justify-center items-center my-10 gap-5">

    <?php require base_path('views/admin/nav.php') ?>

    <?php if (!empty($comments)) : ?>
        <div class="border-black border-2 overflow-hidden bg-[#FDF9E8] rounded-xl text-neutral-600">
            <table class="">
                <thead>
                <tr class="[&>td]:p-2">
                    <td>Lp.</td>
                    <td>Body</td>
                    <td>Post ID</td>
                    <td>User ID</td>
                    <td>Last edit</td>
                </tr>
                </thead>
                <tbody>
                <?php $index = 1; ?>
                <?php foreach ($comments as $comment) : ?>
                    <tr class="[&>td]:p-2 <?= $index % 2 === 0 ? 'bg-[#FDF9E8]' : 'bg-main' ?>">
                        <td><?= $index ?></td>
                        <td><?= $comment['body'] ?></td>
                        <td><?= $comment['post_id'] ?></td>
                        <td><?= $comment['user_id'] ?></td>
                        <td><?= formatDateString($comment['last_edit']) ?></td>
                    </tr>
                    <?php $index++; ?>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    <?php endif; ?>
</main>

<?php require base_path('views/partials/footer.php') ?>
