<?php
session_start();
include 'db.php';

// Require login
if(empty($_SESSION['user_id'])){
    header('Location: login.php');
    exit();
}

$user_id = intval($_SESSION['user_id']);
$farmer = null;
$stmt = mysqli_prepare($conn, "SELECT id, fullname, email, phone FROM farmers WHERE id = ?");
if($stmt){
    mysqli_stmt_bind_param($stmt, 'i', $user_id);
    mysqli_stmt_execute($stmt);
    $res = mysqli_stmt_get_result($stmt);
    $farmer = mysqli_fetch_assoc($res);
    mysqli_stmt_close($stmt);
}

?>
<!DOCTYPE html>

<html lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Farmer Dashboard</title>
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
                        "primary": "#2E7D32", // Forest Green from user prompt
                        "background-light": "#F5F5DC", // Beige/Light Tan from user prompt
                        "background-dark": "#1a1a1a",
                        "accent": "#FF7043", // Sunset Orange from user prompt
                        "text-light": "#333333", // Charcoal Gray from user prompt
                        "text-dark": "#e5e5e5",
                    },
                    fontFamily: {
                        "display": ["Work Sans", "sans-serif"]
                    },
                    borderRadius: {
                        "DEFAULT": "0.5rem",
                        "lg": "0.75rem",
                        "xl": "1rem",
                        "full": "9999px",
                    },
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
<body class="font-display bg-background-light dark:bg-background-dark text-text-light dark:text-text-dark">
<div class="relative flex min-h-screen w-full flex-col">
<div class="flex h-full flex-1">
<!-- SideNavBar -->
<aside class="flex w-64 flex-col gap-4 border-r border-gray-200 dark:border-gray-700 bg-white dark:bg-black/20 p-4">
<div class="flex items-center gap-3 px-2 text-primary">
<span class="material-symbols-outlined text-3xl">grass</span>
<h2 class="text-xl font-bold leading-tight tracking-[-0.015em]">FarmConnect</h2>
</div>
<div class="flex flex-col gap-6 pt-4">
<div class="flex flex-col gap-4">
<div class="flex gap-3 px-2">
<div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-10" data-alt="Profile picture" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAZVVhPn7pT4CZP2ku0_TEt-DNQwAOrlGppdMXku9dipxtY-DP31Ol2urKImndAuOsGk8lFMcxPGNbChITUgZLAWC2fGhjaKfxSFINgngE6nWlnhQoCHAXlfxarGsCX5c0qGLBszfgnENv8ublzLd3X25Yyzb6mIs_9mnAVpV1BeG29QRNpo19UkOkHv17CzG3halzu6YlLqbaVTaahLoQNN4lgFOP0wBeBrXeQLxPyS53kCvjLT41RhaaBxSHvs6_nJvhEqCUAb80");'></div>
<div class="flex flex-col">
<h1 class="text-text-light dark:text-text-dark text-base font-semibold leading-normal"><?php echo htmlspecialchars($farmer['fullname'] ?? ($_SESSION['user_name'] ?? 'Farmer')); ?></h1>
<p class="text-gray-500 dark:text-gray-400 text-sm font-normal leading-normal"><?php echo htmlspecialchars($farmer['phone'] ?? $farmer['email'] ?? ''); ?></p>
</div>
</div>
<nav class="flex flex-col gap-2">
<a class="flex items-center gap-3 px-3 py-2 rounded-lg bg-primary/20 text-primary" href="#">
<span class="material-symbols-outlined fill text-2xl">dashboard</span>
<p class="text-sm font-semibold leading-normal">Dashboard</p>
</a>
<a class="flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-black/5 dark:hover:bg-white/5" href="#">
<span class="material-symbols-outlined text-2xl">potted_plant</span>
<p class="text-sm font-medium leading-normal">My Crops</p>
</a>
<a class="flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-black/5 dark:hover:bg-white/5" href="#">
<span class="material-symbols-outlined text-2xl">shopping_cart</span>
<p class="text-sm font-medium leading-normal">Orders</p>
</a>
<a class="flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-black/5 dark:hover:bg-white/5" href="#">
<span class="material-symbols-outlined text-2xl">chat_bubble</span>
<p class="text-sm font-medium leading-normal">Messages</p>
</a>
<a class="flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-black/5 dark:hover:bg-white/5" href="#">
<span class="material-symbols-outlined text-2xl">bar_chart</span>
<p class="text-sm font-medium leading-normal">Analytics</p>
</a>
</nav>
</div>
</div>
<div class="mt-auto flex flex-col gap-2">
<a class="flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-black/5 dark:hover:bg-white/5" href="#">
<span class="material-symbols-outlined text-2xl">settings</span>
<p class="text-sm font-medium leading-normal">Settings</p>
</a>
<a class="flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-black/5 dark:hover:bg-white/5" href="login.php?logout=1">
<span class="material-symbols-outlined text-2xl">logout</span>
<p class="text-sm font-medium leading-normal">Logout</p>
</a>
</div>
</aside>
<main class="flex flex-1 flex-col">
<!-- TopNavBar -->
<header class="flex items-center justify-between whitespace-nowrap border-b border-gray-200 dark:border-gray-700 bg-white/50 dark:bg-black/20 backdrop-blur-sm px-8 py-3 sticky top-0 z-10">
<label class="flex flex-col !h-10 w-full max-w-sm">
<div class="flex w-full flex-1 items-stretch rounded-lg h-full">
<div class="text-gray-500 dark:text-gray-400 flex border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-800 items-center justify-center pl-4 rounded-l-lg border-r-0">
<span class="material-symbols-outlined">search</span>
</div>
<input class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-text-light dark:text-text-dark focus:outline-0 focus:ring-2 focus:ring-primary/50 border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-800 focus:border-primary/50 h-full placeholder:text-gray-500 dark:placeholder:text-gray-400 px-4 rounded-l-none border-l-0 pl-2 text-base font-normal leading-normal" placeholder="Search orders, crops..." value=""/>
</div>
</label>
<div class="flex flex-1 justify-end gap-4 items-center">
<button class="flex items-center justify-center rounded-lg h-10 w-10 relative bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 hover:bg-gray-100 dark:hover:bg-gray-700 text-text-light dark:text-text-dark">
<span class="material-symbols-outlined">notifications</span>
<div class="absolute top-1.5 right-1.5 size-2.5 rounded-full bg-accent border-2 border-white dark:border-gray-800"></div>
</button>
<div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-10" data-alt="Profile picture of John Appleseed" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuB1kg-lDn8In5Ys6ZanfIoqiCB42rrYH14zIzd67_WNbKnUNjDwnsmQXZHXhTHEnSRXovZp2bOZ8bf4vTfzlsbm2IMqwbg5qaz36pFO-Aste08NhGcauLISjNCAZ_V4m925c8fZwl6axO3eHstHs7dTUgJN9MeX-q_oSLJagbv1h-RoPysipr9IzSZ9BUynM8RQtUBkcXqB1fRhA8qXV5hAVi6THfK1O_H8h9I1Dqj0AWrufHP-3JSR009Qqhac5tFj3KnNB925qMo");'></div>
</div>
</header>
<!-- Main Content -->
<div class="flex-1 p-8">
<div class="flex flex-col gap-8 max-w-7xl mx-auto">
<!-- HeadlineText -->
<div class="flex justify-between items-center">
<h1 class="text-text-light dark:text-text-dark tracking-light text-[32px] font-bold leading-tight">Welcome back, <?php echo htmlspecialchars($farmer['fullname'] ?? ($_SESSION['user_name'] ?? 'Farmer')); ?>!</h1>
<button class="flex items-center justify-center gap-2 rounded-lg bg-primary hover:bg-primary/90 text-white font-bold h-11 px-6 text-sm">
<span class="material-symbols-outlined">add_circle</span>
<span>Add New Crop</span>
</button>
</div>
<!-- Stats -->
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
<div class="flex flex-col gap-2 rounded-xl p-6 bg-white dark:bg-black/20 border border-gray-200 dark:border-gray-800">
<p class="text-base font-medium leading-normal text-gray-600 dark:text-gray-300">New Orders</p>
<p class="text-text-light dark:text-text-dark tracking-light text-3xl font-bold leading-tight">12</p>
<p class="text-primary text-base font-medium leading-normal">+5%</p>
</div>
<div class="flex flex-col gap-2 rounded-xl p-6 bg-white dark:bg-black/20 border border-gray-200 dark:border-gray-800">
<p class="text-base font-medium leading-normal text-gray-600 dark:text-gray-300">Pending Shipments</p>
<p class="text-text-light dark:text-text-dark tracking-light text-3xl font-bold leading-tight">5</p>
<p class="text-primary text-base font-medium leading-normal">+2%</p>
</div>
<div class="flex flex-col gap-2 rounded-xl p-6 bg-white dark:bg-black/20 border border-gray-200 dark:border-gray-800">
<p class="text-base font-medium leading-normal text-gray-600 dark:text-gray-300">Total Revenue (Month)</p>
<p class="text-text-light dark:text-text-dark tracking-light text-3xl font-bold leading-tight">$2,450</p>
<p class="text-gray-500 dark:text-gray-400 text-base font-medium leading-normal">-1.5%</p>
</div>
<div class="flex flex-col gap-2 rounded-xl p-6 bg-white dark:bg-black/20 border border-gray-200 dark:border-gray-800">
<p class="text-base font-medium leading-normal text-gray-600 dark:text-gray-300">Unread Messages</p>
<p class="text-text-light dark:text-text-dark tracking-light text-3xl font-bold leading-tight">3</p>
<div class="w-10 h-1 mt-3.5 rounded-full bg-accent"></div>
</div>
</div>
<!-- My Crops Section -->
<div class="flex flex-col gap-4">
<!-- SectionHeader -->
<h2 class="text-text-light dark:text-text-dark text-[22px] font-bold leading-tight tracking-[-0.015em]">My Crops</h2>
<div class="overflow-x-auto bg-white dark:bg-black/20 rounded-xl border border-gray-200 dark:border-gray-800">
<table class="w-full text-left">
<thead class="border-b border-gray-200 dark:border-gray-800">
<tr>
<th class="p-4 text-sm font-semibold text-gray-500 dark:text-gray-400">Crop</th>
<th class="p-4 text-sm font-semibold text-gray-500 dark:text-gray-400">Stock</th>
<th class="p-4 text-sm font-semibold text-gray-500 dark:text-gray-400">Price</th>
<th class="p-4 text-sm font-semibold text-gray-500 dark:text-gray-400">Status</th>
<th class="p-4 text-sm font-semibold text-gray-500 dark:text-gray-400 text-right">Actions</th>
</tr>
</thead>
<tbody>
<tr class="border-b border-gray-200 dark:border-gray-800 last:border-b-0 hover:bg-gray-50 dark:hover:bg-white/5">
<td class="p-4">
<div class="flex items-center gap-4">
<div class="bg-center bg-no-repeat aspect-square bg-cover rounded-lg size-10" data-alt="Image of ripe red tomatoes" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDuuesCLV1dgaprV_Gf2s1dnnoUJ3Tgif_606fyETNWm2Dx5NyYrrCptHdJDBKoIyqEN1EnZ8xCp19JU6-AaRdMMYoh5wCLWqyuAE9GTGLCojrNTh7WbpXNBF_U0nGbDIqjJRXAUBTlBH-1uRNa4J-Q3b5zvK10MrKyNZ6haecYvFxd8t96w6UCAHM0_Qv3bm8iNGK9nvE-01HT2UmhtAo8rdke9V35UEmOx6Xd76xnHRQ27SE6w756WrHZ42zafmceJofAWn9g5rw");'></div>
<span class="font-medium">Heirloom Tomatoes</span>
</div>
</td>
<td class="p-4 text-gray-600 dark:text-gray-300">50 lbs</td>
<td class="p-4 text-gray-600 dark:text-gray-300">$3.50 / lb</td>
<td class="p-4">
<span class="inline-flex items-center rounded-full bg-green-100 dark:bg-green-900/50 px-3 py-1 text-xs font-medium text-green-700 dark:text-green-300">Active</span>
</td>
<td class="p-4 text-right">
<button class="p-2 rounded-md hover:bg-gray-200 dark:hover:bg-gray-700"><span class="material-symbols-outlined text-xl">edit</span></button>
<button class="p-2 rounded-md hover:bg-gray-200 dark:hover:bg-gray-700"><span class="material-symbols-outlined text-xl text-red-500">delete</span></button>
</td>
</tr>
<tr class="border-b border-gray-200 dark:border-gray-800 last:border-b-0 hover:bg-gray-50 dark:hover:bg-white/5">
<td class="p-4">
<div class="flex items-center gap-4">
<div class="bg-center bg-no-repeat aspect-square bg-cover rounded-lg size-10" data-alt="Image of fresh carrots" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCyqd-ilzWthtaolcnN_KlBTzEHdECXfPxAeI2oMZDGnPqk7PUb-19fdFGzGdma3xxSeDlqVvtmDNyDoe8oyh8EayU5oNFBvC8Fhue1k36JDRsRXYtn4jaAmvSTWIyKRzIhgxKX8iy6EchDSCt2eiU4jXjw8gpP1M_KH8uaG9HqNgubbR2Rs6USZHbhvlqxok9zQTCnOn2fDwiWM8iMRDtI9eY8izkI-IcgrllwlG0wVQSuUNftwT4Hu9bjVtrbQlurY_FufInUb_Q");'></div>
<span class="font-medium">Organic Carrots</span>
</div>
</td>
<td class="p-4 text-gray-600 dark:text-gray-300">120 bunches</td>
<td class="p-4 text-gray-600 dark:text-gray-300">$2.00 / bunch</td>
<td class="p-4">
<span class="inline-flex items-center rounded-full bg-green-100 dark:bg-green-900/50 px-3 py-1 text-xs font-medium text-green-700 dark:text-green-300">Active</span>
</td>
<td class="p-4 text-right">
<button class="p-2 rounded-md hover:bg-gray-200 dark:hover:bg-gray-700"><span class="material-symbols-outlined text-xl">edit</span></button>
<button class="p-2 rounded-md hover:bg-gray-200 dark:hover:bg-gray-700"><span class="material-symbols-outlined text-xl text-red-500">delete</span></button>
</td>
</tr>
<tr class="border-b border-gray-200 dark:border-gray-800 last:border-b-0 hover:bg-gray-50 dark:hover:bg-white/5">
<td class="p-4">
<div class="flex items-center gap-4">
<div class="bg-center bg-no-repeat aspect-square bg-cover rounded-lg size-10" data-alt="Image of fresh strawberries" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDfdqurBKZnAteE5kvGsyBxIRACjuoSUDeU1XddCDVBfRB4fFU0ebIqYY3ySuiAxwX5rTH3VUJgzUKV1f_8SpBxFPrIweF9mdBsieB5Y9lF1sYJwjmp5zQO_t2OVnqaoEJ3w48s02IBS8JmZa2RNt78puaFgGNhblOGDz6LDEFl7Y1Ur_p2uYkuU23dN5DZCNFMPNGv_l3IuhXA2olE0MPg3rCgDksE7iU51TUnGL7CxKX2yitvb8RJCOgmRF11_jrsEfQNmHhIbg4");'></div>
<span class="font-medium">Summer Strawberries</span>
</div>
</td>
<td class="p-4 text-gray-600 dark:text-gray-300">0 pints</td>
<td class="p-4 text-gray-600 dark:text-gray-300">$4.00 / pint</td>
<td class="p-4">
<span class="inline-flex items-center rounded-full bg-gray-200 dark:bg-gray-700 px-3 py-1 text-xs font-medium text-gray-600 dark:text-gray-300">Sold Out</span>
</td>
<td class="p-4 text-right">
<button class="p-2 rounded-md hover:bg-gray-200 dark:hover:bg-gray-700"><span class="material-symbols-outlined text-xl">edit</span></button>
<button class="p-2 rounded-md hover:bg-gray-200 dark:hover:bg-gray-700"><span class="material-symbols-outlined text-xl text-red-500">delete</span></button>
</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>
</main>
</div>
</div>
</body></html>