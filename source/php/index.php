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
        <meta property="og:url" content="http://kronickle.vacuumsucks.com" />
        <meta property="og:title" content="Kronickle" />
        <meta property="og:description" content="A revolutionary project ecosystem for Advertising and Creative Agencies" />
        <meta property="og:image" content="http://kronickle.vacuumsucks.com/-/img/opengraph.png" />

        <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "WebSite",
            "name": "Kronickle",
            "headline": "Kronickle",
            "description": "A revolutionary project ecosystem for Advertising and Creative Agencies",
            "url": "http://kronickle.vacuumsucks.com"
        }
        </script>

        <link rel="icon" type="image/png" href="-/img/icon.png" />
        <link rel="apple-touch-icon" href="-/img/apple-touch-icon.png" />
        <link rel="mask-icon" href="-/svg/mask-icon.svg" color="#FF6058" />
        <link rel="stylesheet" href="-/css/style.css?<?php echo rand(); ?>" />

    </head>

    <body class="preload<?php if(is_mobile()) echo " mobile"; ?>" data-aos="fade">

        <div class="site">

            <div class="banner waypoint" id="banner">
                <div class="banner__shape"></div>
                <div class="banner__wrap">
                    <div class="container">
                        <div class="banner__image">
                            <figure data-aos="fade-up">
                                <img src="-/img/banner.png" alt="" />
                            </figure>
                        </div>
                        <div class="banner__body">
                            <div class="banner__headline common-headline common-headline--color-white">
                                <h1 data-aos="fade-up" data-aos-delay="50">The Modern Agency</h1>
                            </div>
                            <div class="banner__content common-content common-content--color-white">
                                <p data-aos="fade-up" data-aos-delay="100">Introducing Kronickle, a revolutionary project ecosystem for modern advertising and creative agencies. Built to streamline and evolve the creative workflow, Kronickle provides an end-to-end solution to manage every aspect of a creative project, from strategic brief to final delivery. Let us handle the logistics so that you can focus on building great brands.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="intro waypoint" id="intro">
                <div class="container">
                    <div class="intro__body">
                        <div class="intro__headline common-headline common-headline--color-blue">
                            <h2 data-aos="fade-up">The Brand Story</h2>
                        </div>
                        <div class="intro__content common-content common-content--color-black">
                            <p data-aos="fade-up" data-aos-delay="50">The traditional creative process breaks down when the team is not on the same page. Changing strategy. Client comments buried in emails. Revised scripts. And who knows where to reference the last campaign? Built by brand builders for brand builders, Kronickle modernizes the process by creating a place the whole agency can converge. It provides the latest story of the brand, and the history to back it up.</p>
                        </div>
                    </div>
                </div>
            </div>



            <div class="ecosystem waypoint" id="ecosystem">
                <div class="container">
                    <div class="ecosystem__background" data-aos="fade-up">
                        <div class="ecosystem__headline common-headline common-headline--color-blue">
                            <h2 data-aos="fade-up">How<br /> Kronickle<br /> Works</h2>
                        </div>
                        <div class="ecosystem__arrows">
                            <figure>
                                <svg width="550" height="658" xmlns="http://www.w3.org/2000/svg"><path d="M259.219 503.857a21.89 21.89 0 0 1-11.256 29.32l-36.706 16.269c97.763 27.628 202.078-12.276 256.497-98.118 54.419-85.842 46.013-197.23-20.668-273.888-8.027-9.263-7.025-23.284 2.238-31.316s23.279-7.034 31.305 2.23c80.777 91.565 91.068 225.623 25.217 328.5-65.85 102.876-191.885 149.641-308.838 114.594l15.346 34.491a22.253 22.253 0 0 1-2.366 22.12 22.242 22.242 0 0 1-20.332 9.015 22.228 22.228 0 0 1-17.966-13.103l-37.738-84.815c-4.914-11.244.118-24.355 11.295-29.422l84.798-37.779a21.87 21.87 0 0 1 29.174 11.902zm155.73-405.682c4.915 11.245-.117 24.355-11.294 29.423l-84.798 37.778c-11.212 5.019-24.365-.004-29.378-11.218-5.013-11.213.012-24.372 11.224-29.39l36.974-16.05C239.914 81.09 135.598 120.995 81.18 206.837c-54.419 85.842-46.013 197.23 20.668 273.888 7.925 9.192 6.898 23.072-2.294 31.002-9.19 7.93-23.066 6.907-30.99-2.284-80.772-91.55-91.08-225.588-25.258-328.465C109.128 78.099 235.131 31.306 352.083 66.307l-15.347-34.49c-4.974-11.232.097-24.373 11.326-29.352 11.23-4.98 24.364.089 29.338 11.32l37.55 84.39z" fill-rule="evenodd"/></svg>
                            </figure>
                        </div>
                    </div>
                    <div class="ecosystem__icons" data-aos="fade-up" data-aos-delay="50">
                        <div class="paths">
                            <div class="path path__1">
                                <svg width="508" height="508" xmlns="http://www.w3.org/2000/svg"><path id="path__1" d="M254.05 507.05c-80.093 0-151.493-37.217-197.851-95.301C21.683 368.501 1.05 313.685 1.05 254.05c0-19.38 2.179-38.251 6.306-56.381C24.6 121.899 75.857 59.064 144.217 26.07 177.436 10.036 214.694 1.05 254.05 1.05c39.361 0 76.624 8.989 109.846 25.025 68.382 33.01 119.647 95.88 136.87 171.687 4.112 18.102 6.284 36.941 6.284 56.288 0 59.626-20.627 114.436-55.135 157.68" stroke="#000" fill="none"/></svg>
                            </div>
                            <div class="path path__2">
                                <svg width="502" height="508" xmlns="http://www.w3.org/2000/svg"><path id="path__2" d="M451.915 411.73c-46.356 58.095-117.764 95.32-197.865 95.32-80.093 0-151.493-37.216-197.85-95.3-34.517-43.25-55.15-98.064-55.15-157.7 0-19.38 2.178-38.251 6.305-56.381 17.245-75.77 68.501-138.605 136.862-171.6 33.22-16.032 70.476-25.02 109.833-25.02 39.361 0 76.624 8.99 109.845 25.027 68.382 33.009 119.648 95.88 136.871 171.687" stroke="#000" fill="none"/></svg>
                            </div>
                            <div class="path path__3">
                                <svg width="508" height="508" xmlns="http://www.w3.org/2000/svg"><path id="path__3" d="M500.766 197.762c4.112 18.102 6.284 36.941 6.284 56.288 0 59.626-20.627 114.435-55.135 157.68-46.356 58.094-117.763 95.32-197.865 95.32-80.093 0-151.493-37.217-197.85-95.3C21.683 368.5 1.05 313.684 1.05 254.05c0-19.38 2.179-38.25 6.306-56.382C24.6 121.9 75.856 59.063 144.216 26.07 177.437 10.036 214.695 1.05 254.05 1.05c39.362 0 76.624 8.988 109.846 25.025" stroke="#000" fill="none"/></svg>
                            </div>
                            <div class="path path__4">
                                <svg width="508" height="483" xmlns="http://www.w3.org/2000/svg"><path id="path__4" d="M363.896 1.075c68.382 33.01 119.647 95.88 136.87 171.687 4.112 18.102 6.284 36.941 6.284 56.288 0 59.626-20.627 114.435-55.134 157.68-46.357 58.094-117.764 95.32-197.866 95.32-80.092 0-151.493-37.217-197.85-95.3C21.683 343.5 1.05 288.684 1.05 229.05c0-19.38 2.179-38.25 6.306-56.382C24.6 96.9 75.856 34.063 144.216 1.07" stroke="#000" fill="none"/></svg>
                            </div>
                            <div class="path path__5">
                                <svg width="508" height="508" xmlns="http://www.w3.org/2000/svg"><path id="path__5" d="M144.217 26.07C177.436 10.036 214.694 1.05 254.05 1.05c39.361 0 76.624 8.989 109.846 25.026 68.382 33.008 119.647 95.88 136.87 171.686 4.112 18.101 6.284 36.941 6.284 56.287 0 59.627-20.627 114.436-55.135 157.68-46.356 58.096-117.763 95.32-197.865 95.32-80.093 0-151.493-37.215-197.851-95.3C21.683 368.502 1.05 313.686 1.05 254.05c0-19.379 2.179-38.25 6.306-56.38" stroke="#000" fill="none"/></svg>
                            </div>
                            <div class="path path__6">
                                <svg width="502" height="508" xmlns="http://www.w3.org/2000/svg"><path id="path__6" d="M1.356 197.669c17.244-75.77 68.5-138.605 136.86-171.6 33.22-16.032 70.478-25.02 109.834-25.02 39.362 0 76.624 8.99 109.846 25.027 68.382 33.009 119.647 95.88 136.87 171.687 4.112 18.1 6.284 36.94 6.284 56.287 0 59.627-20.627 114.436-55.134 157.68-46.357 58.095-117.764 95.32-197.866 95.32-80.092 0-151.493-37.216-197.85-95.3" stroke="#000" fill="none"/></svg>
                            </div>
                            <div class="path path__7">
                                <svg width="508" height="508" xmlns="http://www.w3.org/2000/svg"><path id="path__7" d="M56.2 411.75C21.682 368.5 1.05 313.684 1.05 254.05c0-19.38 2.178-38.25 6.306-56.382C24.6 121.9 75.856 59.063 144.218 26.07 177.435 10.036 214.694 1.05 254.05 1.05c39.36 0 76.624 8.99 109.845 25.025 68.381 33.01 119.647 95.88 136.87 171.687 4.112 18.102 6.284 36.941 6.284 56.288 0 59.626-20.627 114.435-55.135 157.68-46.357 58.094-117.764 95.32-197.865 95.32" stroke="#000" fill="none"/></svg>
                            </div>
                        </div>
                        <div class="icon icon__1">
                            <div class="icon__headline common-headline">
                                <h6>Brief Management</h6>
                            </div>
                            <div class="icon__icon">
                                <figure>
                                    <svg width="47" height="58" xmlns="http://www.w3.org/2000/svg"><path d="M46.417 14.842c.385.46.592 1.044.583 1.644v35.246C47 55.194 44.203 58 40.752 58H6.248a6.237 6.237 0 0 1-4.434-1.851A6.278 6.278 0 0 1 0 51.688V6.268C0 2.806 2.797 0 6.248 0h24.484a2.57 2.57 0 0 1 1.639.706L46.34 14.842h.077zM33.075 8.111v6.036h6.005L33.075 8.11zm9.283 43.621l.022-32.895H30.589a2.263 2.263 0 0 1-1.587-.716 2.277 2.277 0 0 1-.613-1.635V4.746H6.248c-.863 0-1.562.7-1.562 1.566v45.42c0 .866.7 1.567 1.562 1.567h34.548c.415.003.814-.161 1.108-.456.293-.294.457-.694.454-1.11zm-28.441-19.68c-1.286-.038-2.32-1.041-2.36-2.289 0-1.264 1.057-2.29 2.36-2.29h19.937c1.3.007 2.353 1.028 2.36 2.29-.041 1.248-1.074 2.25-2.36 2.29H13.917zm-2.36 7.632c0-1.264 1.03-2.29 2.3-2.29h20.056c1.27 0 2.3 1.026 2.3 2.29a2.37 2.37 0 0 1-2.3 2.29H13.858a2.381 2.381 0 0 1-2.3-2.29z"/></svg>
                                </figure>
                            </div>
                        </div>
                        <div class="icon icon__2">
                            <div class="icon__headline common-headline">
                                <h6>The Wall</h6>
                            </div>
                            <div class="icon__icon">
                                <figure>
                                    <svg width="47" height="69" xmlns="http://www.w3.org/2000/svg"><path d="M35.516 31.955l-1.284-20.677c.642-.209 1.498-.626 1.926-1.253 1.07-1.044 1.712-2.506 1.712-4.177 0-1.462-.642-2.924-1.712-4.177C35.088.627 33.59 0 31.878 0H14.978c-3.21 0-5.991 2.715-5.991 5.848 0 1.462.642 2.924 1.712 4.177.641.627 1.283 1.044 1.925 1.253L11.34 31.955a17.38 17.38 0 0 0-8.13 3.968C1.07 38.012 0 40.31 0 43.024c0 .627.214 1.045.642 1.462.428.418.856.627 1.498.627h14.976v10.651c0 .21 0 .418.214.836l4.065 10.234c.428.835 1.07 1.253 1.926 1.253.856 0 1.711-.627 1.925-1.253L29.311 56.6c0-.209.214-.418.214-.627l.214-10.651h14.763c.642 0 1.07-.21 1.498-.627.428-.418.642-.835.642-1.462.214-5.43-4.493-10.025-11.126-11.278zM25.46 45.113l-.214 10.234-1.925 4.803-1.926-4.803V45.113h4.065zm1.926-9.399h4.279c4.707 0 8.986 2.089 10.484 5.222H4.707c.428-.627.856-1.462 1.498-2.089 2.14-2.088 5.348-3.133 8.986-3.133h12.195zM16.902 11.696H29.74l1.284 19.841H15.405l1.497-19.841zm-3.21-6.892a1.655 1.655 0 0 1 1.07-.418h16.903c.428 0 .856.209 1.07.418.214.209.428.626.428 1.044 0 .835-.856 1.67-1.712 1.67H14.549c-.428 0-.856-.208-1.07-.417a1.576 1.576 0 0 1-.428-1.044c.214-.627.428-1.044.642-1.253z"/></svg>
                                </figure>
                            </div>
                        </div>
                        <div class="icon icon__3">
                            <div class="icon__headline common-headline">
                                <h6>Project Pages</h6>
                            </div>
                            <div class="icon__icon">
                                <figure>
                                    <svg width="69" height="49" xmlns="http://www.w3.org/2000/svg"><path d="M65.409 17.704a8.886 8.886 0 0 1-.747 3.402c2.607 2.594 3.969 6.099 3.762 9.681-.404 6.735-6.06 12.11-13.146 12.493h-14.4V38.18h14.245c4.322-.236 7.759-3.537 7.96-7.646.187-2.652-1.061-5.211-3.31-6.79l-2.1-1.446 1.41-1.955a7.1 7.1 0 0 0 .985-2.892c.145-3.304-2.528-6.106-6.002-6.294a5.685 5.685 0 0 0-2.818.51l-1.874.776-1.254-1.446c-4.639-5.076-11.98-7.092-18.753-5.15-6.773 1.942-11.716 7.481-12.626 14.148l-.352 2.303h-2.593c-4.186.356-7.462 3.581-7.688 7.57-.227 3.988 2.665 7.53 6.787 8.312h14.47v5.101H12.754C5.734 42.788.236 37.343.007 30.657-.22 23.972 4.895 18.2 11.866 17.276 14.33 6.769 24.408-.517 35.72.029c5.729.239 11.155 2.514 15.203 6.374a11.838 11.838 0 0 1 3.508-.322c3.079.156 5.966 1.468 8.025 3.649 2.058 2.18 3.12 5.05 2.952 7.974zM33.444 48.69h-.185c-1.446-.052-2.575-1.203-2.527-2.576V25.985l-2.727 2.711-.086.081c-.49.47-1.159.735-1.856.735a2.684 2.684 0 0 1-1.856-.735c-1.089-.957-1.171-2.565-.185-3.619l7.438-7.387c1.108-1.024 2.875-1.024 3.983 0l7.424 7.387c.986 1.054.903 2.662-.185 3.62-.461.49-1.12.772-1.814.772a2.924 2.924 0 0 1-1.984-.854l-2.727-2.71v20.127a.36.36 0 0 1 0 .177 2.428 2.428 0 0 1-.83 1.735c-.51.45-1.187.69-1.883.664z"/></svg>
                                </figure>
                            </div>
                        </div>
                        <div class="icon icon__4">
                            <div class="icon__headline common-headline">
                                <h6>WIP Review</h6>
                            </div>
                            <div class="icon__icon">
                                <figure>
                                    <svg width="62" height="57" xmlns="http://www.w3.org/2000/svg"><path d="M61.618 5.251c.03-.74-.245-1.46-.76-1.996a2.837 2.837 0 0 0-1.96-.886 2.974 2.974 0 0 0-2.026.767l-6.759 6.305C39.867-1.854 22.486-3.194 10.602 6.394-1.282 15.984-3.491 33.13 5.581 45.373c9.071 12.242 26.234 15.277 39.014 6.898 12.781-8.378 16.686-25.225 8.877-38.296l7.213-6.768a2.74 2.74 0 0 0 .933-1.956zM28.69 51.33c-10.648.016-19.928-7.186-22.47-17.438-2.542-10.252 2.312-20.9 11.753-25.781s21.025-2.733 28.047 5.203L27.183 30.815l-9.451-9.147a2.838 2.838 0 0 0-2-.822c-.75 0-1.47.296-2 .822a2.763 2.763 0 0 0-.8 1.983 2.633 2.633 0 0 0 .854 1.97l11.371 11.023a2.83 2.83 0 0 0 3.906 0l20.17-18.81a22.7 22.7 0 0 1-.715 22.51C44.31 47.205 36.786 51.374 28.69 51.33z"/></svg>
                                </figure>
                            </div>
                        </div>
                        <div class="icon icon__5">
                            <div class="icon__headline common-headline">
                                <h6>Employee Credits</h6>
                            </div>
                            <div class="icon__icon">
                                <figure>
                                    <svg width="55" height="66" xmlns="http://www.w3.org/2000/svg"><path d="M14.596 65.538a2.22 2.22 0 0 1-1.553-.643 2.279 2.279 0 0 1-.639-1.578V55.43c.018-2.977 2.176-5.501 5.094-5.96a9.865 9.865 0 0 1 5.384-6.796v-2.051a18.428 18.428 0 0 1-11.839-8.909c-.554-.412-1.204-.837-1.854-1.286C5.576 27.999 0 24.358 0 17.914V8.386a2.2 2.2 0 0 1 2.192-2.208h6.443v-3.92a2.23 2.23 0 0 1 .628-1.59A2.196 2.196 0 0 1 10.827 0h32.516c1.217 0 2.204.994 2.204 2.221v3.908h6.382c1.218 0 2.204.994 2.204 2.221v9.54c0 6.371-5.515 10.085-9.152 12.525-.675.449-1.301.874-1.867 1.286a18.404 18.404 0 0 1-11.838 8.896v2.052a9.817 9.817 0 0 1 5.395 6.808c2.919.453 5.081 2.971 5.106 5.947v7.89a2.214 2.214 0 0 1-2.107 2.244H14.596zm2.192-4.43h20.618v-5.667c0-.878-.707-1.59-1.578-1.59h-17.45a1.571 1.571 0 0 0-1.124.461 1.596 1.596 0 0 0-.466 1.129v5.668zm10.32-14.988a5.466 5.466 0 0 0-4.973 3.264h9.948a5.478 5.478 0 0 0-4.974-3.264zM13.032 4.478v18.048c0 7.836 6.303 14.188 14.078 14.188 7.775 0 14.078-6.352 14.078-14.188V4.478H13.031zm-8.635 6.069v7.282c0 2.816 1.878 4.855 4.371 6.82a17.122 17.122 0 0 1-.132-2.22V10.608l-4.24-.061zm41.199 0v11.93a19.41 19.41 0 0 1-.133 2.21c2.409-1.906 4.312-4.006 4.312-6.81v-7.282l-4.18-.048z"/></svg>
                                </figure>
                            </div>
                        </div>
                        <div class="icon icon__6">
                            <div class="icon__headline common-headline">
                                <h6>Talent Rights</h6>
                            </div>
                            <div class="icon__icon">
                                <figure>
                                    <svg width="66" height="67" xmlns="http://www.w3.org/2000/svg"><path d="M65.698 24.895a4.009 4.009 0 0 0-3.782-2.565l-18.802-.177-6.24-19.383-.08-.203A4.285 4.285 0 0 0 32.783 0c-1.685.016-3.18 1.101-3.741 2.715l-6.04 19.26L4 22.33h-.24c-1.754.243-3.186 1.542-3.622 3.284a4.107 4.107 0 0 0 1.483 4.33l15.18 12.216-5.571 19.546a4.308 4.308 0 0 0 1.723 4.561c.67.475 1.468.731 2.285.733a4.087 4.087 0 0 0 2.42-.814l15.233-11.51L48.5 66.171l.227.136a4.182 4.182 0 0 0 4.677-.312 4.204 4.204 0 0 0 1.47-4.425L49.154 42.12l15.354-12.216.214-.204a4.503 4.503 0 0 0 .976-4.805zm-20.74 14.456a2.397 2.397 0 0 0-.815 2.579l5.68 19.26-15.555-11.483a2.407 2.407 0 0 0-1.337-.461 2.341 2.341 0 0 0-1.416.475L16.36 61.177l5.492-19.26a2.452 2.452 0 0 0-.802-2.566L5.764 27.135l19.03-.326a2.41 2.41 0 0 0 2.217-1.67l5.96-18.962 6.16 19.112a2.355 2.355 0 0 0 2.286 1.656l19.029.19L44.958 39.35z"/></svg>
                                </figure>
                            </div>
                        </div>
                        <div class="icon icon__7">
                            <div class="icon__headline common-headline">
                                <h6>DAM</h6>
                            </div>
                            <div class="icon__icon">
                                <figure>
                                    <svg width="64" height="64" xmlns="http://www.w3.org/2000/svg"><path d="M58.553 52.059h-1.608V21.264h4.622c1.206 0 2.21-1.048 2.21-2.305 0-.838-.401-1.676-1.205-2.095L33.032.314c-.603-.419-1.407-.419-2.21 0l-29.54 16.55C.076 17.493-.326 18.96.277 20.007a2.199 2.199 0 0 0 2.01 1.257h4.621v30.795H5.502c-2.613 0-4.622 2.095-4.622 4.818v2.305C.88 61.905 2.89 64 5.502 64h53.252c2.612 0 4.622-2.095 4.622-4.818v-2.305c-.201-2.514-2.21-4.818-4.823-4.818zm-6.029 0h-6.832V21.264h6.832v30.795zm-18.286 0V21.264h6.832v30.795h-6.832zm-11.454 0V21.264h6.832v30.795h-6.832zm9.243-47.136l20.497 11.522H11.53L32.027 4.923zM11.53 21.263h6.833V52.06H11.53V21.264zM4.698 60.23v-4.19h54.659v4.19H4.697z"/></svg>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="steps waypoint" id="steps">
                <div class="container">
                    <div class="steps__steps" data-aos="fade-up">
                        <div class="step brief">
                            <div class="step__headline common-headline">
                                <h4>Brief Management</h4>
                                <h5>Coordinated change.</h5>
                            </div>
                            <div class="step__content common-content">
                                <ul>
                                    <li>Immediately notify project collaborators when changes are made</li>
                                    <li>Quickly reference old briefs when projects renew</li>
                                    <li>Customized to match your existing strategic brief</li>
                                </ul>
                            </div>
                        </div>
                        <div class="step wall">
                            <div class="step__headline common-headline">
                                <h4>The Wall</h4>
                                <h5>Your digital war room.</h5>
                            </div>
                            <div class="step__content common-content">
                                <ul>
                                    <li>Personalized macro view of all projects</li>
                                    <li>Real-time dashboard of project status and recently submitted work</li>
                                    <li>User-specific prompts on action items and approvals</li>
                                </ul>
                            </div>
                        </div>
                        <div class="step pages">
                            <div class="step__headline common-headline">
                                <h4>Project Pages</h4>
                                <h5>Everyone&rsquo;s project hub.</h5>
                            </div>
                            <div class="step__content common-content">
                                <ul>
                                    <li>Track briefs, presentations, comments, approvals, deliverables, credits, project statuses, collaborators, and talent rights all in one place</li>
                                    <li>Foster inter-departmental transparency</li>
                                    <li>Holographic view of the project from start to finish</li>
                                </ul>
                            </div>
                        </div>
                        <div class="step wip">
                            <div class="step__headline common-headline">
                                <h4>WIP Review</h4>
                                <h5>Create beautiful presentations.</h5>
                            </div>
                            <div class="step__content common-content">
                                <ul>
                                    <li>Agency branded presentations for approvals, comments, and final delivery</li>
                                    <li>Transcode full pro-res files on-the-fly to save time</li>
                                    <li>Preview PDF, PSD, AI, SVG, TIFF, EPS, Word, Excel, and PPT files</li>
                                </ul>
                            </div>
                        </div>
                        <div class="step credits">
                            <div class="step__headline common-headline">
                                <h4>Employee Credits</h4>
                                <h5>Assemble your dream team.</h5>
                            </div>
                            <div class="step__content common-content">
                                <ul>
                                    <li>Easily identify an individual&rsquo;s past projects, campaigns and brand expertise</li>
                                    <li>Improve employee engagement and recognize contributions</li>
                                    <li>Team members automatically generate an agency portfolio</li>
                                </ul>
                            </div>
                        </div>
                        <div class="step talent">
                            <div class="step__headline common-headline">
                                <h4>Talent Rights</h4>
                                <h5>Stay on top of music and talent rights.</h5>
                            </div>
                            <div class="step__content common-content">
                                <ul>
                                    <li>Centralized access to usage rights, invoices, and contracts</li>
                                    <li>Customizable expiration settings and contract details</li>
                                    <li>Automated expiration email reminders</li>
                                </ul>
                            </div>
                        </div>
                        <div class="step dam">
                            <div class="step__headline common-headline">
                                <h4>DAM</h4>
                                <h5>Your DAM. Automated.</h5>
                            </div>
                            <div class="step__content common-content">
                                <ul>
                                    <li>Final assets automatically publish to the Asset Library</li>
                                    <li>Auto-generated asset detail pages: final scripts, briefs, talent rights, credits, file information and more</li>
                                    <li>Powerful search engine accesses work with keywords and metadata</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="steps__control steps__control--prev" data-aos="fade-up" data-aos-delay="50"><a href="javascript:void(0);"><svg width="37" height="37" xmlns="http://www.w3.org/2000/svg"><path d="M12.9 19l4.3 4.3-.7.7-5.5-5.5 5.5-5.5.7.7-4.3 4.3H26v1H12.9zm6.6 16.972l.055.998c-.35.02-.702.03-1.055.03v-1c.335 0 .669-.01 1-.028zm3.196.55c-.343.08-.69.15-1.037.21l-.17-.986c.33-.057.657-.123.981-.198l.226.974zm3.04-.99c-.325.137-.653.266-.986.385l-.338-.941c.315-.113.626-.235.932-.365l.392.92zm2.791-1.483c-.296.192-.597.374-.903.548l-.494-.87c.29-.164.575-.337.854-.517l.543.84zm2.531-1.964a18.6 18.6 0 0 1-.796.695l-.636-.771c.257-.213.509-.432.753-.659l.68.735zm2.17-2.389c-.213.28-.434.555-.663.822l-.76-.65c.216-.253.426-.512.628-.778l.796.606zm1.664-2.611c-.164.312-.337.62-.518.921l-.858-.514c.172-.286.335-.576.49-.872l.886.465zm1.235-2.953a19.32 19.32 0 0 1-.35.998l-.934-.359c.119-.31.23-.625.331-.943l.953.304zm.705-3.133c-.047.35-.104.698-.171 1.044l-.982-.19c.063-.327.118-.656.162-.988l.991.134zm.154-3.222a18.895 18.895 0 0 1 .01 1.063l-.999-.018a17.847 17.847 0 0 0-.01-1.006l1-.039zm-.391-3.146c.073.345.137.692.19 1.041l-.988.152a17.59 17.59 0 0 0-.18-.984l.978-.209zm-.933-3.052c.132.327.254.658.367.992l-.947.32c-.107-.317-.223-.63-.348-.937l.928-.375zm-1.433-2.823c.186.3.363.604.531.914l-.878.478c-.16-.294-.327-.582-.503-.864l.85-.528zm-1.917-2.564c.235.263.462.533.681.809l-.783.622a17.594 17.594 0 0 0-.644-.765l.746-.666zm-2.346-2.211c.276.218.547.445.81.679l-.664.748a17.365 17.365 0 0 0-.766-.643l.62-.784zm-2.585-1.714c.31.17.613.348.912.535l-.53.848a17.23 17.23 0 0 0-.863-.506l.481-.877zM24.454.98c.334.114.664.237.991.37l-.376.926c-.308-.125-.62-.241-.937-.349l.322-.947zM21.336.216c.35.054.696.118 1.04.19l-.208.979c-.325-.07-.653-.13-.984-.18l.152-.989zM18.111.004a19.15 19.15 0 0 1 1.07.008l-.037 1a17.813 17.813 0 0 0-1.012-.008l-.02-1zM14.96.339c.345-.067.693-.125 1.043-.172l.134.991c-.332.045-.661.1-.987.162l-.19-.98zm-3.067.876c.33-.126.662-.242.998-.35l.303.954c-.319.101-.633.211-.944.33l-.357-.934zm-2.85 1.381c.304-.18.612-.352.925-.515l.461.887a17.68 17.68 0 0 0-.873.487l-.512-.859zM6.448 4.465c.267-.23.541-.452.82-.666l.608.794a18.71 18.71 0 0 0-.776.63l-.652-.758zM4.195 6.768a18.6 18.6 0 0 1 .694-.797l.735.677c-.226.245-.444.497-.656.755l-.773-.635zM2.432 9.326a18.5 18.5 0 0 1 .55-.903l.839.546a17.5 17.5 0 0 0-.521.853l-.868-.496zM1.09 12.228c.12-.331.249-.66.387-.984l.92.393c-.13.306-.253.616-.366.93l-.94-.339zm-.82 3.103c.06-.348.13-.694.21-1.037l.974.227c-.075.323-.141.65-.198.98l-.985-.17zM0 18.555v-.074c0-.335.01-.669.028-1.001l.998.054A17.781 17.781 0 0 0 1 18.552l-1 .003zm.278 3.155a18.48 18.48 0 0 1-.153-1.046l.994-.116c.038.333.086.663.144.99l-.985.172zm.82 3.08c-.12-.331-.231-.666-.332-1.004l.959-.286c.095.32.2.638.313.95l-.94.34zm1.357 2.926a18.458 18.458 0 0 1-.5-.931l.893-.449c.15.299.308.592.474.88l-.867.5zm1.791 2.578a18.776 18.776 0 0 1-.65-.833l.805-.593c.198.269.403.532.615.788l-.77.638zm2.261 2.293c-.268-.229-.53-.465-.784-.708l.69-.723c.242.23.489.453.743.67l-.649.76zm3.04.952l-.513.86c-.302-.182-.6-.37-.892-.568l.56-.828c.276.186.558.365.845.536zm2.365 2.253c-.33-.125-.656-.26-.977-.405l.41-.912c.303.136.61.264.923.383l-.356.934zm3.085.877a18.392 18.392 0 0 1-1.032-.23l.244-.969c.322.081.648.154.977.217l-.189.982zm3.216-.671l-.017 1a18.722 18.722 0 0 1-1.055-.047l.072-.998c.331.024.664.04 1 .045z" fill-rule="evenodd"/></svg></a></div>
                    <div class="steps__control steps__control--next" data-aos="fade-up" data-aos-delay="50"><a href="javascript:void(0);"><svg width="37" height="37" xmlns="http://www.w3.org/2000/svg"><path d="M24.1 19H11v-1h13.1l-4.3-4.3.7-.7 5.5 5.5-5.5 5.5-.7-.7 4.3-4.3zm-4.6 16.972l.055.998c-.35.02-.702.03-1.055.03v-1c.335 0 .669-.01 1-.028zm3.196.55c-.343.08-.69.15-1.037.21l-.17-.986c.33-.057.657-.123.981-.198l.226.974zm3.04-.99c-.325.137-.653.266-.986.385l-.338-.941c.315-.113.626-.235.932-.365l.392.92zm2.791-1.483c-.296.192-.597.374-.903.548l-.494-.87c.29-.164.575-.337.854-.517l.543.84zm2.531-1.964a18.6 18.6 0 0 1-.796.695l-.636-.771c.257-.213.509-.432.753-.659l.68.735zm2.17-2.389c-.213.28-.434.555-.663.822l-.76-.65c.216-.253.426-.512.628-.778l.796.606zm1.664-2.611c-.164.312-.337.62-.518.921l-.858-.514c.172-.286.335-.576.49-.872l.886.465zm1.235-2.953a19.32 19.32 0 0 1-.35.998l-.934-.359c.119-.31.23-.625.331-.943l.953.304zm.705-3.133c-.047.35-.104.698-.171 1.044l-.982-.19c.063-.327.118-.656.162-.988l.991.134zm.154-3.222a18.895 18.895 0 0 1 .01 1.063l-.999-.018a17.847 17.847 0 0 0-.01-1.006l1-.039zm-.391-3.146c.073.345.137.692.19 1.041l-.988.152a17.59 17.59 0 0 0-.18-.984l.978-.209zm-.933-3.052c.132.327.254.658.367.992l-.947.32c-.107-.317-.223-.63-.348-.937l.928-.375zm-1.433-2.823c.186.3.363.604.531.914l-.878.478c-.16-.294-.327-.582-.503-.864l.85-.528zm-1.917-2.564c.235.263.462.533.681.809l-.783.622a17.594 17.594 0 0 0-.644-.765l.746-.666zm-2.346-2.211c.276.218.547.445.81.679l-.664.748a17.365 17.365 0 0 0-.766-.643l.62-.784zm-2.585-1.714c.31.17.613.348.912.535l-.53.848a17.23 17.23 0 0 0-.863-.506l.481-.877zM24.454.98c.334.114.664.237.991.37l-.376.926c-.308-.125-.62-.241-.937-.349l.322-.947zM21.336.216c.35.054.696.118 1.04.19l-.208.979c-.325-.07-.653-.13-.984-.18l.152-.989zM18.111.004a19.15 19.15 0 0 1 1.07.008l-.037 1a17.813 17.813 0 0 0-1.012-.008l-.02-1zM14.96.339c.345-.067.693-.125 1.043-.172l.134.991c-.332.045-.661.1-.987.162l-.19-.98zm-3.067.876c.33-.126.662-.242.998-.35l.303.954c-.319.101-.633.211-.944.33l-.357-.934zm-2.85 1.381c.304-.18.612-.352.925-.515l.461.887a17.68 17.68 0 0 0-.873.487l-.512-.859zM6.448 4.465c.267-.23.541-.452.82-.666l.608.794a18.71 18.71 0 0 0-.776.63l-.652-.758zM4.195 6.768a18.6 18.6 0 0 1 .694-.797l.735.677c-.226.245-.444.497-.656.755l-.773-.635zM2.432 9.326a18.5 18.5 0 0 1 .55-.903l.839.546a17.5 17.5 0 0 0-.521.853l-.868-.496zM1.09 12.228c.12-.331.249-.66.387-.984l.92.393c-.13.306-.253.616-.366.93l-.94-.339zm-.82 3.103c.06-.348.13-.694.21-1.037l.974.227c-.075.323-.141.65-.198.98l-.985-.17zM0 18.555v-.074c0-.335.01-.669.028-1.001l.998.054A17.781 17.781 0 0 0 1 18.552l-1 .003zm.278 3.155a18.48 18.48 0 0 1-.153-1.046l.994-.116c.038.333.086.663.144.99l-.985.172zm.82 3.08c-.12-.331-.231-.666-.332-1.004l.959-.286c.095.32.2.638.313.95l-.94.34zm1.357 2.926a18.458 18.458 0 0 1-.5-.931l.893-.449c.15.299.308.592.474.88l-.867.5zm1.791 2.578a18.776 18.776 0 0 1-.65-.833l.805-.593c.198.269.403.532.615.788l-.77.638zm2.261 2.293c-.268-.229-.53-.465-.784-.708l.69-.723c.242.23.489.453.743.67l-.649.76zm3.04.952l-.513.86c-.302-.182-.6-.37-.892-.568l.56-.828c.276.186.558.365.845.536zm2.365 2.253c-.33-.125-.656-.26-.977-.405l.41-.912c.303.136.61.264.923.383l-.356.934zm3.085.877a18.392 18.392 0 0 1-1.032-.23l.244-.969c.322.081.648.154.977.217l-.189.982zm3.216-.671l-.017 1a18.722 18.722 0 0 1-1.055-.047l.072-.998c.331.024.664.04 1 .045z" fill-rule="evenodd"/></svg></a></div>
                </div>
            </div>

            <div class="testimonials waypoint" id="testimonials">
                <div class="testimonials__shape testimonials__shape--top"></div>
                <div class="testimonials__shape testimonials__shape--bottom"></div>
                <div class="testimonials__wrap">
                    <div class="container">
                        <div class="testimonials__headline common-headline common-headline--color-white">
                            <h2 data-aos="fade-up">Who&rsquo;s on Kronickle</h2>
                        </div>
                        <div class="testimonials__testimonials" data-aos="fade-up">
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
                        <div class="testimonials__controller" data-aos="fade-up">
                            <ul>
                                <li><a href="javascript:void(0);" data-key="0"><span></span></a></li>
                                <li><a href="javascript:void(0);" data-key="1"><span></span></a></li>
                                <li><a href="javascript:void(0);" data-key="2"><span></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="benefits waypoint" id="benefits">
                <div class="container">
                    <div class="benefits__body">
                        <div class="benefits__headline common-headline common-headline--color-blue">
                            <h2 data-aos="fade-up">Benefits</h2>
                        </div>
                        <div class="benefits__content common-content common-content--color-black">
                            <dl data-aos="fade-up" data-aos-delay="">
                                <dt>
                                    <h4>All-in-One Solution</h4>
                                </dt>
                                <dd>
                                    <p>Kronickle combines project management, digital asset management, and company culture-building tools into one single ecosystem. This eliminates the disconnected and time-consuming experience of daisy-chaining multiple applications.</p>
                                </dd>
                            </dl>
                            <dl data-aos="fade-up" data-aos-delay="50">
                                <dt>
                                    <h4>For Brand Builders</h4>
                                </dt>
                                <dd>
                                    <p>Designed and developed by brand builders for brand builders. Kronickle addresses the specific processes and logistical challenges agencies and brands face in creating, managing and sharing assets quickly and efficiently.</p>
                                </dd>
                            </dl>
                            <dl data-aos="fade-up" data-aos-delay="100">
                                <dt>
                                    <h4>Transparent &amp; Collaborative</h4>
                                </dt>
                                <dd>
                                    <p>From creative to account services to legal, Kronickle is designed to serve the entire agency &mdash; not just one department. Not all collaborators and key decision-makers have the same life-span on a project, so Kronickle provides up-to-date information to anyone who needs it.</p>
                                </dd>
                            </dl>
                            <dl data-aos="fade-up" data-aos-delay="150">
                                <dt>
                                    <h4>Employee Engagement</h4>
                                </dt>
                                <dd>
                                    <p>Replacing great talent is tough. Kronickle makes it easier for agencies and creative teams to transfer brand expertise when on-boarding new team members. Kronickle also allows you to recognize and celebrate employee contributions.</p>
                                </dd>
                            </dl>
                            <dl data-aos="fade-up" data-aos-delay="200">
                                <dt>
                                    <h4>Share Work Effortlessly</h4>
                                </dt>
                                <dd>
                                    <p>Kronickle is designed to retain the original quality of all videos, documents, and images. Files can be previewed, reducing the need to download them first. Kronickle transcodes on-the-fly, so there&rsquo;s no need to compress video files, allowing clients to view HD video in its full glory.</p>
                                </dd>
                            </dl>
                            <dl data-aos="fade-up" data-aos-delay="250">
                                <dt>
                                    <h4>Security in the Cloud</h4>
                                </dt>
                                <dd>
                                    <p>Kronickle is committed to protecting your data and users. Our platform is designed to protect you from threats by applying security controls at every layer of our application so that you can focus on the creative.</p>
                                </dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>

            <div class="demo waypoint" id="demo">
                <div class="demo__shape"></div>
                <div class="demo__wrap">
                    <div class="container">
                        <div class="demo__body">
                            <div class="demo__headline common-headline common-headline--color-white">
                                <h2 data-aos="fade-up" data-aos-delay="">See Kronickle in Action</h2>
                            </div>
                            <div class="demo__content common-content common-content--color-white">
                                <p data-aos="fade-up" data-aos-delay="50">Kronickle is currently only available for enterprise-level customizations. Our SaaS solution for smaller agencies and brands is coming soon!</p>
                            </div>
                            <div class="demo__link"><a href="javascript:void(0);" class="common-link common-link--color-blue js-modal-contact" data-aos="fade-up" data-aos-delay="100"><span>Request a Demo</span></a></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer waypoint" id="footer">
                <div class="container">
                    <div class="footer__body">
                        <div class="footer__content footer__content--connect" data-aos="fade-up">
                            <h6>Connect</h6>
                            <ul>
                                <li><a href="mailto:info@kronickle.com">info@kronickle.com</a></li>
                                <li><span>(310) 528-8668</span></li>
                            </ul>
                        </div>
                        <div class="footer__content footer__content--legal" data-aos="fade-up" data-aos-delay="50">
                            <ul>
                                <li><a href="javascript:void(0);" class="js-modal-privacy">Privacy Policy</a></li>
                                <li><span>&copy; 2019 Kronickle. All rights reserved.</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="footer__scroll"><a href="javascript:void(0);" data-anchor="site"><span><svg width="15" height="20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 1.9V20H7V1.9L1.2 7.7.5 7l7-7 7 7-.7.7z"/></svg></span></a></div>
                </div>
            </div>

        </div>

        <div class="nav">
            <div class="nav__demo"><a href="javascript:void(0);" class="common-link common-link--color-blue js-modal-contact"><span>Request a Demo</span></a></div>
            <div class="nav__options">
                <ul>
                    <li class="nav--intro"><a href="javascript:void(0);" data-anchor="intro">How It Works</a></li>
                    <li class="nav--testimonials"><a href="javascript:void(0);" data-anchor="testimonials">Clients</a></li>
                    <li class="nav--benefits"><a href="javascript:void(0);" data-anchor="benefits">Benefits</a></li>
                </ul>
            </div>
        </div>

        <div class="drawer">
            <ul>
                <li><a href="javascript:void(0);" class="link" data-anchor="intro">How It Works</a></li>
                <li><a href="javascript:void(0);" class="link" data-anchor="testimonials">Clients</a></li>
                <li><a href="javascript:void(0);" class="link" data-anchor="benefits">Benefits</a></li>
                <li><a href="javascript:void(0);" class="common-link common-link--color-blue js-modal-contact"><span>Request a Demo</span></a></li>
            </ul>
        </div>

        <div class="logo">
            <div class="logo__wrap">
                <a href="javascript:void(0);" data-anchor="site">
                    <div class="logo__icon"><svg width="26" height="26" xmlns="http://www.w3.org/2000/svg"><path d="M24.338 16.415l-3.331-3.403c1.555-1.582 3.331-3.398 3.331-3.398.558-.535 3.398-3.86-.762-7.778-3.761-3.54-6.782-.898-7.363-.35L12.776 4.86s-2.205-2.258-2.446-2.483C10.089 2.153 7.956 0 5.546 0 1.372 0 .009 2.641.009 5.174c0 .716.016 4.886 0 7.828-.02 3.212 0 5.784 0 5.943 0 1.366-.04 3.912 2.199 5.754A5.758 5.758 0 0 0 5.81 26a5.411 5.411 0 0 0 3.69-1.486c.516-.469 1.652-1.591 3.408-3.338l3.341 3.302c.581.548 3.606 3.19 7.366-.353 4.167-3.91 1.281-7.178.723-7.71zM8.002 22.87a3.255 3.255 0 0 1-4.358.112c-1.41-1.159-1.4-2.875-1.387-4.004 0-.179-.016-3.45 0-5.97.02-3.107 0-7.197 0-7.947 0-2.35 3.348-4.123 6.448-1.116l7.092 7.188a1.12 1.12 0 1 0 1.598-1.572l-3.034-3.093 3.414-3.374c.422-.416 2.278-1.49 4.361.465 1.981 1.862 1.01 4.08.598 4.49-.235.241-7.901 7.97-7.904 7.977a1.123 1.123 0 1 0 1.588 1.588s1.743-1.71 3.004-2.971l3.302 3.347c.412.406 1.436 2.572-.548 4.434-2.087 1.955-3.942.882-4.362.463l-4.094-4.084-5.9-5.9 2.935-2.972A1.123 1.123 0 0 0 9.171 8.34l-2.78 2.833c-.268.27-.862.703-.961 1.489a1.98 1.98 0 0 0 .64 1.677l5.283 5.282c-1.737 1.7-2.86 2.8-3.351 3.25z"/></svg></div>
                    <div class="logo__logotype"><svg width="128" height="24" xmlns="http://www.w3.org/2000/svg"><path d="M12.806 21.325a1.218 1.218 0 0 1-.878 2.047 1.106 1.106 0 0 1-.845-.363L4.48 16.406l-1.981 1.951v3.814a1.218 1.218 0 0 1-2.437 0V1.549a1.218 1.218 0 1 1 2.437 0v13.404l7.346-7.342a1.195 1.195 0 0 1 2.047.874c.005.315-.114.618-.33.846l-5.385 5.361 6.63 6.633zM24.583 7.221a1.218 1.218 0 1 1 0 2.437c-2.146 0-4.777 1.32-5.527 3.605v8.914a1.202 1.202 0 1 1-2.403 0V11.021a2.166 2.166 0 0 0-.1-.551.707.707 0 0 0-.33-.423 1.185 1.185 0 0 1-.66-1.073 1.225 1.225 0 0 1 1.235-1.202c.812 0 1.624.879 1.918 1.724a8.766 8.766 0 0 1 5.867-2.275zm2.258 8.22c0-4.483 2.863-8.22 7.541-8.22 4.55 0 7.508 3.54 7.508 8.22 0 4.683-2.971 8.255-7.508 8.255-4.615 0-7.54-3.576-7.54-8.254zm7.541 5.818c3.087 0 5.101-2.31 5.101-5.817 0-2.972-1.65-5.784-5.1-5.784-3.451 0-5.102 2.826-5.102 5.784 0 3.51 2.014 5.817 5.101 5.817zm25.545.912a1.222 1.222 0 0 1-2.44 0v-7.264c0-2.862-1.559-5.233-4.55-5.233a4.312 4.312 0 0 0-3.302 1.397c-.779.878-1.267 2.208-1.267 3.836v7.264a1.202 1.202 0 0 1-2.404 0V11.02a2.166 2.166 0 0 0-.099-.551.707.707 0 0 0-.33-.423 1.185 1.185 0 0 1-.66-1.073 1.225 1.225 0 0 1 1.234-1.202c.813 0 1.496.78 1.853 1.496a6.86 6.86 0 0 1 4.972-2.017c4.226 0 6.99 3.285 6.99 7.64l.003 7.28zm4.708-18.72a1.45 1.45 0 1 1 1.462 1.43 1.456 1.456 0 0 1-1.462-1.43zm2.667 5.556v13.164a1.222 1.222 0 1 1-2.44 0V9.007a1.222 1.222 0 1 1 2.44 0zm3.932 6.468c0-4.715 2.988-8.224 7.637-8.224a7.092 7.092 0 0 1 6.24 3.51c.097.18.153.381.162.587a1.228 1.228 0 0 1-2.275.66 4.622 4.622 0 0 0-4.226-2.337c-3.183 0-5.101 2.31-5.101 5.817 0 3.506 1.948 5.785 5.101 5.785 2.113 0 3.543-.991 4.388-2.602a1.146 1.146 0 0 1 1.073-.66 1.198 1.198 0 0 1 1.202 1.201 1.08 1.08 0 0 1-.13.552c-1.171 2.407-3.608 3.932-6.533 3.932-4.665 0-7.538-3.658-7.538-8.221zm31.002 5.85a1.218 1.218 0 0 1-.878 2.047 1.106 1.106 0 0 1-.838-.363l-6.604-6.603-1.98 1.951v3.814a1.218 1.218 0 0 1-2.437 0V1.549a1.218 1.218 0 0 1 2.436 0v13.404l7.346-7.342a1.195 1.195 0 0 1 2.047.874c.004.314-.115.617-.33.846l-5.391 5.361 6.63 6.633zm3.117-1.234V1.549a1.222 1.222 0 0 1 2.43 0v18.654a.99.99 0 0 0 .485.944 1.222 1.222 0 0 1-.66 2.242 1.502 1.502 0 0 1-.551-.132c-1.67-.763-1.704-3.166-1.704-3.166zm7.052-4.676c0-4.71 3.021-8.158 7.594-8.158s7.445 3.738 7.445 8.225a1.231 1.231 0 0 1-1.238 1.201h-11.298c.422 2.86 2.209 4.583 5.005 4.583 2.113 0 3.543-.99 4.388-2.602a1.228 1.228 0 0 1 2.311.555 1.05 1.05 0 0 1-.132.551 7.164 7.164 0 0 1-6.564 3.932c-4.652-.006-7.51-3.582-7.51-8.287zm12.513-1.135c-.36-2.83-2.242-4.622-5.005-4.622-2.83 0-4.55 1.786-5.005 4.622h10.01z"/></svg></div>
                    <div class="logo__tagline"><svg width="132" height="10" xmlns="http://www.w3.org/2000/svg"><path d="M1.438 8.058a.587.587 0 0 1-.587-.576V.94c0-.391.219-.61.621-.61h2.61c1.576 0 2.45 1.082 2.45 2.358 0 1.277-.885 2.357-2.45 2.357H2.001v2.438a.575.575 0 0 1-.563.576zm3.91-5.371c0-.805-.587-1.346-1.415-1.346H2.001v2.691h1.932c.828 0 1.415-.54 1.415-1.345zm9.414 4.485c.069.08.115.173.115.357a.553.553 0 0 1-.54.529.588.588 0 0 1-.484-.242l-1.92-2.772H10.31v2.438a.575.575 0 0 1-.563.576.587.587 0 0 1-.587-.576V.94c0-.391.219-.61.621-.61h2.61c1.461 0 2.462.944 2.462 2.358 0 1.288-.805 2.024-1.714 2.208l1.622 2.277zm-4.45-5.83v2.69h1.931c.828 0 1.426-.54 1.426-1.345 0-.805-.598-1.346-1.426-1.346h-1.932zM17.39 4.17c0-2.278 1.575-3.968 3.864-3.968 2.288 0 3.864 1.69 3.864 3.968 0 2.276-1.576 3.967-3.864 3.967-2.289 0-3.864-1.69-3.864-3.967zm6.543 0c0-1.691-1.058-2.945-2.68-2.945-1.644 0-2.679 1.254-2.679 2.945 0 1.679 1.035 2.943 2.68 2.943 1.621 0 2.68-1.264 2.68-2.943zm7.632 3.967c-2.185 0-3.933-1.61-3.933-3.967 0-2.358 1.748-3.968 3.933-3.968 1.196 0 2.047.448 2.668 1.127.092.092.138.23.138.368a.54.54 0 0 1-.54.54.522.522 0 0 1-.415-.184 2.456 2.456 0 0 0-1.851-.828c-1.553 0-2.749 1.22-2.749 2.945 0 1.713 1.196 2.943 2.749 2.943a2.5 2.5 0 0 0 1.863-.828.498.498 0 0 1 .402-.184.54.54 0 0 1 .54.541.522.522 0 0 1-.137.368c-.633.679-1.472 1.127-2.668 1.127zM37.736 8c-.402 0-.62-.219-.62-.61V.94c0-.391.218-.61.62-.61h4.072c.276 0 .517.23.517.518 0 .276-.241.494-.517.494h-3.542v2.243h3.461c.276 0 .518.219.518.494a.523.523 0 0 1-.518.518h-3.461v2.392h3.542c.276 0 .517.219.517.494a.523.523 0 0 1-.517.518h-4.071zm7.299-.748a.561.561 0 0 1-.219-.437.56.56 0 0 1 .552-.552.59.59 0 0 1 .345.116c.518.413 1.196.735 2.036.735 1.242 0 1.679-.632 1.679-1.184 0-.805-.874-1.035-1.852-1.288-1.23-.322-2.656-.678-2.656-2.243 0-1.264 1.115-2.185 2.806-2.185a3.91 3.91 0 0 1 2.369.748c.15.092.241.253.241.437a.55.55 0 0 1-.54.552.565.565 0 0 1-.322-.104c-.54-.425-1.208-.609-1.84-.609-.943 0-1.53.437-1.53 1.081 0 .69.828.908 1.783 1.15 1.253.334 2.714.725 2.714 2.358 0 1.196-.828 2.311-2.898 2.311-1.127 0-2.013-.345-2.668-.886zm8.23 0a.561.561 0 0 1-.219-.437.56.56 0 0 1 .552-.552c.126 0 .253.047.345.116.517.413 1.196.735 2.035.735 1.242 0 1.68-.632 1.68-1.184 0-.805-.875-1.035-1.852-1.288-1.23-.322-2.657-.678-2.657-2.243 0-1.264 1.116-2.185 2.806-2.185a3.91 3.91 0 0 1 2.37.748.507.507 0 0 1 .241.437.55.55 0 0 1-.54.552.565.565 0 0 1-.323-.104c-.54-.425-1.207-.609-1.84-.609-.943 0-1.529.437-1.529 1.081 0 .69.828.908 1.782 1.15 1.254.334 2.714.725 2.714 2.358 0 1.196-.828 2.311-2.898 2.311-1.127 0-2.012-.345-2.668-.886zm8.804 2.117a.277.277 0 0 1-.207.08c-.172 0-.299-.127-.299-.31 0-.092.035-.162.092-.219.276-.276.495-.61.54-.897a.623.623 0 0 1-.172.023c-.356 0-.62-.276-.62-.655 0-.391.31-.702.7-.702.426 0 .806.345.806.954 0 .667-.334 1.277-.84 1.726zM70.823 8c-.402 0-.62-.219-.62-.61V.94c0-.391.218-.61.62-.61h4.071c.276 0 .518.23.518.518 0 .276-.242.494-.518.494h-3.542v2.243h3.462c.276 0 .517.219.517.494a.523.523 0 0 1-.517.518h-3.462v2.392h3.542c.276 0 .518.219.518.494a.523.523 0 0 1-.518.518h-4.07zm10.38.058c-.425 0-.793-.277-.943-.645L77.753 1.1a.476.476 0 0 1-.057-.219.614.614 0 0 1 1.184-.218l2.323 6.083L83.538.663a.606.606 0 0 1 1.173.218c0 .081-.012.15-.046.219l-2.507 6.313c-.15.368-.518.645-.955.645zm5.585-3.887c0-2.278 1.575-3.968 3.864-3.968 2.288 0 3.864 1.69 3.864 3.968 0 2.276-1.576 3.967-3.864 3.967-2.289 0-3.864-1.69-3.864-3.967zm6.543 0c0-1.691-1.058-2.945-2.68-2.945-1.644 0-2.679 1.254-2.679 2.945 0 1.679 1.035 2.943 2.68 2.943 1.621 0 2.68-1.264 2.68-2.943zM97.973 8c-.403 0-.621-.219-.621-.61V.848c0-.31.264-.575.586-.575.311 0 .564.264.564.575v6.141h3.024c.276 0 .518.219.518.494a.523.523 0 0 1-.518.518h-3.553zm8.655.058c-.425 0-.793-.277-.943-.645L103.178 1.1a.476.476 0 0 1-.057-.219.614.614 0 0 1 1.184-.218l2.323 6.083 2.335-6.083a.606.606 0 0 1 1.173.218c0 .081-.012.15-.046.219l-2.507 6.313c-.15.368-.518.645-.955.645zM113.386 8c-.403 0-.621-.219-.621-.61V.94c0-.391.218-.61.62-.61h4.072c.276 0 .517.23.517.518 0 .276-.241.494-.517.494h-3.542v2.243h3.461c.276 0 .518.219.518.494a.523.523 0 0 1-.518.518h-3.461v2.392h3.542c.276 0 .517.219.517.494a.523.523 0 0 1-.517.518h-4.071zm8.034 0c-.403 0-.621-.219-.621-.61V.94c0-.391.218-.61.62-.61h2.117c2.392 0 3.979 1.634 3.979 3.842 0 2.219-1.587 3.829-3.98 3.829h-2.115zm.529-1.012h1.587c1.77 0 2.794-1.265 2.794-2.817 0-1.576-.989-2.83-2.794-2.83h-1.587v5.647zm7.896.414c0-.391.322-.713.713-.713.39 0 .724.322.724.713a.737.737 0 0 1-.724.724.727.727 0 0 1-.713-.724z"/></svg></div>
                </a>
            </div>
        </div>

        <div class="menu">
            <button>
                <span></span>
            </button>
        </div>

        <div class="modal"></div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
        <script src="-/js/script.js?<?php echo rand(); ?>"></script>

    </body>

</html>