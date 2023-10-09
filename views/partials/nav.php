<nav class="flex flex-row justify-between items-center w-full h-auto px-8 pt-4 z-10">
    <div class="flex flex-row justify-between gap-10 h-14">
        <div class="shrink-0">
            <img
                    src="./img/logo.svg"
                    alt="Logo"
                    class="w-14 h-14"
            >
        </div>
        <div class="flex justify-center items-center gap-x-20 border-[3px] border-black px-12 py-2 rounded-3xl [&>a]:text-lg bg-main">
            <a
                    href="/"
                    class="<?= urlIs('/') ? 'text-black' : 'text-secondary' ?>"
            >Home</a>
            <?php if ($_SESSION['user'] ?? false) : ?>
                <a
                        href="/threads"
                        class="<?= urlIs('/threads') ? 'text-black' : 'text-secondary' ?>"
                >Threads</a>
            <?php endif; ?>
            <a
                    href="/about"
                    class="<?= urlIs('/about') ? 'text-black' : 'text-secondary' ?>"
            >About</a>
            <a
                    href="/contact"
                    class="<?= urlIs('/contact') ? 'text-black' : 'text-secondary' ?>"
            >Contact</a>
        </div>
    </div>

    <div class="h-14">
        <?php if ($_SESSION['user'] ?? false) : ?>
            <form
                    action="/session"
                    method="post"
            >
                <input
                        type="hidden"
                        name="_method"
                        value="DELETE"
                >
                <button class="border-[3px] border-secondary px-8 py-2 rounded-3xl h-14 bg-main">Log Out</button>
            </form>
        <?php endif; ?>
    </div>
</nav>
