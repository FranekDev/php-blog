<?php

use Core\Session;

?>
<nav class="flex flex-row justify-between items-center w-full h-auto px-8 pt-4 sticky top-0 z-50">
    <div class="flex flex-row justify-between gap-10 h-14">
        <div class="shrink-0">
            <a href="/">
                <img
                        src="/img/logo.svg"
                        alt="Logo"
                        class="w-14 h-14"
                >
            </a>
        </div>
        <div class="flex justify-center items-center gap-x-20 border-[3px] border-black px-12 py-2 rounded-3xl [&>a]:text-lg bg-main shadow">
            <a
                    href="/"
                    class="<?= urlIs('/') ? 'text-black' : 'text-secondary' ?> hover:text-zinc-500 transition-all"
            >Home</a>
            <?php if (Session::has('user') ?? false) : ?>
                <a
                        href="/threads"
                        class="<?= urlIs('/threads') ? 'text-black' : 'text-secondary' ?> hover:text-zinc-500 transition-all"
                >Threads</a>
            <?php endif; ?>
            <a
                    href="/about"
                    class="<?= urlIs('/about') ? 'text-black' : 'text-secondary' ?> hover:text-zinc-500 transition-all"
            >About</a>
        </div>
    </div>

    <div class="h-14">
        <?php if (Session::has('user') ?? false) : ?>
            <form
                    action="/session"
                    method="post"
            >
                <input
                        type="hidden"
                        name="_method"
                        value="DELETE"
                >
                <button class="border-[3px] border-secondary px-8 py-2 rounded-3xl h-14 bg-main hover:shadow">Log Out</button>
            </form>
        <?php endif; ?>
    </div>
</nav>
