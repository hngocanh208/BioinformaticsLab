/** @type {import('tailwindcss').Config} */
export default {
  darkMode: 'class',
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        primary: "#DC2626", // Red 600
        "background-light": "#FFFFFF",
        "background-dark": "#111827",
        "text-light": "#1F2937",
        "text-dark": "#F9FAFB",
      },
      fontFamily: {
        display: ["Roboto", "sans-serif"],
        sans: ["Roboto", "sans-serif"],
      },
      borderRadius: {
        DEFAULT: "0.375rem",
      },
    },
  },
  plugins: [],
}

