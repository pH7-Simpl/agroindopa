/** @type {import('tailwindcss').Config} */
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
            Montserrat: ["Montserrat"],
            Playfair: ["Playfair"],
            Poppins: ["Poppins"],
          },
          colors: {
            "cust-darker-green": "#2E3D2A",
            "cust-dark-green": "#43766C",
            "cust-light-green": "#B1C381",
    
            "cust-blue": "#9BB8CD",
    
            "cust-dark-brown": "#76453B",
            "cust-light-brown": "#B19470",
    
            "cust-dark-cream": "#FFF7D4",
            "cust-light-cream": "#F8FAE5",
    
            "cust-yellow": "#EEC759",
    
            "cust-grey": "#D9D9D9",
          },
          backgroundImage: {
            ...dynamicBackgroundImages,
            ...dynamicBackgroundImagesBestSelling,
            Hero1: "url('/src/assets/Hero1.png')",
            HomeBG: "url('/src/assets/HomeBG.png')",
            OurProductsBG: "url('/src/assets/OurProductsBG.png')",
            AboutPict1: "url('/src/assets/AboutSpicesPict1.jpg')",
            AboutPict2: "url('/src/assets/AboutSpicesPict2.jpg')",
            // Konjac: "url('/src/assets/Konjac.png')",
            // Kunyit: "url('/src/assets/Kunyit.jpg')",
            // Jahe: "url('/src/assets/Jahe.jpg')",
            DURIANCOFFEE: "url('/src/assets/DurianCoffee.jpg')"
          },
        },
      },

    plugins: [forms],
};
