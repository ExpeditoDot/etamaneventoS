<?php

namespace Database\Seeders;
use app\Models\evento;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class eventoSeeder extends Seeder
{
   
    public function run(): void
    {
        evento::create([
            'nomeEvento' => 'anime week',
            'sobre' => 'prepare-se para uma semana interia de interações relacionadas a cultura geek e de animes',
            'data' => '2026-20-06 18:00:00',
            'local' => 'Quixeramobim, CE, BR',
            'precoIngresso' => 10.99,
            'imagem' => null,
        ]);

        
        evento::create([
            'nomeEvento' => 'Nba Night',
            'sobre' => 'assita as finais da nba ao vivo com colegas ',
            'data' => '2026-05-06 18:00:00',
            'local' => 'Quixeramobim, CE, BR',
            'precoIngresso' => 0.00,
            'imagem' => null,
        ]);

        
        evento::create([
            'nomeEvento' => 'show Vgod',
            'sobre' => 'venha ao show do fenomeno do plugnb Matheus "vgod" Franco',
            'data' => '2026-29-06 18:00:00',
            'local' => 'Fortaleza, CE, BR',
            'precoIngresso' => 17.99,
            'imagem' => null,
        ]);

        
        evento::create([
            'nomeEvento' => 'club cinéfilo',
            'sobre' => 'venha a maratona de filmes para cinéfilos. Dia 1: Martin Scorcese',
            'data' => '2026-20-06 18:00:00',
            'local' => 'Quixeramobim, CE, BR',
            'precoIngresso' => 0.00,
            'imagem' => null,
        ]);

        
        evento::create([
            'nomeEvento' => 'corujão gamer',
            'sobre' => 'Corujão gamer kk',
            'data' => '2026-20-06 23:00:00',
            'local' => 'Quixeramobim, CE, BR',
            'precoIngresso' => 10.99,
            'imagem' => null,
        ]);

    $this->call(eventoSeeder::class);
    }
}
