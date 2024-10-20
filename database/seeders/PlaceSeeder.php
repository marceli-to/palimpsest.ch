<?php
namespace Database\Seeders;
use App\Models\Place;
use App\Models\Location;
use App\Models\Fact;
use Illuminate\Database\Seeder;

class PlaceSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $places = [
      // Freiburg im Breisgau
      [
        'slug' => 'freiburg-im-breisgau', 
        'name' => 'Freiburg im Breisgau', 
        'position' => 1,
        'published' => true
      ],
      // Zurich
      [
        'slug' => 'zurich', 
        'name' => 'Zürich', 
        'position' => 2,
        'published' => true,
        'locations' => [
          [
            'title' => 'Tanzhaus',
            'subtitle' => 'Auf dem Lettenviadukt',
            'audio_file' => 'zurich-tanzhaus.mp3',
            'latitude' => 47.388285,
            'longitude' => 8.530280,
            'facts' => [
              [
                'periode' => '1783',
                'text' => 'Bau der Kattundruckerei von Hans Jakob Hofmeister am Limmatufer. Sie war bis 1867 in Betrieb.'
              ],
              [
                'periode' => '1879',
                'text' => 'Erstellung des Wasserwerk Letten, das ab 1892 der Elektrizitätsherstellung dient.'
              ],
              [
                'periode' => 'ab 1881',
                'text' => 'Gründung der STF (Schweizerische Textilfachschule). Die ehemaligen Gebäude der Hofmeisterischen Kattundruckerei beherbergen die Seidenwebschule, später Textilfachschule.'
              ],
              [
                'periode' => '1894',
                'text' => 'Eröffnung des Aussersihler Viadukts. Es besteht aus dem höheren Wipkinger Viadukt, der RIchtung Bahnhof Wipkingen führt und dem niedrigeren und heute stillgelegten Lettenviadukt, der zum ehemaligen Bahnhof Letten führt.'
              ],
              [
                'periode' => '1909',
                'text' => 'Bau des Flussbades Unterer Letten, das älteste Flussbad der Stadt Zürich. Seit 1986 ist es denkmalgeschützt.'
              ],
              [
                'periode' => '1945',
                'text' => 'Die Halle Wasserwerkstrasse 127a wurde als Maschinenhalle und als bauliche Erweiterung der Textilfachschule erbaut.'
              ],
              [
                'periode' => '1996',
                'text' => 'Das Tanzhaus Zürich wird an der Wasserwerkstrasse 127a eingeweiht.'
              ],
              [
                'periode' => '2006 – 2007',
                'text' => 'Renovation und Umbau des Gebäudes an der Wasserwerkstrasse 129 durch das Architektenbüro Gramazio & Kohler. Die neue Bühne (heute Bühne 2) im obersten Stock wurde im Frühjahr 2007 eingeweiht.'
              ],
              [
                'periode' => '2. und 3. August 2009',
                'text' => 'Uraufführung der Performance « freie Enden » von Katja Schenker im Rahmen des Stromereien Festivals im Flussbad Unterer Letten.'
              ],
              [
                'periode' => '13. Oktober 2012',
                'text' => 'Das Tanzhaus (Gebäude an der Wasserwerkstrasse 127a) wird durch einen Mottbrand vollkommen zerstört.'
              ],
              [
                'periode' => '2013 – 2016',
                'text' => 'Aufstockung des Getreidesilos von Swissmill von 40 auf 118 Meter Höhe. Es ist damit der höchste Kornspeicher der Welt. Es fasst bis zu 60\'000 Tonnen Getreide.'
              ],
              [
                'periode' => '8. April 2019',
                'text' => 'Gastspiel des Stücks «ACT2 – to resist» von der uruguayischen Choreografin Tamara Cubas im Rahmen des Festivals Zürich moves!'
              ],
              [
                'periode' => '6. September 2019',
                'text' => 'Einweihung des Ersatzneubaus des Tanzhauses (Bau durch das Architekturbüro Barozzi/Veiga). Das neue Gebäude erhält schnell den Spitznamen «Tobleronehaus».'
              ],
              [
                'periode' => '22. Juni 2020',
                'text' => 'Night of light. Über 1000 schweizer Kulturinstitutionen leuchten rot. Mit dieser Aktion wurde auf die prekäre Situation des Kultursektors in Bezug auf die Covid-19 Pandemie aufmerksam gemacht.'
              ],
              [
                'periode' => '16. April 2021',
                'text' => 'Geisterpremiere des Reinactments von « The Best and The Worst of Us » der Choreografin Simone Aughterlony. Die öffentlichen Vorstellungen wurden auf Grund der Covid-19 Pandemie verschoben. Das Stück wurde 2008 uraufgeführt und in Zusammenarbeit mit der Tanzkompany The Field 2021 wieder neu aufgenommen.'
              ],
              [
                'periode' => 'April 2021',
                'text' => 'Die Tänzerin Maria Demandt kreiert verschiedene Tänze für das Projekt Palimpsest.'
              ]
            ]
          ],
        ]
      ],
      // Bern
      [
        'slug' => 'bern', 
        'name' => 'Bern', 
        'position' => 3,
        'published' => true
      ],
      // Genève
      [
        'slug' => 'geneve', 
        'name' => 'Genève', 
        'position' => 4,
        'published' => true
      ],
      // Gland
      [
        'slug' => 'gland', 
        'name' => 'Gland', 
        'position' => 5,
        'published' => true
      ],
      // Givrins
      [
        'slug' => 'givrins', 
        'name' => 'Givrins', 
        'position' => 6,
        'published' => true
      ],
      // Nyon
      [
        'slug' => 'nyon', 
        'name' => 'Nyon', 
        'position' => 7,
        'published' => true,
        'locations' => [
          [
            'title' => 'Petit parc à la fontaine',
            'subtitle' => 'Devant la charmille',
            'audio_file' => 'nyon-petit-parc-a-la-fontaine.mp3',
            'latitude' => 46.376667,
            'longitude' => 6.233333,
            'facts' => [
              [
                'periode' => '1841',
                'text' => 'Création de la première version du ballet Giselle à l\'Opéra de Paris, archétype du ballet romantique sur la musique de Adolphe Adam.'
              ],
              [
                'periode' => '1996 à 1997',
                'text' => 'Aménagement du parc à la petite fontaine en lien avec la construction de la trémie du LEB. Le projet a été développé par le service des parcs et domaines de la ville de Lausanne (spadom) ; chef de projet Daniel Oertli.'
              ],
              [
                'periode' => '2014',
                'text' => 'Création de Wilis par la Cie Nicole Seiler, installation chorégraphique en forêt d\'après le 2ème acte de Giselle, coproduite par le far, festival des arts vivants à Nyon.'
              ],
              [
                'periode' => '2019',
                'text' => 'La 6ème édition de Lausanne Jardins accueille l\'installation Bestial ! : L\'humain a pris possession de la planète. 60% des espèces sauvages ont disparu ces quarante dernières années et la biodiversité est en danger. Mais ici, en pleine ville, dans la forêt des Clochettes, les bêtes qui occupaient autrefois le territoire lausannois sont revenues. Réalisé par : Clara Batllori Vidal, graphiste (CAT), Caroline Chausson, architecte paysagiste (FR), Anne-Claire Schwab, architecte (CH), Philippe de Rham, son (CH).'
              ]
            ]
          ],
          [
            'title' => 'Place des Marronniers',
            'subtitle' => 'Sur le kiosque à musique',
            'audio_file' => 'nyon-place-des-marronniers.mp3',
            'latitude' => 46.382837,
            'longitude' => 6.246569,
            'facts' => [
              [
                'periode' => '45 av. J.-C.',
                'text' => 'Colonia Iulia Equestris a été fondée par Julius Caesar à l\'emplacement de l\'actuelle ville de Nyon.'
              ],
              [
                'periode' => '1758',
                'text' => 'Quatorze marronniers sont plantés sur la place en alternance avec deux rangées de bancs donnant à l\'ancienne place de défense sa vocation touristique.'
              ],
              [
                'periode' => '1826',
                'text' => 'Construction de la fontaine couverte «des Tapettes».'
              ],
              [
                'periode' => '17 juin 1894',
                'text' => 'Inauguration d\'un kiosque en bois. Aujourd\'hui, il n\'en reste que le souvenir avec la base en ciment.'
              ],
              [
                'periode' => '1909',
                'text' => 'Déménagement du bassin de la fontaine «des Tapettes» dans la niche sous l\'esplanade.'
              ],
              [
                'periode' => 'Années 1940',
                'text' => 'Découverte des colonnes romaines faisant partie du forum romain à la rue Delafléchère.'
              ],
              [
                'periode' => '1958',
                'text' => 'Les colonnes, restes du forum romain, sont installées sur la place pour la fête du bimillénaire de Nyon.'
              ],
              [
                'periode' => '1992',
                'text' => 'Le spectacle «Déjeuner dans l\'Arbre» de la compagnie Pasquier-Rossier est donné sur la place lors du 8ème festival international Théâtres d\'Eté de Nyon devenu le far° en 1998.'
              ]
            ]
          ],
          [
            'title' => 'Escaliers salle des expositions',
            'subtitle' => 'Sur le kiosque à musique',
            'audio_file' => 'nyon-escaliers-salle-des-expositions.mp3',
            'latitude' => 46.384842,
            'longitude' => 6.239698,
            'facts' => [
              [
                'periode' => '45 av. J.-C.',
                'text' => 'Colonia Iulia Equestris a été fondée par Julius Caesar à l\'emplacement de l\'actuelle ville de Nyon. Des vestiges du Forum et de la vie quotidienne romaine demeurent enfouis en dessous.'
              ],
              [
                'periode' => 'Dès le 16ème siècle',
                'text' => 'La Place Perdtemps – lieu où l\'on perd son temps – sert de place d\'armes et quand il n\'y a pas d\'exercice militaire, elle sert à la promenade et aux divertissements.'
              ],
              [
                'periode' => 'Dès le début du 20ème siècle',
                'text' => 'Marché aux bestiaux sur la Place Perdtemps.'
              ],
              [
                'periode' => 'Années 1920',
                'text' => 'Au nord-est de la rue des Marchandises, construction d\'une cité ouvrière, dont les maisons sont accolées à des hangars.'
              ],
              [
                'periode' => '1930',
                'text' => 'Construction de la salle communale par l\'architecte Alphonse Laverrière.'
              ],
              [
                'periode' => '1952',
                'text' => 'Après un incendie la salle communale est remise en état par l\'architecte nyonnais Fernand Louis Dorier. Le bâtiment est agrandi et on construit une arrière-scène et un local pour les décors.'
              ],
              [
                'periode' => '1958',
                'text' => 'Construction de la salle des expositions.'
              ],
              [
                'periode' => '1976',
                'text' => 'La première édition du Paléo Festival, encore appelé «First Folk Festival», attire 1800 spectateurs. Une grande partie des concerts se passe dans la salle communale.'
              ],
              [
                'periode' => 'Dès 1987',
                'text' => 'Organisation de thés dansants dans la salle communale.'
              ]
            ]
          ],
        ]
      ],
      // Bellinzona
      [
        'slug' => 'bellinzona', 
        'name' => 'Bellinzona', 
        'position' => 8,
        'published' => true
      ],
      // Lausanne
      [
        'slug' => 'lausanne', 
        'name' => 'Lausanne', 
        'position' => 9,
        'published' => true
      ],
      // Sierre
      [
        'slug' => 'sierre', 
        'name' => 'Sierre', 
        'position' => 10,
        'published' => true,
        'locations' => [
          [
            'title' => 'TLH',
            'subtitle' => 'Devant l\'entrée',
            'audio_file' => 'sierre-tlh.mp3',
            'latitude' => 46.285405,
            'longitude' => 7.529504,
            'facts' => [
              [
                'periode' => '1945',
                'text' => 'Edification du bâtiment par l\'entreprise de constructions métalliques Berclaz-Métrailler SA, fleuron de l\'industrie sierroise des années cinquante.'
              ],
              [
                'periode' => '11 septembre 1999',
                'text' => 'Après des travaux de transformation Les Halles ouvrent leurs portes. Gérées par l\'ATOUT (Association du Théâtre Ouvert à Tous) Les Halles se présentent comme un lieu public de création où les spectacles invités côtoient des productions de sociétés ou d\'artistes régionaux.'
              ],
              [
                'periode' => '2006',
                'text' => 'Spectacle de l\'école de danse de Danielle Wenger.'
              ],
              [
                'periode' => '2011-2012',
                'text' => 'La ville de Sierre reprend les lieux et le TLH est inauguré.'
              ],
              [
                'periode' => 'Mai 2017',
                'text' => 'Performance Milles Yeux dans le foyer du TLH dans le cadre de la Fête de la Danse par les artistes Yohann Closuit, Simon Crettol et Alice Richtarch.'
              ],
              [
                'periode' => '26 novembre au 7 décembre 2019',
                'text' => 'Simon Crettol présente son solo chorégraphique Raphaël au TLH.'
              ],
              [
                'periode' => '13 mars au 11 avril 2020',
                'text' => 'L\'artiste Latifa Echakhch est l\'invitée de l\'EDHEA (École de design et haute école d\'art du Valais) au CUBE, espace d\'exposition installé dans le foyer du TLH-Sierre. Elle réalise une œuvre murale qui englobe les trois faces visibles du CUBE. Le vernissage est annulé en raison de la pandémie de SARS-CoV2.'
              ],
              [
                'periode' => '22 juin 2020',
                'text' => 'Night of light. En Suisse, plus de 1000 lieux culturels s\'éclairent en rouge. Cette action vise à sensibiliser la population aux difficultés rencontrées par le secteur culturel après la pandémie de SARS-CoV2 du printemps 2020.'
              ],
              [
                'periode' => 'Juillet 2020',
                'text' => 'Le danseur Simon Crettol crée des danses inédites pour le projet Palimpsest.'
              ]
            ]
          ],
        ]
      ],
      // Zug
      [
        'slug' => 'zug', 
        'name' => 'Zug', 
        'position' => 11,
        'published' => true,
        'locations' => [
          [
            'title' => 'Theater Casino Zug',
            'subtitle' => 'Vor dem Eingang',
            'audio_file' => 'zug-theater-casino.mp3',
            'latitude' => 47.164363,
            'longitude' => 8.514233,
            'facts' => [
              [
                'periode' => '1808',
                'text' => 'Aus dem Kreis der Stadtbürgerschaft wird die private Theatergesellschaft Zug gegründet. Ihr Hauptziel : Alle Mitglieder üben sich wöchentlich im Vortragen und Theaterspielen und bringen von Zeit zu Zeit Stücke zur Aufführung.'
              ],
              [
                'periode' => '1909',
                'text' => 'Einweihung des neuen Baus an der Artherstrasse 9. Das Gebäude wurde vom damals erst 27-jährigen Zuger Architekten Dagobert Keiser entworfen und gebaut.'
              ],
              [
                'periode' => '1961',
                'text' => 'Die Skulptur Knife Edge des Britischen Bildhauers Henry Moore wird am Übergang von der Parkanlage des Theater Casino zum Seebad Seeliken, in der äussersten Ecke des Holzsteges angebracht.'
              ],
              [
                'periode' => '1981',
                'text' => 'Eröffnung des Neubaus.  Das Projekt der Zuger Architekten Hans Peter Ammann und Peter Baumann überzeugt durch die geschickte Verknüpfung von Alt- und Neubau.'
              ],
              [
                'periode' => '2015-2017',
                'text' => 'Das Theater Casino Zug wird vom Architekturbüro Edelmann Krell renoviert. Die im Altbau wiederhergestellte Fassade und die im Innern rekonstruierte Farbigkeit stehen in selbstbewusstem Kontrast zur von rotem Sichtbeton und Carrara-Marmor gepràgten Materialwelt des Erweiterungsbaus. Das neue Verbindungsbauwerk schafft einen repräsentativen Auftakt zur Raumachse des Festsaals. Dieser entfaltet durch die Wiederherstellung der verglasten Türöffnungen wieder jene lichte, die Umgebung einbeziehende Raumatmosphäre die ihm ursprünglich zugedacht war.'
              ],
              [
                'periode' => '6. März 2020',
                'text' => 'Die Sängerin Malin Hartelius und der Cellist Claudius Herrmann besuchen das Theater Casino Zug und spielen spontan auf der Bühne des Altbaus die Arie « Lascia ch\'io pianga » von Georg Friedrich Händel, um die Akustik des Saals zu erproben.'
              ],
              [
                'periode' => '22. Juni 2020',
                'text' => 'Night of light. Über 1000 schweizer Kulturinstitutionen leuchten rot. Mit dieser Aktion wurde auf die prekäre Situation des Kultursektors in Bezug auf die Covid-19 Pandemie aufmerksam gemacht.'
              ],
              [
                'periode' => 'Juli 2020',
                'text' => 'Die Tänzerin Katrin Kolo improvisiert verschiedene Tänze für das Projekt Palimpsest.'
              ]
            ]
          ],
        ]
      ],
      // Luxembourg
      [
        'slug' => 'luxembourg', 
        'name' => 'Luxembourg', 
        'position' => 12,
        'published' => true
      ],
    ];

    foreach($places as $p)
    {
      $place = Place::create([
        'slug' => \Str::slug($p['name']),
        'name' => $p['name'],
        'position' => $p['position'],
        'published' => $p['published']
      ]);

      if (isset($p['locations']))
      {
        foreach($p['locations'] as $l)
        {
          $location = Location::create([
            'slug' => \Str::slug($l['title'], '_'),
            'title' => $l['title'],
            'subtitle' => $l['subtitle'],
            'audio_file' => $l['audio_file'],
            'latitude' => $l['latitude'],
            'longitude' => $l['longitude'],
            'published' => true,
            'place_id' => $place->id
          ]);

          if (isset($l['facts']))
          {
            foreach($l['facts'] as $fact)
            {
              Fact::create([
                'periode' => $fact['periode'],
                'text' => $fact['text'],
                'location_slug' => \Str::slug($l['title']. ' ' . $p['name'], '_'),
                'location_id' => $location->id
              ]);
            }
          }
        }
      }
    }
  }
}