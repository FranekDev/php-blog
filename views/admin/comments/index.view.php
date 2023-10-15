<?php require base_path('views/partials/head.php') ?>

<?php require base_path('views/partials/nav.php') ?>

<main class="w-full h-full flex flex-col justify-start items-center my-10 gap-5">

    <?php require base_path('views/admin/nav.php') ?>

    <?php if (!empty($comments)) : ?>
        <div class="w-full flex justify-center items-center">
            <div class="flex justify-center items-center w-fit border-black border-2 overflow-hidden bg-[#FDF9E8] rounded-xl text-neutral-600">
                <table class="">
                    <thead>
                    <tr class="[&>td]:p-2">
                        <td>Lp.</td>
                        <td>ID</td>
                        <td>Body</td>
                        <td>Thread ID</td>
                        <td>User ID</td>
                        <td>Last edit</td>
                        <td></td>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $index = 1; ?>
                    <?php foreach ($comments as $comment) : ?>
                        <tr class="[&>td]:p-2 <?= $index % 2 === 0 ? 'bg-[#FDF9E8]' : 'bg-main' ?>">
                            <td><?= $index ?></td>
                            <td><?= $comment['id'] ?></td>
                            <td><?= $comment['body'] ?></td>
                            <td><?= $comment['post_id'] ?></td>
                            <td><?= $comment['user_id'] ?></td>
                            <td><?= formatDateString($comment['last_edit']) ?></td>
                            <td>
                                <form action="/admin/comments" method="post">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="hidden" name="id" value="<?= $comment['id'] ?>">
                                    <button class="bg-redBtn px-2 py-1.5 rounded text-xs hover:bg-[#FD8065] transition-all  w-8 h-8 flex justify-center items-center">
<!--                                        Delete-->
                                        <img
                                                src="/img/delete.svg"
                                                alt="Delete"
                                        >
                                    </button>
                                </form>
                            </td>
                        </tr>
                        <?php $index++; ?>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    <?php endif; ?>
</main>

<?php require base_path('views/partials/footer.php') ?>
