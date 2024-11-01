module.exports = {
  content: [
    "./**/*.php", // Include your PHP files
    "./assets/js/**/*.js", // Include any JavaScript files if needed
  ],
  theme: {
    extend: {},
  },
  plugins: [require("@tailwindcss/typography")], // Ensure this is an array, even if empty
};
