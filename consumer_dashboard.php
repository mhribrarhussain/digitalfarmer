<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Consumer Dashboard</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script>
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            colors: {
              "primary": "#3A5A40",
              "background-light": "#F4F1EA",
              "background-dark": "#1a1a1a",
              "card-light": "#FFFFFF",
              "card-dark": "#2a2a2a",
              "text-light": "#333333",
              "text-dark": "#e0e0e0",
              "text-muted-light": "#6c757d",
              "text-muted-dark": "#a0a0a0",
              "border-light": "#e0e0e0",
              "border-dark": "#4a4a4a",
              "success": "#588157",
              "warning": "#FCA311",
              "error": "#C94C4C"
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
        }
        .material-symbols-outlined.fill {
            font-variation-settings: 'FILL' 1, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark font-display text-text-light dark:text-text-dark">
<div class="relative flex min-h-screen w-full flex-col">
<div class="flex h-full grow">
<!-- SideNavBar -->
<aside class="flex flex-col w-64 bg-card-light dark:bg-card-dark border-r border-border-light dark:border-border-dark p-4 shrink-0">
<div class="flex items-center gap-2 text-primary px-3 py-4">
<span class="material-symbols-outlined text-3xl">grass</span>
<h2 class="text-xl font-bold leading-tight tracking-[-0.015em]">FarmConnect</h2>
</div>
<div class="flex flex-col gap-4 mt-6">
<div class="flex flex-col gap-2">
<a class="flex items-center gap-3 px-3 py-2 rounded-lg bg-primary/20 text-primary" href="#">
<span class="material-symbols-outlined fill">dashboard</span>
<p class="text-sm font-medium leading-normal">Dashboard</p>
</a>
<a class="flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-primary/10 dark:hover:bg-primary/20" href="#">
<span class="material-symbols-outlined">shopping_bag</span>
<p class="text-sm font-medium leading-normal">My Orders</p>
</a>
<a class="flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-primary/10 dark:hover:bg-primary/20" href="#">
<span class="material-symbols-outlined">favorite</span>
<p class="text-sm font-medium leading-normal">Saved Items</p>
</a>
<a class="flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-primary/10 dark:hover:bg-primary/20" href="#">
<span class="material-symbols-outlined">mail</span>
<p class="text-sm font-medium leading-normal">Messages</p>
</a>
</div>
</div>
<div class="mt-auto flex flex-col gap-4">
<div class="flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-primary/10 dark:hover:bg-primary/20">
<span class="material-symbols-outlined">settings</span>
<p class="text-sm font-medium leading-normal">Settings</p>
</div>
<a href="consumer_login.php" class="flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-error/10 text-error">
<span class="material-symbols-outlined">logout</span>
<p class="text-sm font-medium leading-normal">Logout</p>
</a>
</div>
</aside>
<!-- Main Content -->
<div class="flex-1 flex flex-col">
<!-- TopNavBar -->
<header class="flex items-center justify-between whitespace-nowrap border-b border-solid border-border-light dark:border-border-dark px-10 py-3 bg-card-light dark:bg-card-dark sticky top-0 z-10">
<div class="flex flex-1 justify-start gap-8">
<label class="flex flex-col w-full max-w-md">
<div class="flex w-full flex-1 items-stretch rounded-lg h-10">
<div class="text-text-muted-light dark:text-text-muted-dark flex border-none bg-background-light dark:bg-background-dark items-center justify-center pl-4 rounded-l-lg border-r-0">
<span class="material-symbols-outlined">search</span>
</div>
<input class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-text-light dark:text-text-dark focus:outline-0 focus:ring-0 border-none bg-background-light dark:bg-background-dark h-full placeholder:text-text-muted-light dark:placeholder:text-text-muted-dark px-4 rounded-l-none border-l-0 pl-2 text-base font-normal leading-normal" placeholder="Search for products, farmers, and more..."/>
</div>
</label>
</div>
<div class="flex items-center gap-4">
<button class="flex items-center justify-center rounded-full h-10 w-10 bg-background-light dark:bg-background-dark text-text-light dark:text-text-dark">
<span class="material-symbols-outlined">notifications</span>
</button>
<div class="flex items-center gap-3">
<div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-10" data-alt="User profile picture, a person with a warm smile." style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBS7_VI3xIfOwX4oDPPA9xjOcQ-Acdy1WF_hr6N5EChyYUYNwJMiEh-0mq6FL7x0udg7LNf4egyYOtPKbalk7rzpX-Bx6XAK1H_gAQr5UIjqawz0pCmA3rBvknwzf_aPfOtguO1cbSI1-FPdt_jFwZZ0KTsH0qQiI76r8VE8i1w1LP4Iw7Xg83qN56_ADcj9oM1LXPhq8mDMSfLVC4sp2AXjeoTydLPqWpuTCq-bWTd3W5PmWyVTEuWsp2Hfknr4SL1pamls9hFBzs");'></div>
<div class="flex flex-col text-left">
<h1 class="text-base font-medium leading-tight">Sarah Wilson</h1>
<p class="text-text-muted-light dark:text-text-muted-dark text-sm font-normal leading-tight">s.wilson@email.com</p>
</div>
</div>
</div>
</header>
<main class="flex-1 p-10 overflow-y-auto">
<!-- HeadlineText -->
<h1 class="text-3xl font-bold leading-tight tracking-tight">Welcome back, Sarah!</h1>
<!-- Stats -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-8">
<div class="flex flex-col gap-2 rounded-xl p-6 bg-card-light dark:bg-card-dark border border-border-light dark:border-border-dark">
<p class="text-base font-medium leading-normal text-text-muted-light dark:text-text-muted-dark">Pending Orders</p>
<p class="tracking-tight text-3xl font-bold leading-tight">2</p>
</div>
<div class="flex flex-col gap-2 rounded-xl p-6 bg-card-light dark:bg-card-dark border border-border-light dark:border-border-dark">
<p class="text-base font-medium leading-normal text-text-muted-light dark:text-text-muted-dark">New Messages</p>
<p class="tracking-tight text-3xl font-bold leading-tight">5</p>
</div>
<div class="flex flex-col gap-2 rounded-xl p-6 bg-card-light dark:bg-card-dark border border-border-light dark:border-border-dark">
<p class="text-base font-medium leading-normal text-text-muted-light dark:text-text-muted-dark">Saved Farmers</p>
<p class="tracking-tight text-3xl font-bold leading-tight">12</p>
</div>
</div>
<!-- Recent Orders Section -->
<div class="mt-10">
<div class="flex justify-between items-center mb-4">
<h2 class="text-2xl font-bold leading-tight tracking-tight">Recent Orders</h2>
<a class="text-sm font-medium text-primary hover:underline" href="#">View All</a>
</div>
<div class="bg-card-light dark:bg-card-dark rounded-xl border border-border-light dark:border-border-dark overflow-hidden">
<div class="divide-y divide-border-light dark:divide-border-dark">
<!-- Order Item 1 -->
<div class="p-4 grid grid-cols-5 items-center gap-4 hover:bg-background-light dark:hover:bg-background-dark">
<p class="font-medium">#FC-2023-01</p>
<p class="text-text-muted-light dark:text-text-muted-dark">Oct 28, 2023</p>
<div><span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-warning/20 text-warning">Processing</span></div>
<p class="font-medium text-right">$45.50</p>
<div class="text-right">
<button class="text-sm font-medium text-primary hover:underline">View Details</button>
</div>
</div>
<!-- Order Item 2 -->
<div class="p-4 grid grid-cols-5 items-center gap-4 hover:bg-background-light dark:hover:bg-background-dark">
<p class="font-medium">#FC-2023-02</p>
<p class="text-text-muted-light dark:text-text-muted-dark">Oct 25, 2023</p>
<div><span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-success/20 text-success">Delivered</span></div>
<p class="font-medium text-right">$120.00</p>
<div class="text-right">
<button class="text-sm font-medium text-primary hover:underline">View Details</button>
</div>
</div>
<!-- Order Item 3 -->
<div class="p-4 grid grid-cols-5 items-center gap-4 hover:bg-background-light dark:hover:bg-background-dark">
<p class="font-medium">#FC-2023-03</p>
<p class="text-text-muted-light dark:text-text-muted-dark">Oct 22, 2023</p>
<div><span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-error/20 text-error">Cancelled</span></div>
<p class="font-medium text-right">$32.10</p>
<div class="text-right">
<button class="text-sm font-medium text-primary hover:underline">View Details</button>
</div>
</div>
</div>
</div>
</div>
<!-- Saved Items Section -->
<div class="mt-10">
<div class="flex justify-between items-center mb-4">
<h2 class="text-2xl font-bold leading-tight tracking-tight">Recently Saved Items</h2>
<a class="text-sm font-medium text-primary hover:underline" href="#">View All</a>
</div>
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
<!-- Saved Item Card 1 -->
<div class="bg-card-light dark:bg-card-dark rounded-xl border border-border-light dark:border-border-dark overflow-hidden flex flex-col">
<div class="bg-center bg-no-repeat aspect-video bg-cover" data-alt="A basket of freshly picked, vibrant red apples." style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuA_ozQiXw5cmyG_Cjy3fUikazYhqZ0g-fnfoSeevkOA4UckKNAgNe9ZoHmUOC9JSU26lr2wX7WOO4jFHeDwNXRKWqTXnSujnCF2eBlTxzA4RKuncb8CONPgKOGJ67TA35rS-RVZdAz4bXqVUshT41xB44NZ_fSUIjDQwayW-ampdCrJN6-d5tPQCWN-JrSqunUaC1A4oeXGwDaV98X5GTyMYwjSSdL4J3mxJi0z-xnX2fJ6ILq57S6pwt9LeV6c59-2fnxLpMcbbPM");'></div>
<div class="p-4 flex flex-col flex-grow">
<h3 class="font-bold text-lg">Organic Apples</h3>
<p class="text-sm text-text-muted-light dark:text-text-muted-dark">by Sunnyside Farms</p>
<p class="mt-2 font-bold text-lg">$4.99 / lb</p>
<div class="mt-auto pt-4 flex gap-2">
<button class="w-full text-center rounded-lg px-4 py-2 text-sm font-bold text-primary border border-primary hover:bg-primary/10">Remove</button>
<button class="w-full text-center rounded-lg px-4 py-2 text-sm font-bold bg-primary text-white hover:bg-primary/90">Add to Cart</button>
</div>
</div>
</div>
<!-- Saved Item Card 2 -->
<div class="bg-card-light dark:bg-card-dark rounded-xl border border-border-light dark:border-border-dark overflow-hidden flex flex-col">
<div class="bg-center bg-no-repeat aspect-video bg-cover" data-alt="A loaf of artisanal sourdough bread on a wooden board." style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDBZFUNo4lxMRg7MNzafNVOkv4rck9QEJD-B8AgOF3rIQ3vdk12CcXXoef6nDfT-Kea3Q5KTqVptYuyndBypw--mlLOBM2gBtHBiLh-5StiyWe7ifnz5tU4UewWDpNGSIeX-JeSU9Zlroaoe5iFzhOye6JVJTpqhT0U42UjK45HHIDmSD5BkNfM8rgU1K5iR7JLwlDcnjjHTx5CZQKV-D-PLDtLJoKaq-CrdfckWvpcVcJPtPoUvLm-XEYMF28b8lqdby7UDAld46k");'></div>
<div class="p-4 flex flex-col flex-grow">
<h3 class="font-bold text-lg">Sourdough Loaf</h3>
<p class="text-sm text-text-muted-light dark:text-text-muted-dark">by The Grain Mill</p>
<p class="mt-2 font-bold text-lg">$7.50</p>
<div class="mt-auto pt-4 flex gap-2">
<button class="w-full text-center rounded-lg px-4 py-2 text-sm font-bold text-primary border border-primary hover:bg-primary/10">Remove</button>
<button class="w-full text-center rounded-lg px-4 py-2 text-sm font-bold bg-primary text-white hover:bg-primary/90">Add to Cart</button>
</div>
</div>
</div>
<!-- Saved Item Card 3 -->
<div class="bg-card-light dark:bg-card-dark rounded-xl border border-border-light dark:border-border-dark overflow-hidden flex flex-col">
<div class="bg-center bg-no-repeat aspect-video bg-cover" data-alt="A clear glass jar of golden honey with a wooden dipper." style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuA2sYDONc8wtv9zKsqWqj2Y4Jppz2iUwiHYnMXhgbFvESOJwgkP0s3mTQGzGeMPqjlNl5MspQKfUAIA3MawVhnS0hkuQ1q-3e6tOjZgvjDDQSp-EvamjAK8VQpOogjyx_p-kFny_TAhXiSnfayN9XV7MbHd5N6NvUgPyBqh3pdLkmr5F19DvmP8BPPZmOVE1Lyl5ipdGgGuQ-PyKYFvnbAtH1uXCH3bOkyf1Mmp9kSSWcvSfpxDIM41l1ZnmH7_I_BBR3gBDjvyb0o");'></div>
<div class="p-4 flex flex-col flex-grow">
<h3 class="font-bold text-lg">Wildflower Honey</h3>
<p class="text-sm text-text-muted-light dark:text-text-muted-dark">by Bee's Knees Apiary</p>
<p class="mt-2 font-bold text-lg">$12.00</p>
<div class="mt-auto pt-4 flex gap-2">
<button class="w-full text-center rounded-lg px-4 py-2 text-sm font-bold text-primary border border-primary hover:bg-primary/10">Remove</button>
<button class="w-full text-center rounded-lg px-4 py-2 text-sm font-bold bg-primary text-white hover:bg-primary/90">Add to Cart</button>
</div>
</div>
</div>
<!-- Saved Item Card 4 (Empty State Example) -->
<div class="bg-card-light dark:bg-card-dark rounded-xl border border-dashed border-border-light dark:border-border-dark overflow-hidden flex flex-col items-center justify-center p-4 min-h-[300px]">
<span class="material-symbols-outlined text-4xl text-text-muted-light dark:text-text-muted-dark">search</span>
<p class="mt-2 text-center text-text-muted-light dark:text-text-muted-dark">You have no saved items yet.</p>
<button class="mt-4 text-center rounded-lg px-4 py-2 text-sm font-bold bg-primary text-white hover:bg-primary/90">Start Shopping</button>
</div>
</div>
</div>
</main>
</div>
</div>
</div>
</body></html>