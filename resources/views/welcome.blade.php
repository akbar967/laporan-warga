<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="theme-color" content="#2563eb">
        <title>Beranda · Suara Warga, Langkah Perubahan</title>
        <link rel="icon" href="{{ asset('favicon.svg') }}" type="image/svg+xml">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
        <script src="{{ asset('assets/tailwindcss-browser.js') }}"></script>
        <style type="text/tailwindcss">
            @theme {
                --font-sans: 'DM Sans', sans-serif;
                --font-display: 'Plus Jakarta Sans', sans-serif;
            }

            @layer base {
                button, a, input, textarea, select {
                    @apply focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-blue-600;
                }

                button:not(:disabled), select {
                    @apply cursor-pointer;
                }

                button:disabled {
                    @apply cursor-wait opacity-60;
                }
            }
        </style>
        <style>
            [x-cloak] { display: none !important; }
            .bg-glass {
                background: rgba(255, 255, 255, 0.75);
                backdrop-filter: blur(12px);
                -webkit-backdrop-filter: blur(12px);
            }
        </style>
        @livewireStyles
        <meta name="description" content="E-Report membantu warga menyampaikan pengaduan lingkungan dengan mudah dan memantau penanganannya secara transparan.">
    </head>
    <body class="min-h-screen bg-slate-50/70 font-sans text-slate-900 antialiased selection:bg-blue-600 selection:text-white relative overflow-x-hidden">
        {{-- Ambient Gradient Lighting for Eye-Pleasing Backdrop --}}
        <div class="pointer-events-none fixed inset-0 -z-10 overflow-hidden">
            <div class="absolute -top-32 left-1/2 -translate-x-1/2 h-[500px] w-[900px] rounded-full bg-gradient-to-tr from-sky-200/40 via-blue-200/30 to-indigo-100/30 blur-[120px]"></div>
            <div class="absolute top-[35%] -right-40 h-[450px] w-[550px] rounded-full bg-gradient-to-bl from-teal-100/40 via-emerald-100/30 to-transparent blur-[100px]"></div>
            <div class="absolute bottom-20 -left-40 h-[500px] w-[600px] rounded-full bg-gradient-to-tr from-blue-200/30 via-violet-100/30 to-transparent blur-[110px]"></div>
        </div>

        <header class="sticky top-0 z-40 border-b border-slate-200/70 bg-white/80 backdrop-blur-md transition-all">
            <nav class="mx-auto flex max-w-7xl flex-wrap items-center justify-between gap-4 px-6 py-4 lg:px-10" aria-label="Navigasi beranda">
                <a href="{{ route('home') }}" class="inline-flex items-center gap-2.5 font-display text-xl font-extrabold tracking-tight text-slate-900">
                    <span class="flex h-10 w-10 items-center justify-center rounded-xl bg-blue-600 text-white shadow-md shadow-blue-500/20">
                        <i data-lucide="messages-square" aria-hidden="true" class="h-6 w-6 shrink-0"></i>
                    </span>
                    <span>
                        E-Report<span class="text-blue-600">.</span>
                    </span>
                </a>
                <div class="hidden items-center gap-8 text-sm font-medium text-slate-600 md:flex">
                    <a href="#tentang" class="hover:text-blue-600 transition">Tentang E-Report</a>
                    <a href="#galeri" class="hover:text-blue-600 transition">Pengaduan Nyata</a>
                    <a href="#cara-kerja" class="hover:text-blue-600 transition">Cara Melapor</a>
                    <a href="#status" class="hover:text-blue-600 transition">Status Pengaduan</a>
                </div>
                <div class="flex items-center gap-3">
                    @auth
                        <a
                            href="{{ route(auth()->user()->dashboardRoute()) }}"
                            class="inline-flex items-center justify-center gap-2 rounded-xl px-5 py-2.5 text-sm font-bold transition bg-blue-600 text-white shadow-sm shadow-blue-500/20 hover:bg-blue-700"
                        >
                            Dashboard
                            <i data-lucide="arrow-up-right" aria-hidden="true" class="h-4 w-4 shrink-0"></i>
                        </a>
                    @else
                        <a href="{{ route('login') }}" class="px-3 py-2 text-sm font-semibold text-slate-600 hover:text-blue-600 transition">Masuk</a>
                        <a
                            href="{{ route('register') }}"
                            class="inline-flex items-center justify-center gap-2 rounded-xl px-5 py-2.5 text-sm font-bold transition bg-blue-600 text-white shadow-sm shadow-blue-500/20 hover:bg-blue-700 hover:shadow-md"
                        >
                            Daftar
                            <i data-lucide="arrow-up-right" aria-hidden="true" class="h-4 w-4 shrink-0"></i>
                        </a>
                    @endauth
                </div>
            </nav>
        </header>

        <main>
            {{-- HERO SECTION --}}
            <section class="relative overflow-hidden py-12 lg:py-20">
                <div class="mx-auto grid max-w-7xl items-center gap-12 px-6 lg:grid-cols-[1.05fr_1fr] lg:gap-16 lg:px-10">
                    <div>
                        <div class="mb-6 inline-flex items-center gap-2 rounded-full border border-blue-200/80 bg-blue-50/80 px-4 py-2 text-xs font-semibold text-blue-700 shadow-xs">
                            <span class="h-2 w-2 rounded-full bg-blue-600 animate-pulse"></span>
                            RUANG ASPIRASI &amp; PENGADUAN WARGA
                        </div>
                        <h1 class="font-display text-4xl leading-[1.17] font-extrabold tracking-tight sm:text-6xl text-slate-900">
                            Suara Warga,
                            <br>
                            Langkah
                            <span class="bg-gradient-to-r from-blue-600 via-indigo-600 to-blue-700 bg-clip-text text-transparent">Perubahan.</span>
                        </h1>
                        <p class="mt-6 max-w-lg text-base leading-8 text-slate-600">
                            Laporkan permasalahan infrastruktur dan kenyamanan di lingkungan sekitar dengan mudah, cepat, dan transparan melalui E-Report.
                        </p>
                        <div class="mt-8 flex flex-wrap gap-3">
                            <a
                                href="{{ auth()->check() ? route(auth()->user()->dashboardRoute()) : route('register') }}"
                                class="inline-flex items-center justify-center gap-2 rounded-xl px-6 py-3.5 text-sm font-bold transition bg-blue-600 text-white shadow-md shadow-blue-500/25 hover:bg-blue-700 hover:shadow-lg"
                            >
                                Mulai Buat Pengaduan
                                <i data-lucide="arrow-right" aria-hidden="true" class="h-4 w-4 shrink-0"></i>
                            </a>
                            <a
                                href="#cara-kerja"
                                class="inline-flex items-center justify-center gap-2 rounded-xl px-5 py-3.5 text-sm font-bold transition border border-slate-200 bg-white/90 text-slate-700 hover:bg-white shadow-xs hover:shadow-sm"
                            >Pelajari Cara Kerjanya</a>
                        </div>
                        <div class="mt-8 flex items-center gap-2 text-xs text-slate-500">
                            <i data-lucide="shield-check" aria-hidden="true" class="h-4 w-4 shrink-0 text-emerald-600"></i>
                            Akses pengaduan terenkripsi &amp; hanya dapat diakses Anda dan pengelola RT/RW.
                        </div>
                    </div>

                    {{-- HERO INTERACTIVE CARD DENGAN FOTO NYATA --}}
                    <div class="relative mx-auto w-full max-w-lg pb-7 lg:pl-5" aria-label="Ilustrasi alur pengaduan">
                        <div class="absolute inset-5 rounded-[32px] bg-gradient-to-tr from-blue-200/50 via-sky-100/60 to-indigo-100/50 blur-lg"></div>
                        <div class="relative overflow-hidden rounded-3xl border border-slate-200/80 bg-white/90 shadow-xl shadow-slate-900/5 backdrop-blur-md">
                            <div class="flex items-center justify-between border-b border-slate-100 px-6 py-4">
                                <div class="flex items-center gap-2.5 text-sm font-bold text-slate-800">
                                    <span class="flex h-8 w-8 items-center justify-center rounded-lg bg-blue-600 text-white shadow-xs">
                                        <i data-lucide="messages-square" aria-hidden="true" class="h-4 w-4 shrink-0"></i>
                                    </span>
                                    Pengaduan Lingkungan Warga
                                </div>
                                <span class="rounded-full bg-emerald-50 px-2.5 py-1 text-[11px] font-bold text-emerald-700 border border-emerald-100">
                                    ● REAL-TIME
                                </span>
                            </div>
                            <div class="p-6">
                                {{-- FOTO BUKTI PENGADUAN NYATA --}}
                                <div class="relative mb-5 flex h-52 items-center justify-center overflow-hidden rounded-2xl group shadow-inner bg-slate-100">
                                    <img
                                        src="{{ asset('assets/images/hero-report.jpg') }}"
                                        alt="Foto Bukti Fasilitas Lingkungan"
                                        class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-105"
                                    >
                                    <div class="absolute inset-0 bg-gradient-to-t from-slate-950/80 via-slate-900/30 to-transparent"></div>
                                    <div class="absolute bottom-3 left-3 right-3 flex items-center justify-between text-white">
                                        <span class="inline-flex items-center gap-1.5 rounded-full bg-slate-900/80 px-3 py-1 text-[11px] font-medium backdrop-blur-md border border-white/10">
                                            <i data-lucide="map-pin" class="h-3 w-3 text-blue-400"></i> Jl. Mawar RT 04 / RW 02
                                        </span>
                                        <span class="inline-flex items-center gap-1 rounded-full bg-blue-600/90 px-2.5 py-1 text-[11px] font-semibold backdrop-blur-md shadow-xs">
                                            <i data-lucide="image" class="h-3 w-3"></i> Foto Bukti
                                        </span>
                                    </div>
                                </div>
                                <div class="flex items-center justify-between">
                                    <p class="text-[10px] font-bold tracking-widest text-blue-600 uppercase">Contoh Laporan Warga</p>
                                    <span class="text-[11px] text-slate-400">Hari ini</span>
                                </div>
                                <h2 class="mt-1 font-display text-lg font-bold text-slate-800">Lampu jalan padam di persimpangan</h2>
                                <p class="mt-1.5 text-xs leading-6 text-slate-500">Lampu penerangan padam sejak 2 malam lalu, menyebabkan area persimpangan gelap gulita.</p>
                                
                                <div class="mt-5 space-y-3 border-t border-slate-100 pt-5">
                                    @foreach([
                                        ['circle-check','Pengaduan Diterima','Sistem mencatat laporan dan meneruskan ke pengelola','text-emerald-600 bg-emerald-50'],
                                        ['loader-circle','Sedang Ditangani','Tim teknis RT/RW sedang melakukan pengecekan','text-blue-600 bg-blue-50'],
                                        ['check-check','Selesai &amp; Lingkungan Aman','Fasilitas telah diperbaiki dan diverifikasi warga','text-slate-500 bg-slate-100']
                                    ] as [$icon,$title,$desc,$color])
                                        <div class="flex items-center gap-3">
                                            <span class="flex h-9 w-9 shrink-0 items-center justify-center rounded-xl {{ $color }}">
                                                <i data-lucide="{{ $icon }}" aria-hidden="true" class="h-4 w-4 shrink-0"></i>
                                            </span>
                                            <div>
                                                <p class="text-xs font-bold text-slate-800">{{ $title }}</p>
                                                <p class="text-[11px] text-slate-400">{{ $desc }}</p>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="absolute -bottom-2 right-2 flex items-center gap-3 rounded-2xl border border-emerald-100 bg-white/95 px-5 py-3.5 shadow-lg shadow-slate-900/5 backdrop-blur-sm sm:-right-4">
                            <span class="rounded-xl bg-emerald-50 p-2 text-emerald-600">
                                <i data-lucide="heart-handshake" aria-hidden="true" class="h-5 w-5 shrink-0"></i>
                            </span>
                            <div>
                                <p class="text-xs font-bold text-slate-800">100% Tanggap Warga</p>
                                <p class="text-[10px] text-slate-400">Laporan ditindaklanjuti secara transparan</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            {{-- GALERI FOTO PENGADUAN NYATA --}}
            <section id="galeri" class="mx-auto max-w-7xl px-6 py-16 lg:px-10">
                <div class="mb-12 text-center">
                    <p class="text-xs font-bold tracking-widest text-blue-600 uppercase">Dokumentasi Lingkungan</p>
                    <h2 class="mt-3 font-display text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl">
                        Pengaduan Nyata, Hasil Nyata
                    </h2>
                    <p class="mt-3 max-w-xl mx-auto text-sm text-slate-500">
                        Lihat bagaimana laporan foto dari warga membantu pengelola menangani masalah lingkungan secara cepat dan tepat sasaran.
                    </p>
                </div>

                <div class="grid gap-6 md:grid-cols-3">
                    {{-- Card 1 --}}
                    <div class="group overflow-hidden rounded-3xl border border-slate-200/80 bg-white shadow-xs hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                        <div class="relative h-48 overflow-hidden bg-slate-100">
                            <img src="{{ asset('storage/laporan/lampu-jalan.jpg') }}" alt="Penerangan Jalan" class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-105">
                            <span class="absolute top-3 left-3 inline-flex items-center gap-1.5 rounded-full bg-amber-50/95 border border-amber-200 px-3 py-1 text-xs font-bold text-amber-700 backdrop-blur-sm">
                                <span class="h-1.5 w-1.5 rounded-full bg-amber-500"></span> Menunggu Peninjauan
                            </span>
                        </div>
                        <div class="p-6">
                            <p class="text-xs text-slate-400 font-medium">Infrastruktur Lingkungan</p>
                            <h3 class="mt-1 font-display text-base font-bold text-slate-900">Lampu Jalan Padam di RT 04</h3>
                            <p class="mt-2 text-xs leading-relaxed text-slate-500">Penerangan utama padam sejak 3 hari lalu. Perlu penggantian bohlam dan kabel panel.</p>
                        </div>
                    </div>

                    {{-- Card 2 --}}
                    <div class="group overflow-hidden rounded-3xl border border-slate-200/80 bg-white shadow-xs hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                        <div class="relative h-48 overflow-hidden bg-slate-100">
                            <img src="{{ asset('storage/laporan/jalan-berlubang.jpg') }}" alt="Aspal Berlubang" class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-105">
                            <span class="absolute top-3 left-3 inline-flex items-center gap-1.5 rounded-full bg-blue-50/95 border border-blue-200 px-3 py-1 text-xs font-bold text-blue-700 backdrop-blur-sm">
                                <span class="h-1.5 w-1.5 rounded-full bg-blue-500"></span> Sedang Diproses
                            </span>
                        </div>
                        <div class="p-6">
                            <p class="text-xs text-slate-400 font-medium">Jalan &amp; Saluran Air</p>
                            <h3 class="mt-1 font-display text-base font-bold text-slate-900">Aspal Berlubang &amp; Saluran Air</h3>
                            <p class="mt-2 text-xs leading-relaxed text-slate-500">Lubang jalan membahayakan pengendara motor saat hujan karena tertutup genangan air.</p>
                        </div>
                    </div>

                    {{-- Card 3 --}}
                    <div class="group overflow-hidden rounded-3xl border border-slate-200/80 bg-white shadow-xs hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                        <div class="relative h-48 overflow-hidden bg-slate-100">
                            <img src="{{ asset('storage/laporan/taman-rusak.jpg') }}" alt="Taman Bermain" class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-105">
                            <span class="absolute top-3 left-3 inline-flex items-center gap-1.5 rounded-full bg-emerald-50/95 border border-emerald-200 px-3 py-1 text-xs font-bold text-emerald-700 backdrop-blur-sm">
                                <span class="h-1.5 w-1.5 rounded-full bg-emerald-500"></span> Selesai Ditangani
                            </span>
                        </div>
                        <div class="p-6">
                            <p class="text-xs text-slate-400 font-medium">Fasilitas Umum</p>
                            <h3 class="mt-1 font-display text-base font-bold text-slate-900">Fasilitas Bermain di Taman RW 02</h3>
                            <p class="mt-2 text-xs leading-relaxed text-slate-500">Ayunan dan bangku taman yang patah kini telah diperbaiki dan dapat digunakan kembali dengan aman.</p>
                        </div>
                    </div>
                </div>
            </section>

            {{-- TENTANG E-REPORT --}}
            <section id="tentang" class="mx-auto max-w-7xl px-6 py-16 lg:px-10">
                <div class="grid gap-8 lg:grid-cols-2 items-center">
                    <div>
                        <p class="text-xs font-bold tracking-widest text-blue-600 uppercase">Tentang E-Report</p>
                        <h2 class="mt-3 max-w-lg font-display text-3xl leading-snug font-bold tracking-tight text-slate-900 sm:text-4xl">
                            Lingkungan yang lebih baik,
                            <br>
                            dimulai dari kepedulian kita.
                        </h2>
                    </div>
                    <p class="max-w-xl text-base leading-8 text-slate-600">
                        E-Report menjadi jembatan terpercaya antara warga dan pengelola untuk menangani permasalahan publik. Dari jalan rusak, lampu jalan mati, hingga kebersihan lingkungan, setiap aspirasi dapat disampaikan dan dipantau secara transparan.
                    </p>
                </div>
                <div class="mt-12 grid gap-6 md:grid-cols-3">
                    @foreach([
                        ['send','Mudah Disampaikan','Buat pengaduan dalam beberapa langkah mudah. Sertakan tanggal dan foto bukti agar masalah segera dipahami pengelola.'],
                        ['scan-eye','Transparan Dipantau','Ikuti status penanganan pengaduan Anda, mulai dari menunggu peninjauan, proses penanganan, sampai selesai.'],
                        ['handshake','Berdampak Bersama','Bantu pengurus RT/RW mengenali titik masalah dan membangun lingkungan hunian yang lebih aman, rapi, dan nyaman.']
                    ] as [$icon,$title,$desc])
                        <div class="rounded-3xl border border-slate-200/80 bg-white/80 p-8 shadow-xs hover:shadow-lg hover:border-blue-200 transition-all duration-300">
                            <span class="mb-5 inline-flex rounded-2xl bg-blue-50 p-3.5 text-blue-600 shadow-xs">
                                <i data-lucide="{{ $icon }}" aria-hidden="true" class="h-6 w-6 shrink-0"></i>
                            </span>
                            <h3 class="font-display text-lg font-bold text-slate-900">{{ $title }}</h3>
                            <p class="mt-3 text-sm leading-7 text-slate-500">{{ $desc }}</p>
                        </div>
                    @endforeach
                </div>
            </section>

            {{-- CARA KERJA --}}
            <section id="cara-kerja" class="relative overflow-hidden bg-gradient-to-b from-slate-100/60 to-white px-6 py-20">
                <div class="mx-auto max-w-6xl">
                    <div class="text-center">
                        <p class="text-xs font-bold tracking-widest text-blue-600 uppercase">Cara Melapor</p>
                        <h2 class="mt-3 font-display text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl">Sampaikan dalam Tiga Langkah</h2>
                        <p class="mt-3 text-sm text-slate-500">Proses sederhana, berdampak nyata bagi lingkungan Anda.</p>
                    </div>
                    <div class="mt-14 grid gap-10 md:grid-cols-3">
                        @foreach([
                            ['Buat Akun Warga','Daftarkan diri menggunakan email dan lengkapi kontak WhatsApp untuk notifikasi tindak lanjut.'],
                            ['Sampaikan Pengaduan','Tuliskan judul masalah, tanggal kejadian, deskripsi lengkap, serta lampirkan foto bukti.'],
                            ['Pantau Tindak Lanjut','Buka dashboard warga Anda kapan saja untuk memantau status penanganan secara berkala.']
                        ] as [$title,$desc])
                            <div class="text-center relative">
                                <span class="mx-auto flex h-14 w-14 items-center justify-center rounded-2xl border-2 border-blue-200 bg-white font-display text-lg font-bold text-blue-600 shadow-sm">
                                    0{{ $loop->iteration }}
                                </span>
                                <h3 class="mt-6 font-display font-bold text-slate-900 text-lg">{{ $title }}</h3>
                                <p class="mx-auto mt-3 max-w-xs text-sm leading-7 text-slate-500">{{ $desc }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>

            {{-- STATUS PENGADUAN --}}
            <section id="status" class="mx-auto max-w-7xl px-6 py-20 lg:px-10">
                <div class="text-center">
                    <p class="text-xs font-bold tracking-widest text-blue-600 uppercase">Status Pengaduan</p>
                    <h2 class="mt-3 font-display text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl">Jelas &amp; Terbuka di Setiap Tahap</h2>
                    <p class="mt-3 text-sm text-slate-500">Setiap proses penanganan dapat dilihat dengan jelas oleh pelapor dan pengelola.</p>
                </div>
                <div class="mt-12 grid gap-6 md:grid-cols-3">
                    @foreach(['pending' => 'Pengaduan baru masuk dan menunggu peninjauan oleh administrator RT/RW.', 'proses' => 'Laporan telah diverifikasi dan tim lapangan sedang menindaklanjuti perbaikan.', 'selesai' => 'Permasalahan telah selesai ditangani dan diverifikasi dengan baik.'] as $status => $desc)
                        <div class="rounded-3xl border border-slate-200/80 bg-white/80 p-8 shadow-xs hover:shadow-lg transition-all">
                            <span @class([
                                'inline-flex items-center gap-1.5 whitespace-nowrap rounded-full px-3.5 py-1.5 text-xs font-bold',
                                'bg-amber-50 text-amber-800 ring-1 ring-inset ring-amber-200' => $status === 'pending',
                                'bg-blue-50 text-blue-700 ring-1 ring-inset ring-blue-200' => $status === 'proses',
                                'bg-emerald-50 text-emerald-700 ring-1 ring-inset ring-emerald-200' => $status === 'selesai',
                            ])>
                                <span class="h-2 w-2 rounded-full bg-current"></span>
                                {{ \App\Models\Laporan::STATUSES[$status] ?? $status }}
                            </span>
                            <p class="mt-5 text-sm leading-7 text-slate-600">{{ $desc }}</p>
                        </div>
                    @endforeach
                </div>

                {{-- BANNER CTA --}}
                <div class="mt-20 relative overflow-hidden flex flex-col items-start justify-between gap-7 rounded-3xl bg-gradient-to-r from-blue-950 via-slate-900 to-blue-950 p-8 text-white sm:p-12 md:flex-row md:items-center shadow-xl shadow-blue-950/10">
                    <div class="relative z-10">
                        <h2 class="font-display text-2xl font-bold sm:text-3xl">Punya Kepedulian? Sampaikan Sekarang.</h2>
                        <p class="mt-3 max-w-xl text-sm leading-7 text-blue-200">Setiap laporan adalah langkah kecil untuk lingkungan yang lebih aman dan nyaman bersama.</p>
                    </div>
                    <a
                        href="{{ auth()->check() ? route(auth()->user()->dashboardRoute()) : route('register') }}"
                        class="relative z-10 inline-flex items-center justify-center gap-2 rounded-xl px-6 py-3.5 text-sm font-bold transition bg-white text-blue-950 hover:bg-blue-50 shrink-0 shadow-md"
                    >
                        Mulai Sekarang
                        <i data-lucide="arrow-right" aria-hidden="true" class="h-4 w-4 shrink-0"></i>
                    </a>
                    <div class="pointer-events-none absolute -right-20 -bottom-20 h-72 w-72 rounded-full bg-blue-600/20 blur-3xl"></div>
                </div>
            </section>
        </main>

        <footer class="border-t border-slate-200/70 bg-white/50 backdrop-blur-sm">
            <div class="mx-auto flex max-w-7xl flex-wrap items-center justify-between gap-6 px-6 py-8 lg:px-10">
                <a href="{{ route('home') }}" class="inline-flex items-center gap-2.5 font-display text-xl font-extrabold tracking-tight text-slate-900">
                    <span class="flex h-10 w-10 items-center justify-center rounded-xl bg-blue-600 text-white shadow-xs">
                        <i data-lucide="messages-square" aria-hidden="true" class="h-6 w-6 shrink-0"></i>
                    </span>
                    <span>
                        E-Report<span class="text-blue-600">.</span>
                    </span>
                </a>
                <p class="text-xs text-slate-400">© {{ date('Y') }} E-Report. Suara Warga, Langkah Perubahan.</p>
                <div class="flex items-center gap-6 text-xs text-slate-500 font-medium">
                    <a href="#tentang" class="hover:text-blue-600 transition">Tentang Kami</a>
                    <a href="#cara-kerja" class="hover:text-blue-600 transition">Panduan Melapor</a>
                    <a href="#status" class="hover:text-blue-600 transition">Status</a>
                </div>
            </div>
        </footer>

        @livewireScripts
        <script src="{{ asset('assets/lucide.min.js') }}"></script>
        <script>
            if (!window.lucide) {
                var s = document.createElement('script');
                s.src = "https://unpkg.com/lucide@0.468.0/dist/umd/lucide.min.js";
                document.head.appendChild(s);
            }
            function renderIcons() {
                if (window.lucide) {
                    window.lucide.createIcons();
                }
            }

            renderIcons();
            document.addEventListener('livewire:navigated', renderIcons);
            document.addEventListener('livewire:init', () => {
                Livewire.hook('morphed', renderIcons);
            });
        </script>
    </body>
</html>
