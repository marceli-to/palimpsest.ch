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
        'published' => true,
        'locations' => [
          [
            'title' => 'Tanzbrunnen',
            'subtitle' => 'Am Rand des Tanzbrunnens',
            'audio_file' => 'freiburg-tanzbrunnen.mp3',
            'latitude' => 47.993281,
            'longitude' => 7.845636,
            'facts' => [
              [
                'periode' => 'Ab 1745',
                'text' => 'Auf einem der ehemaligen Bastionshügel der Vauban-Befestigung wird der Park « Neue Promenade » angelegt, später « Alleegarten » oder « Hochallee ».'
              ],
              [
                'periode' => '19. Jahrhundert',
                'text' => 'Ausbau des Parks und Bau einer Brunnenanlage. Zentrales Element des Brunnens war der aus Steinen aufgeschichtete Fels, über den sich ein künstlicher Wasserfall ins Becken ergoss.'
              ],
              [
                'periode' => '1880',
                'text' => 'Errichtung einer Figurengruppe von Bertold Knittel, gestiftet von « Verein zur Verschönerung der Stadt Freiburg » : Drei Knaben verkörperten die drei Quellflüsse der Dreisam : Ibenbach, Wagensteigbach und Rotbach.'
              ],
              [
                'periode' => '1944',
                'text' => 'Zerstörung der Brunnenanlage.'
              ],
              [
                'periode' => 'Nach 1945',
                'text' => 'Erneuerung des Brunnens in Beton ohne die Figurengruppe.'
              ],
              [
                'periode' => '26. Oktober 2007',
                'text' => 'Übergabe der Skulptur « Bündel-Stele I » von Roland Phleps. Er hat die Stele aus Edelstahl anlässlich des 550-jährigen Universitätsjubiläums der Stadt Freiburg geschenkt.'
              ],
              [
                'periode' => '2011',
                'text' => 'Stilllegung des Brunnens wegen technischer Probleme beim Wasserfall. Das trockene Becken wird zum « Tanzbrunnen ».'
              ],
              [
                'periode' => '21. Juli 2015',
                'text' => 'Eröffnung der neuen Universitätsbibliothek, fast vollkommen neu gebaut durch das Basler Architekturbüro Degelo Architekten. Sie gilt als eine der modernsten und grössten Universitätsbibliotheken Europas. Wenn die Sonne flach steht, wird das Leuchten der Sonne von der Fassade so zurückgeworfen, dass Auto- und Fahrradfahrer_innen auf der Rempartstrasse so stark geblendet werden, dass sie nicht sicher weiterfahren können.'
              ]
            ]
          ],
          [
            'title' => 'Theater Freiburg',
            'subtitle' => 'Platz der Alten Synagoge',
            'audio_file' => 'freiburg-theater-freiburg.mp3',
            'latitude' => 47.995003,
            'longitude' => 7.846148,
            'facts' => [
              [
                'periode' => '1869-1870',
                'text' => 'Bau der Synagoge der Jüdischen Gemeinde von Freiburg nach den Plänen von Georg Jakob Schneider.'
              ],
              [
                'periode' => '1905-1910',
                'text' => 'Bau des Stadttheaters durch den Oberbürgermeister Otto Winterer auf einem der ehemaligen Bastionshügel der Vauban-Befestigung nach Plänen des Berliner Architekten Heinrich Seeling.'
              ],
              [
                'periode' => '8. Oktober 1910',
                'text' => 'Eröffnung des neuen Theaters mit « Wallensteins Lager » von Schiller und « Festwiese », dem 3. Akt aus « Meistersinger » von Wagner.'
              ],
              [
                'periode' => '1907-1911',
                'text' => 'Bau des Universitätsgebäudes KG1 im Jugendstil. Es wird nach Plänen von Friedrich Ratzel und Hermann Billing errichtet. Mit seiner roten Sandsteinfassade zählt es zu den Freiburger Wahrzeichen.'
              ],
              [
                'periode' => '26. Februar 1935',
                'text' => 'Gastspiel von « Mary Wigman und ihrer Tanzgruppe » im Theater Freiburg. Das zweiteilige Abendprogramm beinhaltet unter anderem auch das weltbekannte Solo « Hexentanz ».'
              ],
              [
                'periode' => '9./10. November 1938',
                'text' => 'Die Synagoge wird in der Reichspogromnacht durch die SS und SA angezündet und brennt vollständig ab.'
              ],
              [
                'periode' => '27. Januar 1944',
                'text' => 'Zerstörung des Theaters durch einen Luftangriff auf Freiburg.'
              ],
              [
                'periode' => '1945-1949',
                'text' => 'Wiederaufbau des Theaters.'
              ],
              [
                'periode' => '1949',
                'text' => 'Wiedereröffnung des Grossen Hauses mit « Meistersinger » von Wagner.'
              ],
              [
                'periode' => '1957-1961',
                'text' => 'Bau des Universitätsgebäudes KG2 durch Otto Ernst Schweizer.'
              ],
              [
                'periode' => '1961',
                'text' => 'Installierung der Skulptur « Reclining Figure » von Henry Moore auf dem Platz vor dem KG2.'
              ],
              [
                'periode' => '1996',
                'text' => 'Umbenennung des Platzes auf « Platz der Alten Synagoge ».'
              ],
              [
                'periode' => '21. Juli 2015',
                'text' => 'Eröffnung der neuen Universitätsbibliothek, fast vollkommen neu gebaut durch das Basler Architekturbüro Degelo Architekten.'
              ],
              [
                'periode' => '2. August 2017',
                'text' => 'Eröffnung des neuen Platzes nach einem grossen Umbau nach Plänen des Architekten und Stadtplaners Volker Rosenstiel und des Landschaftsarchitekten Martin Schedlbauer. Ein Wasserbassin in Lage und Grösse den exakten Grundriss der Alten Synagoge nachzeichnend soll im Sinne einer Gedenkstädte symbolisch an deren Zerstörung erinnern.'
              ],
              [
                'periode' => '20. September 2019',
                'text' => 'Demonstration « Fridays for Future ». Über 20.000 Menschen versammeln sich auf dem Platz der Alten Synagoge, um gemeinsam für einen besseren Klimaschutz zu demonstrieren.'
              ],
              [
                'periode' => '2000',
                'text' => 'Einweihung des Mahnmals mit der Aufschrift « Gurs 1027km » durch die Künstlergruppe « Büro für ungewöhnliche Massnahmen ».  Es soll an die 1940 im Rahmen der Wagner-Bürckel-Aktion deportierten badischen Juden und Jüdinnen erinnern.'
              ],
              [
                'periode' => '9. November 2020',
                'text' => 'Einweihung - zum 82. Jahrestag der Zerstörung der Alten Synagoge - eines 100m langen Bronzeschriftbands mit dem Text « Erinnere Dich » in acht unterschiedlichen Sprachen konzipiert durch den Künstler Tobias Eder.'
              ],
              [
                'periode' => '22. Juni 2020',
                'text' => 'Night of light. Über 9000 Kulturinstitutionen in Europa leuchten rot. Mit dieser Aktion wurde auf die prekäre Situation des Kultursektors in Bezug auf die Covid-19 Pandemie aufmerksam gemacht.'
              ],
              [
                'periode' => '25. und 26. September 2020',
                'text' => 'Gastspiel der Performance « One One One » des schweiz-griechischen Choreografen Ioannis Mandafounis.'
              ]
            ]
          ],
        ]
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
        'published' => true,
        'locations' => [
          [
            'title' => 'Dampfzentrale',
            'subtitle' => 'Beim Eingangstor',
            'audio_file' => 'bern-dampfzentrale.mp3',
            'latitude' => 46.940578,
            'longitude' => 7.443829,
            'facts' => [
              [
                'periode' => '1903',
                'text' => 'Bau der Dampfzentrale. Das Dampfkraftwerk wurde von Eduard Joos (1869 – 1917), einem der profiliertesten Berner Architekten, konzipiert.'
              ],
              [
                'periode' => '1973',
                'text' => 'Die Stromproduktion wird stillgelegt.'
              ],
              [
                'periode' => '1986',
                'text' => 'Gründung des « Verein Dampfzentrale » der zum Ziel hatte, die Dampfzentrale für kulturelle Zwecke zu nutzen.'
              ],
              [
                'periode' => 'Mai 1987',
                'text' => 'Da die Stadt Bern nicht auf die Forderungen des « Verein Dampfzentrale » einging, wurde das Gebäude besetzt. Diese Besetzung wird im Lied « Hansdampf » der Berner Rockband Züri West besungen.'
              ],
              [
                'periode' => 'Oktober 1987',
                'text' => 'Der Bernische Gemeinderat erteilt eine provisorische Bewilligung für die Nutzung der Dampfzentrale als Kulturzentrum.'
              ],
              [
                'periode' => '1989 - 1999',
                'text' => 'Die Dampfzentrale wird von den Architekten Peter Flückiger und Thomas Hostettler in enger Zusammenarbeit mit dem Denkmalschutz saniert und umgebaut. Danach gilt für die Dampfzentrale ein Subventionsvertrag mit der Stadt Bern.'
              ],
              [
                'periode' => '1993',
                'text' => 'Bei einem Gastspiel des Stadttheaters Ulm bei Tanz in Bern entsteht die Legende des Haustechnikers/Bühnenmeisters Hannes Müller, der sogenannte « esprit de la maison », ein imaginärer Techniker, der immer und für alles da ist.'
              ],
              [
                'periode' => '2008 - 2012',
                'text' => 'Zweite Sanierung und Instandsetzungsarbeiten durch Hebeisen + Vatter Architekten Bern.'
              ],
              [
                'periode' => '2009',
                'text' => 'Gastspiel von Living-room dancers (Cie Nicole Seiler) in Tanz in Bern. Private Wohnungen werden zur Bühne.'
              ],
              [
                'periode' => '2016',
                'text' => 'Die Bühnen- und Kostümbildnerin Anke Niehammer kreiert eine Installation aus Plexiglas für Tanz in Bern.'
              ],
              [
                'periode' => 'Oktober 2017',
                'text' => 'Die Berner Tänzerin und Choreografin Emma Murray kreiert das Stück Mother*Fuckers, das in der Dampfzentrale uraufgeführt wird.'
              ],
              [
                'periode' => '22. Juni 2020',
                'text' => 'Night of light. Über 1000 schweizer Kulturinstitutionen leuchten rot. Mit dieser Aktion wurde auf die prekäre Situation des Kultursektors in Bezug auf die Covid-19 Pandemie aufmerksam gemacht.'
              ],
              [
                'periode' => 'Juli 2020',
                'text' => 'Die Tänzerin Emma Murray improvisiert verschiedene Tänze für das Projekt Palimpsest.'
              ]
            ]
          ],
        ]
      ],
      // Genève
      [
        'slug' => 'geneve', 
        'name' => 'Genève', 
        'position' => 4,
        'published' => true,
        'locations' => [
          [
            'title' => 'Le Grütli',
            'subtitle' => 'Place Béla Bartok',
            'audio_file' => 'geneve-le-grutli.mp3',
            'latitude' => 46.201008,
            'longitude' => 6.141246,
            'facts' => [
              [
                'periode' => '1871 - 1873',
                'text' => 'Construction de l\'École du Grütli sur les plans de l\'architecte Georges Matthey.'
              ],
              [
                'periode' => '1873 – 1969',
                'text' => 'L\'École du Grütli réunit des écoles primaires, l\'École de dessin et l\'École industrielle. Dès 1929 les élèves d\'école primaire n\'ayant pu accéder au Collège étaient placés dans cette école.'
              ],
              [
                'periode' => '1920 - 1930',
                'text' => 'Béla Bartok, pianiste et compositeur hongrois travaille avec Ernest Ansermet et l\'Orchestre de la suisse romande au Victoria Hall à Genève. Le préau de l\'ancienne école du Grütli est nommé d\'après lui.'
              ],
              [
                'periode' => '1987 - 1989',
                'text' => 'Transformation du bâtiment en Maison des arts du Grütli par le bureau d\'étude Jean Stryjenski et Urs Tschumi.'
              ],
              [
                'periode' => '13 novembre 1988',
                'text' => 'Inauguration de la Maison des arts du Grütli. L\'artiste Xavier Juliot installe une sculpture gonflable sur le toit pour l\'occasion.'
              ],
              [
                'periode' => '1991',
                'text' => 'Répétitions de Cantus Planus, chorégraphie de Noémie Lapzeson dans le studio de l\'adc nommé aujourd\'hui Studio Noémie Lapzeson.'
              ],
              [
                'periode' => '22 juin 2020',
                'text' => 'Night of light. En Suisse, plus de 1000 lieux culturels s\'éclairent en rouge. Cette action vise à sensibiliser la population aux difficultés rencontrées par le secteur culturel après la pandémie de SARS-CoV2 du printemps 2020.'
              ],
              [
                'periode' => 'Août 2020',
                'text' => 'La danseuse Marthe Krummenacher crée des danses inédites pour le projet Palimpsest.'
              ]
            ]
          ],
        ]
      ],
      // Gland
      [
        'slug' => 'gland', 
        'name' => 'Gland', 
        'position' => 5,
        'published' => true,
        'locations' => [
          [
            'title' => 'Fortin Bergerie Lac',
            'subtitle' => 'Au bord de la route',
            'audio_file' => 'gland-fortin-bergerie-lac.mp3',
            'latitude' => 46.431007,
            'longitude' => 6.200011,
            'facts' => [
              [
                'periode' => '1937',
                'text' => 'Premier renforcement du terrain sur le tracé de la rivière Promenthouse. La création de cette ligne de défense répond à la protection contre la menace allemande. Elle va du pied du Jura au Lac Léman en passant par Bassins, Begnins, Vich, Gland, Prangins.'
              ],
              [
                'periode' => '1940',
                'text' => 'Construction du fortin «Bergerie Lac». Il est armé par deux canons d\'infanterie 4.7 cm et trois mitrailleuses 11 (1911). Il est géré par un commandant et seize soldats, il est opérationnel vingt-quatre heures sur vingt-quatre.'
              ],
              [
                'periode' => '1940 à 1942',
                'text' => 'Constructions des «Toblerones», ligne de défense antichars.'
              ],
              [
                'periode' => '1985',
                'text' => 'Construction du Golf du Domaine Impérial imaginé par le designer de terrains de golf Pete Dye.'
              ],
              [
                'periode' => '1995',
                'text' => 'Suite à la réforme Armée 95 les troupes disparaissent des frontières. Création de l\'Association de la Ligne fortifiée de la Promenthouse (ALFP) par d\'anciens officiers, sous-officiers et soldats soucieux de conserver le patrimoine militaire. Aménagement du fortin camouflé en villa, dit la «Villa Rose», en musée et création d\'un parcours didactique.'
              ]
            ]
          ],
        ]
      ],
      // Givrins
      [
        'slug' => 'givrins', 
        'name' => 'Givrins', 
        'position' => 6,
        'published' => true,
        'locations' => [
          [
            'title' => 'Route de la Bellangère',
            'subtitle' => 'A la sortie du village',
            'audio_file' => 'givrins-route-de-la-bellangere.mp3',
            'latitude' => 46.431007,
            'longitude' => 6.200011,
            'facts' => [
              [
                'periode' => 'Dès 1087',
                'text' => 'Village de Givrins attesté par les sources d\'archives dès 1087.'
              ],
              [
                'periode' => '1916',
                'text' => 'Création de la gare de Givrins, sur la ligne Nyon-Saint-Cergue.'
              ],
              [
                'periode' => '24 mai 1919',
                'text' => 'Création de la Fédération Vaudoise des Jeunesses Campagnardes (FVJC). «La Fédération a pour objet de coordonner les jeunes forces campagnardes en unissant les Sociétés de Jeunesse vaudoises (…). Elle s\'intéresse à toutes les questions patriotiques, économiques, sociales ou sportives, tendant au progrès de la cause agricole, viticole et montagnarde, ainsi qu\'au développement matériel, intellectuel, moral et physique de ses membres en particulier et de la communauté en général».'
              ],
              [
                'periode' => '2013',
                'text' => 'La famille Prélaz de Givrins qui gère l\'alpage La Baronne, au-dessus de La Cure, organise sa 70ème désalpe.'
              ],
              [
                'periode' => '20 au 24 juin 2018',
                'text' => '72ème giron organisé par la FVJC. Le giron est une manifestation festive et sportive. Le tir à la corde est une des épreuves phares.'
              ]
            ]
          ],
        ]
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
        'published' => true,
        'locations' => [
          [
            'title' => 'Teatro Sociale',
            'subtitle' => 'Di fronte al teatro',
            'audio_file' => 'bellinzona-teatro-sociale.mp3',
            'latitude' => 46.191224,
            'longitude' => 9.021457,
            'facts' => [
              [
                'periode' => '1847',
                'text' => 'Costruzione del Teatro Sociale su disegno dell\'architetto milanese Giacomo Moraglia, nello stile dei teatri all\'italiana e sul modello della Scala di Milano. Il teatro è edificato in parte sulle macerie delle antiche mura medievali.'
              ],
              [
                'periode' => '19 giugno 1878',
                'text' => 'Una rappresentazione dell\'opera Don Pasquale di Donizetti è trasmessa con una linea telefonica. È una prima mondiale.'
              ],
              [
                'periode' => '1894',
                'text' => 'Costruzione del ristorante lungo il teatro, dalla parte del giardino.'
              ],
              [
                'periode' => '1993-1997',
                'text' => 'Restauro del teatro nel rispetto del disegno originale. Demolizione del ristorante.'
              ],
              [
                'periode' => '22 giugno 2020',
                'text' => 'Night of light. In Svizzera oltre 1000 luoghi dedicati alla cultura sono illuminati di rosso. L\'azione vuole sensibilizzare la popolazione sulle difficoltà del settore culturale dopo la pandemia  SARS-CoV2 della primavera 2020.'
              ],
              [
                'periode' => 'Luglio 2020',
                'text' => 'La performer Camilla Parini crea delle coreografie inedite per il progetto Palimpsest.'
              ]
            ]
          ],
        ]
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