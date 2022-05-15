import { defineNuxtConfig } from 'nuxt'

// https://v3.nuxtjs.org/api/configuration/nuxt.config
export default defineNuxtConfig({
  // modules: ['@nuxtjs/tailwindcss'],
  // css: ["~/assets/css/main.css"],
  srcDir: './',

  build: {
    postcss: {
      postcssOptions: {
        plugins: {
          tailwindcss: {},
          autoprefixer: {}
        },
      },
    },
  },
})



