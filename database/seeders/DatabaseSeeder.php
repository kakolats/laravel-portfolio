<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\User;
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
        $jsonString = '[
            {
                "title": "IDC Drilling Company",
                "description": "Ce projet consiste en la réalisation d\'un site Web Wordpress pour la compagnie IDC Drilling Company mettant en avant ses différents services et équipements, son histoire et ses valeurs. Le site comprend également un aspect multilangue",
                "problematiques": "Les problematiques rencontrés dans ce projet concernait l\'identification des besoins du client et la création d\'interfaces qui se marient avec leur image et leur identité; ce qui comprend l\'intégration des bonnes images pour illustrer le contenu textuel. Il est aussi question de réaliser une bonne traduction en anglais du contenu du site et de choisir le meilleur plugin Wordpress a cette fin",
                "competences": "Ce projet a permis d\'approfondir mes capacités en terme de traduction et l\'élargissement de mon éventail de plugin avec celui utilisé pour la traduction",
                "type": "Site Web Worpress",
                "link": "https://www.idc-drilling.com"
            },
            {
               "title": "DISCOVER",
                "description": "Ce projet consiste en la conception et la réalisation d\'un site Web Shopify pour Discover une entreprise de vente de mobilier",
                "problematiques": "La problématique de ce projet réside dans la selection du thème le plus pertinent en fonction des besoins de ce client ainsi que dans la gestion de stock de Discover contenant plus de 500 produits",
                "competences": "Ce projet m\'a permis d\'approfondir mon expérience en intégration d\' API. Pour faciliter la gestion du stock il a fallu étudier l\'API de shopify et de réaliser des scripts d\'insertion de produits dans la base de données du site à partir de la base de données Excel fournie par le client",
                "type": "Site Web Shopify",
                "link": "https://discover-sn.com"
            },
            {
                "title": "Guichet Unique Senelec",
                 "description": "L\'objet de ce site est la réalisation d\'un ensemble de plateformes pour les procédures de demande de raccordement de la SENELEC. Le projet contient une application Front Angular pour les clients, une application front Angular pour l\'administration de la Senelec ainsi qu\'une API réalisée en Spring Boot qui sert les deux applications",
                 "problematiques": "La problématique autour de ce projet consiste en la définition d\'une architecture éfficace pour remplir toutes les attentes du client.",
                 "competences": "Les compétences acquises lors de ma participation à ce projet ont été un approfondissement de mes connaissances techniques en Angular et en Spring Boot ainsi que le renforcement de mes notions en technique de méthodes Agile de gestion de projet",
                 "type": "Plateformes Web",
                 "link": "https://guichetunique.senelec.sn/"
             }
        ]';
        $projects = json_decode($jsonString, true);
        foreach ($projects as $project) {
            Project::factory()->create([
                'title' => $project['title'],
                'description' => $project['description'],
                'problematiques' => $project['problematiques'],
                'competences' => $project['competences'],
                'type' => $project['type'],
                'link' => $project['link']
            ]);
        }
        /*User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);*/
    }
}
