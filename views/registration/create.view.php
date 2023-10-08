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
                >
                <?php if (isset($errors['email'])) : ?>
                    <p class="text-red-500 text-xs mt-2"><?= $errors['email'] ?></p>
                <?php endif; ?>
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
            </label>     <label>
                <input
                    type="password"
                    placeholder="Confirm Password"
                    class="w-[500px] h-[40px] bg-[#FDF9E8] rounded-[15px] p-4"
                    name="confirm_password"
                >
                <?php if (isset($errors['confirm_password'])) : ?>
                    <p class="text-red-500 text-xs mt-2"><?= $errors['confirm_password'] ?></p>
                <?php endif; ?>
            </label>

            <button class="bg-button border-2 border-black rounded-xl px-4 py-1.5 shadow-buttonShadow w-fit">Register
            </button>
        </form>
    </main>

<?php require(base_path('views/partials/home/footer.php')) ?>