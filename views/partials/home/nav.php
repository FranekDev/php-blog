<nav class="flex flex-row justify-between items-center w-full h-auto px-8 pt-4 z-10">
    <div class="flex flex-row justify-between gap-10">
        <div class="flex justify-center items-center gap-x-20 border-[3px] border-black px-12 py-2 rounded-3xl [&>a]:text-lg bg-main">
            <a href="/" class="<?= urlIs('/') ? 'text-black' : 'text-secondary' ?>">Home</a>
            <a href="/threads" class="<?= urlIs('/threads') ? 'text-black' : 'text-secondary' ?>">Threads</a>
            <a href="/about" class="<?= urlIs('/about') ? 'text-black' : 'text-secondary' ?>">About</a>
            <a href="/contact" class="<?= urlIs('/contact') ? 'text-black' : 'text-secondary' ?>">Contact</a>
        </div>
    </div>

    <div class="flex justify-center items-center border-[3px] border-secondary px-8 py-2 rounded-3xl [&>a]:text-lg">
        <?php if (urlIs('/login')): ?>
            <a href="/register">Register</a>
        <?php else: ?>
            <a href="/login">Log in</a>
        <?php endif; ?>
    </div>
</nav>
