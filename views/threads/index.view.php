<?php require base_path('views/partials/head.php') ?>

<?php require base_path('views/partials/nav.php') ?>

    <main class="flex flex-col justify-center items-center h-auto w-auto p-8 gap-5">
        <div class="w-[1000px]">
            <form
                    action="/threads"
                    class="flex justify-between items-center h-16 bg-[#FDF9E8] rounded-[15px] p-4"
                    method="post"
            >
                <label>
                    <input
                            type="text"
                            placeholder="Add a new thread"
                            class="bg-transparent w-[600px] outline-none"
                            name="title"
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
                    <?php if (isset($errors['title'])) : ?>
                        <p class="text-red-500 text-xs mt-2"><?= $errors['title'] ?></p>
                    <?php endif; ?>
        </div>

        <?php if (isset($threads)) : ?>
            <div class="bg-[#FDF9E8] w-[1000px] h-auto rounded-[15px] flex flex-col justify-center items-center gap-4 p-4">
                <?php $index = 0; ?>
                <?php foreach ($threads as $thread) : ?>
                    <div class="flex flex-col justify-center items-start gap-2 w-full">
                        <div class="flex justify-between w-full">
                            <div class="flex justify-center items-center gap-4">

                                <div class="rounded-full w-10 h-10 <?= getUserColor($index) ?>">

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
                    <?php $index++; ?>
                <?php endforeach; ?>
            </div>

        <?php else : ?>
            <p>
                No threads.
            </p>
        <?php endif; ?>

        <input
                type="hidden"
                class="bg-bluePost"
        >
        <input
                type="hidden"
                class="bg-greenPost"
        >
    </main>

<?php require base_path('views/partials/footer.php') ?>