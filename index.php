<?php
//include 'database/config.php';
include 'components/header.php';
?>
<div class="grid md:grid-cols-3 gap-6 min-h-[164px] py-12 p-16 bg-gradient-to-r from-slate-800 from-50% to-slate-600 font-sans overflow-hidden">
      <div class="md:col-span-2">
        <h1 class="text-3xl font-bold text-white">Welcome to HarmonyHub!</h1>
        <p class="text-base text-gray-200 mt-4">Music Blogs</p>

        <button type="button"
          class="py-3 px-6 text-sm font-semibold bg-blue-700 text-white hover:bg-blue-300 hover:text-amber-600 rounded-md mt-8">Start Blogging</button>
      </div>

      <div class="relative max-md:hidden">
        <img src="https://readymadeui.com/readymadeui_banner2.webp" alt="Banner Image"
          class="w-full right-4 top-[-13px] md:absolute skew-x-[-16deg] rotate-2 object-cover" />
      </div>
    </div>

    <div class="bg-slate-700 font-sans">
      <div class="max-w-6xl mx-auto p-4">
        <div class="text-center">
          <h2 class="text-3xl font-extrabold text-white inline-block relative after:absolute after:w-4/6 after:h-1 after:left-0 after:right-0 after:-bottom-4 after:mx-auto after:bg-slate-400 after:rounded-lg-full">LATEST BLOGS</h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-16 max-lg:max-w-3xl max-md:max-w-md mx-auto">

        <!-- "Blog Post 1" -->
          <div class="bg-white cursor-pointer rounded-lg overflow-hidden shadow-[0_2px_10px_-3px_rgba(6,81,237,0.3)] relative group">         
            <img src='<?= ROOT_DIR ?>assets/images/test-image.jpg' alt="Blog Post 1" class="w-full h-96 object-cover" />
            <div class="p-6 absolute bottom-0 left-0 right-0 bg-black opacity-75">
              <span class="text-sm block text-white mb-2">21 JAN 2025 | BY JOHN DOE</span>
              <h3 class="text-xl font-bold text-white">Edited Blog Example</h3>
              <div class="h-0 overflow-hidden group-hover:h-16 group-hover:mt-4 transition-all duration-300">
                <p class="text-white text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis accumsan, nunc et tempus blandit, metus mi consectetur felis turpis vitae ligula.</p>
              </div>
            </div>
          </div>

          <!-- "Blog Post 2" -->
          <div class="bg-white cursor-pointer rounded-lg overflow-hidden shadow-[0_2px_10px_-3px_rgba(6,81,237,0.3)] relative group">
            <!-- <img src="https://readymadeui.com/images/food.webp" alt="Blog Post 1" class="w-full h-96 object-cover" /> -->
            <img src='<?= ROOT_DIR ?>assets/images/test-image.jpg' alt="Blog Post 1" class="w-full h-96 object-cover" />
            <div class="p-6 absolute bottom-0 left-0 right-0 bg-black opacity-75">
              <span class="text-sm block text-white mb-2">21 JAN 2025 | BY JOHN DOE</span>
              <h3 class="text-xl font-bold text-white">Edited Blog Example</h3>
              <div class="h-0 overflow-hidden group-hover:h-16 group-hover:mt-4 transition-all duration-300">
                <p class="text-white text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis accumsan, nunc et tempus blandit, metus mi consectetur felis turpis vitae ligula.</p>
              </div>
            </div>
          </div>

          <!-- "Blog Post 3" -->
          <div class="bg-white cursor-pointer rounded-lg overflow-hidden shadow-[0_2px_10px_-3px_rgba(6,81,237,0.3)] relative group">
            <!-- <img src="https://readymadeui.com/images/food.webp" alt="Blog Post 1" class="w-full h-96 object-cover" /> -->
            <img src='<?= ROOT_DIR ?>assets/images/test-image.jpg' alt="Blog Post 1" class="w-full h-96 object-cover" />
            <div class="p-6 absolute bottom-0 left-0 right-0 bg-black opacity-75">
              <span class="text-sm block text-white mb-2">21 JAN 2025 | BY JOHN DOE</span>
              <h3 class="text-xl font-bold text-white">Edited Blog Example</h3>
              <div class="h-0 overflow-hidden group-hover:h-16 group-hover:mt-4 transition-all duration-300">
                <p class="text-white text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis accumsan, nunc et tempus blandit, metus mi consectetur felis turpis vitae ligula.</p>
              </div>
            </div>
          </div>

          <!-- "Blog Post 4" -->
          <div class="bg-white cursor-pointer rounded-lg overflow-hidden shadow-[0_2px_10px_-3px_rgba(6,81,237,0.3)] relative group">
            <!-- <img src="https://readymadeui.com/images/food.webp" alt="Blog Post 1" class="w-full h-96 object-cover" /> -->
            <img src='<?= ROOT_DIR ?>assets/images/test-image.jpg' alt="Blog Post 1" class="w-full h-96 object-cover" />
            <div class="p-6 absolute bottom-0 left-0 right-0 bg-black opacity-75">
              <span class="text-sm block text-white mb-2">21 JAN 2025 | BY JOHN DOE</span>
              <h3 class="text-xl font-bold text-white">Edited Blog Example</h3>
              <div class="h-0 overflow-hidden group-hover:h-16 group-hover:mt-4 transition-all duration-300">
                <p class="text-white text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis accumsan, nunc et tempus blandit, metus mi consectetur felis turpis vitae ligula.</p>
              </div>
            </div>
          </div>

          <!-- "Blog Post 5" -->
          <div class="bg-white cursor-pointer rounded-lg overflow-hidden shadow-[0_2px_10px_-3px_rgba(6,81,237,0.3)] relative group">
            <!-- <img src="https://readymadeui.com/images/food.webp" alt="Blog Post 1" class="w-full h-96 object-cover" /> -->
            <img src='<?= ROOT_DIR ?>assets/images/test-image.jpg' alt="Blog Post 1" class="w-full h-96 object-cover" />
            <div class="p-6 absolute bottom-0 left-0 right-0 bg-black opacity-75">
              <span class="text-sm block text-white mb-2">21 JAN 2025 | BY JOHN DOE</span>
              <h3 class="text-xl font-bold text-white">Edited Blog Example</h3>
              <div class="h-0 overflow-hidden group-hover:h-16 group-hover:mt-4 transition-all duration-300">
                <p class="text-white text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis accumsan, nunc et tempus blandit, metus mi consectetur felis turpis vitae ligula.</p>
              </div>
            </div>
          </div>

          <!-- "Blog Post 6" -->
          <div class="bg-white cursor-pointer rounded-lg overflow-hidden shadow-[0_2px_10px_-3px_rgba(6,81,237,0.3)] relative group">
            <!-- <img src="https://readymadeui.com/images/food.webp" alt="Blog Post 1" class="w-full h-96 object-cover" /> -->
            <img src='<?= ROOT_DIR ?>assets/images/test-image.jpg' alt="Blog Post 1" class="w-full h-96 object-cover" />
            <div class="p-6 absolute bottom-0 left-0 right-0 bg-black opacity-75">
              <span class="text-sm block text-white mb-2">21 JAN 2025 | BY JOHN DOE</span>
              <h3 class="text-xl font-bold text-white">Edited Blog Example</h3>
              <div class="h-0 overflow-hidden group-hover:h-16 group-hover:mt-4 transition-all duration-300">
                <p class="text-white text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis accumsan, nunc et tempus blandit, metus mi consectetur felis turpis vitae ligula.</p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
<?php
include 'components/footer.php';
?>