<?php

namespace Database\Seeders;

use App\Models\Country;
use App\Models\User;
use Illuminate\Support\Facades\DB;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        
        $countries = [
            ['code' => 'AFG', 'name' => 'Afghanistan'],
            ['code' => 'ALB', 'name' => 'Albania'],
            ['code' => 'DZA', 'name' => 'Algeria'],
            ['code' => 'AND', 'name' => 'Andorra'],
            ['code' => 'AGO', 'name' => 'Angola'],
            ['code' => 'ATG', 'name' => 'Antigua and Barbuda'],
            ['code' => 'ARG', 'name' => 'Argentina'],
            ['code' => 'ARM', 'name' => 'Armenia'],
            ['code' => 'AUS', 'name' => 'Australia'],
            ['code' => 'AUT', 'name' => 'Austria'],
            ['code' => 'AZE', 'name' => 'Azerbaijan'],
            ['code' => 'BHS', 'name' => 'Bahamas'],
            ['code' => 'BHR', 'name' => 'Bahrain'],
            ['code' => 'BGD', 'name' => 'Bangladesh'],
            ['code' => 'BRB', 'name' => 'Barbados'],
            ['code' => 'BLR', 'name' => 'Belarus'],
            ['code' => 'BEL', 'name' => 'Belgium'],
            ['code' => 'BLZ', 'name' => 'Belize'],
            ['code' => 'BEN', 'name' => 'Benin'],
            ['code' => 'BTN', 'name' => 'Bhutan'],
            ['code' => 'BOL', 'name' => 'Bolivia'],
            ['code' => 'BIH', 'name' => 'Bosnia and Herzegovina'],
            ['code' => 'BWA', 'name' => 'Botswana'],
            ['code' => 'BRA', 'name' => 'Brazil'],
            ['code' => 'BRN', 'name' => 'Brunei'],
            ['code' => 'BGR', 'name' => 'Bulgaria'],
            ['code' => 'BFA', 'name' => 'Burkina Faso'],
            ['code' => 'BDI', 'name' => 'Burundi'],
            ['code' => 'CPV', 'name' => 'Cabo Verde'],
            ['code' => 'KHM', 'name' => 'Cambodia'],
            ['code' => 'CMR', 'name' => 'Cameroon'],
            ['code' => 'CAN', 'name' => 'Canada'],
            ['code' => 'CAF', 'name' => 'Central African Republic'],
            ['code' => 'TCD', 'name' => 'Chad'],
            ['code' => 'CHL', 'name' => 'Chile'],
            ['code' => 'CHN', 'name' => 'China'],
            ['code' => 'COL', 'name' => 'Colombia'],
            ['code' => 'COM', 'name' => 'Comoros'],
            ['code' => 'COD', 'name' => 'Democratic Republic of the Congo'],
            ['code' => 'COG', 'name' => 'Republic of the Congo'],
            ['code' => 'CRI', 'name' => 'Costa Rica'],
            ['code' => 'HRV', 'name' => 'Croatia'],
            ['code' => 'CUB', 'name' => 'Cuba'],
            ['code' => 'CYP', 'name' => 'Cyprus'],
            ['code' => 'CZE', 'name' => 'Czechia'],
            ['code' => 'DNK', 'name' => 'Denmark'],
            ['code' => 'DJI', 'name' => 'Djibouti'],
            ['code' => 'DMA', 'name' => 'Dominica'],
            ['code' => 'DOM', 'name' => 'Dominican Republic'],
            ['code' => 'ECU', 'name' => 'Ecuador'],
            ['code' => 'EGY', 'name' => 'Egypt'],
            ['code' => 'SLV', 'name' => 'El Salvador'],
            ['code' => 'GNQ', 'name' => 'Equatorial Guinea'],
            ['code' => 'ERI', 'name' => 'Eritrea'],
            ['code' => 'EST', 'name' => 'Estonia'],
            ['code' => 'SWZ', 'name' => 'Eswatini'],
            ['code' => 'ETH', 'name' => 'Ethiopia'],
            ['code' => 'FJI', 'name' => 'Fiji'],
            ['code' => 'FIN', 'name' => 'Finland'],
            ['code' => 'FRA', 'name' => 'France'],
            ['code' => 'DEU', 'name' => 'Germany'],
            ['code' => 'IND', 'name' => 'India'],
            ['code' => 'IDN', 'name' => 'Indonesia'],
            ['code' => 'ITA', 'name' => 'Italy'],
            ['code' => 'JPN', 'name' => 'Japan'],
            ['code' => 'MEX', 'name' => 'Mexico'],
            ['code' => 'RUS', 'name' => 'Russia'],
            ['code' => 'ESP', 'name' => 'Spain'],
            ['code' => 'GBR', 'name' => 'United Kingdom'],
            ['code' => 'USA', 'name' => 'United States'],
            ['code' => 'VNM', 'name' => 'Vietnam'],
            ['code' => 'ZMB', 'name' => 'Zambia'],
            ['code' => 'ZWE', 'name' => 'Zimbabwe']
        ];

        DB::table('countries')->insert($countries);
    }
}
