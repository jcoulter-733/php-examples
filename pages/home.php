<?php
include ROOT_PATH . 'database/config.php';
include ROOT_PATH . 'components/header.php';
$blog = $conn->prepare("SELECT blog_id, title, image, content, status, created_at FROM blogs WHERE status = 'published'");
$blog->execute();
$blog->store_result();
$blog->bind_result($id, $title, $image_url, $content, $status, $created_at);
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

        <!-- "Blog Posts" -->
        <?php while($blog->fetch()): ?>
          <div class="bg-white cursor-pointer rounded-lg overflow-hidden shadow-[0_2px_10px_-3px_rgba(6,81,237,0.3)] relative group">         
          <?php 
          $date = new DateTime($created_at);
          $formattedDate = $date->format("F j, Y, g:i A");
          ?>
          
            <img src='<?= ROOT_DIR ?>assets/images/<?= $image_url ?>' alt="test-image.jpg" class="w-full h-96 object-cover" />
            <div class="p-6 absolute bottom-0 left-0 right-0 bg-black opacity-75">
              <span class="text-sm block text-white mb-2"><?= $formattedDate ?> | BY JOHN DOE</span>
              <h3 class="text-xl font-bold text-white"><?= $title ?></h3>
              <div class="h-0 overflow-hidden group-hover:h-16 group-hover:mt-4 transition-all duration-300">
                <a href="pages/blog-info.php?bid=<?=$id?>" class="text-white text-sm">Read More</a>
                <p class="text-white text-sm"><?= $content ?></p>
              </div>
            </div>
          </div>
          <?php endwhile; ?>

          

        </div>
      </div>
    </div>
<?php
include '../components/footer.php';
?>