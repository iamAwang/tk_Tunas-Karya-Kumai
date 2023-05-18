import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    server: {
        origin: "http://adminlte",
    },
    plugins: [
        // add css and js file
        laravel({
<<<<<<< HEAD
            // input: ['resources/css/app.css', 'resources/js/app.js'],
            input: ["resources/js/app.js"],
=======
            input: [ 'resources/js/app.js'],
>>>>>>> 5a400e22a305b35b7bdfc75b8cb6333d837ef49b
            refresh: true,
        }),
        // auto refresh blade files
        {
            name: "blade",
            handleHotUpdate({ file, server }) {
                if (file.endsWith(".blade.php")) {
                    server.ws.send({
                        type: "full-reload",
                        path: "*",
                    });
                }
            },
        },
    ],
});
