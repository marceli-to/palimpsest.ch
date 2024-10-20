import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import { resolve } from 'path';
import path from 'path';
export default defineConfig({
  resolve: {
    alias: {
      img: resolve('resources/img'),
      fonts: resolve('resources/css/fonts'),
    }
  },
  build: {
    rollupOptions: {
      output: {
        entryFileNames: `assets/[name].[hash].js`,
        chunkFileNames: `assets/[name].[hash].js`,
        assetFileNames: (assetInfo) => {
          const extType = path.extname(assetInfo.name);
          if (extType === '.woff' || extType === '.woff2') {
            // For font files, use the original name without hash
            return `assets/[name][extname]`;
          }
          // For all other assets, use the default naming strategy
          return `assets/[name].[hash][extname]`;
        },
      },
    },
  },
  plugins: [
    laravel({
      input: [
        'resources/css/app.css',
        'resources/css/map.css',
        'resources/js/app.js',
        'resources/js/place.js',
      ],
      refresh: true,
    }),
  ],
});