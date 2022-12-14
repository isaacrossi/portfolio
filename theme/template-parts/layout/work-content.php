<section class="bg-light px-4 md:px-8 lg:px-16 pt-10 pb-14 md:pt-20 md:pb-24" id="work">

  <div class="container bg-light flex flex-col md:flex-row justify-between md:items-start items-stretch">
    <h2 class="font-heading text-5xl md:text-6xl tracking-wide uppercase text-dark leading-none md:leading-1 mb-2 md:mb-0">Work</h2>

    <div class="project-card relative flex flex-col justify-between bg-dark text-light px-4 pb-4 md:pb-6 rounded-tr-4xl md:w-2/5 w-8/12 cursor-pointer">
      <a href="https://billowmagazine.frb.io/">
      <div class="overlay absolute top-0 left-0 right-0 bottom-0 bg-gray-800 opacity-75 w-full h-full z-10 rounded-tr-4xl"><span class="flex items-center h-full justify-center font-bodybold text-accent text-3xl">Live Site<span class="rotate-45 ml-2">↑</span></span>
      </div>
      </a>
      <img class="mx-auto py-12 md:py-14 w-1/3" src="<?php echo get_template_directory_uri() . '/images/billow-logo.svg'; ?>">
      <div>
        <p class="font-bodybold text-xl md:text-2xl border-b pb-2">Billow Magazine</p>
        <p class="font-body text-base md:text-xl border-b py-2">Wordpress, Tachyons, JS</p>
      </div>
    </div>

    <div class="project-card relative flex flex-col justify-between self-end bg-dark text-light px-4 pb-4 md:pb-6 rounded-tr-4xl md:w-2/5 w-8/12 mt-4 md:mt-14 cursor-pointer">
      <a href="https://hungry-noyce-3b3fee.netlify.app/">
        <div class="overlay absolute top-0 left-0 right-0 bottom-0 accent bg-gray-800 opacity-75 w-full h-full z-10 rounded-tr-4xl"><span class="flex items-center h-full justify-center font-bodybold text-accent text-3xl">Live Site<span class="rotate-45 ml-2">↑</span></span>
        </div>
      </a>
        <img class="mx-auto py-12 md:py-14 w-2/3" src="<?php echo get_template_directory_uri() . '/images/tplp.svg'; ?>">
        <div>
          <p class="font-bodybold text-xl md:text-2xl border-b pb-2">Top EPL Players</p>
          <p class="font-body text-base md:text-xl border-b py-2">API, D3.JS</p>
        </div>
    </div>

  </div>

</section>