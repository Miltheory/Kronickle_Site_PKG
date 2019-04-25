<?php

function is_mobile() {

    if(empty($_SERVER["HTTP_USER_AGENT"])) {

        return false;

    } else if(strpos($_SERVER["HTTP_USER_AGENT"], "Mobile") !== false || strpos($_SERVER["HTTP_USER_AGENT"], "Android") !== false || strpos($_SERVER["HTTP_USER_AGENT"], "Silk/") !== false || strpos($_SERVER["HTTP_USER_AGENT"], "Kindle") !== false || strpos($_SERVER["HTTP_USER_AGENT"], "BlackBerry") !== false || strpos($_SERVER["HTTP_USER_AGENT"], "Opera Mini") !== false || strpos($_SERVER["HTTP_USER_AGENT"], "Opera Mobi") !== false) {

        return true;

    } else {

        return false;

    }

}

?>
<!doctype html>

<html lang="en">

    <head>

        <title>Kronickle &mdash; A revolutionary project ecosystem for Advertising and Creative Agencies</title>

        <meta charset="utf-8" />
        <meta content="ie=edge" http-equiv="x-ua-compatible" />
        <meta name="description" content="A revolutionary project ecosystem for Advertising and Creative Agencies" />
        <meta name="handheldfriendly" content="true" />
        <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, width=device-width" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="https://kronickle.com" />
        <meta property="og:title" content="Kronickle" />
        <meta property="og:description" content="A revolutionary project ecosystem for Advertising and Creative Agencies" />
        <meta property="og:image" content="https://kronickle.com-/img/opengraph.png" />

        <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "WebSite",
            "name": "Kronickle",
            "headline": "Kronickle",
            "description": "A revolutionary project ecosystem for Advertising and Creative Agencies",
            "url": "https://kronickle.com"
        }
        </script>

        <link rel="icon" type="image/png" href="-/img/icon.png" />
        <link rel="apple-touch-icon" href="-/img/apple-touch-icon.png" />
        <link rel="mask-icon" href="-/svg/mask-icon.svg" color="#FF6058" />
        <link rel="stylesheet" href="-/css/style.css?<?php echo rand(); ?>" />

    </head>

    <body class="preload<?php if(is_mobile()) echo " mobile"; ?>">

        <div class="nav">
            <div class="container">
                <div class="nav__logo">
                    <div class="nav__logo__logotype"><a href="javascript:void(0);" data-anchor="site"><svg width="162" height="26" xmlns="http://www.w3.org/2000/svg"><path d="M47.676 22.95a1.215 1.215 0 0 1-.873 2.04c-.319.01-.625-.12-.84-.355l-6.569-6.58-1.97 1.942v3.79a1.213 1.213 0 1 1-2.424 0V3.213a1.213 1.213 0 1 1 2.424 0v13.372l7.307-7.32a1.187 1.187 0 0 1 2.036.875c.005.313-.113.616-.329.843l-5.366 5.342 6.604 6.625zM59.81 8c.657 0 1.19.54 1.19 1.206 0 .666-.533 1.206-1.19 1.206-2.096 0-4.666 1.308-5.398 3.573v8.825c0 .657-.526 1.19-1.174 1.19a1.182 1.182 0 0 1-1.174-1.19V11.765a2.19 2.19 0 0 0-.097-.549.691.691 0 0 0-.322-.415A1.179 1.179 0 0 1 51 9.74a1.207 1.207 0 0 1 1.206-1.193c.793 0 1.587.87 1.874 1.706A8.514 8.514 0 0 1 59.81 8zM62 16.485C62 11.855 64.853 8 69.516 8 74.051 8 77 11.655 77 16.485S74.038 25 69.516 25C64.916 25 62 21.311 62 16.485zm7.516 5.998c3.077 0 5.085-2.384 5.085-5.998 0-3.066-1.646-5.971-5.085-5.971s-5.084 2.919-5.084 5.97c0 3.621 2.007 5.999 5.084 5.999zM95 22.807a1.215 1.215 0 0 1-1.216 1.15 1.215 1.215 0 0 1-1.215-1.15v-7.226c0-2.838-1.553-5.194-4.534-5.194a4.305 4.305 0 0 0-3.29 1.39c-.777.868-1.264 2.192-1.264 3.804v7.226c0 .659-.536 1.193-1.198 1.193a1.195 1.195 0 0 1-1.197-1.193V11.743a2.162 2.162 0 0 0-.099-.55.695.695 0 0 0-.329-.416A1.18 1.18 0 0 1 80 9.712c.013-.667.56-1.2 1.23-1.197.81 0 1.491.777 1.846 1.485a6.851 6.851 0 0 1 4.955-1.999c4.212 0 6.966 3.257 6.966 7.58L95 22.807zm5.002-19.255a1.477 1.477 0 0 1 .727-1.342 1.516 1.516 0 0 1 1.542 0c.474.281.754.797.727 1.342a1.492 1.492 0 0 1-1.498 1.411c-.8 0-1.46-.621-1.498-1.41zm2.76 5.68v13.454c.025.461-.21.898-.611 1.136-.4.237-.901.237-1.302 0a1.245 1.245 0 0 1-.612-1.136V9.232a1.246 1.246 0 0 1 .612-1.136c.4-.237.901-.237 1.302 0 .4.238.636.675.612 1.136zm4.238 7.26c0-4.866 2.93-8.491 7.529-8.491 2.528-.043 4.88 1.349 6.151 3.638.097.186.151.393.16.604.008.571-.35 1.077-.873 1.237a1.186 1.186 0 0 1-1.37-.555c-.844-1.563-2.454-2.497-4.166-2.418-3.138 0-5.029 2.387-5.029 6.009 0 3.621 1.92 5.974 5.029 5.974 2.083 0 3.492-1.006 4.326-2.683a1.129 1.129 0 0 1 1.058-.682c.314-.001.616.13.838.362.223.233.347.55.346.879.007.2-.037.397-.127.573-1.155 2.482-3.557 4.061-6.441 4.061-4.612-.014-7.431-3.812-7.431-8.508zm30.676 6.459a1.215 1.215 0 0 1-.873 2.04 1.096 1.096 0 0 1-.84-.356l-6.569-6.58-1.97 1.942v3.79a1.213 1.213 0 1 1-2.424 0V3.213a1.213 1.213 0 1 1 2.424 0v13.372l7.307-7.32a1.187 1.187 0 0 1 2.036.875c.003.313-.115.615-.329.843l-5.37 5.345 6.608 6.622zM141 21.72V3.158c.03-.649.491-1.158 1.052-1.158.56 0 1.022.51 1.051 1.158v18.659c-.029.38.134.747.419.94.303.229.484.622.478 1.04 0 .32-.109.627-.304.853a.966.966 0 0 1-.735.35 1.15 1.15 0 0 1-.475-.129c-1.458-.746-1.486-3.15-1.486-3.15zm6-5.289C147 11.56 150.013 8 154.574 8S162 11.863 162 16.497c-.014.695-.564 1.25-1.235 1.246h-11.269c.422 2.955 2.203 4.733 4.992 4.733 2.108 0 3.534-1.007 4.377-2.686a1.207 1.207 0 0 1 1.367-.646c.545.135.931.636.938 1.216.007.2-.038.398-.132.574-1.244 2.548-3.79 4.13-6.546 4.064-4.64.014-7.492-3.682-7.492-8.566zm12.48-1.177c-.358-2.921-2.235-4.777-4.992-4.777-2.818 0-4.537 1.85-4.992 4.777h9.985zM23.557 16.402c.54.532 3.333 3.8-.7 7.723-3.64 3.542-6.567.898-7.13.353l-3.233-3.302c-1.7 1.75-2.8 2.87-3.298 3.338A5.134 5.134 0 0 1 5.623 26a5.48 5.48 0 0 1-3.486-1.298C-.03 22.86.009 20.315.009 18.945c0-.159-.02-2.73 0-5.943.015-2.945 0-7.115 0-7.828C.009 2.64 1.329 0 5.367 0 7.7 0 9.764 2.153 9.997 2.377c.234.225 2.368 2.48 2.368 2.48l3.327-3.384c.562-.549 3.486-3.19 7.126.353 4.026 3.919 1.278 7.243.738 7.775 0 0-1.72 1.82-3.224 3.4 1.505 1.582 3.224 3.401 3.224 3.401zM7.745 22.86c.476-.449 1.562-1.548 3.25-3.252l-5.113-5.282a2.017 2.017 0 0 1-.62-1.68c.096-.783.67-1.22.93-1.49l2.69-2.83a1.062 1.062 0 0 1 1.537.004 1.15 1.15 0 0 1-.003 1.588l-2.84 2.971 5.71 5.9 3.959 4.068c.406.416 2.201 1.489 4.22-.466 1.921-1.862.93-4.024.531-4.43l-3.195-3.348a279.245 279.245 0 0 1-2.908 2.988 1.063 1.063 0 0 1-1.05.29 1.105 1.105 0 0 1-.768-.794c-.1-.387.006-.8.281-1.084.003-.004 7.423-7.736 7.65-7.977.4-.406 1.339-2.625-.578-4.487-2.017-1.954-3.813-.881-4.222-.465l-3.31 3.37 2.943 3.09a1.15 1.15 0 0 1-.039 1.559 1.061 1.061 0 0 1-1.508.017L8.425 3.932c-3-3.008-6.24-1.235-6.24 1.116 0 .75.019 4.844 0 7.947-.016 2.52 0 5.791 0 5.97-.013 1.132-.023 2.845 1.342 4.004a3.073 3.073 0 0 0 4.218-.109z"/></svg></a></div>
                    <div class="nav__logo__tagline"><svg width="132" height="10" xmlns="http://www.w3.org/2000/svg"><path d="M1.438 8.058a.587.587 0 0 1-.587-.576V.94c0-.391.219-.61.621-.61h2.61c1.576 0 2.45 1.082 2.45 2.358 0 1.277-.885 2.357-2.45 2.357H2.001v2.438a.575.575 0 0 1-.563.576zm3.91-5.371c0-.805-.587-1.346-1.415-1.346H2.001v2.691h1.932c.828 0 1.415-.54 1.415-1.345zm9.414 4.485c.069.08.115.173.115.357a.553.553 0 0 1-.54.529.588.588 0 0 1-.484-.242l-1.92-2.772H10.31v2.438a.575.575 0 0 1-.563.576.587.587 0 0 1-.587-.576V.94c0-.391.219-.61.621-.61h2.61c1.461 0 2.462.944 2.462 2.358 0 1.288-.805 2.024-1.714 2.208l1.622 2.277zm-4.45-5.83v2.69h1.931c.828 0 1.426-.54 1.426-1.345 0-.805-.598-1.346-1.426-1.346h-1.932zM17.39 4.17c0-2.278 1.575-3.968 3.864-3.968 2.288 0 3.864 1.69 3.864 3.968 0 2.276-1.576 3.967-3.864 3.967-2.289 0-3.864-1.69-3.864-3.967zm6.543 0c0-1.691-1.058-2.945-2.68-2.945-1.644 0-2.679 1.254-2.679 2.945 0 1.679 1.035 2.943 2.68 2.943 1.621 0 2.68-1.264 2.68-2.943zm7.632 3.967c-2.185 0-3.933-1.61-3.933-3.967 0-2.358 1.748-3.968 3.933-3.968 1.196 0 2.047.448 2.668 1.127.092.092.138.23.138.368a.54.54 0 0 1-.54.54.522.522 0 0 1-.415-.184 2.456 2.456 0 0 0-1.851-.828c-1.553 0-2.749 1.22-2.749 2.945 0 1.713 1.196 2.943 2.749 2.943a2.5 2.5 0 0 0 1.863-.828.498.498 0 0 1 .402-.184.54.54 0 0 1 .54.541.522.522 0 0 1-.137.368c-.633.679-1.472 1.127-2.668 1.127zM37.736 8c-.402 0-.62-.219-.62-.61V.94c0-.391.218-.61.62-.61h4.072c.276 0 .517.23.517.518 0 .276-.241.494-.517.494h-3.542v2.243h3.461c.276 0 .518.219.518.494a.523.523 0 0 1-.518.518h-3.461v2.392h3.542c.276 0 .517.219.517.494a.523.523 0 0 1-.517.518h-4.071zm7.299-.748a.561.561 0 0 1-.219-.437.56.56 0 0 1 .552-.552.59.59 0 0 1 .345.116c.518.413 1.196.735 2.036.735 1.242 0 1.679-.632 1.679-1.184 0-.805-.874-1.035-1.852-1.288-1.23-.322-2.656-.678-2.656-2.243 0-1.264 1.115-2.185 2.806-2.185a3.91 3.91 0 0 1 2.369.748c.15.092.241.253.241.437a.55.55 0 0 1-.54.552.565.565 0 0 1-.322-.104c-.54-.425-1.208-.609-1.84-.609-.943 0-1.53.437-1.53 1.081 0 .69.828.908 1.783 1.15 1.253.334 2.714.725 2.714 2.358 0 1.196-.828 2.311-2.898 2.311-1.127 0-2.013-.345-2.668-.886zm8.23 0a.561.561 0 0 1-.219-.437.56.56 0 0 1 .552-.552c.126 0 .253.047.345.116.517.413 1.196.735 2.035.735 1.242 0 1.68-.632 1.68-1.184 0-.805-.875-1.035-1.852-1.288-1.23-.322-2.657-.678-2.657-2.243 0-1.264 1.116-2.185 2.806-2.185a3.91 3.91 0 0 1 2.37.748.507.507 0 0 1 .241.437.55.55 0 0 1-.54.552.565.565 0 0 1-.323-.104c-.54-.425-1.207-.609-1.84-.609-.943 0-1.529.437-1.529 1.081 0 .69.828.908 1.782 1.15 1.254.334 2.714.725 2.714 2.358 0 1.196-.828 2.311-2.898 2.311-1.127 0-2.012-.345-2.668-.886zm8.804 2.117a.277.277 0 0 1-.207.08c-.172 0-.299-.127-.299-.31 0-.092.035-.162.092-.219.276-.276.495-.61.54-.897a.623.623 0 0 1-.172.023c-.356 0-.62-.276-.62-.655 0-.391.31-.702.7-.702.426 0 .806.345.806.954 0 .667-.334 1.277-.84 1.726zM70.823 8c-.402 0-.62-.219-.62-.61V.94c0-.391.218-.61.62-.61h4.071c.276 0 .518.23.518.518 0 .276-.242.494-.518.494h-3.542v2.243h3.462c.276 0 .517.219.517.494a.523.523 0 0 1-.517.518h-3.462v2.392h3.542c.276 0 .518.219.518.494a.523.523 0 0 1-.518.518h-4.07zm10.38.058c-.425 0-.793-.277-.943-.645L77.753 1.1a.476.476 0 0 1-.057-.219.614.614 0 0 1 1.184-.218l2.323 6.083L83.538.663a.606.606 0 0 1 1.173.218c0 .081-.012.15-.046.219l-2.507 6.313c-.15.368-.518.645-.955.645zm5.585-3.887c0-2.278 1.575-3.968 3.864-3.968 2.288 0 3.864 1.69 3.864 3.968 0 2.276-1.576 3.967-3.864 3.967-2.289 0-3.864-1.69-3.864-3.967zm6.543 0c0-1.691-1.058-2.945-2.68-2.945-1.644 0-2.679 1.254-2.679 2.945 0 1.679 1.035 2.943 2.68 2.943 1.621 0 2.68-1.264 2.68-2.943zM97.973 8c-.403 0-.621-.219-.621-.61V.848c0-.31.264-.575.586-.575.311 0 .564.264.564.575v6.141h3.024c.276 0 .518.219.518.494a.523.523 0 0 1-.518.518h-3.553zm8.655.058c-.425 0-.793-.277-.943-.645L103.178 1.1a.476.476 0 0 1-.057-.219.614.614 0 0 1 1.184-.218l2.323 6.083 2.335-6.083a.606.606 0 0 1 1.173.218c0 .081-.012.15-.046.219l-2.507 6.313c-.15.368-.518.645-.955.645zM113.386 8c-.403 0-.621-.219-.621-.61V.94c0-.391.218-.61.62-.61h4.072c.276 0 .517.23.517.518 0 .276-.241.494-.517.494h-3.542v2.243h3.461c.276 0 .518.219.518.494a.523.523 0 0 1-.518.518h-3.461v2.392h3.542c.276 0 .517.219.517.494a.523.523 0 0 1-.517.518h-4.071zm8.034 0c-.403 0-.621-.219-.621-.61V.94c0-.391.218-.61.62-.61h2.117c2.392 0 3.979 1.634 3.979 3.842 0 2.219-1.587 3.829-3.98 3.829h-2.115zm.529-1.012h1.587c1.77 0 2.794-1.265 2.794-2.817 0-1.576-.989-2.83-2.794-2.83h-1.587v5.647zm7.896.414c0-.391.322-.713.713-.713.39 0 .724.322.724.713a.737.737 0 0 1-.724.724.727.727 0 0 1-.713-.724z"/></svg></div>
                </div>
                <div class="nav__demo"><a href="javascript:void(0);" class="common-link common-link--color-blue js-modal-contact"><span>Request A Demo</span></a></div>
                <div class="nav__options">
                    <ul>
                        <li class="nav--intro"><a href="javascript:void(0);" data-anchor="intro">How It Works</a></li>
                        <li class="nav--cases"><a href="javascript:void(0);" data-anchor="cases">Clients</a></li>
                        <li class="nav--benefits"><a href="javascript:void(0);" data-anchor="benefits">Benefits</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="menu">
            <button>
                <span></span>
            </button>
        </div>

        <div class="site">

            <div class="banner waypoint" id="banner">
                <div class="container">
                    <div class="banner__image">
                        <figure>
                            <img src="-/img/banner.png" alt="" />
                        </figure>
                    </div>
                    <div class="banner__body">
                        <div class="banner__headline common-headline common-headline--color-white">
                            <h1>For creative collaboration</h1>
                        </div>
                        <div class="banner__content common-content common-content--color-white">
                            <p>Introducing Kronickle. A revolutionary project ecosystem for Advertising and Creative Agencies. From collaborating on the project strategy, keeping track of rounds, approvals, and comments, publishing the asset to the Asset Library, assigning credit to all project collaborators and managing talent rights, Kronickle creates a place the whole agency can converge.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="intro waypoint" id="intro">
                <div class="container">
                    <div class="intro__body">
                        <div class="intro__headline common-headline common-headline--color-blue">
                            <h2>Intro to Kronickle</h2>
                        </div>
                        <div class="intro__content common-content common-content--color-black">
                            <p>Introducing Kronickle. A revolutionary project ecosystem for Advertising and Creative Agencies. From collaborating on the project strategy, keeping track of rounds, approvals, and comments, publishing the asset to the Asset Library, assigning credit to all project collaborators and managing talent rights, Kronickle creates a place the whole agency can converge.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="ecosystem waypoint" id="ecosystem">
                <div class="container">
                    <p>Ecosystem</p>
                </div>
            </div>

            <div class="cases waypoint" id="cases">
                <div class="container">
                    <div class="cases__headline common-headline common-headline--color-blue">
                        <h4>Case Study</h4>
                    </div>
                    <div class="case">
                        <div class="case__image">
                            <a href="javascript:void(0);">
                                <figure>
                                    <img src="-/img/case-att.jpg" alt="" />
                                </figure>
                                <div class="case__image__icon">
                                    <svg width="90" height="90" viewBox="0 0 90 90" xmlns="http://www.w3.org/2000/svg"><path d="M45 0c24.845 0 44.988 20.134 45 44.978A45 45 0 1 1 45 0zm-.009 83A38 38 0 0 0 83 44.991C82.995 24.007 65.982 6.998 44.997 7 24.013 7.002 7.002 24.013 7 44.997 6.998 65.982 24.007 82.995 44.991 83zm14.576-39.385c1.912 1.102 1.912 2.894-.006 3.99L38.618 59.529c-1.93 1.1-3.51.207-3.51-1.985L35 33.45c-.009-2.193 1.542-3.08 3.463-1.974l21.104 12.14z"/></svg>
                                </div>
                            </a>
                        </div>
                        <div class="case__body">
                            <div class="case__headline common-headline common-headline--color-blue">
                                <h2>Working with AT&amp;T</h2>
                            </div>
                            <div class="case__content common-content common-content--color-black">
                                <p>Here is some copy about how great it is to work with AT&amp;T. You can also check out the video that tells you a bunch more about all of this.</p>
                                <p>And here&rsquo;s a second paragraph on everything you need to know about working with our valued clients.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="testimonials waypoint" id="testimonials">
                <div class="container">
                    <div class="testimonials__headline common-headline common-headline--color-white">
                        <h2>Who&rsquo;s on Kronickle</h2>
                    </div>
                    <div class="testimonials__testimonials">
                        <div class="testimonial">
                            <div class="testimonial__body">
                                <div class="testimonial__content">
                                    <p>We love what Kronickle has to offer and ever since we started using their platform out productivity and efficiency has increased immensely. This has revolutionized the way we work!&rdquo;</p>
                                </div>
                                <div class="testimonial__cite">
                                    <dl>
                                        <dt>Jennifer Smith</dt>
                                        <dd>Account Manager, AT&amp;T</dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial">
                            <div class="testimonial__body">
                                <div class="testimonial__content">
                                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed eiusmod tempor incididunt labore magna aliqua enim minim veniam quis nostrud exercitation ullamco laboris nisi aliquip commodo consequat aute irure dolor reprehenderit voluptate velit esse cillum dolore fugiat nulla pariatur sint occaecat cupidatat non proident culpa qui officia deserunt.&rdquo;</p>
                                </div>
                                <div class="testimonial__cite">
                                    <dl>
                                        <dt>Jim Nastics</dt>
                                        <dd>High Duke, District of Squamish</dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial">
                            <div class="testimonial__body">
                                <div class="testimonial__content">
                                    <p>Adipiscing elit sed eiusmod tempor incididunt labore magna aliqua enim minim veniam quis nostrud exercitation ullamco laboris nisi aliquip commodo consequat aute irure dolor reprehenderit voluptate velit esse cillum dolore fugiat nulla pariatur sint occaecat cupidatat non proident culpa qui officia deserunt lorem ipsum dolor sit amet consectetur adipiscing elit sed eiusmod tempor incididunt labore magna aliqua enim minim veniam quis.&rdquo;</p>
                                </div>
                                <div class="testimonial__cite">
                                    <dl>
                                        <dt>Lauren Gypsum</dt>
                                        <dd>Placeholder, Alphabet</dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonials__controller">
                        <ul>
                            <li><a href="javascript:void(0);" data-key="0"><span></span></a></li>
                            <li><a href="javascript:void(0);" data-key="1"><span></span></a></li>
                            <li><a href="javascript:void(0);" data-key="2"><span></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="benefits waypoint" id="benefits">
                <div class="container">
                    <div class="benefits__body">
                        <div class="benefits__headline common-headline common-headline--color-blue">
                            <h2>Benefits</h2>
                        </div>
                        <div class="benefits__content common-content common-content--color-black">
                            <dl>
                                <dt>
                                    <h4>Full Ecosystem</h4>
                                </dt>
                                <dd>
                                    <p>Ecosystem of products gives you a project perspective from start to finish.</p>
                                </dd>
                            </dl>
                            <dl>
                                <dt>
                                    <h4>For The Whole Agency</h4>
                                </dt>
                                <dd>
                                    <p>Meant for the whole agency, and not for specific departments.</p>
                                </dd>
                            </dl>
                            <dl>
                                <dt>
                                    <h4>Onboarding Is Easy</h4>
                                </dt>
                                <dd>
                                    <p>Understand that creative agencies can be a revolving door. Training fresh talent on becoming an expert on the brand takes time and money.</p>
                                </dd>
                            </dl>
                            <dl>
                                <dt>
                                    <h4>Personalized</h4>
                                </dt>
                                <dd>
                                    <p>Kronickle engages your employees personally and acknowledges them for their contributions.</p>
                                </dd>
                            </dl>
                            <dl>
                                <dt>
                                    <h4>All In One Place</h4>
                                </dt>
                                <dd>
                                    <p>Having virtual project pages anyone can refer to gives all of the history of a brand and a jumping off point for new team members.</p>
                                </dd>
                            </dl>
                            <dl>
                                <dt>
                                    <h4>Secure Network</h4>
                                </dt>
                                <dd>
                                    <p>A sentence about the security policy and how secure the network is.</p>
                                </dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>

            <div class="demo waypoint" id="demo">
                <div class="container">
                    <div class="demo__body">
                        <div class="demo__headline common-headline common-headline--color-white">
                            <h2>Give Kronickle a Try</h2>
                        </div>
                        <div class="demo__content common-content common-content--color-white">
                            <p>Enterprise only. We know you&rsquo;ll love what Kronickle has to offer so get your agency onboard by giving it a go for a month.</p>
                        </div>
                        <div class="demo__link"><a href="javascript:void(0);" class="common-link common-link--color-blue js-modal-contact"><span>Request A Demo</span></a></div>
                    </div>
                </div>
            </div>

            <div class="footer waypoint" id="footer">
                <div class="container">
                    <div class="footer__body">
                        <div class="footer__content footer__content--connect">
                            <h6>Connect</h6>
                            <ul>
                                <li><a href="mailto:info@kronickle.com">info@kronickle.com</a></li>
                                <li><a href="tel:3105288668">(310) 528-8668</a></li>
                            </ul>
                        </div>
                        <div class="footer__content footer__content--legal">
                            <ul>
                                <li><a href="javascript:void(0);" class="js-modal-privacy">Privacy Policy</a></li>
                                <li><span>&copy; 2019 Kronickle. All rights reserved.</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="footer__scroll"><a href="javascript:void(0);" data-anchor="site"><span><svg width="15" height="20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 1.9V20H7V1.9L1.2 7.7.5 7l7-7 7 7-.7.7z"/></svg></span></a></div>
                </div>
            </div>

            <div class="drawer">
                <div class="common-table">
                    <div class="common-cell">
                        <ul>
                            <li><a href="javascript:void(0);" class="logo" data-anchor="site"><svg width="25" height="26" xmlns="http://www.w3.org/2000/svg"><path d="M23.556 16.402s-1.72-1.819-3.224-3.4C21.837 11.42 23.556 9.6 23.556 9.6c.54-.532 3.288-3.856-.738-7.775-3.64-3.543-6.564-.902-7.126-.353l-3.327 3.384s-2.134-2.255-2.368-2.48C9.764 2.153 7.7 0 5.367 0 1.328 0 .01 2.641.01 5.174c0 .713.015 4.883 0 7.828-.02 3.212 0 5.784 0 5.943 0 1.37-.039 3.915 2.128 5.757A5.48 5.48 0 0 0 5.623 26a5.134 5.134 0 0 0 3.572-1.486c.499-.469 1.598-1.588 3.298-3.338l3.234 3.302c.562.545 3.49 3.19 7.129-.353 4.033-3.923 1.24-7.191.7-7.723zM7.745 22.86a3.073 3.073 0 0 1-4.218.11c-1.365-1.16-1.355-2.873-1.342-4.006 0-.178-.016-3.45 0-5.969.019-3.103 0-7.197 0-7.947 0-2.35 3.24-4.124 6.24-1.116l6.867 7.188a1.061 1.061 0 0 0 1.508-.017 1.15 1.15 0 0 0 .039-1.558l-2.943-3.09 3.31-3.371c.41-.416 2.205-1.49 4.222.465 1.917 1.862.977 4.081.578 4.487-.227.241-7.647 7.973-7.65 7.977a1.149 1.149 0 0 0-.281 1.084c.1.388.393.69.768.794.375.104.775-.007 1.05-.29 0 0 1.687-1.707 2.908-2.988l3.195 3.348c.4.406 1.39 2.568-.53 4.43-2.02 1.955-3.815.882-4.221.466l-3.96-4.068-5.71-5.9 2.841-2.971a1.15 1.15 0 0 0 .003-1.588 1.062 1.062 0 0 0-1.537-.003l-2.69 2.83c-.26.27-.834.706-.93 1.488-.066.63.165 1.255.62 1.68l5.112 5.283c-1.687 1.704-2.773 2.803-3.25 3.252z"/></svg></a></li>
                            <li><a href="javascript:void(0);" class="link" data-anchor="intro">How It Works</a></li>
                            <li><a href="javascript:void(0);" class="link" data-anchor="cases">Clients</a></li>
                            <li><a href="javascript:void(0);" class="link" data-anchor="benefits">Benefits</a></li>
                            <li><a href="javascript:void(0);" class="common-link common-link--color-blue js-modal-contact"><span>Request A Demo</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>

        <div class="modal"></div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
        <script src="-/js/script.js?<?php echo rand(); ?>"></script>

    </body>

</html>