<table class="bg-[#FDF9E8] rounded-xl text-neutral-600 overflow-hidden text-center">
    <thead>
    <tr class="[&>td]:p-2">
        <td>Lp.</td>
        <td>Body</td>
        <td>Post ID</td>
        <td>User ID</td>
    </tr>
    </thead>
    <tbody>
    <?php $index = 1; ?>
    <?php foreach ($rows as $row) : ?>
        <tr class="[&>td]:p-2 <?= $index % 2 === 0 ? 'bg-[#FDF9E8]' : 'bg-main' ?>">
            <td><?= $index ?></td>
            <td><?= $comment['body'] ?></td>
            <td><?= $comment['post_id'] ?></td>
            <td><?= $comment['user_id'] ?></td>
        </tr>
        <?php $index++; ?>
    <?php endforeach; ?>
    </tbody>
</table>