// vite.config.js
import { resolve } from 'path'
import { defineConfig } from 'vite'
import { ViteMinifyPlugin } from 'vite-plugin-minify'

export default defineConfig({
    build: {
        rollupOptions: {
            input: {
                file1: resolve(__dirname, 'index.html'),
            }
        }
    },
    plugins: [
        ViteMinifyPlugin({}),
    ]
})
