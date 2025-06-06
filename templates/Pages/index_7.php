<!DOCTYPE html>
<html lang="en">

<head>
    <?= $this->element("title-meta", array("title" => "Evea")) ?>

    <?= $this->element("head-css") ?>

</head>

<body>

    <?= $this->element("nav-dark") ?>

    <!-- =========== Hero Section Start =========== -->
    <section class="relative pt-40 pb-40 bg-primary/10" id="home">
        <div class="container">

            <div class="grid lg:grid-cols-2 grid-cols-1 gap-x-6 gap-y-10 items-center">
                <div class="relative">
                    <h1 class="text-3xl md:text-5xl/tight lg:text-6xl/tight text-black tracking-normal capitalize leading-normal font-bold max-w-2xl mt-4">Make Your Life Even Easier with Statistical <span class="text-primary">Progress</span></h1>
                    <p class="text-base text-muted font-medium max-w-lg mt-6 capitalize">Our app provides a multitude of features tailored to your needs. From personalized recommendations to exclusive offers.</p>
                    <div class="flex flex-wrap items-center justify-center lg:justify-normal gap-3 mt-10">
                        <img src="/images/store.png" class="h-14" alt=" apple image">
                        <img src="/images/google.png" class="h-14" alt="google image">
                    </div>
                </div>

                <div class="relative">
                    <img src="/images/dashboard-2.png" class="lg:ms-auto mx-auto rounded-xl" alt="">
                </div>
            </div>
        </div>
    </section>

    <!-- Services Start -->
    <section id="services" class="py-20">
        <div class="container">
            <div class="max-w-2xl mx-auto text-center">
                <span
                    class="text-sm text-primary uppercase font-semibold tracking-wider text-default-950">Services</span>
                <h2 class="text-3xl md:text-4xl/tight font-semibold text-black mt-4">Build a customer - centric
                    marketing strategy</h2>
                <p class="text-base font-medium mt-4 text-muted">Ligula risus auctor tempus magna feugit lacinia.</p>
            </div>

            <div
                class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 gap-x-3 gap-y-6 md:gap-y-12 lg:gap-y-24 md:pt-20 pt-12">

                <div class="text-center">
                    <div class="flex items-center justify-center">
                        <div
                            class="items-center justify-center flex bg-primary/10 rounded-[49%_80%_40%_90%_/_50%_30%_70%_80%] h-20 w-20 border">
                            <i data-lucide="menu" class="h-10 w-10 text-primary"></i>
                        </div>
                    </div>
                    <h1 class="text-xl font-semibold pt-4">Market Research</h1>
                    <p class="text-base text-gray-600 mt-2">Gain a comprehensive understanding of your industry
                        landscape.</p>
                </div>

                <div class="text-center">
                    <div class="flex items-center justify-center">
                        <div
                            class="items-center justify-center flex bg-primary/10 rounded-[49%_80%_40%_90%_/_50%_30%_70%_80%] h-20 w-20 border">
                            <i data-lucide="lightbulb" class="h-10 w-10 text-primary"></i>
                        </div>
                    </div>
                    <h1 class="text-xl font-semibold pt-4">User Experience</h1>
                    <p class="text-base text-gray-600 mt-2">Evaluate the viability and potential of new products or
                        services.</p>
                </div>

                <div class="text-center">
                    <div class="flex items-center justify-center">
                        <div
                            class="items-center justify-center flex bg-primary/10 rounded-[49%_80%_40%_90%_/_50%_30%_70%_80%] h-20 w-20 border">
                            <i data-lucide="bar-chart-big" class="h-10 w-10 text-primary"></i>
                        </div>
                    </div>
                    <h1 class="text-xl font-semibold pt-4">Digital Marketing</h1>
                    <p class="text-base text-gray-600 mt-2">Benchmark your performance against competitors, identify
                        strengths.</p>
                </div>

                <div class="text-center">
                    <div class="flex items-center justify-center">
                        <div
                            class="items-center justify-center flex bg-primary/10 rounded-[49%_80%_40%_90%_/_50%_30%_70%_80%] h-20 w-20 border">
                            <i data-lucide="codepen" class="h-10 w-10 text-primary"></i>
                        </div>
                    </div>
                    <h1 class="text-xl font-semibold pt-4">SEO Services</h1>
                    <p class="text-base text-gray-600 mt-2">Anticipate market shifts and emerging trends to stay ahead
                        of the curve.</p>
                </div>

                <div class="text-center">
                    <div class="flex items-center justify-center">
                        <div
                            class="items-center justify-center flex bg-primary/10 rounded-[49%_80%_40%_90%_/_50%_30%_70%_80%] h-20 w-20 border">
                            <i data-lucide="shield" class="h-10 w-10 text-primary"></i>
                        </div>
                    </div>
                    <h1 class="text-xl font-semibold pt-4">Market Research</h1>
                    <p class="text-base text-gray-600 mt-2">Our market research services are designed to provide maximum
                        value.</p>
                </div>

                <div class="text-center">
                    <div class="flex items-center justify-center">
                        <div
                            class="items-center justify-center flex bg-primary/10 rounded-[49%_80%_40%_90%_/_50%_30%_70%_80%] h-20 w-20 border">
                            <i data-lucide="rocket" class="h-10 w-10 text-primary"></i>
                        </div>
                    </div>
                    <h1 class="text-xl font-semibold pt-4">Software Development</h1>
                    <p class="text-base text-gray-600 mt-2">We go beyond data collection to provide actionable insights.
                    </p>
                </div>

                <div class="text-center">
                    <div class="flex items-center justify-center">
                        <div
                            class="items-center justify-center flex bg-primary/10 rounded-[49%_80%_40%_90%_/_50%_30%_70%_80%] h-20 w-20 border">
                            <i data-lucide="layers-2" class="h-10 w-10 text-primary"></i>
                        </div>
                    </div>
                    <h1 class="text-xl font-semibold pt-4">Affiliate Marketing</h1>
                    <p class="text-base text-gray-600 mt-2">We understand that every business is unique. That's why we
                        offer.</p>
                </div>

                <div class="text-center">
                    <div class="flex items-center justify-center">
                        <div
                            class="items-center justify-center flex bg-primary/10 rounded-[49%_80%_40%_90%_/_50%_30%_70%_80%] h-20 w-20 border">
                            <i data-lucide="webcam" class="h-10 w-10 text-primary"></i>
                        </div>
                    </div>
                    <h1 class="text-xl font-semibold pt-4">Website Development</h1>
                    <p class="text-base text-gray-600 mt-2">In today's competitive market, timing is everything. Our
                        efficient.</p>
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
                    <img src="/images/feature.jpg" class="h-[650px] rounded-xl mx-auto" alt="feature section">
                </div>

                <div class="lg:ms-5 ms-8">
                    <span class="text-sm text-primary uppercase font-semibold tracking-wider text-default-950">Focused
                        on achievind</span>
                    <h2 class="text-3xl md:text-4xl/tight font-semibold text-black mt-4">Achievement Via Our Distinct
                        Methodology</h2>
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
                                <i data-lucide="check" class="text-base text-blue-600"></i>
                            </div>
                        </div>

                        <div>
                            <h4 class="text-xl font-semibold">Manage markets with empowerment</h4>
                            <p class="text-base font-normal text-gray-500 mt-2">Empower yourself to effectively manage
                                markets with confidence. utilizing strategic insights and resources for success.</p>
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
                            <h4 class="text-xl font-semibold">Manage your design and architecture</h4>
                            <p class="text-base font-normal text-gray-500 mt-2">Achieve task completion optimization by
                                effectively managing time and resources, ensuring timely delivery and efficiency.</p>
                        </div>

                    </div>

                    <div class="flex items-start gap-5 mt-8">
                        <div>
                            <div
                                class="w-12 h-12 rounded-full border border-dashed border-primary/40 bg-primary/10 flex items-center justify-center">
                                <i data-lucide="lock" class="text-base text-blue-600"></i>
                            </div>
                        </div>

                        <div>
                            <h4 class="text-xl font-semibold">Presentations in real-time</h4>
                            <p class="text-base font-normal text-gray-500 mt-2">Empower yourself to effectively manage
                                markets with confidence. utilizing strategic insights and resources for success.</p>
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
                <h1 class="text-3xl md:text-4xl/tight font-semibold text-white text-center">A Detailed Examination Of A
                    Specific Case</h1>
                <p class="text-base font-normal max-w-xl text-center mx-auto text-white mt-6">Together, we manage and
                    empower markets by utilizing both established and emerging channels for potential growth.</p>
                <div class="flex flex-wrap mt-6 gap-3">
                    <button
                        class="py-2 px-6 rounded-md text-white text-base bg-primary hover:bg-primaryDark border border-primary hover:border-primaryDark transition-all duration-500 font-medium">Join
                        Now</button>
                    <button
                        class="py-2 px-6 rounded-md border border-white text-base hover:border-white hover:bg-white hover:text-primary transition-all duration-500 font-medium text-white ">See
                        Video</button>
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
                    <img src="/images/feature-iphone.png" class="h-[600px] rounded-xl mx-auto"
                        alt="feature-image">
                </div>

            </div>
        </div>
    </section>
    <!-- About End -->

    <!-- Pricing Start -->
    <section id="pricing" class="py-20">
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
    </section>
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
                                    <span>How long does it take to ship my order ?</span>
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
                                    <p class="text-muted text-base font-normal">Shipping times vary depending on your
                                        location and the
                                        shipping method chosen. Typically, orders are processed and shipped within 1-3
                                        business days. You'll receive a tracking number once your order is shipped,
                                        which you can use to monitor its delivery status.</p>
                                </div>
                            </div>
                        </div>

                        <div class="relative overflow-hidden">
                            <h2 class="text-base font-semibold" id="accordion-collapse-heading-2">
                                <button type="button"
                                    class="flex justify-between items-center px-5 py-4 w-full font-semibold text-lg text-start"
                                    data-accordion-target="#accordion-collapse-body-2" aria-expanded="false"
                                    aria-controls="accordion-collapse-body-2">
                                    <span>What payment methods do you accept ?</span>
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
                                    <p class="text-muted text-base font-normal">We accept various payment methods,
                                        including credit/debit
                                        cards, PayPal, and sometimes other online payment platforms.</p>
                                </div>
                            </div>
                        </div>

                        <div class="relative overflow-hidden">
                            <h2 class="text-base font-semibold" id="accordion-collapse-heading-3">
                                <button type="button"
                                    class="flex justify-between items-center px-5 py-4 w-full font-semibold text-lg text-start"
                                    data-accordion-target="#accordion-collapse-body-3" aria-expanded="false"
                                    aria-controls="accordion-collapse-body-3">
                                    <span>What shipping options do you have ?</span>
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
                                    <p class="text-muted text-base font-normal">Standard Shipping: This is our regular
                                        shipping option, which
                                        typically takes 3-7 business days for delivery, depending on your location and
                                        the shipping carrier.</p>
                                </div>
                            </div>
                        </div>

                        <div class="relative overflow-hidden">
                            <h2 class="text-base font-semibold" id="accordion-collapse-heading-4">
                                <button type="button"
                                    class="flex justify-between items-center px-5 py-4 w-full font-semibold text-lg text-start"
                                    data-accordion-target="#accordion-collapse-body-4" aria-expanded="false"
                                    aria-controls="accordion-collapse-body-4">
                                    <span>How do i make changes to an existing order ?</span>
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
                                    <p class="text-muted text-base font-normal">International Shipping We also offer
                                        international shipping
                                        for customers outside the country. Delivery times for international orders vary
                                        widely based on destination and shipping method chosen. It typically ranges from
                                        6-21 business days.</p>
                                </div>
                            </div>
                        </div>

                        <div class="relative overflow-hidden">
                            <h2 class="text-base font-semibold" id="accordion-collapse-heading-5">
                                <button type="button"
                                    class="flex justify-between items-center px-5 py-4 w-full font-semibold text-lg text-start"
                                    data-accordion-target="#accordion-collapse-body-5" aria-expanded="false"
                                    aria-controls="accordion-collapse-body-4">
                                    <span>When will my order arrive ?</span>
                                    <svg data-accordion-icon class="size-4 shrink-0" fill="currentColor"
                                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-collapse-body-5" class="hidden"
                                aria-labelledby="accordion-collapse-heading-5">
                                <div class="px-5 pb-5">
                                    <p class="text-muted text-base font-normal">Processing Time Before your order is
                                        shipped, it needs to be
                                        processed by the seller. Processing times can vary based on factors such as
                                        order volume, item availability, and any customization or personalization
                                        required. Typically, sellers aim to process orders within 1-3 business days, but
                                        this can vary.</p>
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
                    <span class="text-sm text-primary uppercase font-semibold tracking-wider text-default-950">Our
                        Clients</span>
                    <h2 class="text-3xl md:text-4xl/tight font-semibold mt-4">Stories From Our Customers</h2>
                </div>
            </div>

            <div class="grid grid-cols-1 gap-6 mt-14 items-center">
                <div class="relative">
                    <div class="swiper testi-swiper rounded-md relative px-1">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="p-6 rounded-xl border border-default-200">
                                    <h3 class="text-xl font-semibold text-default-950">No doubt, spend. in is the best!
                                    </h3>
                                    <p class="text-base font-normal mt-4 mb-4 text-muted">
                                        Without a doubt, Spend in stands out as the absolute best.Their exceptional
                                        quality, reliablity, and customer service are unmatched. I have complete....
                                    </p>
                                    <div class="flex items-center gap-4">
                                        <div>
                                            <img src="/images/user/client-04.jpg" class="h-12 rounded-full"
                                                alt="">
                                        </div>
                                        <div>
                                            <h3 class="text-lg font-semibold text-primary">Moritika Kazuki</h3>
                                            <p class="text-sm font-medium mt-1">Finance Manager at Mangan</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="p-6 rounded-xl border border-default-200">
                                    <h3 class="text-xl font-semibold text-default-950">It's just incredible!</h3>
                                    <p class="text-base font-normal mt-4 mb-4 text-muted">
                                        I am extremely delighated with the exceptional service provided by NioLand.
                                        Their expert support system, efficient tools, and strategic solutions have
                                        truly....
                                    </p>
                                    <div class="flex items-center gap-4">
                                        <div>
                                            <img src="/images/user/client-05.jpg" class="h-12 rounded-full"
                                                alt="">
                                        </div>
                                        <div>
                                            <h3 class="text-lg font-semibold text-primary">Jimmy Bartney</h3>
                                            <p class="text-sm font-medium mt-1">Product Manager At Picko Lab</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="p-6 rounded-xl border border-default-200">
                                    <h3 class="text-xl font-semibold text-default-950">Satisfied user here!</h3>
                                    <p class="text-base font-normal mt-4 mb-4 text-muted">
                                        As a satisfied user, I can confidence say that my experience with NioLand has
                                        been outstanding. The service, support, and solutions provided have...
                                    </p>
                                    <div class="flex items-center gap-4">
                                        <div>
                                            <img src="/images/user/client-07.jpg" class="h-12 rounded-full"
                                                alt="">
                                        </div>
                                        <div>
                                            <h3 class="text-lg font-semibold text-primary">Natasha Romanoff</h3>
                                            <p class="text-sm font-medium mt-1">Black Widow</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="p-6 rounded-xl border border-default-200">
                                    <h3 class="text-xl font-semibold text-default-950">Best service here!</h3>
                                    <p class="text-base font-normal mt-4 mb-4 text-muted">
                                        "I've tried many services, but none compare to the excellence provided here!
                                        From start to finish, the team has been attentive, professional, and committed
                                        to delivering the best results."
                                    </p>
                                    <div class="flex items-center gap-4">
                                        <div>
                                            <img src="/images/user/client-03.jpg" class="h-12 rounded-full"
                                                alt="">
                                        </div>
                                        <div>
                                            <h3 class="text-lg font-semibold text-primary">Barbara McIntosh</h3>
                                            <p class="text-sm font-medium mt-1">Senior Software Developer</p>
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
    <section class="py-20 bg-gray-50">
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
    </section>
    <!-- Client Start -->

    <!-- Blog Start -->
    <section id="blog" class="py-20">
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
    </section>
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

                    <div class="flex flex-col sm:flex-row items-center gap-5 text-center sm:text-start mt-10">
                        <div class="h-12 w-12 rounded-full bg-primary/10 flex items-center justify-center">
                            <i data-lucide="map-pin" class="text-2xl text-primary"></i>
                        </div>
                        <div>
                            <h5 class="text-base text-muted font-medium mb-1">123 King Street, London W60 10250</h5>
                            <a href="#" class="text-xs text-primary font-bold uppercase">See more</a>
                        </div>
                    </div>

                    <div class="flex flex-col sm:flex-row items-center gap-5 text-center sm:text-start mt-10">
                        <div class="h-12 w-12 rounded-full bg-primary/10 flex items-center justify-center">
                            <i data-lucide="mail" class="text-2xl text-primary"></i>
                        </div>
                        <div>
                            <h5 class="text-base text-muted font-medium mb-1">support@zoyothemes.com</h5>
                            <a href="#" class="text-xs text-primary font-bold uppercase">Say hello</a>
                        </div>
                    </div>

                    <div class="flex flex-col sm:flex-row items-center gap-5 text-center sm:text-start mt-10">
                        <div class="h-12 w-12 rounded-full bg-primary/10 flex items-center justify-center">
                            <i data-lucide="smartphone" class="text-2xl text-primary"></i>
                        </div>
                        <div>
                            <h5 class="text-base text-muted font-medium mb-1">(+01) 1234 5678 00</h5>
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