<!DOCTYPE html>
<html lang="en">

<head>
    <?= $this->element("title-meta", array("title" => "Praszo")) ?>

    <?= $this->element("head-css") ?>
</head>

<body>

    <!-- Navbar Start -->
    <nav class="navbar fixed top-0 start-0 end-0 z-999 transition-all duration-500 py-5 items-center shadow-md lg:shadow-none [&.is-sticky]:bg-white group [&.is-sticky]:shadow-md bg-white lg:bg-transparent" id="navbar">
        <div class="container">
            
            <div class="flex lg:flex-nowrap flex-wrap items-center">
    
                <a href="index" class="flex items-center">
                    <img src="/images/logo.png" class="h-9 flex">
                </a>
    
                <div class="lg:hidden flex items-center ms-auto px-2.5">
                    <button class="hs-collapse-toggle" type="button" id="hs-unstyled-collapse" data-hs-collapse="#navbarCollapse">
                        <i data-lucide="menu" class="h-8 w-8 text-black"></i>
                    </button>
                </div>
    
                <div class="navigation hs-collapse transition-all duration-300 lg:basis-auto basis-full grow hidden items-center justify-center lg:flex mx-auto overflow-hidden mt-6 lg:mt-0 nav-light" id="navbarCollapse">
                    <ul class="navbar-nav flex-col lg:flex-row gap-y-2 flex lg:items-center justify-center" id="navbar-navlist">
                        <li class="nav-item mx-1.5 transition-all text-dark lg:text-black group-[&.is-sticky]:text-dark all duration-300 hover:text-primary [&.active]:!text-primary group-[&.is-sticky]:[&.active]:text-primary">
                            <a class="nav-link inline-flex items-center text-sm lg:text-base font-medium py-0.5 px-2 capitalize" href="#home">Home</a>
                        </li>
    
                        <li class="nav-item mx-1.5 transition-all text-dark lg:text-black group-[&.is-sticky]:text-dark duration-300 hover:text-primary [&.active]:!text-primary group-[&.is-sticky]:[&.active]:text-primary">
                            <a class="nav-link inline-flex items-center text-sm lg:text-base font-medium py-0.5 px-2 capitalize" href="#demo">Demo</a>
                        </li>
                    </ul>
                </div>
    
                <div class="ms-auto shrink hidden lg:inline-flex gap-2">
                    <a href="#" class="py-2 px-6 inline-flex items-center gap-2 rounded-md text-base text-white bg-primary hover:bg-primaryDark transition-all duration-500 font-medium">
                        <i data-lucide="download-cloud" class="h-4 w-4 fill-white/40"></i>
                        <span class="hidden sm:block">Download</span>
                    </a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- =========== Hero Section Start j=========== -->
    <section class="relative pt-32 pb-32 overflow-x-hidden bg-[url(../images/bg-demo.jpg)] bg-no-repeat bg-cover" id="home">
        <div class="container">

            <div class="grid grid-cols-1 gap-6 items-center justify-center">
                <div class="text-sm py-20 px-10 text-center max-w-xl mx-auto">
                    <h1 class="text-4xl text-dark tracking-normal leading-normal font-bold mb-4 mt-6">Evea - <span class="text-primary">App Landing</span> Template With Tailwind</h1>
                    <h4 class="text-xl text-dark tracking-normal leading-normal font-bold mb-4 mt-4"><span class="text-primary">6</span> Homepages </h4>
                </div>
            </div>

            <div class="text-center mt-16">

                <div class="inline-flex flex-wrap items-center justify-center gap-4">
                    <div class="w-16 h-16 flex justify-center items-center rounded-md bg-white">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 128 128"><path fill="#38bdf8" d="M64.004 25.602c-17.067 0-27.73 8.53-32 25.597c6.398-8.531 13.867-11.73 22.398-9.597c4.871 1.214 8.352 4.746 12.207 8.66C72.883 56.629 80.145 64 96.004 64c17.066 0 27.73-8.531 32-25.602q-9.6 12.803-22.399 9.602c-4.87-1.215-8.347-4.746-12.207-8.66c-6.27-6.367-13.53-13.738-29.394-13.738M32.004 64c-17.066 0-27.73 8.531-32 25.602Q9.603 76.799 22.402 80c4.871 1.215 8.352 4.746 12.207 8.66c6.274 6.367 13.536 13.738 29.395 13.738c17.066 0 27.73-8.53 32-25.597q-9.6 12.797-22.399 9.597c-4.87-1.214-8.347-4.746-12.207-8.66C55.128 71.371 47.868 64 32.004 64m0 0"/></svg>
                    </div>
                    <div class="w-16 h-16 flex justify-center items-center rounded-md bg-white">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 32 32"><path fill="#e44f26" d="M5.902 27.201L3.655 2h24.69l-2.25 25.197L15.985 30z"/><path fill="#f1662a" d="m16 27.858l8.17-2.265l1.922-21.532H16z"/><path fill="#ebebeb" d="M16 13.407h-4.09l-.282-3.165H16V7.151H8.25l.074.83l.759 8.517H16zm0 8.027l-.014.004l-3.442-.929l-.22-2.465H9.221l.433 4.852l6.332 1.758l.014-.004z"/><path fill="#fff" d="M15.989 13.407v3.091h3.806l-.358 4.009l-3.448.93v3.216l6.337-1.757l.046-.522l.726-8.137l.076-.83zm0-6.256v3.091h7.466l.062-.694l.141-1.567l.074-.83z"/></svg>
                    </div>
                    <div class="w-16 h-16 flex justify-center items-center rounded-md bg-white">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 128 128"><path fill="#1572b6" d="M18.814 114.123L8.76 1.352h110.48l-10.064 112.754l-45.243 12.543z"/><path fill="#33a9dc" d="m64.001 117.062l36.559-10.136l8.601-96.354h-45.16z"/><path fill="#fff" d="M64.001 51.429h18.302l1.264-14.163H64.001V23.435h34.682l-.332 3.711l-3.4 38.114h-30.95z"/><path fill="#ebebeb" d="m64.083 87.349l-.061.018l-15.403-4.159l-.985-11.031H33.752l1.937 21.717l28.331 7.863l.063-.018z"/><path fill="#fff" d="m81.127 64.675l-1.666 18.522l-15.426 4.164v14.39l28.354-7.858l.208-2.337l2.406-26.881z"/><path fill="#ebebeb" d="M64.048 23.435v13.831H30.64l-.277-3.108l-.63-7.012l-.331-3.711zm-.047 27.996v13.831H48.792l-.277-3.108l-.631-7.012l-.33-3.711z"/></svg>
                    </div>
                    <div class="w-16 h-16 flex justify-center items-center rounded-md bg-white">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 32 32"><path fill="#f5de19" d="M2 2h28v28H2z"/><path d="M20.809 23.875a2.87 2.87 0 0 0 2.6 1.6c1.09 0 1.787-.545 1.787-1.3c0-.9-.716-1.222-1.916-1.747l-.658-.282c-1.9-.809-3.16-1.822-3.16-3.964c0-1.973 1.5-3.476 3.853-3.476a3.89 3.89 0 0 1 3.742 2.107L25 18.128A1.79 1.79 0 0 0 23.311 17a1.145 1.145 0 0 0-1.259 1.128c0 .789.489 1.109 1.618 1.6l.658.282c2.236.959 3.5 1.936 3.5 4.133c0 2.369-1.861 3.667-4.36 3.667a5.06 5.06 0 0 1-4.795-2.691Zm-9.295.228c.413.733.789 1.353 1.693 1.353c.864 0 1.41-.338 1.41-1.653v-8.947h2.631v8.982c0 2.724-1.6 3.964-3.929 3.964a4.085 4.085 0 0 1-3.947-2.4Z"/></svg>
                    </div>
                    <div class="w-16 h-16 flex justify-center items-center rounded-md bg-white">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 128 128"><path fill="#cb6699" fill-rule="evenodd" d="M1.219 56.156c0 .703.207 1.167.323 1.618c.756 2.933 2.381 5.45 4.309 7.746c2.746 3.272 6.109 5.906 9.554 8.383c2.988 2.148 6.037 4.248 9.037 6.38c.515.366 1.002.787 1.561 1.236c-.481.26-.881.489-1.297.7c-3.959 2.008-7.768 4.259-11.279 6.986c-2.116 1.644-4.162 3.391-5.607 5.674c-2.325 3.672-3.148 7.584-1.415 11.761c.506 1.22 1.278 2.274 2.367 3.053c.353.252.749.502 1.162.6c1.058.249 2.136.412 3.207.609l3.033-.002c3.354-.299 6.407-1.448 9.166-3.352c4.312-2.976 7.217-6.966 8.466-12.087c.908-3.722.945-7.448-.125-11.153a12 12 0 0 0-.354-1.014c-.13-.333-.283-.657-.463-1.072l6.876-3.954l.103.088c-.125.409-.258.817-.371 1.23c-.817 2.984-1.36 6.02-1.165 9.117c.208 3.3 1.129 6.389 3.061 9.146c1.562 2.23 5.284 2.313 6.944.075c.589-.795 1.16-1.626 1.589-2.513c1.121-2.315 2.159-4.671 3.23-7.011l.187-.428c-.077 1.108-.167 2.081-.208 3.055c-.064 1.521.025 3.033.545 4.48c.445 1.238 1.202 2.163 2.62 2.326c.97.111 1.743-.333 2.456-.896a10.4 10.4 0 0 0 2.691-3.199c1.901-3.491 3.853-6.961 5.576-10.54c1.864-3.871 3.494-7.855 5.225-11.792l.286-.698c.409 1.607.694 3.181 1.219 4.671c.61 1.729 1.365 3.417 2.187 5.058c.389.775.344 1.278-.195 1.928c-2.256 2.72-4.473 5.473-6.692 8.223c-.491.607-.98 1.225-1.389 1.888a3.7 3.7 0 0 0-.48 1.364a1.737 1.737 0 0 0 1.383 1.971a9.7 9.7 0 0 0 2.708.193c3.097-.228 5.909-1.315 8.395-3.157c3.221-2.386 4.255-5.642 3.475-9.501c-.211-1.047-.584-2.065-.947-3.074c-.163-.455-.174-.774.123-1.198c2.575-3.677 4.775-7.578 6.821-11.569c.081-.157.164-.314.306-.482c.663 3.45 1.661 6.775 3.449 9.792c-.912.879-1.815 1.676-2.632 2.554c-1.799 1.934-3.359 4.034-4.173 6.595c-.35 1.104-.619 2.226-.463 3.405c.242 1.831 1.742 3.021 3.543 2.604c3.854-.892 7.181-2.708 9.612-5.925c1.636-2.166 1.785-4.582 1.1-7.113c-.188-.688-.411-1.365-.651-2.154c.951-.295 1.878-.649 2.837-.868c4.979-1.136 9.904-.938 14.702.86c2.801 1.05 5.064 2.807 6.406 5.571c1.639 3.379.733 6.585-2.452 8.721c-.297.199-.637.356-.883.605a.87.87 0 0 0-.205.67c.021.123.346.277.533.275c1.047-.008 1.896-.557 2.711-1.121c2.042-1.413 3.532-3.314 3.853-5.817l.063-.188l-.077-1.63c-.031-.094.023-.187.016-.258c-.434-3.645-2.381-6.472-5.213-8.688c-3.28-2.565-7.153-3.621-11.249-3.788a25.4 25.4 0 0 0-9.765 1.503c-.897.325-1.786.71-2.688 1.073c-.121-.219-.251-.429-.358-.646c-.926-1.896-2.048-3.708-2.296-5.882c-.176-1.544-.392-3.086-.025-4.613c.353-1.469.813-2.913 1.246-4.362c.223-.746.066-1.164-.646-1.5a3 3 0 0 0-.786-.258c-1.75-.254-3.476-.109-5.171.384c-.6.175-1.036.511-1.169 1.175c-.076.381-.231.746-.339 1.122c-.443 1.563-.757 3.156-1.473 4.645c-1.794 3.735-3.842 7.329-5.938 10.897c-.227.385-.466.763-.752 1.23c-.736-1.54-1.521-2.922-1.759-4.542c-.269-1.832-.481-3.661-.025-5.479c.339-1.356.782-2.687 1.19-4.025c.193-.636.104-.97-.472-1.305c-.291-.169-.62-.319-.948-.368a11.64 11.64 0 0 0-5.354.438c-.543.176-.828.527-.994 1.087c-.488 1.652-.904 3.344-1.589 4.915c-2.774 6.36-5.628 12.687-8.479 19.013c-.595 1.321-1.292 2.596-1.963 3.882c-.17.326-.418.613-.63.919c-.17-.201-.236-.339-.235-.477c.005-.813-.092-1.65.063-2.436a172 172 0 0 1 1.578-7.099c.47-1.946 1.017-3.874 1.538-5.807c.175-.647.178-1.252-.287-1.796c-.781-.911-2.413-1.111-3.381-.409l-.428.242l.083-.69c.204-1.479.245-2.953-.161-4.41c-.506-1.816-1.802-2.861-3.686-2.803c-.878.027-1.8.177-2.613.497c-3.419 1.34-6.048 3.713-8.286 6.568a2.6 2.6 0 0 1-.757.654c-2.893 1.604-5.795 3.188-8.696 4.778l-3.229 1.769c-.866-.826-1.653-1.683-2.546-2.41c-2.727-2.224-5.498-4.393-8.244-6.592c-2.434-1.949-4.792-3.979-6.596-6.56c-1.342-1.92-2.207-4.021-2.29-6.395c-.105-3.025.753-5.789 2.293-8.362c1.97-3.292 4.657-5.934 7.611-8.327c3.125-2.53 6.505-4.678 10.008-6.639c4.901-2.743 9.942-5.171 15.347-6.774c5.542-1.644 11.165-2.585 16.965-1.929c2.28.258 4.494.78 6.527 1.895c1.557.853 2.834 1.97 3.428 3.716c.586 1.718.568 3.459.162 5.204c-.825 3.534-2.76 6.447-5.195 9.05c-3.994 4.267-8.866 7.172-14.351 9.091a39.5 39.5 0 0 1-9.765 2.083c-2.729.229-5.401-.013-7.985-.962c-1.711-.629-3.201-1.591-4.399-2.987c-.214-.25-.488-.521-.887-.287c-.391.23-.46.602-.329.979c.219.626.421 1.278.762 1.838c.857 1.405 2.107 2.424 3.483 3.298c2.643 1.681 5.597 2.246 8.66 2.377c4.648.201 9.183-.493 13.654-1.74c6.383-1.78 11.933-4.924 16.384-9.884c3.706-4.13 6.353-8.791 6.92-14.419c.277-2.747-.018-5.438-1.304-7.944c-1.395-2.715-3.613-4.734-6.265-6.125C68.756 18.179 64.588 17 60.286 17h-4.31c-5.21 0-10.247 1.493-15.143 3.274c-3.706 1.349-7.34 2.941-10.868 4.703c-7.683 3.839-14.838 8.468-20.715 14.833c-2.928 3.171-5.407 6.67-6.833 10.79a41 41 0 0 0-1.111 3.746m27.839 36.013c-.333 4.459-2.354 8.074-5.657 11.002c-1.858 1.646-3.989 2.818-6.471 3.23c-.9.149-1.821.185-2.694-.188c-1.245-.532-1.524-1.637-1.548-2.814c-.037-1.876.62-3.572 1.521-5.186c1.176-2.104 2.9-3.708 4.741-5.206c2.9-2.361 6.046-4.359 9.268-6.245l.243-.1c.498 1.84.735 3.657.597 5.507M54.303 70.98c-.235 1.424-.529 2.849-.945 4.229c-1.438 4.777-3.285 9.406-5.282 13.973c-.369.845-.906 1.616-1.373 2.417a1.7 1.7 0 0 1-.283.334c-.578.571-1.126.541-1.418-.206c-.34-.868-.549-1.797-.729-2.716c-.121-.617-.092-1.265-.13-1.897c.039-4.494 1.41-8.578 3.736-12.38c.959-1.568 2.003-3.062 3.598-4.054a6.3 6.3 0 0 1 1.595-.706c.85-.239 1.372.154 1.231 1.006m17.164 21.868l6.169-7.203c.257 2.675-4.29 8.015-6.169 7.203m19.703-4.847c-.436.25-.911.43-1.358.661c-.409.212-.544-.002-.556-.354a2.4 2.4 0 0 1 .093-.721c.833-2.938 2.366-5.446 4.647-7.486l.16-.082c1.085 3.035-.169 6.368-2.986 7.982" clip-rule="evenodd"/></svg>
                    </div>
                    <div class="w-16 h-16 flex justify-center items-center rounded-md bg-white">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 128 128"><path fill="#2c8ebb" d="M64 0a64 64 0 1 0 64 64A64 64 0 0 0 64 0m4.685 21.948a5.04 5.04 0 0 1 2.21.802c.671.444 1.528 1.032 4.026 6.194a4.84 4.84 0 0 1 2.942-.103a3.93 3.93 0 0 1 2.468 2.004c2.55 4.893 2.889 13.614 1.774 19.22a34.9 34.9 0 0 1-6.028 13.74a26.6 26.6 0 0 1 5.957 9.733a26.2 26.2 0 0 1 1.456 10.746a30 30 0 0 0 3.22-1.796c3.158-1.951 7.927-4.894 13.615-4.966a6.834 6.834 0 0 1 7.225 5.885a6.555 6.555 0 0 1-5.046 7.256c-3.458.836-5.069 1.486-9.714 4.5a69.2 69.2 0 0 1-16.062 7.412a9 9 0 0 1-3.758 1.828c-3.933.96-17.425 1.682-18.488 1.682h-.248c-4.13 0-6.47-1.28-7.73-2.621c-3.51 1.755-8.052 1.03-11.355-.714a5.73 5.73 0 0 1-3.097-4.024a6.2 6.2 0 0 1 0-2.127a7 7 0 0 1-.816-1.032a16.9 16.9 0 0 1-2.333-10.386c.3-3.85 2.964-7.287 4.698-9.114A29.5 29.5 0 0 1 35.726 64a27.7 27.7 0 0 1 7.04-9.29c-1.703-2.87-3.436-7.288-1.754-11.789c1.208-3.21 2.199-4.996 4.377-5.76a7.1 7.1 0 0 0 2.59-1.383a18.22 18.22 0 0 1 12.243-5.843c.196-.495.423-1.033.671-1.508c1.652-3.51 3.406-5.48 5.46-6.193a5.04 5.04 0 0 1 2.332-.286m-.558 3.697c-2.703.089-5.355 8.099-5.355 8.099a14.45 14.45 0 0 0-12.089 4.645a9.95 9.95 0 0 1-3.973 2.345c-.424.144-.94.122-2.22 3.58c-1.961 5.234 3.345 11.16 3.345 11.16s-6.328 4.47-8.672 10.034a25.6 25.6 0 0 0-1.806 12.057s-4.5 3.901-4.788 7.927a13.3 13.3 0 0 0 1.826 8.083a2.003 2.003 0 0 0 2.714.94s-2.993 3.487-.196 4.963c2.55 1.331 6.844 2.065 9.115-.196c1.652-1.651 1.982-5.335 2.591-6.842c.144-.351.64.588 1.115 1.032a10.3 10.3 0 0 0 1.403 1.032s-4.024 1.734-2.373 5.688c.547 1.31 2.498 2.145 5.688 2.125c1.187 0 14.203-.743 17.671-1.58a4.47 4.47 0 0 0 2.696-1.505a65 65 0 0 0 15.99-7.226c4.892-3.19 6.895-4.059 10.848-4.998c3.262-.774 3.045-5.83-1.28-5.758c-4.48.052-8.402 2.363-11.716 4.427c-6.193 3.83-9.29 3.583-9.29 3.583l-.105-.175c-.423-.692 1.983-6.896-.712-14.287c-2.91-8.082-7.534-10.033-7.163-10.653c1.58-2.673 5.534-6.917 7.113-14.824c.94-4.79.691-12.676-1.435-16.805c-.393-.764-3.902 1.28-3.902 1.28s-3.283-7.319-4.201-7.907a1.44 1.44 0 0 0-.839-.244"/></svg>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <div class="relative">
        <div class="shape absolute sm:-bottom-px -bottom-[2px] start-0 end-0 overflow-hidden z-1 text-white">
            <svg class="w-full h-auto scale-[2.0] origin-top" viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
            </svg>
        </div>
    </div>

    <!-- Demo Start -->
     <section class="section py-20" id="demo">
        <div class="container">
            <div class="mx-10">
                <div class="text-2xl text-center font-semibold mb-10 text-primary"> Template Demo</div>

                <div class="grid lg:grid-cols-2 md:grid-cols-2 grid-cols-1 gap-10 justify-center items-center">

                    <a class='group' href='index_1' target='_blank'>
                        <div class="rounded-xl overflow-hidden border border-gray-200">
                            <img src="/images/demo/bg-1.png" class="rounded transition-all duration-500 shadow group-hover:shadow-sm group-hover:scale-110" alt="work-image">
                        </div>
                        <h4 class="text-lg text-center mt-4">Layout - 1</h4>
                    </a>
    
                    <a class='group' href='index_2' target='_blank'>
                        <div class="rounded-xl overflow-hidden border border-gray-200">
                            <img src="/images/demo/bg-2.png" class="rounded transition-all duration-500 shadow group-hover:shadow-sm group-hover:scale-110" alt="work-image">
                        </div>
                        <h4 class="text-lg text-center mt-5">Layout - 2</h4>
                    </a>
                    
                    <a class='group' href='index_3' target='_blank'>
                        <div class="rounded-xl overflow-hidden border border-gray-200">
                            <img src="/images/demo/bg-3.png" class="rounded transition-all duration-500 shadow group-hover:shadow-sm group-hover:scale-110" alt="work-image">
                        </div>
                        <h4 class="text-lg text-center mt-5">Layout - 3</h4>
                    </a>
            
                    <a class='group' href='index_4' target='_blank'>
                        <div class="rounded-xl overflow-hidden border border-gray-200">
                            <img src="/images/demo/bg-4.png" class="rounded transition-all duration-500 shadow group-hover:shadow-sm group-hover:scale-110" alt="work-image">
                        </div>
                        <h4 class="text-lg text-center mt-5">Layout - 4</h4>
                    </a>            
    
                    <a class='group' href='index_5' target='_blank'>
                        <div class="rounded-xl overflow-hidden border border-gray-200">
                            <img src="/images/demo/bg-5.png" class="rounded transition-all duration-500 shadow group-hover:shadow-sm group-hover:scale-110" alt="work-image">
                        </div>
                        <h4 class="text-lg text-center mt-5">Layout - 5</h4>
                    </a>
                    
                    <a class='group' href='index_6' target='_blank'> 
                        <div class="rounded-xl overflow-hidden border border-gray-200">
                            <img src="/images/demo/bg-6.png" class="rounded transition-all duration-500 shadow group-hover:shadow-sm group-hover:scale-110" alt="work-image">
                        </div>
                        <h4 class="text-lg text-center mt-5">Layout - 6</h4>        
                    </a>

                    <div class="lg:col-span-2">
                        <div class="flex justify-center">
                            <div class="lg:w-1/2">
                                <a class='group' href='index_7' target='_blank'>
                                    <div class="rounded-xl overflow-hidden border border-gray-200">
                                        <img src="/images/demo/bg-7.png" class="rounded transition-all duration-500 shadow group-hover:shadow-sm group-hover:scale-110" alt="work-image">
                                    </div>
                                    <h4 class="text-lg text-center mt-5">Layout - 7</h4>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    <!--- Demo End --->

    <footer class="relative  bg-[url(../images/bg-demo.jpg)] bg-no-repeat bg-cover">
        <div class="pt-20 pb-10" data-aos="fade-up" data-aos-duration="1000">
            <div class="container relative">
                <div class="text-center">
                    <div class=" mx-auto mb-12">
                        <a class="flex items-center justify-center" href="#">
                            <img class="h-10" src="/images/logo.png">
                        </a>
                        <h2 class="md:text-4xl text-xl font-semibold text-default-900 capitalize my-5">Get Evea for now</h2>
                        <p class="font-normal text-lg max-w-sm mx-auto text-muted">Start Openup today and create your stunning app website!</p>
                    </div>

                    <a class="py-2 px-6 inline-flex items-center gap-2 rounded-md text-base text-white bg-primary hover:bg-primaryDark transition-all duration-500 font-medium" href="#"><i class="h-5 w-5" data-lucide="shopping-cart"></i> Purchase Now</a>
                </div>
            </div>
        </div>

        <div class="container relative">
            <p class="py-6 text-center font-medium text-base text-default-900">
                <script>document.write(new Date().getFullYear().toString());
                </script>
                © Evea.
                Crafted and Coded with <span class="text-red-500">❤️</span> by <a class="text-primary-700" href="https://zoyothemes.com/" target="_blank">Zoyothemes</a>
            </p>
        </div>
    </footer>

    <?= $this->element("back-to-top") ?>

    <?= $this->element("script-file") ?>

    </body>
</html>