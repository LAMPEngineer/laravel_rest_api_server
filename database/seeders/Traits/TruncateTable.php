<?php
namespace Database\Seeders\Traits;

use Illuminate\Support\Facades\DB;

trait TruncateTable
{
    /**
     * Truncate the specified table.
     *
     * @param string $table
     * @return void
     */
    protected function truncate(string $table): void
    {
        DB::table($table)->truncate();
    }
    
}