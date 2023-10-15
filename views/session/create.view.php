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
                <?php if (isset($errors['email'])) : ?>
                    <p class="text-red-500 text-xs mt-2"><?= $errors['email'] ?></p>
                <?php endif; ?>
            </label>

            <div class="flex justify-between items-center w-[500px] h-[40px] bg-[#FDF9E8] rounded-[15px] p-4">
                <label class="w-full">
                    <input
                            type="password"
                            placeholder="Password"
                            class="outline-none bg-transparent w-full"
                            name="password"
                    >
                    <?php if (isset($errors['password'])) : ?>
                        <p class="text-red-500 text-xs mt-2"><?= $errors['password'] ?></p>
                    <?php endif; ?>
                </label>
                <img
                        src="/img/eye.svg"
                        alt="Show"
                        class="w-5 h-5 cursor-pointer eye"
                >
            </div>

            <button class="bg-button border-2 border-black rounded-xl px-4 py-1.5 shadow-buttonShadow w-fit">Log in
            </button>

        </form>
    </main>

<?php require(base_path('views/partials/home/footer.php')) ?>