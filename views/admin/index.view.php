<?php require base_path('views/partials/head.php') ?>

<?php require base_path('views/partials/nav.php') ?>

<main class="w-full h-full flex flex-col justify-center items-center my-10 gap-5">

    <?php require base_path('views/admin/nav.php')?>

    <div class="bg-[#FDF9E8] rounded-xl text-neutral-600 text-center border-black border-2 overflow-hidden p-2">
        <table>
            <thead>
            <tr class="[&>td]:p-2">
                <td>Users count</td>
                <td>Threads count</td>
                <td>Comments count</td>
            </tr>
            </thead>
            <tbody>
            <tr class="[&>td]:p-2 bg-main">
                <td><?= $users['count'] ?></td>
                <td><?= $threads['count'] ?></td>
                <td><?= $comments['count'] ?></td>
            </tr>
            </tbody>
        </table>
    </div>

</main>

<?php require base_path('views/partials/footer.php') ?>
