</div>

</div>

<footer class="w-full px-10 py-10">
    <div class="bg-[#FDF9E8] w-full rounded-xl flex justify-between items-center px-10 py-5 text-[#BCBCBC] text-base">
        <div class="">
            <p>Created by</p>
            <div class="flex justify-start items-center gap-2">
                <p>FranekDev</p>
                <a
                        href="https://github.com/FranekDev/php-blog"
                        target="_blank"
                >
                    <img
                            src="/img/github.svg"
                            alt="Github"
                    >
                </a>
            </div>
        </div>
        <div>
            <ul class="flex justify-around items-center gap-10">
                <li><a href="/">Home</a></li>
                <?php use Core\Session;

                if (Session::has('user') ?? false) : ?>
                    <li><a href="/threads">Threads</a></li>
                <?php endif; ?>
                <li><a href="/about">About</a></li>
            </ul>
        </div>
        <div class="flex flex-col justify-start items-center">
            <p>Follow me</p>
            <div class="flex justify-start w-full">
                <a
                        href="https://x.com/_It_IsMe_"
                        target="_blank"
                >
                    <img
                            src="/img/twitter.svg"
                            alt="X"
                    >
                </a>
            </div>
        </div>
    </div>
</footer>


</body>
</html>