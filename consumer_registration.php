<?php
session_start();
include 'db.php';


// Only run this code when form is submitted
if(isset($_POST['register'])) {
    // Safely get form values
    $fullname      = isset($_POST['fullname']) ? $_POST['fullname'] : '';
    $email         = isset($_POST['email']) ? $_POST['email'] : '';
    $phone         = isset($_POST['phone']) ? $_POST['phone'] : '';
    $password      = isset($_POST['password']) ? password_hash($_POST['password'], PASSWORD_DEFAULT) : '';

    // Check if email already exists
    $check = mysqli_query($conn, "SELECT * FROM consumers WHERE email='$email'");
    if(mysqli_num_rows($check) > 0){
        $error = "Email already registered!";
    } else {
        $insert = mysqli_query($conn, "INSERT INTO consumers (fullname,email,phone,password) VALUES ('$fullname','$email','$phone','$password')");
        if($insert){
            $success = "Registration successful! You can now login.";
        } else {
            $error = "Registration failed. Try again!";
        }
    }
}
?>
<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Consumers Registration</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;700;900&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<style>
        .material-symbols-outlined {
            font-variation-settings:
            'FILL' 0,
            'wght' 400,
            'GRAD' 0,
            'opsz' 24
        }
    </style>
<script>
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            colors: {
              "primary": "#11d411",
              "background-light": "#f6f8f6",
              "background-dark": "#102210",
            },
            fontFamily: {
              "display": ["Work Sans", "Noto Sans", "sans-serif"]
            },
            borderRadius: {"DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px"},
          },
        },
      }
    </script>
</head>
<body class="font-display bg-background-light dark:bg-background-dark">
<div class="relative flex min-h-screen w-full flex-col group/design-root overflow-x-hidden">
<div class="flex-grow">
<div class="flex flex-col lg:flex-row min-h-screen">
<!-- Left Pane -->
<div class="w-full lg:w-1/2 flex flex-col justify-center items-center bg-background-light dark:bg-background-dark p-8 lg:p-12 order-2 lg:order-1">
<div class="max-w-md w-full">
<div class="flex flex-col gap-6">
<div class="w-full bg-center bg-no-repeat aspect-video bg-cover rounded-lg" data-alt="A vibrant, sunlit field of healthy crops on a modern farm." style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAsq9JWzKlGBDtxB2BimA3AgTZIVi5roocBx3tCfeROLdhjttW72t-fVIcBknJvGiJGCU6VSSEpatbC0IMIeyJ8NAE2Dnge38gYSMgH74DgIhsNrmAZFOyeg-xd7ckLM2aK8oKxu3mxAnUw9E9JL37MWV6JZ1wrgMlmb5Voj1ikGgtezKcENOFusEwWpVPDpEkafl4I4SbgZPZpkZjM7FchP0u5SRcqdtfgFN-Odr1SlBPcfzkWBzT16Fdjitwd68D3UnVHaDqiA0Q");'></div>
<div class="flex flex-col gap-2 text-left">
<h1 class="text-[#111811] dark:text-white text-4xl font-black leading-tight tracking-[-0.033em] md:text-5xl">
                                    Connecting Growers to the Community.
                                </h1>
<h2 class="text-[#111811] dark:text-gray-300 text-sm font-normal leading-normal md:text-base">
                                    Join our network to sell your produce directly and grow your business.
                                </h2>
</div>
</div>
</div>
</div>
<!-- Right Pane -->
<div class="w-full lg:w-1/2 flex flex-col justify-center items-center bg-white dark:bg-black p-8 lg:p-12 order-1 lg:order-2">
<div class="max-w-md w-full">
<div class="flex flex-col gap-6">
<a class="mx-auto" href="index.php" aria-label="AgriConnect Logo">
<svg class="h-10 w-auto text-primary" fill="none" viewbox="0 0 102 82" xmlns="http://www.w3.org/2000/svg">
<path d="M85.7333 16.3C83.8444 14.1 81.6 12.2333 79.1 10.7C71.3 5.9 62.1 3 51.5 3C40.9 3 31.7 5.9 23.9 10.7C21.4 12.2333 19.1556 14.1 17.2667 16.3C11.8333 22.1 7.6 29.5 5.03333 37.6C2.3 46.1 1 55.4 1 65C1 67.2 1.16667 69.3 1.5 71.3C1.83333 73.3 2.24444 75.2 2.73333 77H99.2667C99.7556 75.2 100.167 73.3 100.5 71.3C100.833 69.3 101 67.2 101 65C101 55.4 99.7 46.1 96.9667 37.6C94.4 29.5 90.1667 22.1 85.7333 16.3Z" stroke="currentColor" stroke-width="2"></path>
<path d="M51.5 81C55.4 81 59.2 80.5 62.9 79.5C66.6 78.5 70 77.1 73.1 75.3C76.2 73.5 78.9 71.3 81.2 68.7L51.5 31L21.8 68.7C24.1 71.3 26.8 73.5 29.9 75.3C33 77.1 36.4 78.5 40.1 79.5C43.8 80.5 47.6 81 51.5 81Z" stroke="currentColor" stroke-width="2"></path>
</svg>
</a>
<!-- Registration Form -->
<div id="register-form">
<h1 class="text-[#111811] dark:text-white tracking-light text-[32px] font-bold leading-tight text-left pb-3 pt-6">Create Your Consumer Account</h1>
<form class="flex flex-col gap-4" action="consumer_registration.php" method="POST">
<?php if(!empty($error)): ?>
    <div class="text-center text-sm text-red-600 pb-2"><?php echo htmlspecialchars($error); ?></div>
<?php endif; ?>
<?php if(!empty($success)): ?>
    <div class="text-center text-sm text-green-600 pb-2"><?php echo htmlspecialchars($success); ?></div>
<?php endif; ?>
<div class="flex flex-col sm:flex-row gap-4">
<label class="flex flex-col flex-1">
<p class="text-[#111811] dark:text-gray-200 text-base font-medium leading-normal pb-2">Full Name</p>
<input name="fullname" class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-[#111811] dark:text-white focus:outline-0 focus:ring-2 focus:ring-primary/50 border border-[#dbe6db] dark:border-gray-600 bg-white dark:bg-neutral-800 focus:border-primary h-14 placeholder:text-[#618961] dark:placeholder:text-gray-400 p-[15px] text-base font-normal leading-normal" placeholder="John Doe" type="text"/>
</label>
<label class="flex flex-col">
<p class="text-[#111811] dark:text-gray-200 text-base font-medium leading-normal pb-2">Email</p>
<input name="email" class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-[#111811] dark:text-white focus:outline-0 focus:ring-2 focus:ring-primary/50 border border-[#dbe6db] dark:border-gray-600 bg-white dark:bg-neutral-800 focus:border-primary h-14 placeholder:text-[#618961] dark:placeholder:text-gray-400 p-[15px] text-base font-normal leading-normal" placeholder="Enter your email" type="email"/>
</label>
<label class="flex flex-col flex-1">
<p class="text-[#111811] dark:text-gray-200 text-base font-medium leading-normal pb-2">Phone</p>
<input name="phone" class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-[#111811] dark:text-white focus:outline-0 focus:ring-2 focus:ring-primary/50 border border-[#dbe6db] dark:border-gray-600 bg-white dark:bg-neutral-800 focus:border-primary h-14 placeholder:text-[#618961] dark:placeholder:text-gray-400 p-[15px] text-base font-normal leading-normal" placeholder="Green Valley Farms" type="text"/>
</label>
</div>
<label class="flex flex-col">
<p class="text-[#111811] dark:text-gray-200 text-base font-medium leading-normal pb-2">Password</p>
<input name="password" class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-[#111811] dark:text-white focus:outline-0 focus:ring-2 focus:ring-primary/50 border border-[#dbe6db] dark:border-gray-600 bg-white dark:bg-neutral-800 focus:border-primary h-14 placeholder:text-[#618961] dark:placeholder:text-gray-400 p-[15px] text-base font-normal leading-normal" placeholder="Create a strong password" type="password"/>
</label>
<label class="flex items-center gap-2 mt-2">
<input class="form-checkbox h-4 w-4 rounded text-primary focus:ring-primary/50 border-gray-300 dark:border-gray-600 bg-white dark:bg-neutral-800" type="checkbox"/>
<span class="text-sm text-gray-600 dark:text-gray-400">I agree to the <a class="text-primary hover:underline" href="#">Terms of Service</a></span>
</label>
<button class="flex min-w-[84px] w-full mt-2 cursor-pointer items-center justify-center overflow-hidden rounded-lg h-12 px-5 bg-primary text-black text-base font-bold leading-normal tracking-[0.015em] hover:bg-opacity-90 transition-colors" name="register">
                                        Register
                                    </button>
</form>
</div>
<p class="text-center text-sm text-gray-600 dark:text-gray-400 pt-4">Already have an account? <a class="font-medium text-primary hover:underline" href="consumer_login.php">Login</a></p>
</div>
</div>
</div>
</div>
</div>
</div>

</body></html>