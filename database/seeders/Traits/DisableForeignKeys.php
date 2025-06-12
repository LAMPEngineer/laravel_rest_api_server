<?php

namespace Database\Seeders\Traits;

use Illuminate\Support\Facades\DB;

trait DisableForeignKeys
{
    /**
     * Disable foreign key checks.
     *
     * @return void
     */
    protected function disableForeignKeys(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
    }

    /**
     * Enable foreign key checks.
     *
     * @return void
     */
    protected function enableForeignKeys(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}