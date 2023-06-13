import { resolve } from 'path'
import { defineConfig, loadEnv } from 'vite'

export default defineConfig(({ mode }) => {
  const env = loadEnv(mode, process.cwd(), '')

  return {
    css: { devSourcemap: true },
    server: {
      host: '0.0.0.0'
    },
    build: {
      outDir: resolve(__dirname, 'public'),
      emptyOutDir: false,
      rollupOptions: {
        input: resolve(__dirname, 'app/Views/assets/js/main.js')
      },
      cssCodeSplit: true,
      manifest: true
    }
  }
})