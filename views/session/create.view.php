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
                        placeholder="Login"
                        class="w-[500px] h-[40px] bg-[#FDF9E8] rounded-[15px] p-4"
                >
            </label>
            <label>
                <input
                        type="password"
                        placeholder="Password"
                        class="w-[500px] h-[40px] bg-[#FDF9E8] rounded-[15px] p-4"
                >
            </label>

            <button class="bg-button border-2 border-black rounded-xl px-4 py-1.5 shadow-buttonShadow w-fit">Log in
            </button>
        </form>
    </main>

<?php require(base_path('views/partials/home/footer.php')) ?>