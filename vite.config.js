import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/css/app.scss",
                "resources/js/app.js",

                "resources/css/login.scss",
            ],
            refresh: true,
        }),
    ],
});
