<!DOCTYPE html>

<html lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>About Us - FarmConnect</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700;800;900&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            colors: {
              "primary": "#3A5A40",
              "background-light": "#F7F6F1",
              "background-dark": "#102210",
              "text-light": "#333333",
              "text-dark": "#F7F6F1",
              "text-subtle-light": "#618961",
              "text-subtle-dark": "#a3b1a3",
              "accent": "#FFC107",
              "border-light": "#E9ECEF",
              "border-dark": "#2a3a2a"
            },
            fontFamily: {
              "display": ["Work Sans", "sans-serif"]
            },
            borderRadius: {"DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px"},
          },
        },
      }
    </script>
<style>
      .material-symbols-outlined {
        font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        font-size: 24px;
      }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark font-display text-text-light dark:text-text-dark">
<div class="relative flex h-auto min-h-screen w-full flex-col group/design-root overflow-x-hidden">
<div class="layout-container flex h-full grow flex-col">
<!-- TopNavBar -->
<header class="sticky top-0 z-50 flex items-center justify-between whitespace-nowrap border-b border-solid border-primary/20 bg-background-light/80 dark:bg-background-dark/80 backdrop-blur-sm px-4 md:px-10 lg:px-20 py-3">
<div class="flex items-center gap-4 text-primary">
<span class="material-symbols-outlined text-3xl">grass</span>
<h2 class="text-[#333333] dark:text-white text-xl font-bold leading-tight tracking-[-0.015em]">Digital Farmer</h2>
</div>
<div class="hidden md:flex flex-1 justify-center gap-8">
<div class="flex items-center gap-9">
<a class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 bg-primary text-white text-sm font-bold leading-normal tracking-[0.015em] hover:bg-primary/90" href="index.php">Home</a>
<a class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 bg-primary text-white text-sm font-bold leading-normal tracking-[0.015em] hover:bg-primary/90" href="marketplace.php">Marketplace</a>
<a class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 bg-primary text-white text-sm font-bold leading-normal tracking-[0.015em] hover:bg-primary/90" href="about.php">About Us</a>

</div>
</div>
<div class="flex gap-2">
    <a id="nav-register" href="#" class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 bg-primary text-white text-sm font-bold leading-normal tracking-[0.015em] hover:bg-primary/90" aria-haspopup="dialog" aria-controls="signup-modal">
        <span class="truncate">Register</span>
    </a>
    <a id="nav-login" href="#" class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 bg-primary text-white text-sm font-bold leading-normal tracking-[0.015em] hover:bg-primary/90" aria-haspopup="dialog" aria-controls="login-modal">
        <span class="truncate">Login</span>
    </a>
</div>
</header>
<main class="flex-grow">
<div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-16 sm:py-24 space-y-24">
<div class="@container">
<div class="flex min-h-[480px] flex-col gap-6 bg-cover bg-center bg-no-repeat @[480px]:gap-8 rounded-xl items-center justify-center p-8 text-center" data-alt="A vibrant, sun-drenched farm landscape with rows of green crops under a blue sky." style='background-image: linear-gradient(rgba(0, 0, 0, 0.2) 0%, rgba(0, 0, 0, 0.5) 100%), url("https://lh3.googleusercontent.com/aida-public/AB6AXuAersc9bprHLKqaOOBefxhIzGIvQJbA8PXpl2ErV-Yofa5Bb8OaaYRQHojj9KerFZLCOZDRNAcrOd9mCenr7rpvUirnAQ3XYJsEwYz4WihAclL_6VWpCFiCQMQUYkRyppq2tauP9paC7EYG8Xj7uexTdIVcK9bGGg8ZG4KzoUmPXwj_cr0wtjrJ8YcBGDeVvxdEVqIK3qYE6Xa0UDRv99ZsVd6ihSNbj-W-r1lwAh7OItfeI_hx1RkG0ewg4Rb1mmIacWd0uqtTO-s");'>
<div class="flex flex-col gap-4 max-w-2xl">
<h1 class="text-white text-4xl font-black leading-tight tracking-[-0.033em] @[480px]:text-5xl">
Connecting Growers and Eaters
</h1>
<p class="text-white/90 text-lg font-normal leading-normal @[480px]:text-xl">
Bridging the gap between the farm and your table with fresh, local, and sustainable food.
</p>
</div>
</div>
</div>
<div class="flex flex-col gap-10 @container">
<div class="flex flex-col gap-4 max-w-3xl mx-auto text-center">
<h2 class="text-text-light dark:text-text-dark text-3xl font-bold leading-tight tracking-tight @[480px]:text-4xl">
Our Story, Mission, and Vision
</h2>
<p class="text-text-subtle-light dark:text-text-subtle-dark text-base font-normal leading-relaxed">
Our platform was born from a simple idea: to reconnect communities with the people who grow their food. We aim to empower local farmers by providing them a direct
channel to consumers, ensuring fair prices and fostering a transparent food system. Our vision is a world where everyone has access to fresh, sustainably-grown
produce from their local area.
</p>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
<div class="flex flex-col gap-4">
<div class="w-full bg-center bg-no-repeat aspect-square bg-cover rounded-xl" data-alt="Close-up of a farmer's hands holding freshly harvested carrots with soil still on them." style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBAWJ5c9xcySbQR2aIskbGg2D-IuUauPITxmt7y8Lb8Ah5RBs1RzXnCEAE6F8Nhz45ohZ_RmzKRQF5jlGEC-HhcGTdsXR3cfnqHOwiyJjk7RZUNSYxUGeYVu_urq5_VfcAK3oxCq0HNzpXRdPSFa-VUv-SAWnhnfcH6ViVnJFbOgd6WpYEd6n2LfIU2jxzA3Kyu4UqQewPkyi76NMOVp8JJTDU-ZCEZPh-35ysPUIjmWLdwjHmLQIIJgckTsKfQnLauu5gleme-65k");'></div>
<div>
<p class="text-primary dark:text-accent text-xl font-bold leading-normal">Our Mission</p>
<p class="text-text-subtle-light dark:text-text-subtle-dark text-base font-normal leading-relaxed">To empower local farmers and provide communities with fresh, sustainable food.</p>
</div>
</div>
<div class="flex flex-col gap-4">
<div class="w-full bg-center bg-no-repeat aspect-square bg-cover rounded-xl" data-alt="A diverse group of people enjoying a meal together at a long outdoor table in a community garden." style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAwIHDZuYkDFlem85WMVTGVNU1b9UtHdnrR3oTSpuLW8Ipt5sQwsG8kv4cXvvZ9Ux-OyNAUQKBAbZIx8hSRtUWmoPLIwmGq21ksWFjb8byVHO75NMtbgBNojegDP4lJrH8FzGvxvwSeLVsqWOFSl43AfcQ1R0q90bmytw6rHAFU3XdjVh2t9kdVLVIOErtfkTS12z_Dsz9i9SIlGtpwQyyTNAOr-xlDTEU3rGZI9KdrH7488CmQtVVFHDk2m8_NwBvlmURhoHHa5Vg");'></div>
<div>
<p class="text-primary dark:text-accent text-xl font-bold leading-normal">Our Vision</p>
<p class="text-text-subtle-light dark:text-text-subtle-dark text-base font-normal leading-relaxed">A future where every meal is a direct connection to the land and the farmer who cultivated it.</p>
</div>
</div>
</div>
</div>
<div>
<h2 class="text-text-light dark:text-text-dark text-3xl font-bold leading-tight tracking-tight pb-8 text-center">Our Values</h2>
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
<div class="flex flex-1 gap-4 rounded-xl border border-border-light dark:border-border-dark bg-white dark:bg-background-dark/50 p-6 flex-col items-center text-center">
<div class="text-primary dark:text-accent">
<span class="material-symbols-outlined" style="font-size: 36px;">eco</span>
</div>
<div class="flex flex-col gap-1">
<h3 class="text-text-light dark:text-text-dark text-lg font-bold leading-tight">Sustainability</h3>
<p class="text-text-subtle-light dark:text-text-subtle-dark text-sm font-normal leading-relaxed">Committed to practices that protect our planet for future generations.</p>
</div>
</div>
<div class="flex flex-1 gap-4 rounded-xl border border-border-light dark:border-border-dark bg-white dark:bg-background-dark/50 p-6 flex-col items-center text-center">
<div class="text-primary dark:text-accent">
<span class="material-symbols-outlined" style="font-size: 36px;">groups</span>
</div>
<div class="flex flex-col gap-1">
<h3 class="text-text-light dark:text-text-dark text-lg font-bold leading-tight">Community</h3>
<p class="text-text-subtle-light dark:text-text-subtle-dark text-sm font-normal leading-relaxed">Building strong bonds between local growers and the neighborhoods they feed.</p>
</div>
</div>
<div class="flex flex-1 gap-4 rounded-xl border border-border-light dark:border-border-dark bg-white dark:bg-background-dark/50 p-6 flex-col items-center text-center">
<div class="text-primary dark:text-accent">
<span class="material-symbols-outlined" style="font-size: 36px;">visibility</span>
</div>
<div class="flex flex-col gap-1">
<h3 class="text-text-light dark:text-text-dark text-lg font-bold leading-tight">Transparency</h3>
<p class="text-text-subtle-light dark:text-text-subtle-dark text-sm font-normal leading-relaxed">Providing clear information about where and how your food is grown.</p>
</div>
</div>
<div class="flex flex-1 gap-4 rounded-xl border border-border-light dark:border-border-dark bg-white dark:bg-background-dark/50 p-6 flex-col items-center text-center">
<div class="text-primary dark:text-accent">
<span class="material-symbols-outlined" style="font-size: 36px;">verified</span>
</div>
<div class="flex flex-col gap-1">
<h3 class="text-text-light dark:text-text-dark text-lg font-bold leading-tight">Quality</h3>
<p class="text-text-subtle-light dark:text-text-subtle-dark text-sm font-normal leading-relaxed">Ensuring every product meets the highest standards of freshness and taste.</p>
</div>
</div>
</div>
</div>
<div class="flex flex-col gap-10">
<div class="flex flex-col gap-4 text-center max-w-3xl mx-auto">
<h2 class="text-text-light dark:text-text-dark text-3xl font-bold leading-tight tracking-tight">Meet Our Team</h2>
<p class="text-text-subtle-light dark:text-text-subtle-dark text-base font-normal leading-relaxed">
We are a passionate group of advocates for local food systems, dedicated to making a difference one harvest at a time.
</p>
</div>
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
<div class="flex flex-col gap-4 items-center text-center">
<img class="size-40 rounded-full object-cover border-4 border-border-light dark:border-border-dark" data-alt="Professional headshot of John Doe, a smiling man with short brown hair and a beard, wearing a plaid shirt." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAHyucwIOROAa5eTwdcfmEftbszmbfgwHHeJ8zoqnEef_eO2rSlC2gOhJbbBI9iavE_PVFNV-zU_fJubqjXlA86BLr5ti8SmarWro2_8bp_A0VB2MoAXHc7fliEDvaLSpILXpMfEMlGwYEvzUJfskwe7afwPGUaV1BdOdDMlisacOFPQUAnwqFDfClnWc1gJ3sETEo9-tRyuKshHnEdZc4Ke-raZ-X-YR5iO_RbeDPqIMD35-xtt6aldo4DDnt-nuhrgQtbItjf_PQ"/>
<div class="flex flex-col">
<p class="font-bold text-lg">John Doe</p>
<p class="text-primary dark:text-accent text-sm font-medium">Co-Founder &amp; CEO</p>
</div>
<p class="text-text-subtle-light dark:text-text-subtle-dark text-sm leading-relaxed">
John grew up on a family farm and is passionate about using technology to support the next generation of farmers.
</p>
</div>
<div class="flex flex-col gap-4 items-center text-center">
<img class="size-40 rounded-full object-cover border-4 border-border-light dark:border-border-dark" data-alt="Professional headshot of Jane Smith, a woman with blonde hair smiling warmly, wearing a green sweater." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCaV5BHh3cLMKiQbEYpc7wPHFa03EhqRJXGuf-Xt0XD26WgzLedi1HFRAlM4n2ar53-5gGvjQG_g-3UFcdPsDU5lv2mp3GrpcEPkKjjHpMizcvzPLCgHMxm4uxAH3y_rsVNCd3Hb-JUK2nnb6Vuq9XLr4nfKjC8EbFgoHNdQjPyb-HncMyJVMpETEYiwGTBrWH9Q7bQ8TPEgYHyydwLCO2HL8jZi1oAgDsB7xxWBznPnKV_ShdxwoDHfeKKW9XB8tz5anx6Ry--wt8"/>
<div class="flex flex-col">
<p class="font-bold text-lg">Jane Smith</p>
<p class="text-primary dark:text-accent text-sm font-medium">Co-Founder &amp; Head of Community</p>
</div>
<p class="text-text-subtle-light dark:text-text-subtle-dark text-sm leading-relaxed">
An expert in sustainable agriculture, Jane works to build strong, supportive relationships between our growers and eaters.
</p>
</div>
<div class="flex flex-col gap-4 items-center text-center">
<img class="size-40 rounded-full object-cover border-4 border-border-light dark:border-border-dark" data-alt="Professional headshot of Samuel Lee, a man with glasses and short black hair, wearing a denim jacket." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCxjFiWMhQu4-xsNDAl7CqKWHp6MRBlm2DkMgAH0mgv6BRughOPiie9xoS1EfebypDk5XNMyLx63EP39_1UhHD0fxhZlLq0uX_tq7UDVhaG90WGmwzhw1xsHDCJZ5ZgJzknyQ20Tb5GXXHprhDX3sV7RTXkPMvJ0uVXIZP_h8vAgx2NVOYBOgLKk6AMeb9OieOzJNtuMXJjQnF1gUrRZKmnfgHHrukJ3Wv1hlUzqk6GwJpkH3YnjTm0XXTgvbtLaRsuEHX1JxR2GyA"/>
<div class="flex flex-col">
<p class="font-bold text-lg">Samuel Lee</p>
<p class="text-primary dark:text-accent text-sm font-medium">Lead Developer</p>
</div>
<p class="text-text-subtle-light dark:text-text-subtle-dark text-sm leading-relaxed">
Samuel is the architect behind our platform, ensuring a seamless and intuitive experience for all users.
</p>
</div>
</div>
</div>
<div class="bg-primary/10 dark:bg-primary/20 rounded-xl p-8 sm:p-12">
<div class="flex flex-col items-center justify-center gap-6 text-center">
<h2 class="text-text-light dark:text-text-dark text-3xl font-bold leading-tight tracking-tight max-w-lg">Join Our Growing Community</h2>
<p class="text-text-subtle-light dark:text-text-subtle-dark max-w-xl">
Become a part of a movement that celebrates local food, supports farmers, and builds a more sustainable future for everyone.
</p>
<div class="flex flex-col sm:flex-row gap-4 mt-2">
<button class="flex min-w-[180px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-12 px-6 bg-primary text-white text-base font-bold leading-normal hover:bg-primary/90">
<span class="truncate">Join as a Farmer</span>
</button>
<button class="flex min-w-[180px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-12 px-6 bg-accent text-text-light text-base font-bold leading-normal hover:bg-accent/90">
<span class="truncate">Find Local Produce</span>
</button>
</div>
</div>
</div>
</div>
</main>
<!-- Signup chooser modal -->
<div id="signup-modal" class="hidden fixed inset-0 z-50 flex items-center justify-center">
  <div id="signup-overlay" class="absolute inset-0 bg-black/50 backdrop-blur-sm"></div>
  <div role="dialog" aria-modal="true" aria-labelledby="signup-modal-title" class="relative z-10 w-full max-w-md mx-4 rounded-lg bg-white dark:bg-gray-900 shadow-xl">
    <div class="p-4 border-b border-gray-100 dark:border-gray-800 flex justify-between items-center">
      <h3 id="signup-modal-title" class="text-lg font-semibold text-gray-900 dark:text-white">Sign Up</h3>
      <button id="signup-close" class="text-gray-600 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white" aria-label="Close">✕</button>
    </div>
    <div class="p-6">
      <p class="text-sm text-gray-600 dark:text-gray-300 mb-4">Choose your account type to continue:</p>
      <div class="flex gap-3 flex-col sm:flex-row">
        <a href="farmer_registration.php" class="flex-1 inline-flex items-center justify-center rounded-lg px-4 py-3 bg-green-600 text-white font-semibold hover:bg-green-700" id="signup-farmer">Farmer Registration</a>
        <a href="consumer_registration.php" class="flex-1 inline-flex items-center justify-center rounded-lg px-4 py-3 bg-gray-100 dark:bg-gray-800 text-gray-900 dark:text-gray-100 font-semibold hover:bg-gray-200 dark:hover:bg-gray-700" id="signup-consumer">Consumer Registration</a>
      </div>
    </div>
  </div>
</div>

<!-- Login chooser modal -->
<div id="login-modal" class="hidden fixed inset-0 z-50 flex items-center justify-center">
  <div id="login-overlay" class="absolute inset-0 bg-black/50 backdrop-blur-sm"></div>
  <div role="dialog" aria-modal="true" aria-labelledby="login-modal-title" class="relative z-10 w-full max-w-md mx-4 rounded-lg bg-white dark:bg-gray-900 shadow-xl">
    <div class="p-4 border-b border-gray-100 dark:border-gray-800 flex justify-between items-center">
      <h3 id="login-modal-title" class="text-lg font-semibold text-gray-900 dark:text-white">Log In</h3>
      <button id="login-close" class="text-gray-600 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white" aria-label="Close">✕</button>
    </div>
    <div class="p-6">
      <p class="text-sm text-gray-600 dark:text-gray-300 mb-4">Choose your account type to continue:</p>
      <div class="flex gap-3 flex-col sm:flex-row">
        <a href="farmer_login.php" class="flex-1 inline-flex items-center justify-center rounded-lg px-4 py-3 bg-green-600 text-white font-semibold hover:bg-green-700" id="login-farmer">Farmer Login</a>
        <a href="consumer_login.php" class="flex-1 inline-flex items-center justify-center rounded-lg px-4 py-3 bg-gray-100 dark:bg-gray-800 text-gray-900 dark:text-gray-100 font-semibold hover:bg-gray-200 dark:hover:bg-gray-700" id="login-consumer">Consumer Login</a>
      </div>
    </div>
  </div>
</div>
<!-- Footer -->
<footer class="bg-white dark:bg-background-dark/50 border-t border-primary/20 mt-auto">
<div class="max-w-6xl mx-auto py-12 px-4">
<div class="grid grid-cols-2 md:grid-cols-4 gap-8">
<div class="col-span-2 md:col-span-1">
<div class="flex items-center gap-2 mb-4 text-primary">
<span class="material-symbols-outlined">grass</span>
<h2 class="text-[#333333] dark:text-white text-lg font-bold">Digital Farmer</h2>
</div>
<p class="text-sm text-gray-600 dark:text-gray-400">Connecting fields to your table.</p>
</div>
<div>
<h3 class="font-bold text-[#333333] dark:text-white mb-4">Platform</h3>
<ul class="space-y-2">
<li><a class="text-sm text-gray-600 dark:text-gray-400 hover:text-primary" href="farmer_registration.php">For Farmers</a></li>
<li><a class="text-sm text-gray-600 dark:text-gray-400 hover:text-primary" href="consumer_registration.php">For Consumers</a></li>
</ul>
</div>
<div>
<h3 class="font-bold text-[#333333] dark:text-white mb-4">Company</h3>
<ul class="space-y-2">
<li><a class="text-sm text-gray-600 dark:text-gray-400 hover:text-primary" href="about.php">About Us</a></li>
<li><a class="text-sm text-gray-600 dark:text-gray-400 hover:text-primary" href="#">Contact</a></li>

</ul>
</div>
<div>
<h3 class="font-bold text-[#333333] dark:text-white mb-4">Legal</h3>
<ul class="space-y-2">
<li><a class="text-sm text-gray-600 dark:text-gray-400 hover:text-primary" href="#">Privacy Policy</a></li>
<li><a class="text-sm text-gray-600 dark:text-gray-400 hover:text-primary" href="#">Terms of Service</a></li>
</ul>
</div>
</div>
<div class="mt-12 pt-8 border-t border-primary/20 text-center text-sm text-gray-500 dark:text-gray-400">
<p>© 2024 AgriConnect. All rights reserved.</p>
</div>
</div>
</footer>
</div>
</div>
<script>
  (function(){
    const navRegister = document.getElementById('nav-register');
    const navLogin = document.getElementById('nav-login');

    const modal = document.getElementById('signup-modal');
    const overlay = document.getElementById('signup-overlay');
    const closeBtn = document.getElementById('signup-close');
    const firstAction = document.getElementById('signup-farmer');

    const loginModal = document.getElementById('login-modal');
    const loginOverlay = document.getElementById('login-overlay');
    const loginClose = document.getElementById('login-close');
    const loginFirst = document.getElementById('login-farmer');

    let lastFocus = null;

    function showModal(){
      lastFocus = document.activeElement;
      modal && modal.classList.remove('hidden');
      setTimeout(()=> firstAction && firstAction.focus(), 50);
      document.addEventListener('keydown', onKey);
    }
    function hideModal(){
      modal && modal.classList.add('hidden');
      document.removeEventListener('keydown', onKey);
      try{ lastFocus && lastFocus.focus(); }catch(e){}
    }

    function showLoginModal(){
      lastFocus = document.activeElement;
      modal && modal.classList.add('hidden');
      loginModal && loginModal.classList.remove('hidden');
      setTimeout(()=> loginFirst && loginFirst.focus(), 50);
      document.addEventListener('keydown', onKey);
    }
    function hideLoginModal(){
      loginModal && loginModal.classList.add('hidden');
      document.removeEventListener('keydown', onKey);
      try{ lastFocus && lastFocus.focus(); }catch(e){}
    }

    function onKey(e){
      if(e.key === 'Escape'){
        hideModal();
        hideLoginModal();
      }
    }

    navRegister && navRegister.addEventListener('click', function(e){ e.preventDefault(); showModal(); });
    navLogin && navLogin.addEventListener('click', function(e){ e.preventDefault(); showLoginModal(); });

    closeBtn && closeBtn.addEventListener('click', hideModal);
    overlay && overlay.addEventListener('click', hideModal);

    loginClose && loginClose.addEventListener('click', hideLoginModal);
    loginOverlay && loginOverlay.addEventListener('click', hideLoginModal);
  })();
</script>
</body></html>