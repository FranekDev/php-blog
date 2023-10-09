<?php require('partials/home/head.php') ?>

<main class="flex flex-col justify-center items-start h-full w-full pl-52">
    <div class="flex flex-col">
        <h1 class="font-oi text-8xl">PHP Threads</h1>

        <?php if ($_SESSION['user'] ?? false) : ?>
            <p class="text-zinc-600 text-2xl">
                Hello, <?= $_SESSION['user']['name'] ?>!
            </p>
        <?php else: ?>
            <p class="text-zinc-600 text-2xl">
                Best PHP blog with<br>
                Neobrutalism UI
            </p>
        <?php endif; ?>
    </div>

    <?php if (!isset($_SESSION['user']) ?? false) : ?>
        <a
                href="/login"
                class="bg-button border-2 border-black rounded-xl px-4 py-1.5 shadow-buttonShadow m-2 w-fit"
        >
            Log in
        </a>
    <?php endif; ?>
</main>

<?php require('partials/home/footer.php') ?>
