<!DOCTYPE html>
<html lang="en">

<head>
    <?= $this->element("title-meta", array("title" => "Praszo")) ?>

    <?= $this->element("head-css") ?>

</head>

<body>

    <?= $this->element("nav-dark") ?>

    <!-- =========== Hero Section Start =========== -->
    <section
        class="relative pt-16 pb-16 overflow-x-hidden from-slate-500/10 bg-[url(../images/home/bg-1.png)] bg-no-repeat bg-cover"
        id="home">
        <div class="container">

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-6 items-center">
                <div class="text-sm py-20 px-10">
                    <!-- <span
                        class="inline-flex py-2 text-lg text-black font-medium items-center justify-center rounded-full">
                        <i data-lucide="minus"></i> The Best Project Management Service</span> -->
                    <h1 class="md:text-6xl/tight text-4xl text-dark tracking-normal leading-normal font-bold mb-4 mt-6">
                    Projects. People. Precision. <span class="text-primary">  </span></h1>
                    <p class="text-base font-medium text-muted leading-7 mt-5 capitalize">Make every task count with smarter project management.</p>
                    <form class="max-w-md mt-5">
  <div class="flex h-12 items-stretch border border-gray-300 rounded-full shadow-sm focus-within:ring-2 focus-within:ring-primary focus-within:border-primary overflow-hidden">
    <input type="email" name="email" id="email" placeholder="Enter your email"
      class="flex-1 px-4 text-sm focus:outline-none border-none border-no" required />
    <button type="submit"
      class="px-5 text-white text-sm bg-primary hover:bg-primaryDark border-l border-primary hover:border-primaryDark transition-all duration-300 font-medium rounded-r-full">
      Subscribe
    </button>
  </div>
</form>

                    <div class="flex flex-wrap items-center justify-center gap-3 lg:justify-normal mt-9">
                        <img src="/images/store.png" class="h-8" alt="apple image">
                        <img src="/images/google.png" class="h-8" alt="google image">
                    </div>
                </div>

                <div class="mt-4 pt-2 sm:mt-0 sm:pt-0 relative">
                    <img src="/images/web-app.png" alt="" class=" mx-auto">

                    <!-- <div class="absolute bottom-3/4 -end-14 2xl:end-8 hidden xl:block">
                        <div class="flex items-center gap-2 p-2 pe-6 rounded-full bg-white shadow-2xl">
                            <div class="rounded-full bg-primary h-9 w-9 items-center justify-center flex">
                                <i data-lucide="codesandbox" class="h-6 w-6 text-white"></i>
                            </div>
                            <div class="">
                                <h6 class="text-base font-medium text-default-900">Express Delivery Service</h6>
                            </div>
                        </div>
                    </div>


                    <div class="absolute bottom-28 start-6 hidden xl:block">
                        <div class="flex items-center gap-2 p-2 pe-6 rounded-full bg-white shadow-2xl">
                            <div class="rounded-full bg-primary h-9 w-9 items-center justify-center flex">
                                <i data-lucide="headset" class="h-6 w-6 text-white"></i>
                            </div>
                            <div class="">
                                <h6 class="text-base font-medium text-default-900">24x7 Customer Support</h6>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>

        </div>
    </section>

    <!-- Services Start -->
    <section id="services" class="py-20">
        <div class="container">
            <div class="max-w-2xl mx-auto text-center">
                <span
                    class="text-sm text-primary uppercase font-semibold tracking-wider text-default-950">Benefits</span>
                <h2 class="text-3xl md:text-4xl/tight font-semibold text-black mt-4">More Than a Tool — A Productivity Partner</h2>
                <p class="text-base font-medium mt-4 text-muted">Experience seamless collaboration, effortless tracking, and powerful automation — all in one platform designed to elevate your team's performance and keep projects on point.</p>
            </div>

            <div
                class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-x-3 gap-y-6 md:gap-y-12 lg:gap-y-24 md:pt-20 pt-12">

                <div class="text-center">
                    <div class="flex items-center justify-center">
                        <div
                            class="items-center justify-center flex bg-primary/10 rounded-[49%_80%_40%_90%_/_50%_30%_70%_80%] h-20 w-20 border">
                            <i data-lucide="menu" class="h-10 w-10 text-primary"></i>
                        </div>
                    </div>
                    <h1 class="text-xl font-semibold pt-4">Take complete control of your projects.</h1>
                    <p class="text-base text-gray-600 mt-2">Manage all projects, tasks, and deadlines from a single platform.  
Reduce manual effort by streamlining recurring tasks and assignments. 
Assign tasks, track progress, and communicate easily with the team. 
</p>
                </div>

                <div class="text-center">
                    <div class="flex items-center justify-center">
                        <div
                            class="items-center justify-center flex bg-primary/10 rounded-[49%_80%_40%_90%_/_50%_30%_70%_80%] h-20 w-20 border">
                            <i data-lucide="lightbulb" class="h-10 w-10 text-primary"></i>
                        </div>
                    </div>
                    <h1 class="text-xl font-semibold pt-4">Get access to accurate time and expense tracking.</h1>
                    <p class="text-base text-gray-600 mt-2">Easily track billable hours and team productivity.  
Connect time sheets to project costs for proper financial tracking. 
Get faster insights into expenses, budgets, and resource allocation.  </p>
                </div>

                <div class="text-center">
                    <div class="flex items-center justify-center">
                        <div
                            class="items-center justify-center flex bg-primary/10 rounded-[49%_80%_40%_90%_/_50%_30%_70%_80%] h-20 w-20 border">
                            <i data-lucide="bar-chart-big" class="h-10 w-10 text-primary"></i>
                        </div>
                    </div>
                    <h1 class="text-xl font-semibold pt-4">Always be compliant and audit ready. </h1>
                    <p class="text-base text-gray-600 mt-2">Access detailed audit trails and maintain transparency in projects.  
Ensure accurate control and permission over the data. 
With structured workflows, stay aligned with industry standards.  
</p>
                </div>

                <div class="text-center">
                    <div class="flex items-center justify-center">
                        <div
                            class="items-center justify-center flex bg-primary/10 rounded-[49%_80%_40%_90%_/_50%_30%_70%_80%] h-20 w-20 border">
                            <i data-lucide="codepen" class="h-10 w-10 text-primary"></i>
                        </div>
                    </div>
                    <h1 class="text-xl font-semibold pt-4">Keep everyone connected </h1>
                    <p class="text-base text-gray-600 mt-2">Maintain all project-related communications in one place with centralized discussion boards. 
Securely share important project files and documents. 
Be reminded of the deadlines or updates with automated notification alerts. 
</p>
                </div>

                <div class="text-center">
                    <div class="flex items-center justify-center">
                        <div
                            class="items-center justify-center flex bg-primary/10 rounded-[49%_80%_40%_90%_/_50%_30%_70%_80%] h-20 w-20 border">
                            <i data-lucide="shield" class="h-10 w-10 text-primary"></i>
                        </div>
                    </div>
                    <h1 class="text-xl font-semibold pt-4">Gain solutions that adapt to your changing needs. </h1>
                    <p class="text-base text-gray-600 mt-2">With flexible workflow configuration, adapt your system accordingly. 
                    Third-party integration helps in connecting with existing tools. </p>
                </div>

            
            </div>

        </div>
    </section>
    <!-- Services End -->

    <!-- Feature Start -->
    <section id="features" class="py-20">
        <div class="container">

            <div class="grid lg:grid-cols-2 items-center gap-6">
                <div class="flex items-center">
                    <img src="/images/m-app.png" class="h-[650px] rounded-xl mx-auto" alt="feature section">
                </div>

                <div class="lg:ms-5 ms-8">
                    <span class="text-sm text-primary uppercase font-semibold tracking-wider text-default-950">Features</span>
                    <h2 class="text-3xl md:text-4xl/tight font-semibold text-black mt-4">Core Capabilities That Power Your Practice</h2>
                    <a href="#"
                        class="inline-flex items-center justify-center gap-3 text-sm font-medium text-black mt-6">Learn
                        More
                        <i data-lucide="move-right"></i>
                    </a>
                    <hr class="border-gray-200 my-6">
                    </hr>

                    <div class="flex items-start gap-5">
                        
                        <div>
                            <div
                                class="w-12 h-12 rounded-full border border-dashed border-primary/40 bg-primary/10 flex items-center justify-center">
                                <i data-lucide="lock" class="text-base text-blue-600"></i>
                            </div>
                        </div>
                        <div>
                            <h4 class="text-xl font-semibold">On-Premises Hosting</h4>
                            <p class="text-base font-normal text-gray-500 mt-2">Keep data 100% secure with private, compliant server-based deployment.

</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-5 mt-8">
                        <div>
                            <div
                                class="w-12 h-12 rounded-full border border-dashed border-primary/40 bg-primary/10 flex items-center justify-center">
                                <i data-lucide="layers-2" class="text-base text-blue-600"></i>
                            </div>
                        </div>

                        <div>
                            <h4 class="text-xl font-semibold">Real-Time Collaboration</h4>
                            <p class="text-base font-normal text-gray-500 mt-2">Engage clients and teams with live updates, chats, and custom workflows.</p>
                        </div>

                    </div>

                    <div class="flex items-start gap-5 mt-8">
                    <div>
                            <div
                                class="w-12 h-12 rounded-full border border-dashed border-primary/40 bg-primary/10 flex items-center justify-center">
                                <i data-lucide="check" class="text-base text-blue-600"></i>
                            </div>
                        </div>

                        <div>
                            <h4 class="text-xl font-semibold">Automated Invoicing & Expense Tracking</h4>
                            <p class="text-base font-normal text-gray-500 mt-2">Generate accurate invoices and link expenses directly to projects.</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Feature End -->

    <section class="relative py-20 bg-cover bg-no-repeat bg-center"
        style="background-image: url('/images/home/parallax.png');" data-jarallax data-speed="0.20">
        <div class="absolute inset-0 w-full h-full bg-gray-900/70"></div>

        <div class="container">
            <div class="pb-10 lg:pb-0 flex flex-col items-center justify-center">
                <h1 class="text-3xl md:text-4xl/tight font-semibold text-white text-center">Make every task count with smarter project management.
                </h1>
                <p class="text-base font-normal max-w-xl text-center mx-auto text-white mt-6">Stay organized, boost productivity, and deliver results with powerful, intuitive tools.</p>
                <div class="flex flex-wrap mt-6 gap-3">
                    <button
                        class="py-2 px-6 rounded-md text-white text-base bg-primary hover:bg-primaryDark border border-primary hover:border-primaryDark transition-all duration-500 font-medium">Get Started</button>
                    <!-- <button
                        class="py-2 px-6 rounded-md border border-white text-base hover:border-white hover:bg-white hover:text-primary transition-all duration-500 font-medium text-white ">See
                        Video</button> -->
                </div>
            </div>
        </div>
    </section>

    <!-- About Start -->
    <section id="about" class="py-20">
        <div class="container">

            <div class="grid lg:grid-cols-2 items-center gap-6">
                <div class="lg:ms-5 ms-8">
                    <div>
                        <span
                            class="text-sm text-primary uppercase font-semibold tracking-wider text-default-950">Services</span>
                    </div>
                    <h2 class="text-3xl md:text-4xl/tight font-semibold text-black mt-4">Get Started In Minutes:
                        Download The App, Create Your Profile</h2>
                    <p class="text-base font-normal text-muted mt-6">Digital payment has revolutionized the way we make
                        financial transactions today With Rible you can enjoy the convenience of making secure &
                        hassle-free payments online. Our platform provides you with a quick and eary.</p>

                    <div class="grid lg:grid-cols-3 grid-cols-1 gap-8 mt-9">

                        <div class="">
                            <div class="flex items-center justify-start">
                                <div
                                    class="items-center justify-center flex bg-green-50 rounded-full h-20 w-20 border border-dashed border-green-50">
                                    <i data-lucide="smartphone" class="h-8 w-8 text-black"></i>
                                </div>
                            </div>
                            <h1 class="text-xl font-semibold pt-6">1. Download</h1>
                            <p class="text-base text-gray-600 font-normal mt-2">Join the millions already benefitting
                                from.</p>
                        </div>

                        <div class="">
                            <div class="flex items-center justify-start">
                                <div
                                    class="items-center justify-center flex bg-red-50 rounded-full h-20 w-20 border border-dashed border-red-50">
                                    <i data-lucide="file-text" class="h-8 w-8 text-black"></i>
                                </div>
                            </div>
                            <h1 class="text-xl font-semibold  pt-6">2. Set Profile</h1>
                            <p class="text-base text-gray-600 font-normal mt-2">Join the millions already benefitting
                                from.</p>
                        </div>

                        <div class="">
                            <div class="flex items-center justify-start">
                                <div
                                    class="items-center justify-center flex bg-primary/10 rounded-full h-20 w-20 border border-dashed border-primary/10">
                                    <i data-lucide="rocket" class="h-8 w-8 text-black"></i>
                                </div>
                            </div>
                            <h1 class="text-xl font-semibold pt-6">3. Start</h1>
                            <p class="text-base text-gray-600 font-normal mt-2">Join the millions already benefitting
                                from.</p>
                        </div>
                    </div>
                </div>

                <div class="flex items-center">
                    <img src="/images/mob-app.png" class="h-[600px] rounded-xl mx-auto"
                        alt="feature-image">
                </div>

            </div>
        </div>
    </section>
    <!-- About End -->

    <!-- Pricing Start -->
    <!-- <section id="pricing" class="py-20">
        <div class="container">
            <div class="max-w-2xl mx-auto text-center">
                <div>
                    <span class="text-sm text-primary uppercase font-semibold tracking-wider text-default-950">Pricing</span>
                </div>
                <h2 class="text-3xl md:text-4xl/tight font-semibold text-black mt-4">Get the power of the professional services with the simple price</h2>
            </div>

            <div class="grid grid-cols-1 mt-8">
                <div class="flex justify-center">
                    <div id="toggle-count" class="p-1 inline-block border border-gray-200 rounded-lg">
                        <span class="relative inline-block">
                            <input id="toggle-count-monthly" name="toggle-count" type="radio" class="absolute top-0 end-0 size-full border-transparent bg-transparent bg-none text-white rounded-lg cursor-pointer focus:border-0 focus:ring-transparent focus:ring-offset-transparent" checked>
                            <label for="toggle-count-monthly" class="inline-block py-2 px-5 rounded-s-md uppercase text-sm font-semibold">
                                Monthly
                            </label>
                        </span>
                        <span class="relative inline-block">
                            <input id="toggle-count-annual" name="toggle-count" type="radio" class="absolute top-0 end-0 size-full border-transparent bg-transparent bg-none text-white rounded-lg cursor-pointer focus:border-0 focus:ring-transparent focus:ring-offset-transparent">
                            <label for="toggle-count-annual" class="inline-block py-2 px-5 rounded-e-md uppercase text-sm font-semibold">
                                Annual
                            </label>
                        </span>
                    </div>
                </div>

                <p class="text-muted text-base mx-auto mt-5">Save up to 15% with Annual Plan.</p>

                <div id="StarterContent">
                    <div class="mt-14" id="start-month" role="tabpanel" aria-labelledby="start-month-tab">
                        <div class="grid lg:grid-cols-3 grid-cols-1 gap-10">

                            <div class="flex flex-col shadow-2xl rounded-xl bg-white overflow-hidden">
                                <div class="text-center pt-10">
                                    <img src="/images/vector/vector-1.png" class="h-28 w-28 mx-auto" alt="email">
                                    <h5 class="text-2xl font-semibold text-black">Standard</h5>
                                    <h2 class="text-5xl mt-5 mb-1 items-center align-middle">
                                        <sup class="text-3xl align-middle">$</sup>
                                        <span data-hs-toggle-count='{
                                            "target": "#toggle-count",
                                            "min": 49,
                                            "max": 199
                                          }'>49</span>
                                    </h2>
                                    <span class="text-base font-medium text-muted">per month</span>
                                </div>

                                <div class="px-5 py-5 mx-auto">
                                    <ul class="text-center">
                                        <li class="flex items-center justify-start py-2">
                                            <i data-lucide="check" class="text-primary text-lg align-middle me-2"></i>
                                            <h5 class="font-medium">1 Gb Storage</h5>
                                        </li>
                                        <li class="flex items-center justify-start py-2">
                                            <i data-lucide="check" class="text-primary text-lg align-middle me-2"></i>
                                            <h5 class="font-medium">3 Domain Names</h5>
                                        </li>
                                        <li class="flex items-center justify-start py-2">
                                            <i data-lucide="check" class="text-primary text-lg align-middle me-2"></i>
                                            <h5 class="font-medium">5 FTP Users</h5>
                                        </li>
                                        <li class="flex items-center justify-start py-2">
                                            <i data-lucide="x" class="text-muted text-lg align-middle me-2"></i>
                                            <h5 class="font-medium text-muted">Free Support</h5>
                                        </li>
                                        <li class="flex items-center justify-start py-2">
                                            <i data-lucide="x" class="text-muted text-lg align-middle me-2"></i>
                                            <h5 class="font-medium text-muted">Free SSI Certificate</h5>
                                        </li>
                                    </ul>
                                </div>

                                <div class="flex justify-center px-10 pb-10">
                                    <button class="py-2 px-6 inline-flex rounded-md text-base items-center justify-center border border-primary text-white bg-primary hover:bg-primaryDark transition-all duration-500 font-medium w-full">Buy Standard</button>
                                </div>
                            </div>

                            <div class="flex flex-col shadow-2xl rounded-xl bg-white overflow-hidden">
                                <div class="text-center pt-10">
                                    <img src="/images/vector/vector-2.png" class="h-28 w-28 mx-auto"
                                        alt="vector-2">
                                    <h5 class="text-2xl font-semibold text-black">Premium</h5>
                                    <h2 class="text-5xl mt-5 mb-1 items-center align-middle">
                                        <sup class="text-3xl align-middle">$</sup>
                                        <span data-hs-toggle-count='{
                                            "target": "#toggle-count",
                                            "min": 78,
                                            "max": 299
                                          }'>78</span>
                                    </h2>
                                    <span class="text-base font-medium text-muted">per month</span>
                                </div>

                                <div class="px-5 py-5 mx-auto">
                                    <ul class="text-center text-black">
                                        <li class="flex items-center justify-start py-2">
                                            <i data-lucide="check" class="text-primary text-lg align-middle me-2"></i>
                                            <h5 class="font-medium">1 Gb Storage</h5>
                                        </li>
                                        <li class="flex items-center justify-start py-2">
                                            <i data-lucide="check" class="text-primary text-lg align-middle me-2"></i>
                                            <h5 class="font-medium">3 Domain Names</h5>
                                        </li>
                                        <li class="flex items-center justify-start py-2">
                                            <i data-lucide="check" class="text-primary text-lg align-middle me-2"></i>
                                            <h5 class="font-medium">5 FTP Users</h5>
                                        </li>
                                        <li class="flex items-center justify-start py-2">
                                            <i data-lucide="check" class="text-primary text-lg align-middle me-2"></i>
                                            <h5 class="font-medium">Free Support</h5>
                                        </li>
                                        <li class="flex items-center justify-start py-2">
                                            <i data-lucide="x" class="text-muted text-lg align-middle me-2"></i>
                                            <h5 class="font-medium text-muted">Free SSI Certificate</h5>
                                        </li>
                                    </ul>
                                </div>

                                <div class="flex justify-center px-10 pb-10">
                                    <button class="py-2 px-6 inline-flex rounded-md text-base items-center justify-center border border-primary text-white bg-primary hover:bg-primaryDark transition-all duration-500 font-medium w-full">Buy Premium</button>
                                </div>
                            </div>

                            <div class="flex flex-col shadow-2xl rounded-xl bg-white overflow-hidden ">
                                <div class="text-center pt-10">
                                    <img src="/images/vector/vector-3.png" class="h-28 w-28 mx-auto"
                                        alt="vector-3">
                                    <h5 class="text-2xl font-semibold text-black">Enterprise</h5>
                                    <h2 class="text-5xl mt-5 mb-1 items-center align-middle">
                                        <sup class="text-3xl align-middle">$</sup>
                                        <span data-hs-toggle-count='{
                                            "target": "#toggle-count",
                                            "min": 99,
                                            "max": 399
                                          }'>99</span>
                                    </h2>
                                    <span class="text-base font-medium text-muted">per month</span>
                                </div>

                                <div class="px-5 py-5 mx-auto">
                                    <ul class="text-center text-black">
                                        <li class="flex items-center justify-start py-2">
                                            <i data-lucide="check" class="text-primary text-lg align-middle me-2"></i>
                                            <h5 class="font-medium">1 Gb Storage</h5>
                                        </li>
                                        <li class="flex items-center justify-start py-2">
                                            <i data-lucide="check" class="text-primary text-lg align-middle me-2"></i>
                                            <h5 class="font-medium">3 Domain Names</h5>
                                        </li>
                                        <li class="flex items-center justify-start py-2">
                                            <i data-lucide="check" class="text-primary text-lg align-middle me-2"></i>
                                            <h5 class="font-medium">5 FTP Users</h5>
                                        </li>
                                        <li class="flex items-center justify-start py-2">
                                            <i data-lucide="check" class="text-primary text-lg align-middle me-2"></i>
                                            <h5 class="font-medium">Free Support</h5>
                                        </li>
                                        <li class="flex items-center justify-start py-2">
                                            <i data-lucide="check" class="text-primary text-lg align-middle me-2"></i>
                                            <h5 class="font-medium">Free SSI Certificate</h5>
                                        </li>
                                    </ul>
                                </div>

                                <div class="flex justify-center px-10 pb-10">
                                    <button class="py-2 px-6 inline-flex rounded-md text-base items-center justify-center border border-primary text-white bg-primary hover:bg-primaryDark transition-all duration-500 font-medium w-full">Buy Enterprise</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- Pricing End-->

    <!-- Faqs Start -->
    <section id="FAQs" class="py-20 bg-gray-50">
        <div class="container">
            <div class="">
                <div class="text-center max-w-xl mx-auto">
                    <div>
                        <span
                            class="text-sm text-primary uppercase font-medium tracking-wider text-default-950 mb-6">FAQs</span>
                    </div>
                    <h2 class="text-3xl md:text-4xl/tight font-semibold mt-4">Frequently Asked Questions</h2>
                </div>

                <div id="accordion-collapse" data-accordion="collapse" class="md:gap-[30px] mt-14 bg-white rounded-xl">
                    <div class="hs-accordion-group divide-y divide-gray-200">
                        <div class="relative overflow-hidden">
                            <h2 class="text-base font-semibold" id="accordion-collapse-heading-1">
                                <button type="button"
                                    class="flex justify-between items-center px-5 py-4 w-full font-semibold text-lg text-start"
                                    data-accordion-target="#accordion-collapse-body-1" aria-expanded="true"
                                    aria-controls="accordion-collapse-body-1">
                                    <span>Is Practice Management Software effective?</span>
                                    <svg data-accordion-icon class="size-4 rotate-180 shrink-0" fill="currentColor"
                                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-collapse-body-1" class="hidden"
                                aria-labelledby="accordion-collapse-heading-1">
                                <div class="px-5 pb-5">
                                    <p class="text-muted text-base font-normal">With Praszo Practice, teams can plan, track, and collaborate on projects effectively, along with ensuring smoother workflows and productivity. 
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="relative overflow-hidden">
                            <h2 class="text-base font-semibold" id="accordion-collapse-heading-2">
                                <button type="button"
                                    class="flex justify-between items-center px-5 py-4 w-full font-semibold text-lg text-start"
                                    data-accordion-target="#accordion-collapse-body-2" aria-expanded="false"
                                    aria-controls="accordion-collapse-body-2">
                                    <span>Can I get a free trial of the software?
                                    </span>
                                    <svg data-accordion-icon class="size-4 shrink-0" fill="currentColor"
                                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-collapse-body-2" class="hidden"
                                aria-labelledby="accordion-collapse-heading-2">
                                <div class="px-5 pb-5">
                                    <p class="text-muted text-base font-normal">Yes, you do! We offer a free trial so that you can explore all its features before committing.</p>
                                </div>
                            </div>
                        </div>

                        <div class="relative overflow-hidden">
                            <h2 class="text-base font-semibold" id="accordion-collapse-heading-3">
                                <button type="button"
                                    class="flex justify-between items-center px-5 py-4 w-full font-semibold text-lg text-start"
                                    data-accordion-target="#accordion-collapse-body-3" aria-expanded="false"
                                    aria-controls="accordion-collapse-body-3">
                                    <span>What are the features offered in this practice management software?
                                    </span>
                                    <svg data-accordion-icon class="size-4 shrink-0" fill="currentColor"
                                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-collapse-body-3" class="hidden"
                                aria-labelledby="accordion-collapse-heading-3">
                                <div class="px-5 pb-5">
                                    <p class="text-muted text-base font-normal">
                                        <ul>
                                            <li>Task and project tracking</li>
                                            <li>Team collaboration tools</li>
                                            <li>File sharing and document management</li>
                                            <li>Time tracking and reporting</li>
                                            <li>Customizable workflows and dashboards</li>
                                            <li>Integrations with third-party tools</li>
                                            <li>Mobile access for on-the-go management</li>
                                        </ul>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="relative overflow-hidden">
                            <h2 class="text-base font-semibold" id="accordion-collapse-heading-4">
                                <button type="button"
                                    class="flex justify-between items-center px-5 py-4 w-full font-semibold text-lg text-start"
                                    data-accordion-target="#accordion-collapse-body-4" aria-expanded="false"
                                    aria-controls="accordion-collapse-body-4">
                                    <span>Are workflows and task structures customizable?
                                    </span>
                                    <svg data-accordion-icon class="size-4 shrink-0" fill="currentColor"
                                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-collapse-body-4" class="hidden"
                                aria-labelledby="accordion-collapse-heading-4">
                                <div class="px-5 pb-5">
                                    <p class="text-muted text-base font-normal">Of course! You can create custom workflows, task statuses, and categories to meet your project needs accordingly. </p>
                                </div>
                            </div>
                        </div>

                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Faqs End -->

    <!-- Testimonial Start -->
    <section id="testimonial" class="py-20">
        <div class="container">
            <div class="">
                <div class="text-center max-w-xl mx-auto">
                    <span class="text-sm text-primary uppercase font-semibold tracking-wider text-default-950">Testimonials</span>
                    <h2 class="text-3xl md:text-4xl/tight font-semibold mt-4">Stories From Our Customers</h2>
                </div>
            </div>

            <div class="grid grid-cols-1 gap-6 mt-14 items-center">
                <div class="relative">
                    <div class="swiper testi-swiper rounded-md relative px-1">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="p-6 rounded-xl border border-default-200">
                                    <h3 class="text-xl font-semibold text-default-950">Seamless Project Management

                                    </h3>
                                    <p class="text-base font-normal mt-4 mb-4 text-muted">
                                    Praszo Practice has transformed how our teams function. It has made tracking so much easier without having to micro-manage.
                                    </p>
                                    <div class="flex items-center gap-4">
                                        <!-- <div>
                                            <img src="/images/user/client-04.jpg" class="h-12 rounded-full"
                                                alt="">
                                        </div> -->
                                        <div>
                                            <h3 class="text-lg font-semibold text-primary">HLB Hamt.</h3>
                                            <!-- <p class="text-sm font-medium mt-1">Finance Manager at Mangan</p> -->
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="p-6 rounded-xl border border-default-200">
                                    <h3 class="text-xl font-semibold text-default-950">Boosted Team Productivity
                                    </h3>
                                    <p class="text-base font-normal mt-4 mb-4 text-muted">
                                    We are extremely satisfied with this practice management system, as it creates complete transparency. It has enhanced the productivity of our team’s, thanks to its structured layout. 

                                    </p>
                                    <div class="flex items-center gap-4">
                                        <!-- <div>
                                            <img src="/images/user/client-05.jpg" class="h-12 rounded-full"
                                                alt="">
                                        </div> -->
                                        <div>
                                            <h3 class="text-lg font-semibold text-primary">Emvees</h3>
                                            <!-- <p class="text-sm font-medium mt-1">Product Manager At Picko Lab</p> -->
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="p-6 rounded-xl border border-default-200">
                                    <h3 class="text-xl font-semibold text-default-950">Easy Tracking
                                    </h3>
                                    <p class="text-base font-normal mt-4 mb-4 text-muted">
                                    With the built-in timesheets and budget tracking in Praszo Practice, we are able to keep track of the status of each project without missing deadlines. 
                                    </p>
                                    <div class="flex items-center gap-4">
                                        <!-- <div>
                                            <img src="/images/user/client-07.jpg" class="h-12 rounded-full"
                                                alt="">
                                        </div> -->
                                        <div>
                                            <h3 class="text-lg font-semibold text-primary">Carvvy</h3>
                                            <!-- <p class="text-sm font-medium mt-1">Black Widow</p> -->
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="p-6 rounded-xl border border-default-200">
                                    <h3 class="text-xl font-semibold text-default-950">Effortless Collaboration
                                    </h3>
                                    <p class="text-base font-normal mt-4 mb-4 text-muted">
                                    Thanks to the in-built chat and file sharing platform in Praszo Practice, our teams are able to collaborate effortlessly without having to go back and forth to collect data from client. This feature has helped to communicate with clients in real-time.

                                    </p>
                                    <div class="flex items-center gap-4">
                                        <!-- <div>
                                            <img src="/images/user/client-03.jpg" class="h-12 rounded-full"
                                                alt="">
                                        </div> -->
                                        <div>
                                            <!-- <h3 class="text-lg font-semibold text-primary">Barbara McIntosh</h3>
                                            <p class="text-sm font-medium mt-1">Senior Software Developer</p> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flex items-center justify-center gap-3 w-full relative mt-10">
                        <div class="testi-button-prev">
                            <div
                                class="h-11 w-11 rounded-full shadow border border-default-300 bg-default-100 text-default-900 hover:bg-primary hover:border-primary hover:text-white flex items-center justify-center transition-all duration-300">
                                <i data-lucide="chevron-left" class="h-6 w-6"></i>
                            </div>
                        </div>
                        <div class="testi-button-next">
                            <div
                                class="h-11 w-11 rounded-full shadow border border-default-300 bg-default-100 text-default-900 hover:bg-primary hover:border-primary hover:text-white flex items-center justify-center transition-all duration-300">
                                <i data-lucide="chevron-right" class="h-6 w-6"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial End -->

    <!-- Client Start -->
    <!-- <section class="py-20 bg-gray-50">
        <div class="container relative">
            <div class="">
                <div class="text-center max-w-xl mx-auto">
                    <h3 class="text-3xl md:text-4xl/tight font-semibold">Trusted by Leading Companies</h3>
                </div>
            </div>

            <div class="grid md:grid-cols-6 grid-cols-2 justify-center gap-[30px] mt-14">
                <div class="mx-auto py-4">
                    <img src="/images/client/amazon.svg" class="h-10" alt="">
                </div>

                <div class="mx-auto py-4">
                    <img src="/images/client/google.svg" class="h-10" alt="">
                </div>

                <div class="mx-auto py-4">
                    <img src="/images/client/lenovo.svg" class="h-10" alt="">
                </div>

                <div class="mx-auto py-4">
                    <img src="/images/client/paypal.svg" class="h-10" alt="">
                </div>

                <div class="mx-auto py-4">
                    <img src="/images/client/shopify.svg" class="h-10" alt="">
                </div>

                <div class="mx-auto py-4">
                    <img src="/images/client/spotify.svg" class="h-10" alt="">
                </div>
            </div>
        </div>
    </section> -->
    <!-- Client Start -->

    <!-- Blog Start -->
    <!-- <section id="blog" class="py-20">
        <div class="container">
            <div class="">
                <div class="text-center max-w-xl mx-auto">
                    <span
                        class="text-sm text-primary uppercase font-semibold tracking-wider text-default-950">Blog</span>
                    <h2 class="text-3xl md:text-4xl/tight font-semibold mt-4">Check the latest news about our company in
                        our blog.</h2>
                </div>
            </div>

            <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-6 mt-14 items-center">
                <div class="bg-white rounded-xl border">
                    <div class="relative">
                        <img class="rounded-t-xl" src="/images/blog/05.jpg" alt="">
                    </div>
                    <div class="flex py-6 px-6">
                        <div>
                            <a href="#" class="text-xl text-black font-semibold line-clamp-2">Spotlight — Equinox
                                Collection by Shane Griffin</a>
                            <p class="mt-4 mb-6 text-gray-500 leading-6">As I searched for inspiration to
                                get started, I came across the captivating creations of Shane Griffin, an artist and
                                director located in New York City...</p>

                            <div class="flex items-center justify-between gap-3 mt-4">
                                <div class="flex items-center">
                                    <img src="/images/user/client-05.jpg" class="h-10 w-10 me-4 rounded-full"
                                        alt="">
                                    <a href="#"
                                        class="text-black text-sm font-semibold pb-1 hover:underline hover:text-primary transition-all duration-300">
                                        Credon catla</a>
                                </div>
                                <p class="flex font-medium text-muted">August 2</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-xl border">
                    <div class="relative">
                        <img class="rounded-t-xl" src="/images/blog/07.jpg" alt="">
                    </div>
                    <div class="flex py-6 px-6">
                        <div>
                            <a href="#" class="text-xl text-black font-semibold line-clamp-2">Random Explorations with
                                Cinema 4D and Redshift</a>
                            <p class="mt-4 mb-6 text-gray-500 leading-6">As I searched for inspiration to
                                get started, I came across the captivating creations of Shane Griffin, an artist and
                                director located in New York City...</p>

                            <div class="flex items-center justify-between gap-3 mt-4">
                                <div class="flex items-center">
                                    <img src="/images/user/client-03.jpg" class="h-10 w-10 me-4 rounded-full"
                                        alt="">
                                    <a href="#"
                                        class="text-black text-sm font-semibold pb-1 hover:underline hover:text-primary transition-all duration-300">
                                        Jessica Smith</a>
                                </div>
                                <p class="flex font-medium text-muted">August 3</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-xl border">
                    <div class="relative">
                        <img class="rounded-t-xl" src="/images/blog/04.jpg" alt="">
                    </div>
                    <div class="flex py-6 px-6">
                        <div>
                            <a href="#" class="text-xl text-black font-semibold line-clamp-2">Step by step guide for
                                conducting usability</a>
                            <p class="mt-4 mb-6 text-gray-500 leading-6">As I searched for inspiration to
                                get started, I came across the captivating creations of Shane Griffin, an artist and
                                director located in New York City...</p>

                            <div class="flex items-center justify-between gap-3 mt-4">
                                <div class="flex items-center">
                                    <img src="/images/user/client-03.jpg" class="h-10 w-10 me-4 rounded-full"
                                        alt="">
                                    <a href="#"
                                        class="text-black text-sm font-semibold pb-1 hover:underline hover:text-primary transition-all duration-300">
                                        Petric Camp</a>
                                </div>
                                <p class="flex font-medium text-muted">August 8</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- Blog End -->

    <!-- Contact Start -->
    <section id="contact" class="py-20 bg-gray-50">
        <div class="container">
            <div class="grid lg:grid-cols-3 gap-6 items-center">
                <div>
                    <div>
                        <span
                            class="text-sm text-primary uppercase font-semibold tracking-wider text-default-950 mb-6">Contact
                            Us</span>
                    </div>
                    <h2 class="text-3xl md:text-4xl/tight font-semibold mt-4">We're open to talk to good people.</h2>

                    <!-- <div class="flex flex-col sm:flex-row items-center gap-5 text-center sm:text-start mt-10">
                        <div class="h-12 w-12 rounded-full bg-primary/10 flex items-center justify-center">
                            <i data-lucide="map-pin" class="text-2xl text-primary"></i>
                        </div>
                        <div>
                            <h5 class="text-base text-muted font-medium mb-1">123 King Street, London W60 10250</h5>
                            <a href="#" class="text-xs text-primary font-bold uppercase">See more</a>
                        </div>
                    </div> -->

                    <div class="flex flex-col sm:flex-row items-center gap-5 text-center sm:text-start mt-10">
                        <div class="h-12 w-12 rounded-full bg-primary/10 flex items-center justify-center">
                            <i data-lucide="mail" class="text-2xl text-primary"></i>
                        </div>
                        <div>
                            <h5 class="text-base text-muted font-medium mb-1">info@difinitydigital.com</h5>
                            <a href="#" class="text-xs text-primary font-bold uppercase">Say hello</a>
                        </div>
                    </div>

                    <div class="flex flex-col sm:flex-row items-center gap-5 text-center sm:text-start mt-10">
                        <div class="h-12 w-12 rounded-full bg-primary/10 flex items-center justify-center">
                            <i data-lucide="smartphone" class="text-2xl text-primary"></i>
                        </div>
                        <div>
                            <h5 class="text-base text-muted font-medium mb-1">9995099789</h5>
                            <a href="#" class="text-xs text-primary font-bold uppercase">call now</a>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-2 lg:ms-24">
                    <div class="p-6 md:p-12 rounded-md shadow-lg bg-white">
                        <form>
                            <div class="grid sm:grid-cols-2 gap-6">
                                <div>
                                    <label for="formFirstName"
                                        class="block text-sm/normal font-semibold text-black mb-2">First Name</label>
                                    <input type="text"
                                        class="block w-full text-sm rounded-md py-3 px-4 border-gray-200 focus:border-gray-300 focus:ring-transparent"
                                        id="formFirstName" placeholder="Your first name..." required="">
                                </div>

                                <div>
                                    <label for="formLastName"
                                        class="block text-sm/normal font-semibold text-black mb-2">Last Name</label>
                                    <input type="text"
                                        class="block w-full text-sm rounded-md py-3 px-4 border-gray-200 focus:border-gray-300 focus:ring-transparent"
                                        id="formLastName" placeholder="Last first name..." required="">
                                </div>

                                <div>
                                    <label for="formEmail"
                                        class="block text-sm/normal font-semibold text-black mb-2">Email Address</label>
                                    <input type="email"
                                        class="block w-full text-sm rounded-md py-3 px-4 border-gray-200 focus:border-gray-300 focus:ring-transparent"
                                        id="formEmail" placeholder="Your email..." required="">
                                </div>

                                <div>
                                    <label for="formPhone"
                                        class="block text-sm/normal font-semibold text-black mb-2">Phone Number</label>
                                    <input type="text"
                                        class="block w-full text-sm rounded-md py-3 px-4 border-gray-200 focus:border-gray-300 focus:ring-transparent"
                                        id="formPhone" placeholder="Type phone number..." required="">
                                </div>

                                <div class="sm:col-span-2">
                                    <div class="mb-4">
                                        <label for="formMessages"
                                            class="block text-sm/normal font-semibold text-black mb-2">Messages</label>
                                        <textarea
                                            class="block w-full text-sm rounded-md py-3 px-4 border-gray-200 focus:border-gray-300 focus:ring-transparent"
                                            id="formMessages" rows="4" placeholder="Type messages..."
                                            required=""></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4">
                                <button type="submit"
                                    class="py-2 px-6 rounded-md text-baseitems-center justify-center border border-primary text-white bg-primary hover:bg-primaryDark transition-all duration-500 font-medium">Send
                                    Messages <i class="mdi mdi-send ms-1"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact End -->

    <?= $this->element("footer") ?>

    <?= $this->element("back-to-top") ?>

    <?= $this->element("script-file") ?>

</body>

</html>