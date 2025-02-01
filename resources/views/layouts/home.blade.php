<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Lalo Dev Register</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link href="{{asset('style.css')}}" rel="stylesheet">
    <script>
        if (localStorage.getItem('dark-mode') === 'false' || !('dark-mode' in localStorage)) {
            document.querySelector('html').classList.remove('dark');
        } else {
            document.querySelector('html').classList.add('dark');
        }
    </script>
    <link rel="shortcut icon" href="https://lalodev.com/images/icon.png" type="image/x-icon">
    <script src="https://unpkg.com/@hotwired/turbo@7.0.0/dist/turbo.es5-umd.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/nprogress/0.2.0/nprogress.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/nprogress/0.2.0/nprogress.min.css" rel="stylesheet">

</head>

<body class="ciqx9 crsw4 c0s9c csrkj cv4ci co13m cy976">

    <!-- Page wrapper -->
    <div class="c3wgq cyndk chtv9 c5z2i">

        <!-- Site header -->
        <header class="cnh8i c01bk c3nel">
            <div class="cryui cve7d cmboy c2knu c1om1">
                <div class="c3wgq cqctx c8ug7 c3nxx cwiz5">

                    <!-- Site branding -->
                    <div class="cy8j7 c8e4r c1f4m">
                        <!-- Logo -->
                        <a class="c3wgq c8ug7 ckz2n" href="/" aria-label="Cruip">
                            <img class="cb8ym" src="https://lalodev.com/images/icon.png" width="32" height="32" alt="Mary Rutt">
                            <span class="ceykk cgmti c1zc3">Lalo Dev</span>
                        </a>
                    </div>

                    <!-- Right side -->
                    <div class="c3wgq cjhcr cb0b0">

                        <!-- Light switch -->
                        <div class="c3wgq chtv9 cdl7m">
                            <input type="checkbox" name="light-switch" id="light-switch" class="light-switch chsm6 ccnbn">
                            <label class="c95b3 c4oh8 cqrkk cw2jy ci0lp c8ug7 cdl7m cb8ym cgihz cd0o4 cj25x ckuce cs9if c40y7 c39l6 cnm79 ctvap ci9vu c4k4g cnvgl cnck3 cty4y cabny" for="light-switch">
                                <svg class="c4cjc" width="16" height="16" xmlns="http://www.w3.org/2000/svg">
                                    <path class="c16pd c4s1c" d="M7 0h2v2H7zM12.88 1.637l1.414 1.415-1.415 1.413-1.413-1.414zM14 7h2v2h-2zM12.95 14.433l-1.414-1.413 1.413-1.415 1.415 1.414zM7 14h2v2H7zM2.98 14.364l-1.413-1.415 1.414-1.414 1.414 1.415zM0 7h2v2H0zM3.05 1.706 4.463 3.12 3.05 4.535 1.636 3.12z"></path>
                                    <path class="c7yej c4q0w" d="M8 4C5.8 4 4 5.8 4 8s1.8 4 4 4 4-1.8 4-4-1.8-4-4-4Z"></path>
                                </svg>
                                <svg class="cf0yw cxu3o" width="16" height="16" xmlns="http://www.w3.org/2000/svg">
                                    <path class="c7yej" d="M6.2 1C3.2 1.8 1 4.6 1 7.9 1 11.8 4.2 15 8.1 15c3.3 0 6-2.2 6.9-5.2C9.7 11.2 4.8 6.3 6.2 1Z"></path>
                                    <path class="c16pd" d="M12.5 5a.625.625 0 0 1-.625-.625 1.252 1.252 0 0 0-1.25-1.25.625.625 0 1 1 0-1.25 1.252 1.252 0 0 0 1.25-1.25.625.625 0 1 1 1.25 0c.001.69.56 1.249 1.25 1.25a.625.625 0 1 1 0 1.25c-.69.001-1.249.56-1.25 1.25A.625.625 0 0 1 12.5 5Z"></path>
                                </svg>
                                <span class="chsm6">Switch to light / dark version</span>
                            </label>
                        </div>

                    </div>

                </div>
            </div>
        </header>

        <!-- Loading progress bar -->
        <div id="progress-bar" style="position: fixed; top: 0; left: 0; width: 0; height: 4px; background-color: #4caf50; z-index: 9999;"></div>

        <div class="c3wgq cjhcr chtv9 clz1d">

            <!-- Left side -->
            <div class="c06d3 c95b3 c3nel cj25x c1f4m ckv2c ca5uj cz3i2 cvidh">
                <div class="cryui c3wgq cw17b c3nel cve7d chtv9 clkia cmboy cl0qm cdv0q c2knu c54n8">
                    <div class="c3wgq cjhcr chtv9 cdl7m">
                        <div class="cfnv8">
                            <div class="ceykk ckwqs cj6wo">Register for</div>
                            <h1 class="c1p4p ca8f3 cn4ul c25ay">Lalo dev <br>learning hub.</h1>
                            <time class="before:content-['—_'] c0da4 clsju ceykk cgmti cntvh">20 April, 2024</time>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right side -->
            <main class="c3wgq c3nel chtv9 cacuu c36e2 ca5uj">
                
                {{ $slot }}
            </main>

        </div>

    </div>

    <script>
        // This function checks if we are navigating via Turbo
        let isTurboNavigation = false;

        // Start NProgress only for Turbo navigation
        document.addEventListener("turbo:click", function() {
            isTurboNavigation = true;  // Trigger Turbo navigation
            NProgress.start();
        });

        // Finish NProgress once the page is loaded through Turbo navigation
        document.addEventListener("turbo:load", function() {
            if (isTurboNavigation) {
                NProgress.done();  // End NProgress on Turbo load
                isTurboNavigation = false;  // Reset the flag
            }
        });

        // Prevent NProgress on back/forward navigation
        window.addEventListener('popstate', function () {
            // Skip the progress bar if the navigation is not Turbo-related
            NProgress.done();  // Ensure the progress bar completes even on back/forward events
        });

        // Reset NProgress after normal page load (no Turbo)
        document.addEventListener("DOMContentLoaded", function() {
            if (!isTurboNavigation) {
                NProgress.done();  // Complete the progress bar if it's not Turbo navigation
            }
        });
    </script>
     <script src="{{asset("js/vendors/alpinejs.min.js")}}" defer=""></script>
    <script src="{{asset('js/main.js')}}"></script>

</body>

</html>
