import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                // Tetap simpan Figtree buat dashboard, tapi bisa tambah font lain kalau mau
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                // Tambahkan palet warna sesuai desain Sanggar Mulya Bhakti
                'sanggar-orange': '#C65D2E', // Warna utama (tombol & aksen)
                'sanggar-cream': '#F9F1E9',  // Warna background badge/section
                'sanggar-dark': '#2D2D2D',   // Warna teks atau footer
            },
            borderRadius: {
                // Opsional: kalau mau bikin lengkungan custom sesuai desain
                '4xl': '2rem',
            }
        },
    },

    plugins: [forms],
};