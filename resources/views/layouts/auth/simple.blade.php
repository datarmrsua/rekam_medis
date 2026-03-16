<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">

<head>
    @include('partials.head')

    <style>
        /* =========================
           UNAIR LOADING SCREEN
        ==========================*/
        #unair-loader {
            position: fixed;
            inset: 0;
            z-index: 9999;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #0a1f44, #002b7f);
            color: white;
            transition: opacity .6s ease, visibility .6s ease;
        }

        #unair-loader.hidden {
            opacity: 0;
            visibility: hidden;
        }

        .loader-content {
            text-align: center;
        }

        .logo-wrapper {
            position: relative;
            width: 120px;
            height: 120px;
            margin: auto;
        }

        .logo-unair {
            width: 80px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            animation: logoPulse 2.5s infinite ease-in-out;
        }

        /* ring emas */
        .ring {
            position: absolute;
            width: 120px;
            height: 120px;
            border-radius: 50%;
            border: 3px solid rgba(255, 215, 0, .25);
            border-top: 3px solid gold;
            animation: spin 1.4s linear infinite;
        }

        .loader-text {
            margin-top: 30px;
            font-size: 22px;
            font-weight: 700;
            letter-spacing: 1px;
            animation: fadeUp 1.5s ease;
        }

        .loader-sub {
            font-size: 13px;
            opacity: .8;
            margin-top: 6px;
        }

        @keyframes spin {
            to {
                transform: rotate(360deg)
            }
        }

        @keyframes logoPulse {

            0%,
            100% {
                transform: translate(-50%, -50%) scale(1)
            }

            50% {
                transform: translate(-50%, -50%) scale(1.08)
            }
        }

        @keyframes fadeUp {
            from {
                opacity: 0;
                transform: translateY(10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* =========================
           BACKGROUND EFFECT
        ==========================*/
        .bg-orb {
            position: absolute;
            border-radius: 9999px;
            filter: blur(120px);
            animation: float 14s infinite alternate ease-in-out;
        }

        @keyframes float {
            from {
                transform: translateY(0) translateX(0)
            }

            to {
                transform: translateY(-60px) translateX(40px)
            }
        }

        /* =========================
           GLASS CARD
        ==========================*/
        .glass-card {
            background: rgba(255, 255, 255, .95);
            backdrop-filter: blur(14px);
        }

        .dark .glass-card {
            background: rgba(15, 23, 42, .75);
        }

        .glow-border {
            box-shadow:
                0 0 0 1px rgba(255, 255, 255, .05),
                0 25px 60px rgba(37, 99, 235, .25);
        }

        /* =========================
           PAGE FADE
        ==========================*/
        .page-enter {
            animation: fadePage .8s ease;
        }

        @keyframes fadePage {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* =========================
           LOGO PULSE
        ==========================*/
        .logo-pulse {
            animation: logoFloat 3s infinite ease-in-out;
        }

        @keyframes logoFloat {

            0%,
            100% {
                transform: scale(1)
            }

            50% {
                transform: scale(1.05)
            }
        }
    </style>
</head>

<body class="min-h-screen antialiased bg-slate-50 dark:bg-neutral-950">

    <!-- =========================
     UNAIR LOADING SCREEN
==========================-->
    <div id="unair-loader">
        <div class="loader-content">

            <div class="logo-wrapper">
                <img src="{{ asset('assets/img/unair.png') }}" class="logo-unair">
                <div class="ring"></div>
            </div>

            <h2 class="loader-text">Universitas Airlangga</h2>
            <p class="loader-sub">Sistem Informasi Rekam Medis</p>

        </div>
    </div>

    <!-- =========================
     BACKGROUND ORBS
==========================-->
    <div class="fixed inset-0 -z-10 overflow-hidden">

        <div class="bg-orb -top-20 -left-10 h-[420px] w-[420px] bg-blue-600/20"></div>

        <div class="bg-orb bottom-0 right-0 h-[360px] w-[360px] bg-cyan-400/20"></div>

        <div class="bg-orb top-[40%] left-[50%] h-[300px] w-[300px] bg-indigo-500/10"></div>

    </div>

    <!-- =========================
     PAGE CONTENT
==========================-->
    <div class="flex min-h-screen flex-col items-center justify-center p-6 md:p-10 page-enter">

        <div class="w-full max-w-[440px]">

            <!-- HEADER -->
            <div class="mb-10 flex flex-col items-center">

                <div class="relative mb-4">

                    <div class="absolute inset-0 scale-150 bg-blue-500/20 blur-3xl rounded-full"></div>

                    <div class="relative logo-pulse flex h-20 w-20 items-center justify-center rounded-2xl bg-white p-2 shadow-2xl ring-4 ring-blue-500/10 dark:bg-neutral-800">

                        <img src="{{ asset('assets/img/unair.png') }}" alt="Logo UNAIR" class="h-full w-auto object-contain">

                    </div>

                </div>

                <div class="text-center">

                    <h1 class="text-2xl font-black tracking-tight text-slate-900 dark:text-white uppercase">
                        SIM <span class="text-blue-600 dark:text-blue-400">Rekam Medis</span>
                    </h1>

                    <p class="mt-1 text-sm font-medium text-slate-500 dark:text-neutral-400">
                        RS Universitas Airlangga Surabaya
                    </p>

                </div>

            </div>

            <!-- LOGIN CARD -->
            <div class="glass-card glow-border overflow-hidden rounded-3xl border border-white/20 dark:border-neutral-800">

                <div class="h-2 w-full bg-gradient-to-r from-blue-600 via-cyan-500 to-blue-700"></div>

                <div class="p-8 md:p-12">

                    <div class="space-y-6">
                        {{ $slot }}
                    </div>

                </div>

            </div>

            <!-- FOOTER -->
            <div class="mt-10 text-center">

                <p class="text-xs font-semibold tracking-widest text-slate-400 uppercase dark:text-neutral-600">
                    SIM Internal Rekam Medis
                </p>

                <div class="mt-4 flex justify-center gap-6">

                    <a href="#" class="text-sm font-medium text-blue-600 hover:underline dark:text-blue-400">
                        Pusat Bantuan
                    </a>

                    <a href="#" class="text-sm font-medium text-slate-400 hover:text-slate-600 dark:hover:text-neutral-300">
                        v1.0.0
                    </a>

                </div>

            </div>

        </div>
    </div>

    @fluxScripts

    <!-- =========================
     LOADER SCRIPT
==========================-->
    <script>
        window.addEventListener("load", function() {
            setTimeout(() => {
                document.getElementById("unair-loader").classList.add("hidden")
            }, 1200)
        })
    </script>

</body>

</html>