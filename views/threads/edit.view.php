<?php require base_path('views/partials/head.php') ?>

<?php require base_path('views/partials/nav.php') ?>

    <main class="flex flex-col justify-center items-center h-full w-full p-8 gap-5">
        <div class="w-[1000px] h-auto bg-yellow-50 rounded-[20px] border-2 border-black px-14 py-10">
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
                        value="<?= $thread['id'] ?? 'test' ?>"
                >
                <input type="hidden" name="user_id" value="<?= $thread['user_id'] ?>">

                <div class="flex flex-col justify-center items-center gap-5 w-full">
                    <input
                            type="text"
                            value="<?= $thread['title'] ?? '' ?>"
                            name="title"
                            class="bg-[#FDF9E8] rounded-[15px] p-4 w-full"
                    >
                    <textarea
                            name="description"
                            rows="3"
                            class="bg-[#FDF9E8] rounded-[15px] p-4 w-full"
                    ><?= $thread['description'] ?? '' ?></textarea>
                </div>

                <div class="flex gap-5 w-full justify-end">
                    <button type="button" class="bg-redBtn border-2 border-black rounded-xl px-4 py-1.5 shadow-buttonShadow m-2 w-fit" onclick="document.querySelector('#delete-form').submit()">Delete</button>
                    <button class="bg-button border-2 border-black rounded-xl px-4 py-1.5 shadow-buttonShadow m-2 w-fit">Save</button>
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
                        value=""
                >
            </form>
        </div>
    </main>

<?php require base_path('views/partials/footer.php') ?>