<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BusinessSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('business')->insert([
            'name' => 'Mateus Bento Assunção',
            'telephone' => '34994783314',
            'address' => 'Rua Miguel Ângelo Amoni, 521',
            'zip_code' => '38057813',
            'city' => 'Uberaba',
            'state' => 'MG',
            'description' => 'Teste',
        ]);

        DB::table('business')->insert([
            'name' => 'Vicente Diego Lopes',
            'telephone' => '9838049093',
            'address' => 'Rua da Marinha, 174',
            'zip_code' => '65045830',
            'city' => 'São Luís',
            'state' => 'MA',
            'description' => 'Teste',
        ]);

        DB::table('business')->insert([
            'name' => 'Jorge Antonio Ricardo Gonçalves',
            'telephone' => '8839918442',
            'address' => 'Rua Vicente Tavares Bezerra, 515',
            'zip_code' => '63122415',
            'city' => 'Crato',
            'state' => 'CE',
            'description' => 'Teste',
        ]);

        DB::table('business')->insert([
            'name' => 'Nathan Cauã Enzo Moreira',
            'telephone' => '2737801738',
            'address' => 'Rua Eloizio Geraldo Guzzo, 221',
            'zip_code' => '29192824',
            'city' => 'Aracruz',
            'state' => 'ES',
            'description' => 'Teste',
        ]);

        DB::table('business')->insert([
            'name' => 'Beatriz Rafaela Campos',
            'telephone' => '9628413552',
            'address' => 'Avenida Euclides da Cunha, 337',
            'zip_code' => '68901257',
            'city' => 'Macapá',
            'state' => 'AP',
            'description' => 'Teste',
        ]);

        DB::table('business')->insert([
            'name' => 'Augusto Diogo Heitor Cavalcanti',
            'telephone' => '6127267464',
            'address' => 'Quadra EQNM 18/20 Bloco E, 219',
            'zip_code' => '72210555',
            'city' => 'Brasília',
            'state' => 'DF',
            'description' => 'Teste',
        ]);

        DB::table('business')->insert([
            'name' => 'Severino Murilo Silva',
            'telephone' => '4226695641',
            'address' => 'Rua Wanda Kulka Moss, 724',
            'zip_code' => '85025210',
            'city' => 'Guarapuava',
            'state' => 'PR',
            'description' => 'Teste',
        ]);

        DB::table('business')->insert([
            'name' => 'Daiane Amanda Maria da Paz',
            'telephone' => '6839358780',
            'address' => 'Rua Baguari, 152',
            'zip_code' => '69906426',
            'city' => 'Rio Branco',
            'state' => 'AC',
            'description' => 'Teste',
        ]);

        DB::table('business')->insert([
            'name' => 'Sophia Rosângela Rocha',
            'telephone' => '6535349511',
            'address' => 'Rua Elmaz Gattaz Monteiro, 842',
            'zip_code' => '78120074',
            'city' => 'Várzea Grande',
            'state' => 'MT',
            'description' => 'Teste',
        ]);

        DB::table('business')->insert([
            'name' => 'Letícia Bianca Julia dos Santos',
            'telephone' => '4438666334',
            'address' => 'Rua Alzimeire Pires Milani, 649',
            'zip_code' => '87083200',
            'city' => 'Maringá',
            'state' => 'PR',
            'description' => 'Teste',
        ]);

        DB::table('business')->insert([
            'name' => 'Henry Erick Hugo Cardoso',
            'telephone' => '34994783314',
            'address' => 'Rua Miguel Ângelo Amoni, 521',
            'zip_code' => '38057813',
            'city' => 'Uberaba',
            'state' => 'MG',
            'description' => 'Teste',
        ]);

        DB::table('business')->insert([
            'name' => 'Analu Cláudia Lara Bernardes',
            'telephone' => '8529042046',
            'address' => 'Rua Alto da Paz, 562',
            'zip_code' => '60544415',
            'city' => 'Fortaleza',
            'state' => 'CE',
            'description' => 'Teste',
        ]);
    }
}
