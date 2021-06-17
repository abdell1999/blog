<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'abdell99',
            'nombre' => 'Abdellah',
            'apellido1' => 'Bukad-duh',
            'apellido2' => 'Rappani',
            'about' => 'Wisi forensibus mnesarchum in cum. Per id impetus abhorreant, his no magna definiebas, inani rationibus in quo. Ut vidisse dolores est, ut quis nominavi mel. Ad pri quod apeirian concludaturque, id timeam iudicabit rationibus pri. Erant putant luptatum ex sit, error euismod ad qui, meliore voluptatum complectitur an vix. Clita persius sed et, vix vidit consulatu complectitur ex. Per nonummy postulant assentior an, mea audiam fabellas deserunt id.Virtte equidem ceteros in mel. Id volutpat neglegentur eos. Eu eum facilisis voluptatum, no eam albucius verterem. Sit congue platonem adolescens ut. Offendit reprimique et has, eu mei homero imperdiet.
            Id sea utamur aperiam, te per choro accusamus consulatu. Brute munere corrumpit ut pri. Ea ipsum appareat erroribus mea. Mei probo inani aliquid ad. Omnis fabulas concludaturque an vix, an noluisse takimata facilisis pro, sit te volumus mandamus. Ad malorum imperdiet duo, ea possim utamur accusamus vix.At cum soleat disputationi, quo veri admodum vituperata ad. Ea vix ceteros complectitur, vel cu nihil nullam. Nam placerat oporteat molestiae ei, an putant albucius qui. Oblique menandri ei his, mei te mazim oportere comprehensam.',
            'rol' => 'admin',
            'email' => 'abdellahbukadduh99@gmail.com',
            'fotoPerfil' => 'upload_images/josema.jpg',
            'password' => Hash::make('12345678'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);


        DB::table('users')->insert([
            'name' => 'josema76',
            'nombre' => 'José Manuel',
            'apellido1' => 'Martinez',
            'apellido2' => 'Banderas',
            'about' => 'Soy un tipo de trabajador que está acostumbrado al trabajo bajo presión, tengo varios años de experiencia en atención al cliente y en búsqueda de oportunidades comerciales. También me considero una persona resolutiva, con buen ánimo y capaz de resolver problemas fácilmente.',
            'rol' => 'normal_user',
            'email' => 'josema76@gmail.com',
            'fotoPerfil' => 'upload_images/josema.jpg',
            'password' => Hash::make('12345678'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

DB::table('users')->insert([
            'name' => 'Paul99',
            'nombre' => 'Paul',
            'apellido1' => 'Pérez',
            'apellido2' => 'Alcalde',
            'about' => 'Empleado organizado y con iniciativa, así como gran capacidad de colaboración, comprometido con el servicio al cliente.',
            'rol' => 'normal_user',
            'email' => 'Paul99@gmail.com',
            'fotoPerfil' => 'upload_images/paul.jpg',
            'password' => Hash::make('12345678'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);




DB::table('users')->insert([
            'name' => 'Helen',
            'nombre' => 'Helena',
            'apellido1' => 'Navarro',
            'apellido2' => 'Peña',
            'about' => 'Con años de experiencia en la gestión de sistemas, he sido capaz de adaptarme a los diferentes planes informáticos de las empresas para las que he trabajado. Adicionalmente, cuento con una gran capacidad de análisis de la información y experiencia en la gestión de equipos.',
            'rol' => 'normal_user',
            'email' => 'HelenaNavarro@gmail.com',
            'fotoPerfil' => 'upload_images/helena.jpg',
            'password' => Hash::make('12345678'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);



    DB::table('users')->insert([
            'name' => 'Aortiz',
            'nombre' => 'Andres',
            'apellido1' => 'Ortiz',
            'apellido2' => 'Segura',
            'about' => 'Soy una persona emprendedora, que adora los retos y no se rinde fácilmente. Muy detallista y autodidacta cada día, nunca dejo de aprender y tengo un especial don de gentes.',
            'rol' => 'normal_user',
            'email' => 'Andres_Ortiz@gmail.com',
            'fotoPerfil' => 'upload_images/andres.jpg',
            'password' => Hash::make('12345678'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);















    }
}
