<header class="border-b border-gray-700 py-2.5">
    <x-container>
        <nav class="flex justify-between items-center">
            <div class="">
                <a href=" {{route('page.home') }}" class="text-2xl">
                    <i class='bx bxl-sketch'></i>
                </a>
            </div>
            <ul class="flex text-gray-400 text-lg gap-2">
                <li class="">
                    <a href="" class="">web</a>
                </li>
                <li class="">
                    <a href="" class="">sports</a>
                </li>
                <li class="">
                    <a href="" class="">Opinion</a>
                </li>
                <li class="text-black">
                    <a href="" class="">Lifestyle</a>
                </li>
                <li class="">
                    <a href="" class="">Business</a>
                </li>
                <li class="">
                    <a href="" class="">Culture</a>
                </li>
                <li class="">
                    <a href="" class="">Fashion</a>
                </li>
                <li class="">
                    <a href="" class="">Tech</a>
                </li>
            </ul>
            <div class="">
                <img class="w-[50px] h-[50px] rounded-full" src="{{ asset('storage/image/prod1.jpg') }}" alt="">
            </div>
        </nav>
    </x-container>
</header>
