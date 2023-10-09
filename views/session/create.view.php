<?php require(base_path('views/partials/home/head.php')) ?>

    <main class="w-full h-full flex justify-start items-center px-8">
        <form
                action="/session"
                class="flex flex-col gap-4"
                method="post"
        >
            <label>
                <input
                        type="text"
                        placeholder="Email"
                        class="w-[500px] h-[40px] bg-[#FDF9E8] rounded-[15px] p-4"
                        name="email"
                >
            </label>
            <label>
                <input
                        type="password"
                        placeholder="Password"
                        class="w-[500px] h-[40px] bg-[#FDF9E8] rounded-[15px] p-4"
                        name="password"
                >
                <?php if (isset($errors['password'])) : ?>
                    <p class="text-red-500 text-xs mt-2"><?= $errors['password'] ?></p>
                <?php endif; ?>
            </label>

            <button class="bg-button border-2 border-black rounded-xl px-4 py-1.5 shadow-buttonShadow w-fit">Log in
            </button>
            <?php if (isset($errors['email'])) : ?>
                <p class="text-red-500 text-xs mt-2"><?= $errors['email'] ?></p>
            <?php endif; ?>
        </form>
    </main>

<?php require(base_path('views/partials/home/footer.php')) ?>