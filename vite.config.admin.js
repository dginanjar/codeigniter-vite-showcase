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
      outDir: resolve(__dirname, 'public/admin'),
      emptyOutDir: false,
      rollupOptions: {
        input: {
          'main': resolve(__dirname, 'app/Views/admin/assets/js/main.js'),
          'datatables': resolve(__dirname, 'app/Views/admin/assets/js/datatables.js')
        }
      },
      cssCodeSplit: true,
      manifest: true
    }
  }
})