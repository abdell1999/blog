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
            'fotoPerfil' => 'upload_images/KJr184upK9FOd0IWXxnhJ4KYzzBtkfwiWv4DWLtp.jpg',
            'password' => Hash::make('12345678'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
