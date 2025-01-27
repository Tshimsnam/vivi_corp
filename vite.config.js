import { defineConfig } from 'vite';
import laravel, { refreshPaths } from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({

                input: [
                    'resources/sass/app.scss',
                    'resources/js/app.js',
                    'node_modules/admin-lte/plugins/jquery/jquery.js',
                    'node_modules/admin-lte/plugins/jquery/jquery.min.js',
                    'node_modules/admin-lte/plugins/sweetalert2/sweetalert2.min.js',
                    'node_modules/admin-lte/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css',
                    'node_modules/admin-lte/plugins/select2/js/select2.full.min.js',
                    'node_modules/admin-lte/plugins/bs-stepper/js/bs-stepper.min.js',
                    'node_modules/admin-lte/plugins/bs-stepper/css/bs-stepper.min.css',
                    'node_modules/admin-lte/plugins/select2/js/select2.full.min.js',
                    'node_modules/admin-lte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css',
                    'node_modules/admin-lte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css',
                    'node_modules/admin-lte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css',
                    'node_modules/admin-lte/plugins/datatables/jquery.dataTables.min.js',
                    'node_modules/admin-lte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js',
                    'node_modules/admin-lte/plugins/datatables-buttons/js/dataTables.buttons.min.js',
                    'node_modules/admin-lte/plugins/select2/css/select2.min.css',
                    'node_modules/admin-lte/dist/js/demo.js',
                    'resources/js/scripts.js',
                ],

            refresh: [
                ...refreshPaths,
                'app/Http/Livewire/**',
            ],
        }),
    ],
});
