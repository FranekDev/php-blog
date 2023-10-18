<?php require base_path('views/partials/head.php') ?>

<?php require base_path('views/partials/nav.php') ?>

<main class="w-full h-full flex flex-col justify-center items-center my-10 gap-5">

    <?php require base_path('views/admin/nav.php') ?>

    <?php if (!empty($threads)) : ?>
        <div class="border-black border-2 overflow-hidden bg-[#FDF9E8] rounded-xl text-neutral-600 max-w-[800px]">
            <table class="">
                <thead>
                <tr class="[&>td]:p-2">
                    <td>Lp.</td>
                    <td>ID</td>
                    <td>Title</td>
                    <td>Description</td>
                    <td>User ID</td>
                    <td>Last edit</td>
                    <td></td>
                </tr>
                </thead>
                <tbody>
                <?php $index = 1; ?>
                <?php foreach ($threads as $thread) : ?>
                    <tr class="[&>td]:p-2 <?= $index % 2 === 0 ? 'bg-[#FDF9E8]' : 'bg-main' ?>">
                        <td><?= $index ?></td>
                        <td><?= $thread['id'] ?></td>
                        <td><?= $thread['title'] ?></td>
                        <td><?= $thread['description'] ?></td>
                        <td><?= $thread['user_id'] ?></td>
                        <td><?= formatDateString($thread['last_edit']) ?></td>
                        <td>
                            <form
                                    action="/admin/threads"
                                    method="post"
                            >
                                <input
                                        type="hidden"
                                        name="_method"
                                        value="DELETE"
                                >
                                <input
                                        type="hidden"
                                        name="id"
                                        value="<?= $thread['id'] ?>"
                                >
                                <button class="bg-redBtn px-2 py-1.5 rounded text-xs hover:bg-[#FD8065] transition-all w-8 h-8 flex justify-center items-center">
                                    <!--                                    Delete-->
                                    <img
                                            src="/img/delete.svg"
                                            alt="Delete"
                                            class=""
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
    <?php endif; ?>
</main>

<?php require base_path('views/partials/footer.php') ?>
