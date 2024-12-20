<?php foreach ($buku as $bk) : ?> <main class="relative mt-[120px]">
 <div class="m-container mx-auto mb-8 mt-6 flex items-center px-4">
  <nav aria-label="breadcrumb">
   <ol class="flex">
    <li class="flex items-center"> <a class="decoration-from-font outline-none text-xs-semibold text-neutral-700 focus:text-brand-700 active:text-brand-700 [.dweb_&amp;]:hover:text-brand-500 underline max-w-[120px] truncate" href="https://www.gramedia.com/">Home</a> <svg class="shrink-0 ___12fm75w f1w7gpdv fez10in fg4l7m0" fill="currentColor" aria-hidden="true" width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
      <path d="M7.73 4.2a.75.75 0 0 1 1.06.03l5 5.25c.28.3.28.75 0 1.04l-5 5.25a.75.75 0 1 1-1.08-1.04L12.2 10l-4.5-4.73a.75.75 0 0 1 .02-1.06Z" fill="currentColor"></path>
     </svg> </li>
    <li class="flex items-center"> <a class="decoration-from-font outline-none text-xs-semibold text-neutral-700 focus:text-brand-700 active:text-brand-700 [.dweb_&amp;]:hover:text-brand-500 underline max-w-[120px] truncate" href="https://www.gramedia.com/categories/buku">Buku</a> <svg class="shrink-0 ___12fm75w f1w7gpdv fez10in fg4l7m0" fill="currentColor" aria-hidden="true" width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
      <path d="M7.73 4.2a.75.75 0 0 1 1.06.03l5 5.25c.28.3.28.75 0 1.04l-5 5.25a.75.75 0 1 1-1.08-1.04L12.2 10l-4.5-4.73a.75.75 0 0 1 .02-1.06Z" fill="currentColor"></path>
     </svg> </li>
    <li aria-current="page" class="flex items-center"> <span class="max-w-[360px] truncate text-xs-semibold text-neutral-500"><?= $bk->judul_buku ?></span> </li>
   </ol>
  </nav>
 </div>
 <div class="[.dweb_&amp;]:m-container relative mx-auto flex gap-x-8 [.dweb_&amp;]:px-4 [.mweb_&amp;]:flex-col">
  <div class="flex flex-col">
   <div class="relative w-full">
    <div class="swiper swiper-initialized swiper-horizontal !relative !h-[411px] !shrink-0 [.dweb_&amp;]:!w-[384px]">
     <div class="swiper-wrapper">
      <div class="swiper-slide swiper-slide-active" style="width: 384px;">
       <div> <img alt="Product image" fetchpriority="high" decoding="async" data-nimg="fill" class="object-contain" style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;color:transparent" src="<?= base_url() . '/uploads/' . $bk->gambar ?>"> </div>
      </div>
     </div>
     <div class="swiper-pagination swiper-pagination-bullets swiper-pagination-horizontal swiper-pagination-lock"> <span class="swiper-pagination-bullet swiper-pagination-bullet-active"></span> </div>
    </div>
    <div role="button" class="product-detail-prev-button gm-slider-prev absolute left-0 top-[186px] z-10 flex h-9 w-9 cursor-pointer items-center justify-center rounded-infinity border border-neutral-200 bg-white shadow-3 swiper-button-disabled swiper-button-lock"> <svg fill="currentColor" class="___12fm75w f1w7gpdv fez10in fg4l7m0" aria-hidden="true" width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
      <path d="M15.7 4.3a1 1 0 0 1 0 1.4L9.42 12l6.3 6.3a1 1 0 0 1-1.42 1.4l-7-7a1 1 0 0 1 0-1.4l7-7a1 1 0 0 1 1.42 0Z" fill="currentColor"></path>
     </svg> </div>
    <div role="button" class="product-detail-next-button gm-slider-next absolute right-0 top-[186px] z-10 flex h-9 w-9 cursor-pointer items-center justify-center rounded-infinity border border-neutral-200 bg-white shadow-3 swiper-button-disabled swiper-button-lock"> <svg fill="currentColor" class="___12fm75w f1w7gpdv fez10in fg4l7m0" aria-hidden="true" width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
      <path d="M8.3 4.3a1 1 0 0 0 0 1.4l6.29 6.3-6.3 6.3a1 1 0 1 0 1.42 1.4l7-7a1 1 0 0 0 0-1.4l-7-7a1 1 0 0 0-1.42 0Z" fill="currentColor"></path>
     </svg> </div>
   </div>
  </div>
  <div class="mt-4 min-w-0 flex-grow px-4 [.dweb_&amp;]:mt-0">
   <div class="flex">
    <div class="flex min-w-0 flex-grow flex-col gap-y-2">
     <div class="flex flex-col-reverse gap-y-2 [.dweb_&amp;]:flex-col">
      <div class="flex flex-col">
       <!-- <a class="decoration-from-font outline-none text-s-semibold focus:text-brand-700 active:text-brand-700 [.dweb_&amp;]:hover:text-brand-500 text-neutral-500 truncate" href="/author/author-dale-carnegie-associates?is_available_only=true">Dale Carnegie &amp; Associates</a> -->
       <h1 class="line-clamp-2 text-xl-extrabold text-neutral-600 [.dweb_&amp;]:text-3xl-extrabold"><?= $bk->judul_buku ?></h1>
      </div>
      <div class="flex items-center [.dweb_&amp;]:gap-y-1">
       <div class="flex flex-col">
        <div class="text-2xl-extrabold text-neutral-700 [.dweb_&amp;]:text-4xl-extrabold" ins-init-condition="#W2RhdGEtdGVzdGlkPXByb2R1Y3REZXRhaWxGaW5hbFByaWNlXTp2aXNpYmxl">Rp<?= number_format($bk->harga, 0, ',', '.') ?></div>
        <div class="flex items-center gap-x-1">
         <div> <span class="peer-disabled:cursor-not-allowed peer-disabled:opacity-70 text-red-500 bg-red-50 rounded-xs py-1 px-2 text-2xs-medium [.dweb_&amp;]:text-s-medium">20%</span> </div>
         <div class="text-xs-medium text-neutral-200 line-through [.dweb_&amp;]:text-s-medium">Rp75.000</div>
        </div>
       </div>
      </div>
     </div>
    </div>
   </div>
   <div class="mt-4 flex gap-x-2"> <button class="relative inline-flex items-center justify-center transition-colors focus-visible:outline-none disabled:pointer-events-none [&amp;:not(.button--loading)]:disabled:opacity-50 bg-white border border-transparent text-neutral-700 [.dweb_&amp;]:hover:bg-neutral-50 [.dweb_&amp;]:hover:text-neutral-700 active:bg-neutral-50 active:text-neutral-600 [&amp;:not(.button--loading)]:disabled:bg-white [&amp;:not(.button--loading)]:disabled:text-neutral-200 py-2 px-3 text-xs-extrabold rounded-xs">
     <div class="">
      <div class="flex items-center gap-2">
       <div> <svg fill="currentColor" class="___12fm75w f1w7gpdv fez10in fg4l7m0" aria-hidden="true" width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
         <path d="m10.5 16.8 6.24-6.3a4.4 4.4 0 0 0-.02-6.19 4.3 4.3 0 0 0-6.13-.01l-.6.6-.6-.61a4.3 4.3 0 0 0-6.13-.02 4.4 4.4 0 0 0 .02 6.2l6.27 6.33c.26.27.69.27.95 0ZM11.3 5a3.3 3.3 0 0 1 4.71.02 3.4 3.4 0 0 1 .02 4.78l-6 6.06-6.04-6.1a3.4 3.4 0 0 1-.02-4.78 3.3 3.3 0 0 1 4.7.01l.97.97c.2.2.51.2.7 0L11.3 5Z" fill="currentColor"></path>
        </svg> </div>
       <div class="text-s-extrabold text-neutral-700">Favorit</div>
      </div>
     </div>
    </button>
    <div role="separator" class="border-neutral-200 border-l-[1px] my-2"></div> <button class="relative inline-flex items-center justify-center transition-colors focus-visible:outline-none disabled:pointer-events-none [&amp;:not(.button--loading)]:disabled:opacity-50 bg-white border border-transparent text-neutral-700 [.dweb_&amp;]:hover:bg-neutral-50 [.dweb_&amp;]:hover:text-neutral-700 active:bg-neutral-50 active:text-neutral-600 [&amp;:not(.button--loading)]:disabled:bg-white [&amp;:not(.button--loading)]:disabled:text-neutral-200 text-xs-extrabold rounded-xs p-2" data-testid="shareTrigger" type="button" aria-haspopup="dialog" aria-expanded="false" aria-controls="radix-:Rd9a766:" data-state="closed">
     <div class="">
      <div class="flex items-center gap-2">
       <div> <svg fill="currentColor" class="___12fm75w f1w7gpdv fez10in fg4l7m0" aria-hidden="true" width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
         <path d="M17 5.5a2.5 2.5 0 0 1-4.47 1.54L7.92 9.35a2.5 2.5 0 0 1 0 1.3l4.61 2.3a2.5 2.5 0 1 1-.45.9l-4.61-2.3a2.5 2.5 0 1 1 0-3.1l4.61-2.3A2.5 2.5 0 1 1 17 5.5Z" fill="currentColor"></path>
        </svg> </div>
       <div class="text-s-extrabold text-neutral-700">Bagikan</div>
      </div>
     </div>
    </button>
   </div>
   <div class="mt-8">
    <div class="text-m-extrabold text-neutral-700">Format Buku</div>
    <div class="mt-3 flex">
     <div class="flex flex-wrap gap-2"> <button type="button" class="rounded-infinity flex items-center space-x-1 border px-4 py-2 text-s-medium outline-none transition border-neutral-700 bg-neutral-150 text-neutral-700 [.dweb_&amp;]:hover:border-neutral-700 focus-visible:border-neutral-150 active:border-neutral-150 [.dweb_&amp;]:hover:bg-neutral-50 focus-visible:bg-neutral-50 active:bg-neutral-50 pl-3" data-testid="productDetailVariantChip#0"> <svg data-testid="chipIcon" fill="currentColor" class="___12fm75w f1w7gpdv fez10in fg4l7m0" aria-hidden="true" width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
        <path d="M11 1H5a2 2 0 0 0-2 2v10c0 1.1.9 2 2 2h7.5a.5.5 0 0 0 0-1H5a1 1 0 0 1-1-1h8.5a.5.5 0 0 0 .5-.5V3a2 2 0 0 0-2-2ZM5 3.5h6c.28 0 .5.22.5.5v1a.5.5 0 0 1-.5.5H5a.5.5 0 0 1-.5-.5V4c0-.28.22-.5.5-.5Z" fill="currentColor"></path>
       </svg> <span class="truncate">Soft Cover</span> </button> </div>
    </div>
   </div>
   <div class="mt-4">
    <div class="text-m-extrabold text-neutral-700"></div>
    <div class="mt-3 flex">
     <!-- <button type="button" class="flex h-[48px] w-full items-center gap-x-4 rounded-m border-[1px] border-neutral-200 px-4 py-3 outline-none [.dweb_&amp;]:w-[488px] [.dweb_&amp;]:hover:enabled:border-neutral-700" data-testid="productDetailWarehouseTriggerButton">
            <svg class="text-neutral-700 ___12fm75w f1w7gpdv fez10in fg4l7m0" fill="currentColor" aria-hidden="true" width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path d="M10.5 14.5V22h-3v-7.5h3Zm6.76-1.5h-3.5a.75.75 0 0 0-.76.75v3.5c0 .42.34.75.75.75h3.5c.42 0 .76-.33.76-.75v-3.5a.75.75 0 0 0-.75-.75Zm-.76 1.5v2h-2v-2h2ZM8.17 7H3.5v1.17c0 1.18.88 2.15 2.02 2.3l.15.02h.16c1.24 0 2.25-.95 2.33-2.16V7Zm6.16 0H9.67v1.17c0 1.18.87 2.15 2.01 2.3l.16.02H12c1.23 0 2.24-.95 2.33-2.16V7Zm6.17 0h-4.67v1.17c0 1.18.88 2.15 2.02 2.3l.16.02h.16c1.23 0 2.24-.95 2.32-2.16V7ZM9.06 3.5H6.33l-1.86 2h3.98l.61-2Zm4.3 0h-2.73l-.62 2h3.97l-.61-2Zm4.31 0h-2.73l.61 2h3.98l-1.86-2ZM2.2 5.74l3.25-3.5c.12-.13.28-.2.45-.23L6 2h12c.17 0 .34.06.47.17l.08.07 3.27 3.53.03.04c.1.13.15.29.15.44v1.92c0 1-.38 1.9-1 2.58v10.5c0 .38-.28.7-.65.74l-.1.01H12v-8.25a.75.75 0 0 0-.75-.75h-4.5a.75.75 0 0 0-.75.75V22H3.75a.75.75 0 0 1-.74-.65v-10.6a3.82 3.82 0 0 1-1-2.39V6.3c-.02-.14.01-.28.09-.4l.05-.08.05-.07Z" fill="currentColor"></path>
            </svg>
            <div class="truncate">Gramedia Gajah Mada</div>
            <svg class="ml-auto rotate-0 text-neutral-700 transition ___12fm75w f1w7gpdv fez10in fg4l7m0" fill="currentColor" aria-hidden="true" width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path d="M4.3 8.3a1 1 0 0 1 1.4 0l6.3 6.29 6.3-6.3a1 1 0 1 1 1.4 1.42l-7 7a1 1 0 0 1-1.4 0l-7-7a1 1 0 0 1 0-1.42Z" fill="currentColor"></path>
            </svg>
          </button> -->
    </div>
   </div>
   <div class="mt-11">
    <div class="text-m-extrabold text-neutral-700">Deskripsi</div>
    <div class="mt-3 whitespace-pre-line text-justify text-s-medium text-neutral-500 line-clamp-3">Keterampilan komunikasi merupakan salah satu cara untuk meraih kesuksesan. Ketika sedang meniti karir seseorang tidak hanya harus pandai dalam kemampuan manajemen tetapi juga harus meningkatkan kemampuan komunikasinya dengan orang lain, baik di dalam maupun luar organisasi. Karena melalui komunikasi efektif nantinya akan dapat meningkatkan kinerja seseorang yang akan berdampak positif bagi perkembangan organisasi yang diikutinya. Ketika komunikasi tidak berjalan dengan baik atau efektif seringkali akan menimbulkan permasalahan. Misalnya dalam sebuah organisasi ketika melakukan rapat untuk mengambil sebuah keputusan, seringkali para anggota organisasi saling berdebat mempertahankan pendapat masing-masing. Mengkritik orang lain bukan hal yang dilarang, tetapi kritik tetap harus diletakkan pada tempat semestinya. Ketika terjadi saling mengkritik produktivitas berfikir menjadi tidak terbangun. Harus terjadi komunikasi yang kolaboratif dimana setiap individu tidak hanya saling mengkritik tetapi juga saling memberikan solusi, ide-ide kreatif untuk kepentingan organisasi tersebut. Sinopsis : Dalam buku tersebut Endro menuliskan berbagai upaya dalam membentuk atau membangun komunikasi efektif itu seperti apa. Mulai dari rahasia berkomunikasi secara efektif, menjadi pendengar yang sukses, bagaimana agar menjadi komunikator yang baik maupun bagaimana cara mengkritik. Ia berharap melalui buku tersebut orang akan mampu meningkatkan kemampuan dalam berkomunikasi dengan orang lain baik di dalam maupun luar organisasi. Daftar Isi : Bonus dalam paket : Informasi Lain : Judul : Sukses Berkomunikasi Penulis : Dale Carnegie &amp; Associate Penerbit : Gramedia Pustaka Utama ISBN : 9786020323404 Terbit : 29 Januari 2018 Halaman : 204 Lebar : 15.0 cm Berat : 0.55 kg</div>
    <div class="flex w-full cursor-pointer items-center justify-end gap-1 py-[2px] pr-1" type="button" aria-haspopup="dialog" aria-expanded="false" aria-controls="radix-:R1b9a766:"> <span href="" class="decoration-from-font outline-none text-xs-semibold text-neutral-700 focus:text-brand-700 active:text-brand-700 [.dweb_&amp;]:hover:text-brand-500 underline">Baca Selengkapnya</span> <svg fill="currentColor" class="___12fm75w f1w7gpdv fez10in fg4l7m0" aria-hidden="true" width="12" height="12" viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg">
      <path d="M2.22 4.47c.3-.3.77-.3 1.06 0L6 7.19l2.72-2.72a.75.75 0 0 1 1.06 1.06L6.53 8.78c-.3.3-.77.3-1.06 0L2.22 5.53a.75.75 0 0 1 0-1.06Z" fill="currentColor"></path>
     </svg> </div>
   </div>

   <!-- <div class="mt-8">
    <div class="text-m-extrabold text-neutral-700">Detail Buku</div>
    <div class="mt-3">
     <div class="flex w-full min-w-0 flex-wrap gap-y-4">
      <div class="min-w-0 shrink-0 grow-0 basis-1/2 overflow-hidden [&amp;:nth-child(odd)]:pr-4">
       <div class="text-xs-medium text-neutral-500">Penerbit</div>
       <div class="truncate text-s-medium text-neutral-700"> <a href="https://www.gramedia.com/vendor/gramedia-pustaka-utama" class="decoration-from-font outline-none text-s-semibold text-neutral-700 focus:text-brand-700 active:text-brand-700 [.dweb_&amp;]:hover:text-brand-500 underline">Gramedia Pustaka Utama</a> </div>
      </div>
      <div class="min-w-0 shrink-0 grow-0 basis-1/2 overflow-hidden [&amp;:nth-child(odd)]:pr-4">
       <div class="text-xs-medium text-neutral-500">Tanggal Terbit</div>
       <div class="truncate text-s-medium text-neutral-700">29 Jan 2018</div>
      </div>
      <div class="min-w-0 shrink-0 grow-0 basis-1/2 overflow-hidden [&amp;:nth-child(odd)]:pr-4">
       <div class="text-xs-medium text-neutral-500">ISBN</div>
       <div class="truncate text-s-medium text-neutral-700">9786020323404</div>
      </div>
      <div class="min-w-0 shrink-0 grow-0 basis-1/2 overflow-hidden [&amp;:nth-child(odd)]:pr-4">
       <div class="text-xs-medium text-neutral-500">Halaman</div>
       <div class="truncate text-s-medium text-neutral-700">204</div>
      </div>
      <div class="min-w-0 shrink-0 grow-0 basis-1/2 overflow-hidden [&amp;:nth-child(odd)]:pr-4">
       <div class="text-xs-medium text-neutral-500">Bahasa</div>
       <div class="truncate text-s-medium text-neutral-700">Indonesia</div>
      </div>
      <div class="min-w-0 shrink-0 grow-0 basis-1/2 overflow-hidden [&amp;:nth-child(odd)]:pr-4">
       <div class="text-xs-medium text-neutral-500">Panjang</div>
       <div class="truncate text-s-medium text-neutral-700">23.0 cm</div>
      </div>
      <div class="min-w-0 shrink-0 grow-0 basis-1/2 overflow-hidden [&amp;:nth-child(odd)]:pr-4">
       <div class="text-xs-medium text-neutral-500">Lebar</div>
       <div class="truncate text-s-medium text-neutral-700">15.0 cm</div>
      </div>
      <div class="min-w-0 shrink-0 grow-0 basis-1/2 overflow-hidden [&amp;:nth-child(odd)]:pr-4">
       <div class="text-xs-medium text-neutral-500">Berat</div>
       <div class="truncate text-s-medium text-neutral-700">0.55 kg</div>
      </div>
     </div>
    </div>
   </div> -->
   
  </div>
 </div>
 <div class="[.dweb_&amp;]:m-container relative mx-auto mt-[50px] flex flex-col gap-x-8 gap-y-10 [.mweb_&amp;]:mt-7 [.mweb_&amp;]:flex-col [.mweb_&amp;]:gap-y-3 [.mweb_&amp;]:pb-[96px]">
  <div class="product-slider-1q9y3nz product-slider">
   <div class="flex items-center gap-x-3 px-4 py-2">
    <div class="truncate text-2xl-extrabold text-neutral-700 [.dweb_&amp;]:max-w-[1000px] [.mweb_&amp;]:text-l-extrabold" data-testid="productSliderTitle">Produk Terkait</div>
   </div>
   <div class="relative">
    <div class="swiper swiper-initialized swiper-horizontal swiper-backface-hidden">
     <div class="swiper-wrapper" style="transition-duration: 0ms; transition-delay: 0ms; transform: translate3d(16px, 0px, 0px);">
      <div class="swiper-slide swiper-slide-active !w-[136px] py-4 [.dweb_&amp;]:!w-[160px]" style="margin-right: 16px;">
       <div class="flex-shrink-0 rounded-m border-[1px] border-neutral-150 bg-white cursor-pointer transition-all duration-200 ease-in-out [.dweb_&amp;]:hover:shadow-2 ProductCard_productCard__fGBQ_ relative flex flex-grow-0 flex-col justify-between overflow-hidden"> <button class="group/item flex items-center justify-center ProductCard_favouriteSwitch__nbjck pointer-events-auto absolute right-0 top-0 h-9 w-9"> <img alt="Favourite switch" loading="lazy" width="20" height="20" decoding="async" data-nimg="1" class="absolute transition-all group-active/item:scale-75" src="https://static.gramedia.net/_next/static/media/favourite-off.7eeb792d.svg" style="color: transparent;"> </button> <a href="https://www.gramedia.com/products/when-the-sky-is-blooming">
         <div class="ProductCard_cardContent__fawWr flex flex-col gap-y-2 p-4">
          <div class="ProductCard_imageWrapper__WWY2H relative mx-auto">
           <div> <img alt="When the Sky is Blooming" loading="lazy" decoding="async" data-nimg="fill" class="object-contain" src="https://image.gramedia.net/rs:fit:256:0/plain/https://cdn.gramedia.com/uploads/products/3hl-1-7imn.jpg" style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;"> </div>
          </div>
          <div class="relative flex-grow">
           <div class="truncate text-2xs-medium text-neutral-500">Ilana Tan</div>
           <h2 class="line-clamp-2 text-xs-medium text-neutral-700">When the Sky is Blooming</h2>
          </div>
          <div class="relative flex flex-col">
           <div class="text-s-extrabold text-neutral-700">Rp109.000</div>
           <div class="ProductCard_priceWrapper__3fcaX flex items-center gap-x-1"></div>
          </div>
         </div>
        </a> </div>
      </div>
      <div class="swiper-slide swiper-slide-next !w-[136px] py-4 [.dweb_&amp;]:!w-[160px]" data-testid="productSliderSlider#1" style="margin-right: 16px;">
       <div class="flex-shrink-0 rounded-m border-[1px] border-neutral-150 bg-white cursor-pointer transition-all duration-200 ease-in-out [.dweb_&amp;]:hover:shadow-2 ProductCard_productCard__fGBQ_ relative flex flex-grow-0 flex-col justify-between overflow-hidden" data-testid="productSliderProductCard#1"  > <button class="group/item flex items-center justify-center ProductCard_favouriteSwitch__nbjck pointer-events-auto absolute right-0 top-0 h-9 w-9"> <img alt="Favourite switch" loading="lazy" width="20" height="20" decoding="async" data-nimg="1" class="absolute transition-all group-active/item:scale-75" src="https://static.gramedia.net/_next/static/media/favourite-off.7eeb792d.svg" style="color: transparent;"> </button> <a  href="https://www.gramedia.com/products/sword-art-online-008-early-and-late">
         <div class="ProductCard_cardContent__fawWr flex flex-col gap-y-2 p-4">
          <div class="ProductCard_imageWrapper__WWY2H relative mx-auto">
           <div class="ProductCard_oosLabelBg__Xb3JX absolute -inset-x-4 top-0 flex h-full items-center justify-center"> <span class="peer-disabled:cursor-not-allowed peer-disabled:opacity-70 text-red-500 bg-red-50 text-s-medium rounded-xs py-1 px-2 opacity-1" data-testid="productCardOosLabel" >Stok Habis</span> </div>
           <div > <img alt="Sword Art Online 008 Early and Late" loading="lazy" decoding="async" data-nimg="fill" class="object-contain" src="https://image.gramedia.net/rs:fit:256:0/plain/https://cdn.gramedia.com/uploads/products/t7y--on5-o.png" style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;"> </div>
          </div>
          <div class="relative flex-grow">
           <div class="ProductCard_oosLabelBg__Xb3JX absolute flex h-full w-full items-center justify-center"></div>
           <div class="truncate text-2xs-medium text-neutral-200">REKI KAWAHARA / ABEC</div>
           <h2 class="line-clamp-2 text-xs-medium text-neutral-700">Sword Art Online 008 Early and Late</h2>
          </div>
          <div class="relative flex flex-col">
           <div class="ProductCard_oosLabelBg__Xb3JX absolute flex h-full w-full items-center justify-center"></div>
           <div class="text-s-extrabold text-neutral-700">Rp105.000</div>
           <div class="ProductCard_priceWrapper__3fcaX flex items-center gap-x-1"></div>
          </div>
         </div>
        </a> </div>
      </div>
      <div class="swiper-slide !w-[136px] py-4 [.dweb_&amp;]:!w-[160px]" style="margin-right: 16px;">
       <div class="flex-shrink-0 rounded-m border-[1px] border-neutral-150 bg-white cursor-pointer transition-all duration-200 ease-in-out [.dweb_&amp;]:hover:shadow-2 ProductCard_productCard__fGBQ_ relative flex flex-grow-0 flex-col justify-between overflow-hidden" data-testid="productSliderProductCard#2"  > <button class="group/item flex items-center justify-center ProductCard_favouriteSwitch__nbjck pointer-events-auto absolute right-0 top-0 h-9 w-9"> <img alt="Favourite switch" loading="lazy" width="20" height="20" decoding="async" data-nimg="1" class="absolute transition-all group-active/item:scale-75" src="https://static.gramedia.net/_next/static/media/favourite-off.7eeb792d.svg" style="color: transparent;"> </button> <a  href="https://www.gramedia.com/products/manajemen-strategis-7">
         <div class="ProductCard_cardContent__fawWr flex flex-col gap-y-2 p-4">
          <div class="ProductCard_imageWrapper__WWY2H relative mx-auto">
           <div > <img alt="Manajemen Strategis" loading="lazy" decoding="async" data-nimg="fill" class="object-contain" src="https://image.gramedia.net/rs:fit:256:0/plain/https://cdn.gramedia.com/uploads/products/jign-g1n45.jpg" style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;"> </div>
          </div>
          <div class="relative flex-grow">
           <div class="truncate text-2xs-medium text-neutral-500">Dr. Sopiah, M.Pd., M.M. Dr. Etta Mamang Sangadji, M.Si.</div>
           <h2 class="line-clamp-2 text-xs-medium text-neutral-700">Manajemen Strategis</h2>
          </div>
          <div class="relative flex flex-col">
           <div class="text-s-extrabold text-neutral-700">Rp156.000</div>
           <div class="ProductCard_priceWrapper__3fcaX flex items-center gap-x-1"></div>
          </div>
         </div>
        </a> </div>
      </div>
      <div class="swiper-slide !w-[136px] py-4 [.dweb_&amp;]:!w-[160px]" data-testid="productSliderSlider#3" style="margin-right: 16px;">
       <div class="flex-shrink-0 rounded-m border-[1px] border-neutral-150 bg-white cursor-pointer transition-all duration-200 ease-in-out [.dweb_&amp;]:hover:shadow-2 ProductCard_productCard__fGBQ_ relative flex flex-grow-0 flex-col justify-between overflow-hidden" data-testid="productSliderProductCard#3"  > <button class="group/item flex items-center justify-center ProductCard_favouriteSwitch__nbjck pointer-events-auto absolute right-0 top-0 h-9 w-9"> <img alt="Favourite switch" loading="lazy" width="20" height="20" decoding="async" data-nimg="1" class="absolute transition-all group-active/item:scale-75" src="https://static.gramedia.net/_next/static/media/favourite-off.7eeb792d.svg" style="color: transparent;"> </button> <a  href="https://www.gramedia.com/products/perpajakan-pusat--daerah-perspektif-indonesia">
         <div class="ProductCard_cardContent__fawWr flex flex-col gap-y-2 p-4">
          <div class="ProductCard_imageWrapper__WWY2H relative mx-auto">
           <div > <img alt="Perpajakan Pusat &amp; Daerah, Perspektif Indonesia" loading="lazy" decoding="async" data-nimg="fill" class="object-contain" src="https://image.gramedia.net/rs:fit:256:0/plain/https://cdn.gramedia.com/uploads/products/ak96pehduk.jpg" style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;"> </div>
          </div>
          <div class="relative flex-grow">
           <div class="truncate text-2xs-medium text-neutral-500">Riana Mayasari</div>
           <h2 class="line-clamp-2 text-xs-medium text-neutral-700">Perpajakan Pusat &amp; Daerah, Perspektif Indonesia</h2>
          </div>
          <div class="relative flex flex-col">
           <div class="text-s-extrabold text-neutral-700">Rp135.000</div>
           <div class="ProductCard_priceWrapper__3fcaX flex items-center gap-x-1"></div>
          </div>
         </div>
        </a> </div>
      </div>
      <div class="swiper-slide !w-[136px] py-4 [.dweb_&amp;]:!w-[160px]" style="margin-right: 16px;">
       <div class="flex-shrink-0 rounded-m border-[1px] border-neutral-150 bg-white cursor-pointer transition-all duration-200 ease-in-out [.dweb_&amp;]:hover:shadow-2 ProductCard_productCard__fGBQ_ relative flex flex-grow-0 flex-col justify-between overflow-hidden" data-testid="productSliderProductCard#4"  > <button class="group/item flex items-center justify-center ProductCard_favouriteSwitch__nbjck pointer-events-auto absolute right-0 top-0 h-9 w-9"> <img alt="Favourite switch" loading="lazy" width="20" height="20" decoding="async" data-nimg="1" class="absolute transition-all group-active/item:scale-75" src="https://static.gramedia.net/_next/static/media/favourite-off.7eeb792d.svg" style="color: transparent;"> </button> <a  href="https://www.gramedia.com/products/level-comic-rooster-fighter-01">
         <div class="ProductCard_cardContent__fawWr flex flex-col gap-y-2 p-4">
          <div class="ProductCard_imageWrapper__WWY2H relative mx-auto">
           <div > <img alt="Level Comic: Rooster Fighter 01" loading="lazy" decoding="async" data-nimg="fill" class="object-contain" src="https://image.gramedia.net/rs:fit:256:0/plain/https://cdn.gramedia.com/uploads/products/ee-320739t.jpg" style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;"> </div>
          </div>
          <div class="relative flex-grow">
           <div class="truncate text-2xs-medium text-neutral-500">Shu Sakuratani</div>
           <h2 class="line-clamp-2 text-xs-medium text-neutral-700">Level Comic: Rooster Fighter 01</h2>
          </div>
          <div class="relative flex flex-col">
           <div class="text-s-extrabold text-neutral-700">Rp45.000</div>
           <div class="ProductCard_priceWrapper__3fcaX flex items-center gap-x-1"></div>
          </div>
         </div>
        </a> </div>
      </div>
      <div class="swiper-slide !w-[136px] py-4 [.dweb_&amp;]:!w-[160px]" data-testid="productSliderSlider#5" style="margin-right: 16px;">
       <div class="flex-shrink-0 rounded-m border-[1px] border-neutral-150 bg-white cursor-pointer transition-all duration-200 ease-in-out [.dweb_&amp;]:hover:shadow-2 ProductCard_productCard__fGBQ_ relative flex flex-grow-0 flex-col justify-between overflow-hidden" data-testid="productSliderProductCard#5"  > <button class="group/item flex items-center justify-center ProductCard_favouriteSwitch__nbjck pointer-events-auto absolute right-0 top-0 h-9 w-9"> <img alt="Favourite switch" loading="lazy" width="20" height="20" decoding="async" data-nimg="1" class="absolute transition-all group-active/item:scale-75" src="https://static.gramedia.net/_next/static/media/favourite-off.7eeb792d.svg" style="color: transparent;"> </button> <a  href="https://www.gramedia.com/products/mims-petunjuk-konsultasi-edisi-24-tahun-20242025">
         <div class="ProductCard_cardContent__fawWr flex flex-col gap-y-2 p-4">
          <div class="ProductCard_imageWrapper__WWY2H relative mx-auto">
           <div > <img alt="Mims Petunjuk Konsultasi Edisi 24 Tahun 2024/2025" loading="lazy" decoding="async" data-nimg="fill" class="object-contain" src="https://image.gramedia.net/rs:fit:256:0/plain/https://cdn.gramedia.com/uploads/products/10lsvtntcu.jpg" style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;"> </div>
          </div>
          <div class="relative flex-grow">
           <div class="truncate text-2xs-medium text-neutral-500">Medidata Indonesia</div>
           <h2 class="line-clamp-2 text-xs-medium text-neutral-700">Mims Petunjuk Konsultasi Edisi 24 Tahun 2024/2025</h2>
          </div>
          <div class="relative flex flex-col">
           <div class="text-s-extrabold text-neutral-700">Rp198.000</div>
           <div class="ProductCard_priceWrapper__3fcaX flex items-center gap-x-1"></div>
          </div>
         </div>
        </a> </div>
      </div>
      <div class="swiper-slide !w-[136px] py-4 [.dweb_&amp;]:!w-[160px]" data-testid="productSliderSlider#6" style="margin-right: 16px;">
       <div class="flex-shrink-0 rounded-m border-[1px] border-neutral-150 bg-white cursor-pointer transition-all duration-200 ease-in-out [.dweb_&amp;]:hover:shadow-2 ProductCard_productCard__fGBQ_ relative flex flex-grow-0 flex-col justify-between overflow-hidden" data-testid="productSliderProductCard#6"  > <button class="group/item flex items-center justify-center ProductCard_favouriteSwitch__nbjck pointer-events-auto absolute right-0 top-0 h-9 w-9"> <img alt="Favourite switch" loading="lazy" width="20" height="20" decoding="async" data-nimg="1" class="absolute transition-all group-active/item:scale-75" src="https://static.gramedia.net/_next/static/media/favourite-off.7eeb792d.svg" style="color: transparent;"> </button> <a  href="https://www.gramedia.com/products/suara-publik-bergaung-di-mk">
         <div class="ProductCard_cardContent__fawWr flex flex-col gap-y-2 p-4">
          <div class="ProductCard_imageWrapper__WWY2H relative mx-auto">
           <div > <img alt="Suara Publik Bergaung di MK" loading="lazy" decoding="async" data-nimg="fill" class="object-contain" src="https://image.gramedia.net/rs:fit:256:0/plain/https://cdn.gramedia.com/uploads/products/9k3ara9ide.jpg" style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;"> </div>
          </div>
          <div class="relative flex-grow">
           <div class="truncate text-2xs-medium text-neutral-500">Susana Rita Kumalasanti, L. Wilardjo, Hidayat Salam, dkk.</div>
           <h2 class="line-clamp-2 text-xs-medium text-neutral-700">Suara Publik Bergaung di MK</h2>
          </div>
          <div class="relative flex flex-col">
           <div class="text-s-extrabold text-neutral-700">Rp99.000</div>
           <div class="ProductCard_priceWrapper__3fcaX flex items-center gap-x-1"></div>
          </div>
         </div>
        </a> </div>
      </div>
      <div class="swiper-slide !w-[136px] py-4 [.dweb_&amp;]:!w-[160px]" data-testid="productSliderSlider#7" style="margin-right: 16px;">
       <div class="flex-shrink-0 rounded-m border-[1px] border-neutral-150 bg-white cursor-pointer transition-all duration-200 ease-in-out [.dweb_&amp;]:hover:shadow-2 ProductCard_productCard__fGBQ_ relative flex flex-grow-0 flex-col justify-between overflow-hidden" data-testid="productSliderProductCard#7"  > <button class="group/item flex items-center justify-center ProductCard_favouriteSwitch__nbjck pointer-events-auto absolute right-0 top-0 h-9 w-9"> <img alt="Favourite switch" loading="lazy" width="20" height="20" decoding="async" data-nimg="1" class="absolute transition-all group-active/item:scale-75" src="https://static.gramedia.net/_next/static/media/favourite-off.7eeb792d.svg" style="color: transparent;"> </button> <a  href="https://www.gramedia.com/products/keadilan-elektoral-di-mk">
         <div class="ProductCard_cardContent__fawWr flex flex-col gap-y-2 p-4">
          <div class="ProductCard_imageWrapper__WWY2H relative mx-auto">
           <div > <img alt="Keadilan Elektoral di MK" loading="lazy" decoding="async" data-nimg="fill" class="object-contain" src="https://image.gramedia.net/rs:fit:256:0/plain/https://cdn.gramedia.com/uploads/products/6oe77kd-o7.jpeg" style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;"> </div>
          </div>
          <div class="relative flex-grow">
           <div class="truncate text-2xs-medium text-neutral-500">Tri Agung Kristanto</div>
           <h2 class="line-clamp-2 text-xs-medium text-neutral-700">Keadilan Elektoral di MK</h2>
          </div>
          <div class="relative flex flex-col">
           <div class="text-s-extrabold text-neutral-700">Rp119.000</div>
           <div class="ProductCard_priceWrapper__3fcaX flex items-center gap-x-1"></div>
          </div>
         </div>
        </a> </div>
      </div>
      <div class="swiper-slide !w-[136px] py-4 [.dweb_&amp;]:!w-[160px]" data-testid="productSliderSlider#8" style="margin-right: 16px;">
       <div class="flex-shrink-0 rounded-m border-[1px] border-neutral-150 bg-white cursor-pointer transition-all duration-200 ease-in-out [.dweb_&amp;]:hover:shadow-2 ProductCard_productCard__fGBQ_ relative flex flex-grow-0 flex-col justify-between overflow-hidden" data-testid="productSliderProductCard#8"  > <button class="group/item flex items-center justify-center ProductCard_favouriteSwitch__nbjck pointer-events-auto absolute right-0 top-0 h-9 w-9"> <img alt="Favourite switch" loading="lazy" width="20" height="20" decoding="async" data-nimg="1" class="absolute transition-all group-active/item:scale-75" src="https://static.gramedia.net/_next/static/media/favourite-off.7eeb792d.svg" style="color: transparent;"> </button> <a  href="https://www.gramedia.com/products/antara-hukum-dan-politik-membedah-putusan-mk-dalam-sengketa-pilpres-2024">
         <div class="ProductCard_cardContent__fawWr flex flex-col gap-y-2 p-4">
          <div class="ProductCard_imageWrapper__WWY2H relative mx-auto">
           <div > <img alt="Antara Hukum dan Politik: Membedah Putusan MK dalam Sengketa Pilpres 2024" loading="lazy" decoding="async" data-nimg="fill" class="object-contain" src="https://image.gramedia.net/rs:fit:256:0/plain/https://cdn.gramedia.com/uploads/products/3keii-ihh-.jpeg" style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;"> </div>
          </div>
          <div class="relative flex-grow">
           <div class="truncate text-2xs-medium text-neutral-500">Damian Agata Yuvens, S.H. M.L.D., dkk</div>
           <h2 class="line-clamp-2 text-xs-medium text-neutral-700">Antara Hukum dan Politik: Membedah Putusan MK dalam Sengketa Pilpres 2024</h2>
          </div>
          <div class="relative flex flex-col">
           <div class="text-s-extrabold text-neutral-700">Rp149.000</div>
           <div class="ProductCard_priceWrapper__3fcaX flex items-center gap-x-1"></div>
          </div>
         </div>
        </a> </div>
      </div>
      <div class="swiper-slide !w-[136px] py-4 [.dweb_&amp;]:!w-[160px]" data-testid="productSliderSlider#9" style="margin-right: 16px;">
       <div class="flex-shrink-0 rounded-m border-[1px] border-neutral-150 bg-white cursor-pointer transition-all duration-200 ease-in-out [.dweb_&amp;]:hover:shadow-2 ProductCard_productCard__fGBQ_ relative flex flex-grow-0 flex-col justify-between overflow-hidden" data-testid="productSliderProductCard#9"  > <button class="group/item flex items-center justify-center ProductCard_favouriteSwitch__nbjck pointer-events-auto absolute right-0 top-0 h-9 w-9"> <img alt="Favourite switch" loading="lazy" width="20" height="20" decoding="async" data-nimg="1" class="absolute transition-all group-active/item:scale-75" src="https://static.gramedia.net/_next/static/media/favourite-off.7eeb792d.svg" style="color: transparent;"> </button> <a  href="https://www.gramedia.com/products/kompasiana-essai-jurnalistik-tentang-berbagai-masalah-pk-ojong">
         <div class="ProductCard_cardContent__fawWr flex flex-col gap-y-2 p-4">
          <div class="ProductCard_imageWrapper__WWY2H relative mx-auto">
           <div > <img alt="Kompasiana Essai Jurnalistik tentang Berbagai Masalah PK Ojong" loading="lazy" decoding="async" data-nimg="fill" class="object-contain" src="https://image.gramedia.net/rs:fit:256:0/plain/https://cdn.gramedia.com/uploads/products/4inimo2ac0.jpg" style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;"> </div>
          </div>
          <div class="relative flex-grow">
           <div class="truncate text-2xs-medium text-neutral-500">P.K. Ojong</div>
           <h2 class="line-clamp-2 text-xs-medium text-neutral-700">Kompasiana Essai Jurnalistik tentang Berbagai Masalah PK Ojong</h2>
          </div>
          <div class="relative flex flex-col">
           <div class="text-s-extrabold text-neutral-700">Rp399.000</div>
           <div class="ProductCard_priceWrapper__3fcaX flex items-center gap-x-1"></div>
          </div>
         </div>
        </a> </div>
      </div>
     </div>
    </div>
    <div class="gm-slider-prev absolute -right-1 top-1/2 z-10 hidden -translate-y-1/2 items-center duration-200 ease-in-out [.dweb_&amp;]:block"> <button class="flex items-center rounded-infinity outline-none disabled:pointer-events-none bg-white border border-neutral-200 active:bg-neutral-50 active:border-neutral-200 [.dweb_&amp;]:enabled:hover:border-neutral-700 w-9 h-9 shadow-3" data-testid="productSliderNext"> <svg class="flex-grow text-neutral-700 ___12fm75w f1w7gpdv fez10in fg4l7m0" fill="currentColor" aria-hidden="true" width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" style="font-size: 24px;">
       <path d="M8.3 4.3a1 1 0 0 0 0 1.4l6.29 6.3-6.3 6.3a1 1 0 1 0 1.42 1.4l7-7a1 1 0 0 0 0-1.4l-7-7a1 1 0 0 0-1.42 0Z" fill="currentColor"></path>
      </svg> </button> </div>
    <div class="gm-slider-next absolute -left-1 top-1/2 z-10 hidden -translate-y-1/2 items-center duration-200 ease-in-out [.dweb_&amp;]:block swiper-button-disabled"> <button class="flex items-center rounded-infinity outline-none disabled:pointer-events-none bg-white border border-neutral-200 active:bg-neutral-50 active:border-neutral-200 [.dweb_&amp;]:enabled:hover:border-neutral-700 w-9 h-9 shadow-3" data-testid="productSliderPrev"> <svg class="flex-grow text-neutral-700 ___12fm75w f1w7gpdv fez10in fg4l7m0" fill="currentColor" aria-hidden="true" width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" style="font-size: 24px;">
       <path d="M15.7 4.3a1 1 0 0 1 0 1.4L9.42 12l6.3 6.3a1 1 0 0 1-1.42 1.4l-7-7a1 1 0 0 1 0-1.4l7-7a1 1 0 0 1 1.42 0Z" fill="currentColor"></path>
      </svg> </button> </div>
   </div>
  </div>
  <div class="product-slider-b69e42 product-slider" data-testid="productSlider" data-sentry-component="ProductCardSlider" data-sentry-source-file="ProductCardSlider.tsx">
   <div class="flex items-center gap-x-3 px-4 py-2">
    <div class="truncate text-2xl-extrabold text-neutral-700 [.dweb_&amp;]:max-w-[1000px] [.mweb_&amp;]:text-l-extrabold" data-testid="productSliderTitle">Produk Menarik Lainnya</div>
   </div>
   <div class="relative">
    <div class="swiper swiper-initialized swiper-horizontal swiper-backface-hidden" data-sentry-component="SwiperComponent" data-sentry-source-file="Swiper.tsx">
     <div class="swiper-wrapper" style="transition-duration: 0ms; transition-delay: 0ms; transform: translate3d(16px, 0px, 0px);">
      <div class="swiper-slide swiper-slide-active !w-[136px] py-4 [.dweb_&amp;]:!w-[160px]" data-testid="productSliderSlider#0" style="margin-right: 16px;">
       <div class="flex-shrink-0 rounded-m border-[1px] border-neutral-150 bg-white cursor-pointer transition-all duration-200 ease-in-out [.dweb_&amp;]:hover:shadow-2 ProductCard_productCard__fGBQ_ relative flex flex-grow-0 flex-col justify-between overflow-hidden" data-testid="productSliderProductCard#0"  > <button class="group/item flex items-center justify-center ProductCard_favouriteSwitch__nbjck pointer-events-auto absolute right-0 top-0 h-9 w-9"> <img alt="Favourite switch" loading="lazy" width="20" height="20" decoding="async" data-nimg="1" class="absolute transition-all group-active/item:scale-75" src="https://static.gramedia.net/_next/static/media/favourite-off.7eeb792d.svg" style="color: transparent;"> </button> <a  href="https://www.gramedia.com/products/one-piece-87">
         <div class="ProductCard_cardContent__fawWr flex flex-col gap-y-2 p-4">
          <div class="ProductCard_imageWrapper__WWY2H relative mx-auto">
           <div > <img alt="One Piece Vol.87" loading="lazy" decoding="async" data-nimg="fill" class="object-contain" src="https://image.gramedia.net/rs:fit:256:0/plain/https://cdn.gramedia.com/uploads/items/9786020488424_onepiece-87.jpg" style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;"> </div>
          </div>
          <div class="relative flex-grow">
           <div class="truncate text-2xs-medium text-neutral-500">Eiichiro Oda</div>
           <h2 class="line-clamp-2 text-xs-medium text-neutral-700">One Piece Vol.87</h2>
          </div>
          <div class="relative flex flex-col">
           <div class="text-s-extrabold text-neutral-700">Rp16.000</div>
           <div class="ProductCard_priceWrapper__3fcaX flex items-center gap-x-1">
            <div class="ProductCard_discount__Q8rno inline-block rounded-2xs bg-red-50 px-1 text-2xs-medium text-red-500" data-testid="productCardDiscount">50%</div>
            <div class="text-2xs-medium font-normal text-neutral-200 line-through" data-testid="productCardSlicePrice">Rp32.000</div>
           </div>
          </div>
         </div>
        </a> </div>
      </div>
      <div class="swiper-slide swiper-slide-next !w-[136px] py-4 [.dweb_&amp;]:!w-[160px]" data-testid="productSliderSlider#1" style="margin-right: 16px;">
       <div class="flex-shrink-0 rounded-m border-[1px] border-neutral-150 bg-white cursor-pointer transition-all duration-200 ease-in-out [.dweb_&amp;]:hover:shadow-2 ProductCard_productCard__fGBQ_ relative flex flex-grow-0 flex-col justify-between overflow-hidden" data-testid="productSliderProductCard#1"  > <button class="group/item flex items-center justify-center ProductCard_favouriteSwitch__nbjck pointer-events-auto absolute right-0 top-0 h-9 w-9"> <img alt="Favourite switch" loading="lazy" width="20" height="20" decoding="async" data-nimg="1" class="absolute transition-all group-active/item:scale-75" src="https://static.gramedia.net/_next/static/media/favourite-off.7eeb792d.svg" style="color: transparent;"> </button> <a  href="https://www.gramedia.com/products/atlas-indonesia-dunia-super-lengkap-1">
         <div class="ProductCard_cardContent__fawWr flex flex-col gap-y-2 p-4">
          <div class="ProductCard_imageWrapper__WWY2H relative mx-auto">
           <div > <img alt="Atlas Indonesia &amp; Dunia Super Lengkap" loading="lazy" decoding="async" data-nimg="fill" class="object-contain" src="https://image.gramedia.net/rs:fit:256:0/plain/https://cdn.gramedia.com/uploads/picture_meta/2024/5/22/4tvbfwrnrjfx4hqudaghnb.jpg" style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;"> </div>
          </div>
          <div class="relative flex-grow">
           <div class="truncate text-2xs-medium text-neutral-500">Tim BIP</div>
           <h2 class="line-clamp-2 text-xs-medium text-neutral-700">Atlas Indonesia &amp; Dunia Super Lengkap</h2>
          </div>
          <div class="relative flex flex-col">
           <div class="text-s-extrabold text-neutral-700">Rp76.000</div>
           <div class="ProductCard_priceWrapper__3fcaX flex items-center gap-x-1">
            <div class="ProductCard_discount__Q8rno inline-block rounded-2xs bg-red-50 px-1 text-2xs-medium text-red-500" data-testid="productCardDiscount">20%</div>
            <div class="text-2xs-medium font-normal text-neutral-200 line-through" data-testid="productCardSlicePrice">Rp95.000</div>
           </div>
          </div>
         </div>
        </a> </div>
      </div>
      <div class="swiper-slide !w-[136px] py-4 [.dweb_&amp;]:!w-[160px]" data-testid="productSliderSlider#2" style="margin-right: 16px;">
       <div class="flex-shrink-0 rounded-m border-[1px] border-neutral-150 bg-white cursor-pointer transition-all duration-200 ease-in-out [.dweb_&amp;]:hover:shadow-2 ProductCard_productCard__fGBQ_ relative flex flex-grow-0 flex-col justify-between overflow-hidden" data-testid="productSliderProductCard#2"  > <button class="group/item flex items-center justify-center ProductCard_favouriteSwitch__nbjck pointer-events-auto absolute right-0 top-0 h-9 w-9"> <img alt="Favourite switch" loading="lazy" width="20" height="20" decoding="async" data-nimg="1" class="absolute transition-all group-active/item:scale-75" src="https://static.gramedia.net/_next/static/media/favourite-off.7eeb792d.svg" style="color: transparent;"> </button> <a  href="https://www.gramedia.com/products/mommyclopedia-tanya-jawab-tentang-nutrisi-di-1000-hari-pertama-kehidupan-anak">
         <div class="ProductCard_cardContent__fawWr flex flex-col gap-y-2 p-4">
          <div class="ProductCard_imageWrapper__WWY2H relative mx-auto">
           <div > <img alt="Mommyclopedia: Tanya-jawab tentang nutrisi di 1000 hari pertama kehidupan anak" loading="lazy" decoding="async" data-nimg="fill" class="object-contain" src="https://image.gramedia.net/rs:fit:256:0/plain/https://cdn.gramedia.com/uploads/images/1/41664/image_highres/ID_GPU2018MTH02MTTNDHPKA.jpg" style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;"> </div>
          </div>
          <div class="relative flex-grow">
           <div class="truncate text-2xs-medium text-neutral-500">dr. Meta Hanindita, Sp.A</div>
           <h2 class="line-clamp-2 text-xs-medium text-neutral-700">Mommyclopedia: Tanya-jawab tentang nutrisi di 1000 hari pertama kehidupan anak</h2>
          </div>
          <div class="relative flex flex-col">
           <div class="text-s-extrabold text-neutral-700">Rp50.400</div>
           <div class="ProductCard_priceWrapper__3fcaX flex items-center gap-x-1">
            <div class="ProductCard_discount__Q8rno inline-block rounded-2xs bg-red-50 px-1 text-2xs-medium text-red-500" data-testid="productCardDiscount">20%</div>
            <div class="text-2xs-medium font-normal text-neutral-200 line-through" data-testid="productCardSlicePrice">Rp63.000</div>
           </div>
          </div>
         </div>
        </a> </div>
      </div>
      <div class="swiper-slide !w-[136px] py-4 [.dweb_&amp;]:!w-[160px]" data-testid="productSliderSlider#3" style="margin-right: 16px;">
       <div class="flex-shrink-0 rounded-m border-[1px] border-neutral-150 bg-white cursor-pointer transition-all duration-200 ease-in-out [.dweb_&amp;]:hover:shadow-2 ProductCard_productCard__fGBQ_ relative flex flex-grow-0 flex-col justify-between overflow-hidden" data-testid="productSliderProductCard#3"  > <button class="group/item flex items-center justify-center ProductCard_favouriteSwitch__nbjck pointer-events-auto absolute right-0 top-0 h-9 w-9"> <img alt="Favourite switch" loading="lazy" width="20" height="20" decoding="async" data-nimg="1" class="absolute transition-all group-active/item:scale-75" src="https://static.gramedia.net/_next/static/media/favourite-off.7eeb792d.svg" style="color: transparent;"> </button> <a  href="https://www.gramedia.com/products/outlive-memikir-ulang-sains-dan-seni-umur-panjang">
         <div class="ProductCard_cardContent__fawWr flex flex-col gap-y-2 p-4">
          <div class="ProductCard_imageWrapper__WWY2H relative mx-auto">
           <div > <img alt="Outlive: Memikir Ulang Sains dan Seni Umur Panjang" loading="lazy" decoding="async" data-nimg="fill" class="object-contain" src="https://image.gramedia.net/rs:fit:256:0/plain/https://cdn.gramedia.com/uploads/products/7et--ns-a2.jpg" style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;"> </div>
          </div>
          <div class="relative flex-grow">
           <div class="truncate text-2xs-medium text-neutral-500">Peter Attia</div>
           <h2 class="line-clamp-2 text-xs-medium text-neutral-700">Outlive: Memikir Ulang Sains dan Seni Umur Panjang</h2>
          </div>
          <div class="relative flex flex-col">
           <div class="text-s-extrabold text-neutral-700">Rp135.200</div>
           <div class="ProductCard_priceWrapper__3fcaX flex items-center gap-x-1">
            <div class="ProductCard_discount__Q8rno inline-block rounded-2xs bg-red-50 px-1 text-2xs-medium text-red-500" data-testid="productCardDiscount">20%</div>
            <div class="text-2xs-medium font-normal text-neutral-200 line-through" data-testid="productCardSlicePrice">Rp169.000</div>
           </div>
          </div>
         </div>
        </a> </div>
      </div>
      <div class="swiper-slide !w-[136px] py-4 [.dweb_&amp;]:!w-[160px]" data-testid="productSliderSlider#4" style="margin-right: 16px;">
       <div class="flex-shrink-0 rounded-m border-[1px] border-neutral-150 bg-white cursor-pointer transition-all duration-200 ease-in-out [.dweb_&amp;]:hover:shadow-2 ProductCard_productCard__fGBQ_ relative flex flex-grow-0 flex-col justify-between overflow-hidden" data-testid="productSliderProductCard#4"  > <button class="group/item flex items-center justify-center ProductCard_favouriteSwitch__nbjck pointer-events-auto absolute right-0 top-0 h-9 w-9"> <img alt="Favourite switch" loading="lazy" width="20" height="20" decoding="async" data-nimg="1" class="absolute transition-all group-active/item:scale-75" src="https://static.gramedia.net/_next/static/media/favourite-off.7eeb792d.svg" style="color: transparent;"> </button> <a  href="https://www.gramedia.com/products/atomic-habits-perubahan-kecil-yang-memberikan-hasil-luar-bi">
         <div class="ProductCard_cardContent__fawWr flex flex-col gap-y-2 p-4">
          <div class="ProductCard_imageWrapper__WWY2H relative mx-auto">
           <div > <img alt="Atomic Habits: Perubahan Kecil yang Memberikan Hasil Luar Biasa" loading="lazy" decoding="async" data-nimg="fill" class="object-contain" src="https://image.gramedia.net/rs:fit:256:0/plain/https://cdn.gramedia.com/uploads/items/9786020633176_.Atomic_Habit.jpg" style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;"> </div>
          </div>
          <div class="relative flex-grow">
           <div class="truncate text-2xs-medium text-neutral-500">James Clear</div>
           <h2 class="line-clamp-2 text-xs-medium text-neutral-700">Atomic Habits: Perubahan Kecil yang Memberikan Hasil Luar Biasa</h2>
          </div>
          <div class="relative flex flex-col">
           <div class="text-s-extrabold text-neutral-700">Rp86.400</div>
           <div class="ProductCard_priceWrapper__3fcaX flex items-center gap-x-1">
            <div class="ProductCard_discount__Q8rno inline-block rounded-2xs bg-red-50 px-1 text-2xs-medium text-red-500" data-testid="productCardDiscount">20%</div>
            <div class="text-2xs-medium font-normal text-neutral-200 line-through" data-testid="productCardSlicePrice">Rp108.000</div>
           </div>
          </div>
         </div>
        </a> </div>
      </div>
      <div class="swiper-slide !w-[136px] py-4 [.dweb_&amp;]:!w-[160px]" data-testid="productSliderSlider#5" style="margin-right: 16px;">
       <div class="flex-shrink-0 rounded-m border-[1px] border-neutral-150 bg-white cursor-pointer transition-all duration-200 ease-in-out [.dweb_&amp;]:hover:shadow-2 ProductCard_productCard__fGBQ_ relative flex flex-grow-0 flex-col justify-between overflow-hidden" data-testid="productSliderProductCard#5"  > <button class="group/item flex items-center justify-center ProductCard_favouriteSwitch__nbjck pointer-events-auto absolute right-0 top-0 h-9 w-9"> <img alt="Favourite switch" loading="lazy" width="20" height="20" decoding="async" data-nimg="1" class="absolute transition-all group-active/item:scale-75" src="https://static.gramedia.net/_next/static/media/favourite-off.7eeb792d.svg" style="color: transparent;"> </button> <a  href="https://www.gramedia.com/products/blooming-gracefully-a-collection-of-comforting-writings-to-give-you-love-in-your-healing-journey">
         <div class="ProductCard_cardContent__fawWr flex flex-col gap-y-2 p-4">
          <div class="ProductCard_imageWrapper__WWY2H relative mx-auto">
           <div > <img alt="Blooming Gracefully : A Collection of Comforting Writings to Give You Love in Your Healing Journey" loading="lazy" decoding="async" data-nimg="fill" class="object-contain" src="https://image.gramedia.net/rs:fit:256:0/plain/https://cdn.gramedia.com/uploads/products/-lis57-yfi.jpg" style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;"> </div>
          </div>
          <div class="relative flex-grow">
           <div class="truncate text-2xs-medium text-neutral-500">Rara Noormega</div>
           <h2 class="line-clamp-2 text-xs-medium text-neutral-700">Blooming Gracefully : A Collection of Comforting Writings to Give You Love in Your Healing Journey</h2>
          </div>
          <div class="relative flex flex-col">
           <div class="text-s-extrabold text-neutral-700">Rp111.200</div>
           <div class="ProductCard_priceWrapper__3fcaX flex items-center gap-x-1">
            <div class="ProductCard_discount__Q8rno inline-block rounded-2xs bg-red-50 px-1 text-2xs-medium text-red-500" data-testid="productCardDiscount">20%</div>
            <div class="text-2xs-medium font-normal text-neutral-200 line-through" data-testid="productCardSlicePrice">Rp139.000</div>
           </div>
          </div>
         </div>
        </a> </div>
      </div>
      <div class="swiper-slide !w-[136px] py-4 [.dweb_&amp;]:!w-[160px]" data-testid="productSliderSlider#6" style="margin-right: 16px;">
       <div class="flex-shrink-0 rounded-m border-[1px] border-neutral-150 bg-white cursor-pointer transition-all duration-200 ease-in-out [.dweb_&amp;]:hover:shadow-2 ProductCard_productCard__fGBQ_ relative flex flex-grow-0 flex-col justify-between overflow-hidden" data-testid="productSliderProductCard#6"  > <button class="group/item flex items-center justify-center ProductCard_favouriteSwitch__nbjck pointer-events-auto absolute right-0 top-0 h-9 w-9"> <img alt="Favourite switch" loading="lazy" width="20" height="20" decoding="async" data-nimg="1" class="absolute transition-all group-active/item:scale-75" src="https://static.gramedia.net/_next/static/media/favourite-off.7eeb792d.svg" style="color: transparent;"> </button> <a  href="https://www.gramedia.com/products/detektif-conan-95">
         <div class="ProductCard_cardContent__fawWr flex flex-col gap-y-2 p-4">
          <div class="ProductCard_imageWrapper__WWY2H relative mx-auto">
           <div > <img alt="Detektif Conan 95" loading="lazy" decoding="async" data-nimg="fill" class="object-contain" src="https://image.gramedia.net/rs:fit:256:0/plain/https://cdn.gramedia.com/uploads/items/9786020497822_Cov_Conan_95.jpg" style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;"> </div>
          </div>
          <div class="relative flex-grow">
           <div class="truncate text-2xs-medium text-neutral-500">Aoyama Gosho</div>
           <h2 class="line-clamp-2 text-xs-medium text-neutral-700">Detektif Conan 95</h2>
          </div>
          <div class="relative flex flex-col">
           <div class="text-s-extrabold text-neutral-700">Rp22.400</div>
           <div class="ProductCard_priceWrapper__3fcaX flex items-center gap-x-1">
            <div class="ProductCard_discount__Q8rno inline-block rounded-2xs bg-red-50 px-1 text-2xs-medium text-red-500" data-testid="productCardDiscount">30%</div>
            <div class="text-2xs-medium font-normal text-neutral-200 line-through" data-testid="productCardSlicePrice">Rp32.000</div>
           </div>
          </div>
         </div>
        </a> </div>
      </div>
      <div class="swiper-slide !w-[136px] py-4 [.dweb_&amp;]:!w-[160px]" data-testid="productSliderSlider#7" style="margin-right: 16px;">
       <div class="flex-shrink-0 rounded-m border-[1px] border-neutral-150 bg-white cursor-pointer transition-all duration-200 ease-in-out [.dweb_&amp;]:hover:shadow-2 ProductCard_productCard__fGBQ_ relative flex flex-grow-0 flex-col justify-between overflow-hidden" data-testid="productSliderProductCard#7"  > <button class="group/item flex items-center justify-center ProductCard_favouriteSwitch__nbjck pointer-events-auto absolute right-0 top-0 h-9 w-9"> <img alt="Favourite switch" loading="lazy" width="20" height="20" decoding="async" data-nimg="1" class="absolute transition-all group-active/item:scale-75" src="https://static.gramedia.net/_next/static/media/favourite-off.7eeb792d.svg" style="color: transparent;"> </button> <a  href="https://www.gramedia.com/products/detektif-conan-94">
         <div class="ProductCard_cardContent__fawWr flex flex-col gap-y-2 p-4">
          <div class="ProductCard_imageWrapper__WWY2H relative mx-auto">
           <div > <img alt="Detektif Conan 94" loading="lazy" decoding="async" data-nimg="fill" class="object-contain" src="https://image.gramedia.net/rs:fit:256:0/plain/https://cdn.gramedia.com/uploads/items/9786020478012_Detektif-Cona.jpg" style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;"> </div>
          </div>
          <div class="relative flex-grow">
           <div class="truncate text-2xs-medium text-neutral-500">Aoyama Gosho</div>
           <h2 class="line-clamp-2 text-xs-medium text-neutral-700">Detektif Conan 94</h2>
          </div>
          <div class="relative flex flex-col">
           <div class="text-s-extrabold text-neutral-700">Rp22.400</div>
           <div class="ProductCard_priceWrapper__3fcaX flex items-center gap-x-1">
            <div class="ProductCard_discount__Q8rno inline-block rounded-2xs bg-red-50 px-1 text-2xs-medium text-red-500" data-testid="productCardDiscount">30%</div>
            <div class="text-2xs-medium font-normal text-neutral-200 line-through" data-testid="productCardSlicePrice">Rp32.000</div>
           </div>
          </div>
         </div>
        </a> </div>
      </div>
      <div class="swiper-slide !w-[136px] py-4 [.dweb_&amp;]:!w-[160px]" data-testid="productSliderSlider#8" style="margin-right: 16px;">
       <div class="flex-shrink-0 rounded-m border-[1px] border-neutral-150 bg-white cursor-pointer transition-all duration-200 ease-in-out [.dweb_&amp;]:hover:shadow-2 ProductCard_productCard__fGBQ_ relative flex flex-grow-0 flex-col justify-between overflow-hidden" data-testid="productSliderProductCard#8"  > <button class="group/item flex items-center justify-center ProductCard_favouriteSwitch__nbjck pointer-events-auto absolute right-0 top-0 h-9 w-9"> <img alt="Favourite switch" loading="lazy" width="20" height="20" decoding="async" data-nimg="1" class="absolute transition-all group-active/item:scale-75" src="https://static.gramedia.net/_next/static/media/favourite-off.7eeb792d.svg" style="color: transparent;"> </button> <a  href="https://www.gramedia.com/products/contagious-rahasia-di-balik-produk-dan-gagasan-yang-viral">
         <div class="ProductCard_cardContent__fawWr flex flex-col gap-y-2 p-4">
          <div class="ProductCard_imageWrapper__WWY2H relative mx-auto">
           <div > <img alt="Contagious: Rahasia Di Balik Produk Dan Gagasan Yang Viral" loading="lazy" decoding="async" data-nimg="fill" class="object-contain" src="https://image.gramedia.net/rs:fit:256:0/plain/https://cdn.gramedia.com/uploads/picture_meta/2023/6/15/asknvldbt7fxcwykgxhmhb.jpg" style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;"> </div>
          </div>
          <div class="relative flex-grow">
           <div class="truncate text-2xs-medium text-neutral-500">Jonah Berger</div>
           <h2 class="line-clamp-2 text-xs-medium text-neutral-700">Contagious: Rahasia Di Balik Produk Dan Gagasan Yang Viral</h2>
          </div>
          <div class="relative flex flex-col">
           <div class="text-s-extrabold text-neutral-700">Rp96.000</div>
           <div class="ProductCard_priceWrapper__3fcaX flex items-center gap-x-1">
            <div class="ProductCard_discount__Q8rno inline-block rounded-2xs bg-red-50 px-1 text-2xs-medium text-red-500" data-testid="productCardDiscount">20%</div>
            <div class="text-2xs-medium font-normal text-neutral-200 line-through" data-testid="productCardSlicePrice">Rp120.000</div>
           </div>
          </div>
         </div>
        </a> </div>
      </div>
      <div class="swiper-slide !w-[136px] py-4 [.dweb_&amp;]:!w-[160px]" data-testid="productSliderSlider#9" style="margin-right: 16px;">
       <div class="flex-shrink-0 rounded-m border-[1px] border-neutral-150 bg-white cursor-pointer transition-all duration-200 ease-in-out [.dweb_&amp;]:hover:shadow-2 ProductCard_productCard__fGBQ_ relative flex flex-grow-0 flex-col justify-between overflow-hidden" data-testid="productSliderProductCard#9"  > <button class="group/item flex items-center justify-center ProductCard_favouriteSwitch__nbjck pointer-events-auto absolute right-0 top-0 h-9 w-9"> <img alt="Favourite switch" loading="lazy" width="20" height="20" decoding="async" data-nimg="1" class="absolute transition-all group-active/item:scale-75" src="https://static.gramedia.net/_next/static/media/favourite-off.7eeb792d.svg" style="color: transparent;"> </button> <a  href="https://www.gramedia.com/products/profit-konsisten-dengan-market-structure">
         <div class="ProductCard_cardContent__fawWr flex flex-col gap-y-2 p-4">
          <div class="ProductCard_imageWrapper__WWY2H relative mx-auto">
           <div > <img alt="Profit Konsisten dengan Market Structure" loading="lazy" decoding="async" data-nimg="fill" class="object-contain" src="https://image.gramedia.net/rs:fit:256:0/plain/https://cdn.gramedia.com/uploads/picture_meta/2023/4/14/sdtzwl6ue4cqwhqa8leewe.jpg" style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;"> </div>
          </div>
          <div class="relative flex-grow">
           <div class="truncate text-2xs-medium text-neutral-500">Bhuana Ilmu Populer</div>
           <h2 class="line-clamp-2 text-xs-medium text-neutral-700">Profit Konsisten dengan Market Structure</h2>
          </div>
          <div class="relative flex flex-col">
           <div class="text-s-extrabold text-neutral-700">Rp63.200</div>
           <div class="ProductCard_priceWrapper__3fcaX flex items-center gap-x-1">
            <div class="ProductCard_discount__Q8rno inline-block rounded-2xs bg-red-50 px-1 text-2xs-medium text-red-500" data-testid="productCardDiscount">20%</div>
            <div class="text-2xs-medium font-normal text-neutral-200 line-through" data-testid="productCardSlicePrice">Rp79.000</div>
           </div>
          </div>
         </div>
        </a> </div>
      </div>
     </div>
    </div>
    <div class="gm-slider-prev absolute -right-1 top-1/2 z-10 hidden -translate-y-1/2 items-center duration-200 ease-in-out [.dweb_&amp;]:block"> <button class="flex items-center rounded-infinity outline-none disabled:pointer-events-none bg-white border border-neutral-200 active:bg-neutral-50 active:border-neutral-200 [.dweb_&amp;]:enabled:hover:border-neutral-700 w-9 h-9 shadow-3" data-testid="productSliderNext"> <svg class="flex-grow text-neutral-700 ___12fm75w f1w7gpdv fez10in fg4l7m0" fill="currentColor" aria-hidden="true" width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" style="font-size: 24px;">
       <path d="M8.3 4.3a1 1 0 0 0 0 1.4l6.29 6.3-6.3 6.3a1 1 0 1 0 1.42 1.4l7-7a1 1 0 0 0 0-1.4l-7-7a1 1 0 0 0-1.42 0Z" fill="currentColor"></path>
      </svg> </button> </div>
    <div class="gm-slider-next absolute -left-1 top-1/2 z-10 hidden -translate-y-1/2 items-center duration-200 ease-in-out [.dweb_&amp;]:block swiper-button-disabled"> <button class="flex items-center rounded-infinity outline-none disabled:pointer-events-none bg-white border border-neutral-200 active:bg-neutral-50 active:border-neutral-200 [.dweb_&amp;]:enabled:hover:border-neutral-700 w-9 h-9 shadow-3" data-testid="productSliderPrev"> <svg class="flex-grow text-neutral-700 ___12fm75w f1w7gpdv fez10in fg4l7m0" fill="currentColor" aria-hidden="true" width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" style="font-size: 24px;">
       <path d="M15.7 4.3a1 1 0 0 1 0 1.4L9.42 12l6.3 6.3a1 1 0 0 1-1.42 1.4l-7-7a1 1 0 0 1 0-1.4l7-7a1 1 0 0 1 1.42 0Z" fill="currentColor"></path>
      </svg> </button> </div>
   </div>
  </div>
 </div>
</main> <?php endforeach; ?>