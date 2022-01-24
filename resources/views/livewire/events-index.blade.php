<div>
    <section class="my-4 text-white">
        <div class="text-center text-4xl text-bold mb-4">DC Universe Reading Order</div>
        <p class="text-justify text-md">Selamat datang di EasyComics disini. Daftar ini akan menavigasi bagi pembaca yang belum familiar dengan komik DC. Daftar ini terdiri dari beberapa events komik yang telah terjadi</p>
        <div x-data="{ openTab: 1 , activeClasses: ' text-white bold-semibold border-b-4 border-indigo-500', inactiveClasses:''}" class="sm:rounded-lg p-2 bg-gray-600 my-4">
            <div class="grid grid-cols-1 md:grid-cols-5 gap-2 bg-gray-600 text-center border-solid border-2 border-gray-600 rounded-sm text-gray-500">
                <div @click="openTab = 1" :class="openTab === 1 ? activeClasses : inactiveClasses" class=" hover:bg-gray-100 hover:text-black hover:font-semibold p-3 cursor-pointer">
                    Pre Crisis
                </div>
                <div @click="openTab = 2" :class="openTab === 2 ? activeClasses : inactiveClasses" class="hover:bg-gray-100 hover:text-black hover:font-semibold p-3 cursor-pointer">
                    Post Crisis
                </div>
                <div @click="openTab = 3" :class="openTab === 3 ? activeClasses : inactiveClasses" class="hover:bg-gray-100 hover:text-black hover:font-semibold p-3 cursor-pointer">
                    The New 52</div>
                <div @click="openTab = 4" :class="openTab === 4 ? activeClasses : inactiveClasses" class="hover:bg-gray-100 hover:text-black hover:font-semibold p-3 cursor-pointer">
                    Rebirth</div>
                <div @click="openTab = 5" :class="openTab === 5 ? activeClasses : inactiveClasses" class="hover:bg-gray-100 hover:text-black hover:font-semibold p-3 cursor-pointer">
                    Infinite Frontier</div>
            </div>
            <div x-show="openTab === 1" class="text-white">
                <p>
                    Disebut juga sebagai Golden Age (1938-1956), Silver Age (1956-1970) dan Bronze Age (1956-1970).
                    <br />Komik Superhero yang pertama kali rilis adalah Action Comics #1 tahun 1938 penampilan Superman pertama kali, disusul oleh Detective Comics #27 tahun 1939 penampilan Batman pertama kali lalu Robin, The Flash, Justice Society of America, Wonder Woman, Green Arrow, dsb.
                </p>
                <div class="flex">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mx-auto">
                        <img class="md:h-56" src="https://i.ytimg.com/vi/aV6c8arunyI/maxresdefault.jpg" alt="">
                        <img class="md:h-56" src="https://static0.cbrimages.com/wordpress/wp-content/uploads/2021/03/DC-Silver-Age-Feature-Image.jpg?q=50&fit=crop&w=960&h=500&dpr=1.5" alt="">
                    </div>
                </div>
            </div>
            <div x-show=" openTab===2" class="text-white">
                <p>Dimulai di New Earth / Earth 0 (1985-2011) hasil dari reboot event Crisis on Infinite Earths tahun 1985. Event ini menggabungkan semua superhero dari Golden Age - Bronze Age untuk melawan Anti-Monitor</p>
                <p>Setelah event ini selesai mengakibatkan rebootnya multiverse yang sebelumnya Infinite Earths sekarang hanya ada 52 Earths</p>
                <div class="flex">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mx-auto">
                        <img class="md:h-56" src="https://w0.peakpx.com/wallpaper/660/697/HD-wallpaper-crisis-on-infinite-earths-alex-ross-crisis-on-infinite-earths-alex-ross.jpg" alt="">
                        <img class="md:h-56" src="https://www.thecollectionshop.com/Image_Resize_Detail_Image.asp?MiscImage=CP1448" alt="">
                    </div>
                </div>
            </div>
            <div x-show="openTab===3" class="text-white">
                <p>Setelah event FlashPoint selesai, DC Comics memutuskan untuk mereboot DC Universe dengan nama The New 52. Semua komik dimulai dari #1 termasuk Action Comics dan Detective Comics. Cerita tetap di New Earth / Earh 0 tetapi berganti nama menjadi Prime Earth</p>
                <p>Sebelum event Doomsday Clock (2018), Prime Earth adalah akibat dari event FlashPoint. Setelah event Doomsday Clock rilis ternyata Dr. Manhattan lah yang mengacak-acak timeline yang membuat semua superhero melupakan kejadian yang telah terjadi di timeline sebelumnya (New Earth) serta menjadikan superhero 10 tahun lebih muda dan terjadilah Prime Earth ini</p>
                <div class="flex">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mx-auto">
                        <img class="md:h-56" src="https://cdn.wallpapersafari.com/23/87/OfH275.jpg" alt="">
                        <img class="md:h-56" src="https://www.wallpapertip.com/wmimgs/78-780131_superman-superhero-wallpaper-superman-wallpaper-new-52.jpg" alt="">
                    </div>
                </div>
            </div>
            <div x-show="openTab === 4" class="text-white">
                <p>Disaat brand The New 52 kurang disukai para fans DC membuat brand baru bernama DC Rebirth (2016-2027)
                    <br />Cerita masih menyambung The New 52 Prime Earth. DC Rebirth dimulai oleh kembalinya Wally West (New Earth) di Prime Earth yang mengingatkan bahwa ada anacaman sangat besar. Di event Doomsday Clock (2018) diperlihatkan bahwa ancaman itu adalah Dr. Manhattan
                </p>
                <div class="flex">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mx-auto">
                        <img class="md:h-56" src="https://i.ytimg.com/vi/hA5MH1b0ou0/maxresdefault.jpg" alt="">
                        <img class="md:h-56" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRIOyHwJaA8p7rssXQcM4SRyPmvFsq7CDw7gc_MLKoNqn71GHjKsogAiMM_Ltfyue-4F9E&usqp=CAU" alt="">
                    </div>
                </div>
            </div>
            <div x-show="openTab === 5" class="text-white">
                <p>Setelah selesainya event Dark Nights: Death Metal, DC membuat brand Infinite Frontier (2021-sekarang) yang ceritanya masih bersambung dari The New 52 maupun DC Rebirth</p>
                <div class="flex">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mx-auto">
                        <img class="md:h-56" src="https://static3.cbrimages.com/wordpress/wp-content/uploads/2020/12/infinite-frontier-header.jpg" alt="">
                        <img class="md:h-56" src="https://static0.cbrimages.com/wordpress/wp-content/uploads/2020/12/Batman-Infinite-Frontier-2021.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
        <h1 class="text-center text-2xl text-blue-600 font-bold">Map DC Multiverse <br>(1985-2020)</h1>
        <div class="flex justify-center my-4 row rounded-md">
            <img class="transition ease-in-out delay-75 hover:-translate-y-1 hover:scale-110" src="https://www.cosmicteams.com/img/Channel_52_Multiversity.jpg" alt="">
            <img class="transition ease-in-out delay-75 hover:-translate-y-1 hover:scale-110" src="https://2.bp.blogspot.com/9gz33sMNbCkJxBM-q2jOS1SKNgy2KsXKvUxlLf0TF_b1OkdqFsFutGHibEc777cKGH-1SwGdp6DX=s1600" alt="">
        </div>
    </section>
    <main class="text-white">
        <div class="my-4" id="new52">
            <h1 class="text-center">Events List</h1>
            <h1 class="text-center text-2xl my-4">The New 52</h1>
            <table class="md:max-w-2xl border border-collapse border-slate-500">
                <thead>
                    <tr>
                        <th scope="col" class="border border-slate-500 tracking-wider p-2 bg-navbar">No</th>
                        <th scope="col" class="border border-slate-500 tracking-wider p-2 bg-navbar">Events</th>
                        <th scope="col" class="border border-slate-500 tracking-wider p-2 bg-navbar">Universe</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($comicsnew52 as $new52)
                    <tr>
                        <td class="border border-slate-500 tracking-wider p-2 bg-gray-600">{{$loop->iteration}}</td>
                        <td class="border border-slate-500 tracking-wider p-2 bg-gray-600">
                            <a href="/event/{{ $new52->slug }}" class="no-underline text-sky-500">{{$new52->name}}</a>
                        </td>
                        <td class="border border-slate-500 tracking-wider p-2 bg-gray-600">{{$new52->universe->name}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <hr>
        <div class="my-4" id="rebirth">
            <h1 class="text-center text-2xl my-4">DC Rebirth</h1>
            <table class="md:w-3/6 border border-collapse border-slate-500">
                <thead>
                    <tr>
                        <th scope="col" class="border border-slate-500 tracking-wider p-2 bg-navbar">No</th>
                        <th scope="col" class="border border-slate-500 tracking-wider p-2 bg-navbar">Events</th>
                        <th scope="col" class="border border-slate-500 tracking-wider p-2 bg-navbar">Universe</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($comicsrebirth as $rebirth)
                    <tr>
                        <td class="border border-slate-500 tracking-wider p-2 bg-gray-600">{{$loop->iteration}}</td>
                        <td class="border border-slate-500 tracking-wider p-2 bg-gray-600">
                            <a href="/event/{{ $rebirth->slug }}" class="no-underline text-sky-500">{{ $rebirth->name  }}</a>
                        </td>
                        <td class="border border-slate-500 tracking-wider p-2 bg-gray-600">{{$rebirth->universe->name}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>
    <hr>
</div>