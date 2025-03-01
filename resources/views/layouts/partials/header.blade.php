<header class="border-b border-gray-700 py-2.5">
    <x-container>
        <div class="flex justify-between items-center">
            <div class="">
                <a href=" {{route('page.home') }}" class="text-2xl">
                    <i class='bx bxl-sketch'></i>
                </a>
            </div>
            <nav>
                <ul class="flex text-gray-400 text-lg gap-2">
                    <li class="">
                        <a href="" class="">Web</a>
                    </li>
                    <li class="">
                        <a href="" class="">Sports</a>
                    </li>
                    <li class="">
                        <a href="" class="">Opinion</a>
                    </li>
                    <li class="text-black">
                        <a href="" class=" font-semibold">Lifestyle</a>
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
            </nav>
            <div class="">
                <img class="w-[50px] h-[50px] rounded-full" src="{{ asset('storage/image/prod1.jpg') }}" alt="">
            </div>
        </div>
    </x-container>
</header>
