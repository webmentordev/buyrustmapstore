<section class="w-full">
    <header class="w-full relative">
        <div class="relative flex px-4 items-center justify-center h-[500px] bg-cover bg-center" style="background-image: url({{ asset('assets/turret.webp') }})">
            <div class="bg-black/60 backdrop-blur-sm absolute top-0 left-0 w-full h-full"></div>
            <div class="relative z-10 text-white">
                <h1 class="text-7xl text-center">Purchase High Quality <br> <span class="text-rust-green span"> FPS Boosted Custom RUST Maps</span> <br>Under - <span class="text-rust span">20US$</span></h1>
            </div>
        </div>
    </header>
    
    <div class="w-full">
        <div class="max-w-7xl m-auto py-12 px-4">
            <h1 class="text-4xl mb-3">Latest Rust Custom Maps</h1>
            <div class="grid grid-cols-4 gap-6">
                @foreach ($maps as $item)
                    <x-item :$item />
                @endforeach
            </div>
        </div>
    </div>

    <section class="w-full">
        <h1 class="text-5xl mb-2 text-center">Rust <span class="text-rust span">Custom Map</span> Features</h1>
        <p class="mb-4 text-gray-700 text-center">Our maps are primarily designed with a focus on PvP, resulting in smaller <br> PvP-grade maps typically sized at 3450, 3750, 4000, 4250, and 6000 (roaming). <br> I personally prefer creating maps similar to 'Vital Rust' and 'WarBandits'</p>
        <div class="flex max-w-7xl m-auto py-[30px] rounded-lg px-4 900:flex-col">
            <img src="{{ asset('assets/falt.webp') }}" class="rounded-lg w-full h-fit max-w-[500px] 900:order-2 900:max-w-full" title="FPS+ Flat Terrain Map" alt="FPS+ Flat Terrain">
            <div class="w-full p-6 900:p-0 900:py-6 900:order-1">
                <h2 class="text-4xl mb-3 text-black">What is FPS+ Rust Map?</h2>
                <p class="mb-4 text-gray-700">In the FPS+ Rust Map, the terrain is flat and smooth, with unnecessary prefabs removed and fewer rock formations. This improvement is designed to enhance server performance and player FPS. For additional details, please refer to the map description.</p>
                <p class="mb-4 text-gray-700">As visible in the image, there is no grass (tundra biome). We've utilized a special biome type to paint the terrain, resulting in shorter grass. This adjustment is aimed at enhancing player FPS in-game.</p>
                <p class="mb-4 text-gray-700">We have removed large mountains and cliffs, eliminating extensive formations. This absence of substantial rock formations contributes to a reduced map size. Typically, a Rust map occupies 40MB - 50MB, but without large rock formations, the number of prefabs decreases, significantly lowering the file size to approximately 12MB - 20MB</p>
                <p class="text-gray-700">Don't worry about the cloth spawns. Only the Arid and Arctic biomes don't have cloth spawns, but the other two biomes do have cloth, also known as hemp, spawning. Berries, mushrooms, etc., will also spawn in their respective forest topologies.</p>
            </div>
        </div>

        <div class="flex max-w-7xl m-auto py-[30px] rounded-lg px-4 900:flex-col">
            <div class="w-full py-6 pr-6 900:pr-0">
                <h2 class="text-4xl mb-3 text-black">Combined Outpost & Bandit Camp</h2>
                <p class="mb-4 text-gray-700">The <a href="https://codefling.com/monuments/combined-outpost" class="text-rust underline font-bold" title="Our Merged Outpost and Bandit Camp Design" target="_blank" rel="nofollow">Outpost and Bandit Camp</a> have been combined into a single  have been merged into a unified entity, with the Outpost taking the lead as the primary location. This setup offers additional advantages such as teleportation and full support for the Monument addons plugin. Please consult the map description for all the details.</p>
                <p class="mb-4 text-gray-700">We maintain the Outpost as the default entity, ensuring that everything within the Outpost remains unchanged. This approach facilitates the functionality of plugins such as NTeleportation and MonumentsFinder, allowing them to accurately locate monuments for configuring specific teleport points or entities.</p>
                <p class="mb-4 text-gray-700">This outpost and bandit camp merge has Mission NPCs and vending machines. You may wonder about NPCs like weapons sellers; however, they have been replaced with vending machines. Additionally, you will find an AirWolf Vendor (an NPC who sells helicopters, etc.). These vending machines are spread across all outpost, so you will have to find them but all of them are available. I have not added any custom vending machines, so do not expect them.</p>
                
            </div>
            <img src="{{ asset('assets/outpost.webp') }}" class="rounded-lg w-full h-fit max-w-[500px] 900:max-w-full" title="Our Merged Outpost and Bandit Camp Design" alt="Our Merged Outpost and Bandit Camp Design">
        </div>

        <div class="flex max-w-7xl m-auto py-[30px] rounded-lg px-4 900:flex-col">
            <img src="{{ asset('assets/6000-size-fps-boosted-map.png') }}" class="rounded-lg w-full h-fit max-w-[500px] 900:order-2 900:max-w-full" title="FPS+ Flat Terrain Map" alt="6000 Size FPS+ Boosted Map">
            <div class="w-full p-6 900:p-0 900:py-6 900:order-1">
                <h2 class="text-4xl mb-3 text-black">Special Biome Pattern Rust Maps</h2>
                <p class="mb-4 text-gray-700">We use a special biome pattern for our paid maps, aiming to include all four biome types: Arctic, Desert (Arid), Temperature (Long grass), and Tundra (Short grass). Free maps, on the other hand, do not come with a custom biome pattern due to the time it takes to create them. Free maps only feature the merged Outpost with Bandit Camp and more features. You can checkout our free maps collection <a href="{{ route('free') }}" class="underline text-rust font-bold">here</a></p>
                <p class="mb-4 text-gray-700">We use all four biome designs to ensure that all biome-specific monuments spawn appropriately, such as the Arctic base in the snow biome, military base in the desert biome, etc. Using all four biomes ensures that we don't miss out on those monuments.</p>
                <p class="mb-4 text-gray-700">We try our best to divided the map into three biomes, primarily Arctic, Desert, and Temperature. The Temperature biome is mixed with Tundra.</p>
                <p class="text-gray-700">The image you see depicts a map with a size of 6000. You can find many maps of this size without monuments in the arid or arctic biome. This is because such maps are designed with roaming areas without monuments.</p>
            </div>
        </div>
    </section>

    <section class="w-full bg-gray-100">
        <div class="max-w-5xl m-auto py-[120px] px-4 flex flex-col justify-center" id="questions">
            <h2 class="text-center text-7xl mb-6 430:text-4xl 520:text-5xl">Frequently Asked Questions</h2>
            <div class="flex w-full 710:flex-col">
                <div class="flex flex-col 710:mr-0 mr-4 w-full 710:mb-4">
                    <div class="w-full p-6 rounded-lg bg-white border border-gray-200 h-fit mb-4">
                        <h3 class="text-xl">What is a FPS+ map? 💻</h3>
                        <div class="py-2">
                            <p class="text-gray-700 text-sm leading-7">The terrain is flat and smooth, with unnecessary prefabs removed and fewer rock formations, which improves server performance and player FPS. Please read the map description for more information.</p>
                        </div>
                    </div>
        
                    <div class="w-full p-6 rounded-lg bg-white border border-gray-200 h-fit mb-4">
                        <h3 class="text-xl">What is a Buildable map? 🔨</h3>
                        <div class="py-2">
                            <p class="text-gray-700 text-sm leading-7">Roads and Monuments are buildable. You must read the map description to check if either or both of them can be built upon.</p>
                        </div>
                    </div>
    
                    <div class="w-full p-6 rounded-lg bg-white border border-gray-200 h-fit mb-4">
                        <h3 class="text-xl">Do i build maps on demand? 🛠</h3>
                        <div class="py-2">
                            <p class="text-gray-700 text-sm leading-7">Absolutely, YES. It's noteworthy that i offer my services through Fiverr. If you have any questions or need assistance related to your freelancing endeavors or Rust projects, feel free to ask — I'm here to help!. Visit my <a href="https://www.fiverr.com/users/mahmer97" target="_blank" ref="nofollow" class="underline text-rust-green">fiverr profile</a></p>
                        </div>
                    </div>
    
                    <div class="w-full p-6 rounded-lg bg-white border border-gray-200 h-fit mb-4">
                        <h3 class="text-xl">Do we recieve email in-case the map is updated? 🔔</h3>
                        <div class="py-2">
                            <p class="text-gray-700 text-sm leading-7">No, we don't send any emails except when you purchase a map and the confirmation email with the map download link. We respect your privacy.</p>
                        </div>
                    </div>

                    <div class="w-full p-6 rounded-lg bg-white border border-gray-200 h-fit">
                        <h3 class="text-xl">Is there a download limit for the maps? 🤐</h3>
                        <div class="py-2">
                            <p class="text-gray-700 text-sm leading-7">Yes, there is a download limit for the map. You can purchase the map, but you can only download it 5 times. This limitation is due to bandwidth constraints. To regain access(with 5 limit), you have to repurchase the map.</p>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col w-full">
                    <div class="w-full p-6 rounded-lg bg-white border border-gray-200 h-fit mb-4">
                        <h3 class="text-xl">What is a Combined map? 🧩</h3>
                        <div class="py-2">
                            <p class="text-gray-700 text-sm leading-7">Outpost and Bandit Camp have been merged into a unified entity, with Outpost taking the lead as the primary location, encompassing the added advantages of teleportation and full support for Monument addons plugin. Must read the map description for more.</p>
                        </div>
                    </div>
        
                    <div class="w-full p-6 rounded-lg bg-white border border-gray-200 h-fit mb-4">
                        <h3 class="text-xl">Can i get a refund? 💸</h3>
                        <div class="py-2">
                            <p class="text-gray-700 text-sm leading-7">We would have certainly included this feature if it were feasible. Feel free to make a confident choice before purchasing the map that appeals to you the most 🙂</p>
                        </div>
                    </div>
    
                    <div class="w-full p-6 rounded-lg bg-white border border-gray-200 h-fit mb-4">
                        <h3 class="text-xl">Is it possible to repurchase the same map? 🗺</h3>
                        <div class="py-2">
                            <p class="text-gray-700 text-sm leading-7">Yes, you can repurchase a map with the same email again and again. We send you the download email through the email address provided. You can use a real or fake email if you want; just keep the download link safe for the future.</p>
                        </div>
                    </div>
                    <div class="w-full p-6 rounded-lg bg-white border border-gray-200 h-fit">
                        <h3 class="text-xl">What is the average map size? 🌎</h3>
                        <div class="py-2">
                            <p class="text-gray-700 text-sm leading-7">We create maps with sizes ranging from 3500 to 4300, which are designed for PvP gameplay.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>
