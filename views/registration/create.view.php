<?php require(base_path('views/partials/home/head.php')) ?>

    <main class="w-full h-full flex justify-start items-center px-8">
        <form
                action="/register"
                class="flex flex-col gap-4"
                method="post"
        >
            <label>
                <input
                        type="text"
                        placeholder="Name"
                        class="w-[500px] h-[40px] bg-[#FDF9E8] rounded-[15px] p-4"
                        name="name"
                        value="<?= $name ?? '' ?>"
                >
                <?php if (isset($errors['name'])) : ?>
                    <p class="text-red-500 text-xs mt-2"><?= $errors['name'] ?></p>
                <?php endif; ?>
            </label> <label>
                <input
                        type="text"
                        placeholder="Email"
                        class="w-[500px] h-[40px] bg-[#FDF9E8] rounded-[15px] p-4"
                        name="email"
                        value="<?= $email ?? '' ?>"
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

                </label>
                <img
                        src="/img/eye.svg"
                        alt="Show"
                        class="w-5 h-5 cursor-pointer eye"
                >
            </div>
            <?php if (isset($errors['password'])) : ?>
                <p class="text-red-500 text-xs"><?= $errors['password'] ?></p>
            <?php endif; ?>
            <div class="flex justify-between items-center w-[500px] h-[40px] bg-[#FDF9E8] rounded-[15px] p-4">
                <label class="w-full">
                    <input
                            type="password"
                            placeholder="Confirm Password"
                            class="outline-none bg-transparent w-full"
                            name="confirm_password"
                    >

                </label>
                <img
                        src="/img/eye.svg"
                        alt="Show"
                        class="w-5 h-5 cursor-pointer eye"
                >
            </div>
            <?php if (isset($errors['confirm_password'])) : ?>
                <p class="text-red-500 text-xs"><?= $errors['confirm_password'] ?></p>
            <?php endif; ?>

            <button class="bg-button border-2 border-black rounded-xl px-4 py-1.5 shadow-buttonShadow w-fit">Register
            </button>
        </form>
    </main>

<?php require(base_path('views/partials/home/footer.php')) ?>