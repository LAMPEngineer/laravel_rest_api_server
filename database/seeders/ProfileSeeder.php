<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Profile;
use Database\Seeders\Traits\{DisableForeignKeys,TruncateTable};

class ProfileSeeder extends Seeder
{
    use TruncateTable, DisableForeignKeys;
    
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->disableForeignKeys();
        $this->truncate(table: 'profiles');
        Profile::factory(3)->create();
        $this->enableForeignKeys();
    }
}
