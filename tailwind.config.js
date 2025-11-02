import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
          colors: {
                'background-primary': '#ffffff',
                'background-alternative': '#00c6b7', // فيروزي متدرج
                'text-primary': '#000000',
                'text-alternative': '#ffffff',
                'border-primary': '#e5e7eb',
                'accent': '#5de0e6', // لون مساعد للأزرار أو التفاصيل
          
                amouri: {
          light: '#6FE7E1', // تركواز فاتح
          dark: '#0E7C7B',  // تركواز غامق
        }, 
    },

       backgroundImage: {
        'amouri-gradient': 'linear-gradient(to right, #0E7C7B, #6FE7E1)',
        'amouri-gradient-vertical': 'linear-gradient(to bottom, #0E7C7B, #6FE7E1)',
      },
            container: {
                center: true,
                padding: '1rem',
                screens: {
                    sm: '600px',
                    md: '728px',
                    lg: '984px',
                    xl: '1240px',
                },
            },
        },
  
    plugins: [],
};
