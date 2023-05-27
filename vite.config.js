import { defineConfig, loadEnv } from 'vite'
import laravel, { refreshPaths } from 'laravel-vite-plugin';
import { homedir } from 'os'

export default defineConfig(({ command, mode }) => {
  // Load current .env-file
  const env = loadEnv(mode, process.cwd(), '')

    // Load .env.example-file
  let serverConfig = {}


  return {
    plugins: [laravel({
        input: [
            'resources/css/app.css',
            'resources/css/front.css',
            'resources/js/app.js',
        ],
        refresh: [
            ...refreshPaths,
            'app/Http/Livewire/**',
        ],
    })],
    server: serverConfig
  }
});
