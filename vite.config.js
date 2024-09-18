import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import { globSync } from "glob";

export default defineConfig({
    plugins: [
        laravel({
            input: globSync("resources/{css,js,plugins}/**/*.{css,js}"),
            refresh: true,
        }),
    ],
});
