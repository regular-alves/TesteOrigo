<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clients')->insert([
            [
                "name" => "Claudianus Boast",
                "email" => "cboast0@fastcompany.com",
                "phone" => "(19) 957645371",
                "address_state" => "São Paulo",
                "address_city" => "Araraquara",
                "birthdate" => "1993-06-07",
            ],
            [
                "name" => "Loni Jennions",
                "email" => "ljennions1@va.gov",
                "phone" => "(19) 905613161",
                "address_state" => "São Paulo",
                "address_city" => "Limeira",
                "birthdate" => "1985-05-09",
            ],
            [
                "name" => "Margi Gilhouley",
                "email" => "mgilhouley2@telegraph.co.uk",
                "phone" => "(19) 966290104",
                "address_state" => "São Paulo",
                "address_city" => "Araraquara",
                "birthdate" => "1984-09-13",
            ],
            [
                "name" => "Lexy Sprulls",
                "email" => "lsprulls3@moonfruit.com",
                "phone" => "(19) 976121601",
                "address_state" => "São Paulo",
                "address_city" => "Rio Claro",
                "birthdate" => "1999-10-19",
            ],
            [
                "name" => "Marie Shatliff",
                "email" => "mshatliff4@cbslocal.com",
                "phone" => "(19) 991376354",
                "address_state" => "São Paulo",
                "address_city" => "Rio Claro",
                "birthdate" => "1990-07-20",
            ],
            [
                "name" => "Graig Mouncey",
                "email" => "gmouncey5@so-net.ne.jp",
                "phone" => "(19) 941806149",
                "address_state" => "São Paulo",
                "address_city" => "Araraquara",
                "birthdate" => "1990-03-27",
            ],
            [
                "name" => "Laurice Liger",
                "email" => "lliger0@php.net",
                "phone" => "(35) 971740954",
                "address_state" => "Minas Gerais",
                "address_city" => "Areado",
                "birthdate" => "1992-10-25",
            ],
            [
                "name" => "Kendrick Sooper",
                "email" => "ksooper1@slate.com",
                "phone" => "(31) 944324086",
                "address_state" => "Minas Gerais",
                "address_city" => "Belo Horizonte",
                "birthdate" => "1981-06-02",
            ],
            [
                "name" => "Gordon Levington",
                "email" => "glevington2@hpost.com",
                "phone" => "(31) 922405868",
                "address_state" => "Minas Gerais",
                "address_city" => "Belo Horizonte",
                "birthdate" => "1993-11-25",
            ],
            [
                "name" => "Noam Scolland",
                "email" => "nscolland3@mozilla.org",
                "phone" => "(35) 996817669",
                "address_state" => "Minas Gerais",
                "address_city" => "Areado",
                "birthdate" => "1999-12-31",
            ],
            [
                "name" => "Lindon Skehens",
                "email" => "lskehens4@npr.org",
                "phone" => "(35) 967671104",
                "address_state" => "Minas Gerais",
                "address_city" => "Areado",
                "birthdate" => "1985-01-10",
            ],
            [
                "name" => "Kimbra Rase",
                "email" => "krase5@topsy.com",
                "phone" => "(35) 999428030",
                "address_state" => "Minas Gerais",
                "address_city" => "Areado",
                "birthdate" => "1999-05-05",
            ],
            [
                "name" => "Lorenzo Fisk",
                "email" => "lfisk6@businessweek.com",
                "phone" => "(31) 912695467",
                "address_state" => "Minas Gerais",
                "address_city" => "Belo Horizonte",
                "birthdate" => "1985-12-22",
            ],
            [
                "name" => "Bourke Flavelle",
                "email" => "bflavelle7@fc2.com",
                "phone" => "(35) 959386145",
                "address_state" => "Minas Gerais",
                "address_city" => "Itapeva",
                "birthdate" => "1984-04-10",
            ],
            [
                "name" => "Curran McSharry",
                "email" => "cmcsharry8@webeden.co.uk",
                "phone" => "(35) 902916131",
                "address_state" => "Minas Gerais",
                "address_city" => "Itapeva",
                "birthdate" => "1983-01-15",
            ],
            [
                "name" => "Aveline Dowtry",
                "email" => "adowtry9@miibeian.gov.cn",
                "phone" => "(31) 945227500",
                "address_state" => "Minas Gerais",
                "address_city" => "Belo Horizonte",
                "birthdate" => "1994-12-23",
            ],
            [
                "name" => "John Sebastian",
                "email" => "jsebastiana@cbslocal.com",
                "phone" => "(31) 907366740",
                "address_state" => "Minas Gerais",
                "address_city" => "Belo Horizonte",
                "birthdate" => "1998-04-06",
            ],
            [
                "name" => "Reynolds Greenan",
                "email" => "rgreenanb@bloomberg.com",
                "phone" => "(35) 923551410",
                "address_state" => "Minas Gerais",
                "address_city" => "Itapeva",
                "birthdate" => "1985-07-19",
            ],
        ]);
    }
}
