<?php require base_path('views/partials/head.php') ?>

<?php require base_path('views/partials/nav.php') ?>

    <main class="flex flex-col justify-center items-center h-full w-full p-8 gap-5">
        <div class="w-[1000px] h-auto bg-yellow-50 rounded-[20px] border-2 border-black p-5">
            <form
                    action="/threads"
                    method="post"
                    class="flex flex-col justify-around items-start w-full"
            >
                <input
                        type="hidden"
                        name="_method"
                        value="PATCH"
                >
                <input
                        type="hidden"
                        name="id"
                        value="<?= $thread['id'] ?>"
                >
                <input
                        type="hidden"
                        name="user_id"
                        value="<?= $thread['user_id'] ?>"
                >

                <div class="flex flex-col justify-center items-center gap-5 w-full">
                    <label class="w-full">
                        <input
                                type="text"
                                value="<?= $thread['title'] ?? '' ?>"
                                name="title"
                                class="bg-[#FDF9E8] rounded-[15px] p-4 w-full focus:border-button focus:border-2 focus:border-solid focus:ring-0 outline-none"
                        >
                        <?php if (isset($errors['title'])) : ?>
                            <p class="text-red-500 text-xs mt-2"><?= $errors['title'] ?></p>
                        <?php endif; ?>
                    </label>
                    <label class="w-full">
                        <textarea
                                name="description"
                                rows="5"
                                class="bg-[#FDF9E8] rounded-[15px] p-4 w-full focus:border-button focus:border-2 focus:border-solid focus:ring-0 outline-none"
                        ><?= $thread['description'] ?? '' ?></textarea>
                        <?php if (isset($errors['description'])) : ?>
                            <p class="text-red-500 text-xs mt-2"><?= $errors['description'] ?></p>
                        <?php endif; ?>
                    </label>
                </div>

                <div class="flex gap-5 w-full justify-between">
                    <a
                            href="/threads"
                            class="border-2 border-secondary px-4 py-1.5 rounded-xl w-fit m-2"
                    >Cancel</a>
                    <div>
                        <button
                                type="button"
                                class="bg-redBtn border-2 border-black rounded-xl px-4 py-1.5 shadow-buttonShadow m-2 w-fit"
                                onclick="document.querySelector('#delete-form').submit()"
                        >Delete
                        </button>
                        <button class="bg-button border-2 border-black rounded-xl px-4 py-1.5 shadow-buttonShadow m-2 w-fit">
                            Save
                        </button>
                    </div>
                </div>


            </form>
            <form
                    action="/threads"
                    method="post"
                    id="delete-form"
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
            </form>
        </div>
    </main>

<?php require base_path('views/partials/footer.php') ?>