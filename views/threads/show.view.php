<?php require base_path('views/partials/head.php') ?>

<?php require base_path('views/partials/nav.php') ?>

<main class="flex flex-col justify-center items-center w-full h-full mt-10">
    <div class="flex flex-col mb-auto  gap-5">
        <div class="bg-[#FDF9E8] w-[1000px] h-auto rounded-[15px] flex flex-col justify-center items-center gap-4 p-4 border-4 border-black">
            <div class="flex flex-col justify-center items-start gap-2 w-full">
                <div class="flex justify-between w-full">
                    <div class="flex justify-center items-center gap-4">

                        <div class="rounded-full w-10 h-10 bg-button">

                        </div>
                        <div>
                            <p><?= $thread['name'] ?></p>
                        </div>
                    </div>
                    <div>
                        <?php if ($thread['email'] === $_SESSION['user']['email']) : ?>
                            <a
                                    href="/thread/edit?id=<?= $thread['id'] ?>"
                                    class="<?= getUserColor($index) ?> border-2 border-black rounded-xl px-4 py-1.5 shadow-buttonShadow m-2 w-fit"
                            >Edit</a>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="border-y-green-700 space-y-3">
                    <a href="/thread?id=<?= $thread['id'] ?>">
                        <div class="text-xl font-roboto italic"><?= htmlspecialchars($thread['title']) ?></div>
                    </a>
                    <?php if (isset($thread['description'])) : ?>
                        <div class="font-roboto">
                            <p>
                                <?= nl2br(htmlspecialchars($thread['description'])) ?>
                            </p>
                        </div>
                    <?php endif; ?>
                </div>

                <div class="flex w-full justify-end">
                    <div class="text-secondary"><?= formatDateString($thread['last_edit']) ?></div>
                </div>
            </div>
            <div class="w-full h-0.5 bg-neutral-50 rounded"></div>
        </div>

        <div>
            <?php foreach ($comments as $comment) : ?>
            <p><?= $comment['body'] ?></p>
            <?php endforeach; ?>
        </div>
    </div>

    <div class="fixed bottom-0 mb-10">
        <div class="w-[1000px] border-2 border-black rounded-xl bg-[#FDF9E8] shadow-buttonShadow">
            <form
                    action=""
                    class="flex justify-between items-center h-16 bg-[#FDF9E8] rounded-[15px] p-4"
                    method="post"
            >
                <input type="hidden" name="post_id" value="<?= $thread['id'] ?>">
                <input type="hidden" name="user_id" value="<?= $thread['user_id'] ?>">
                <label>
                    <input
                            type="text"
                            placeholder="Add a new comment"
                            class="bg-transparent w-[600px] outline-none"
                            name="comment"
                    >
                </label>
                <div class="flex justify-center items-center bg-button border-[3px] border-black rounded-xl w-[45px] h-[45px]">
                    <button>
                        <img
                                src="./img/plus.svg"
                                alt="Add"
                                class="w-[20px] h-[20px]"
                        >
                    </button>
                </div>
            </form>
        </div>
    </div>

</main>

<?php require base_path('views/partials/footer.php') ?>
