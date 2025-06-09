<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Property;

class ImportZooplaJson extends Command
{
    protected $signature = 'import:zoopla';
    protected $description = 'Import properties from zoopla-data.json';

    public function handle()
    {
        $path = base_path('zoopla-data.json');
        if (!file_exists($path)) {
            $this->error("File not found: zoopla-data.json");
            return;
        }

        $json = file_get_contents($path);
        $properties = json_decode($json, true);

        foreach ($properties as $data) {
            Property::updateOrCreate(
                ['property_id' => $data['propertyId']],
                [
                    'photo_url' => $data['photoUrl'],
                    'address' => $data['address'],
                    'price' => $data['price'],
                    'status' => $data['status'],
                ]
            );
        }

        $this->info('✅ Properties imported successfully.');
    }
}

