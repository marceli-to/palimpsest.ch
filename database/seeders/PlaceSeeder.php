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
        'published' => true,
        'locations' => [
          [
            'title' => 'Arsenic',
            'subtitle' => 'Hall du foyer',
            'audio_file' => 'lausanne-arsenic.mp3',
            'latitude' => 46.52264370666296,
            'longitude' => 6.621673384952698,
            'facts' => [
              [
                'periode' => '1955',
                'text' => 'Construction par les architectes Brugger, Perrelet, Stalé et Quillet.'
              ],
              [
                'periode' => '1955 à 1989',
                'text' => 'Le bâtiment héberge les ateliers de l\'EPSIC (École professionnelle pour les métiers de l\'industrie et de l\'artisanat).'
              ],
              [
                'periode' => '1989',
                'text' => 'À la fin des années 1980, seules quelques institutions théâtrales existent à Lausanne (le Théâtre Municipal, aujourd\'hui devenu l\'Opéra de Lausanne, et le Théâtre de Vidy). Les artistes de la scène régionale désireux de s\'émanciper de ces institutions se voient contraints au nomadisme jusqu\'à obtenir de la Ville de Lausanne la mise à disposition de locaux qui deviendront l\'Arsenic – Centre d\'art scénique contemporain.'
              ],
              [
                'periode' => '2011 à 2013',
                'text' => 'Rénovation et transformation de l\'Arsenic par le bureau d\'architecture Pont 12. Après les rénovations, l\'Arsenic comprend sept salles de répétitions et de spectacles ainsi que des ateliers de construction, des bureaux, un grand café et une cuisine.'
              ],
              [
                'periode' => '2013',
                'text' => 'Mise en place de l\'installation lumineuse ÜBERFLUX crée par Sophie Guyot.'
              ]              
            ]
          ],
          [
            'title' => 'Gare',
            'subtitle' => 'Hall de la Gare',
            'audio_file' => 'lausanne-gare.mp3',
            'latitude' => 46.518225372760305,
            'longitude' => 6.624477198209602,
            'facts' => [
              [
                'periode' => '1856',
                'text' => 'Première gare à Lausanne par les architectes Achille de La Harpe et Jean-Baptiste Bertolini, rattachant la capitale vaudoise au premier tronçon ferroviaire du canton entre Yverdon et Bussigny.'
              ],
              [
                'periode' => '1911 à 1916',
                'text' => 'Construction de la deuxième gare de Lausanne par les architectes Monod & Laverrière et Taillens & Dubois, suite au concours de 1908. Le hall central est orné par la sculpture Le jour et la nuit, réalisé par le sculpteur genevois Carl Albert Angst.'
              ],
              [
                'periode' => '1916',
                'text' => 'Inauguration de la salle des XXII Cantons, peinte par Otto Alfred Briffod. Dès 1919, des bals y sont organisés, à la suite de banquets et d\'assemblées.'
              ]
            ]
          ],
          [
            'title' => 'Grand Pont',
            'subtitle' => 'Sur le toit de la FNAC',
            'audio_file' => 'lausanne-grand-pont.mp3',
            'latitude' => 46.52171608393021,
            'longitude' => 6.629566599582505,
            'facts' => [
              [
                'periode' => '1839 à 1844',
                'text' => 'Construction du Grand-Pont par Adrien Pichard puis par son successeur, William Fraisse, ainsi que par Henri Perregaux, en raison de la mort de Pichard en 1841.'
              ],
              [
                'periode' => 'De 1872 à 1874',
                'text' => 'Comblement de la vallée du Flon.'
              ],
              [
                'periode' => '1874',
                'text' => 'Les 5 arches inférieures du Grand-Pont sont ensevelies et sa hauteur passe de 25 mètres à 13 mètres.'
              ],
              [
                'periode' => '1908',
                'text' => 'Inauguration du Théâtre Lumen, réalisé par l\'architecte Edmond Quillet, agrandi dès 1910. En 1935, le cinéma-théâtre devient le cinéma ABC. Actuellement, ses locaux abritent le D! Club.'
              ],
              [
                'periode' => '1932',
                'text' => 'Inauguration de la tour Bel-Air réalisée par l\'ingénieur Eugène Scotoni, d\'après les plans de l\'architecte Alphonse Laverrière.'
              ],
              [
                'periode' => '8 novembre 1980',
                'text' => 'Grande manifestation dans le cadre du mouvement Lôzane bouge.'
              ],
              [
                'periode' => '2002',
                'text' => 'Réalisation de la performance filmée du chorégraphe Philippe Saire, Cartographie 2 : Les Arches, sous les arches du Grand-Pont.'
              ],
              [
                'periode' => '2 au 4 décembre 2004',
                'text' => 'Dans le cadre du festival Les Urbaines, l\'artiste Peter Regli présente Reality Hacking n° 228, une installation temporaire sur le toit de la tour Bel-Air.'
              ]
            ]
          ],
          [
            'title' => 'Montbenon',
            'subtitle' => 'Escaliers Palais de Justice',
            'audio_file' => 'lausanne-montbenon.mp3',
            'latitude' => 46.52039092288903,
            'longitude' => 6.626771788913388,
            'facts' => [
              [
                'periode' => 'Environ 15\'000 ans avant J.-C.',
                'text' => 'Retrait du glacier du Rhône après la fin de la dernière glaciation (Würm), laissant apparaître la moraine de Montbenon.'
              ],
              [
                'periode' => 'Dès le XVe siècle et jusque vers 1860',
                'text' => 'Entraînement des troupes militaires sur la place d\'arme, située à l\'emplacement actuel du Tribunal de Montbenon.'
              ],
              [
                'periode' => '31 mars 1902',
                'text' => 'Inauguration de la statue de Guillaume Tell, par Antonin Mercié, rappelant le souvenir de l\'accueil des soldats de l\'armée Bourbaki en 1871, offerte par le mécène français Daniel Iffla, dit Osiris.'
              ],
              [
                'periode' => '29 juin 1905',
                'text' => 'Première fête des écoles enfantines à Montbenon, avec cortège, jeux et collation. Lors de ce genre de fêtes, comme la Fête du bois, on danse le traditionnel picoulet.'
              ],
              [
                'periode' => '1983',
                'text' => 'Aménagement de l\'esplanade au sud du Tribunal en plusieurs terrasses, comportant une fontaine carrée.'
              ],
              [
                'periode' => '2017',
                'text' => 'Inauguration de la sculpture en acier, Double-battant, réalisée par l\'artiste Simon Deppierraz.'
              ]
            ]
          ],
          [
            'title' => 'Ouchy',
            'subtitle' => 'Pointe des Quais',
            'audio_file' => 'lausanne-ouchy.mp3',
            'latitude' => 46.50506745975126,
            'longitude' => 6.6412902049233224,
            'facts' => [
              [
                'periode' => '563',
                'text' => 'Tsunami sur le lac Léman.'
              ],
              [
                'periode' => '1861',
                'text' => 'Construction des bains Rochat par André Schmid.'
              ],
              [
                'periode' => '1896',
                'text' => 'Construction du quai d\'Ouchy, destruction des bains Rochat.'
              ],
              [
                'periode' => '1929 à 1939',
                'text' => 'Le Mât flottant, structure métallique sphérique surmontée d\'un mât agrémenté de barreaux horizontaux, fait fureur à Lausanne-Ouchy Plage, où il sert d\'attraction aquatique évoquant un culbuto.'
              ],
              [
                'periode' => '1964',
                'text' => 'Exposition nationale lors de laquelle le mésoscaphe «Auguste Piccard», construit par Jacques Piccard sur une idée de son père Auguste, est immergé pour la première fois.'
              ],
              [
                'periode' => '2017',
                'text' => 'Le mât flottant, coulé lors de la faillite de l\'établissement Lausanne-Ouchy Plage, est sorti des profondeurs au large de Vidy par le spécialiste en recherches subaquatiques, Gilbert Paillex, et placé dans la cour du Musée du Léman à Nyon.'
              ]
            ]
          ],
          [
            'title' => 'Parc de Valency',
            'subtitle' => 'Début de l\'esplanade',
            'audio_file' => 'lausanne-parc-de-valency.mp3',
            'latitude' => 46.528687,
            'longitude' => 6.613423,
            'facts' => [
              [
                'periode' => 'Fin 18ème et 19ème siècle',
                'text' => 'Campagne de Valency, où les riches Lausannois venaient passer l\'été.'
              ],
              [
                'periode' => '1906',
                'text' => 'Une pétition des propriétaires et habitants du quartier de Montétan est adressée au conseil communal visant la création d\'une place-promenade publique dans ce quartier. En réponse à cette demande le conseil communal met en place le petit parc de Montétan.'
              ],
              [
                'periode' => '1931',
                'text' => 'Une motion suivie d\'une pétition récoltant 1100 signatures réclame la création d\'un parc public à l\'ouest de la ville de Lausanne qui aboutira la même année à l\'acquisition d\'une partie de la campagne de Valency.'
              ],
              [
                'periode' => '1933 à 1939',
                'text' => 'Aménagements de la partie nord du parc (esplanade, allées de tilleuls, belvédère) pour partie selon les plans dessinés par l\'architecte Alphonse Laverrière.'
              ],
              [
                'periode' => '1939 à 1945',
                'text' => 'Pendant la seconde guerre mondiale, mise en place du plan Wahlen : le parc est transformé en champ de pommes de terre.'
              ],
              [
                'periode' => '1942',
                'text' => 'Création de la statue Le Poulain par Pierre Blanc.'
              ],
              [
                'periode' => '1950 à 1955',
                'text' => 'Aménagements de la partie sud du parc sous la direction de André Desarzens formant un parc paysager aux essences variées (séquoias, cèdres, hêtres rouges, acacias, ginkgo, catalpas). Construction d\'un escalier perpendiculaire ainsi qu\'une allée de hêtres pourpres.'
              ],
              [
                'periode' => 'Depuis 1992',
                'text' => 'Le service des parcs et domaines de la ville de Lausanne (spadom) privilégie l\'entretien différencié, puis l\'abandon progressif de l\'utilisation des pesticides dans les espaces verts communaux. Ce programme écologique mise sur une diversification des milieux naturels et végétaux adaptés aux conditions locales et la valorisation de prairies ne nécessitant plus d\'arrosage, ni d\'herbicides.'
              ],
              [
                'periode' => '2013',
                'text' => 'Tournage d\'une vidéo célébrant Noël par Gremo et Mirou (2b company, Lausanne) en collaboration avec les étudiants du Bachelor Théâtre, promotion H de la Manufacture, Haute Ecole des Arts de la Scène de Lausanne.'
              ],
              [
                'periode' => 'Depuis 2014',
                'text' => 'Pendant l\'été, Les Bobines de Valency organisent des ateliers et des projections de films tout public en plein air.'
              ],
              [
                'periode' => '2019',
                'text' => 'La 6ème édition de Lausanne Jardins accueille trois jardins dans le Parc de Valency, autour de la thématique de la pleine terre :
              L\'Incise : Ici, on incise le sol pour lire dans ses entrailles, révéler son épaisseur invisible et vivante. Réalisé par Francesco Borghini, architecte (IT) ,Alice Chénais, architecte (CH) ,Maël Féret, architecte (FR) ,Alessandro Frego, architecte (IT) ,Silvia Groaz, architecte, historienne de l\'architecture (IT) ,Antoine Vialle, architecte, urbaniste (FR).
              Cambium : La pleine terre du parc offre aux grands arbres un rare espace de liberté en ville. Ici, leurs racines peuvent s\'étendre, s\'étirer, s\'entremêler à leur guise. Cambium nous invite dans l\'intimité de deux hêtres majestueux. Réalisé par Francesco Borghini, architecte (IT) , Alice Chénais, architecte (CH) , Maël Féret, architecte (FR) , Alessandro Frego, architecte (IT) , Silvia Groaz, architecte, historienne de l\'architecture (IT), Antoine Vialle, architecte, urbaniste (FR).
              Bal-yssage : Des balançoires géantes font leur apparition en haut du parc de Valency. Réalisé par Les Nouveaux Voisins (FR), Nicolas Grun, architecte (FR), Pierre Laurent, architecte (FR).'
              ]
            ]
          ],
          [
            'title' => 'Petit parc à la fontaine',
            'subtitle' => 'Devant la charmille',
            'audio_file' => 'lausanne-petit-parc-a-la-fontaine.mp3',
            'latitude' => 46.525967,
            'longitude' => 6.619279,
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
            'title' => 'Promenade Jean Villars Gilles',
            'subtitle' => 'Gradins de l\'amphithéâtre',
            'audio_file' => 'lausanne-promenade-jean-villars-gilles.mp3',
            'latitude' => 46.518406,
            'longitude' => 6.636320,
            'facts' => [
              [
                'periode' => '1871',
                'text' => 'Ouverture du Casino-Théâtre à Georgette, une salle de spectacle d\'une capacité de 800 places, aujourd\'hui l\'Opéra de Lausanne.'
              ],
              [
                'periode' => '1934',
                'text' => 'Le théâtre municipal (aujourd\'hui l\'Opéra) de Lausanne accueille Mary Wigman, grande figure de la danse expressive allemande. Elle y danse une série de solos.'
              ],
              [
                'periode' => '1981',
                'text' => 'Inauguration de la promenade. Elle sera dédiée à Jean-Villard Gilles (1895 – 1982), chansonnier, écrivain, poète et comédien vaudois quelques mois après sa mort.'
              ],
              [
                'periode' => '1993',
                'text' => 'Installation de la statue Jean-Villard Gilles réalisée par le sculpteur Jacques Barman.'
              ],
              [
                'periode' => '2010 à 2012',
                'text' => 'Grande rénovation de l\'opéra par le bureau d\'architectes Devanthéry & Lamunière. Une cage de scène de 18m de haut y est installée.'
              ],
              [
                'periode' => '2019',
                'text' => 'La 6ème édition de Lausanne Jardins accueille l\'installation La Grande Pimprenelle : C\'est à l\'amphithéâtre de la promenade Jean-Villard Gilles, que La Grande Pimprenelle enfile avec naturel son costume de pétales rouge foncé. Une quinzaine de plantes vivaces se partagent la scène. Promeneuses et promeneurs, venez admirer la comédie des fleurs ! Réalisé par : Helen Wyss, architecte, historienne (CH), Johanna Ballhaus, architecte paysagiste (DE/US).'
              ]
            ]
          ],
          [
            'title' => 'Riponne',
            'subtitle' => 'Escaliers Palais de Rumine',
            'audio_file' => 'lausanne-riponne.mp3',
            'latitude' => 46.523741,
            'longitude' => 6.633434,
            'facts' => [
              [
                'periode' => 'Vers 1812',
                'text' => 'Commencement du comblement de la vallée de la Louve, qui va s\'étendre sur de nombreuses années.'
              ],
              [
                'periode' => '1838 à 1840',
                'text' => 'Construction de la grenette, halle aux grains, par Henri Fraisse.'
              ],
              [
                'periode' => '1915',
                'text' => 'Dans la grenette, répétition du ballet Sadko par les Ballets Russes sous la direction de Serge Diaghilev.'
              ],
              [
                'periode' => '1er novembre 1915',
                'text' => 'Exposition d\'aviculture dans la grenette.'
              ],
              [
                'periode' => '1933',
                'text' => 'Démolition de la grenette.'
              ],
              [
                'periode' => '1987 à 2007',
                'text' => 'Le chorégraphe Maurice Béjart habite à Lausanne dans un appartement à la place de la Riponne 4.'
              ],
              [
                'periode' => '9 septembre 1993',
                'text' => 'Inauguration de la fontaine carrée appelée Eau-de-Vie, réalisée par les artistes Sylvia Krens et René Schmid. Elle reprend approximativement l\'emplacement du jet d\'eau temporaire installé à l\'occasion du Tir Fédéral en 1876.'
              ],
              [
                'periode' => '14 juin au 14 octobre 1997',
                'text' => 'Création d\'une treille de glycines sur la place de la Riponne dans le cadre de la première édition de Lausanne Jardins.'
              ],
              [
                'periode' => '9 au 14 décembre 2008',
                'text' => 'Création de Living-room dancers de la chorégraphe Nicole Seiler en co-production avec le Théâtre de l\'Arsenic.'
              ]
            ]
          ],
          [
            'title' => 'Rumine 13',
            'subtitle' => 'Devant le front garden',
            'audio_file' => 'lausanne-rumine-13.mp3',
            'latitude' => 46.517104,
            'longitude' => 6.640134,
            'facts' => [
              [
                'periode' => 'Dès le 17ème siècle',
                'text' => 'Le mot chamane ou chaman est connu dès le XVIIe siècle. Il entre officiellement dans la langue française en 1842. Saman est un mot de la langue evenki qui signifie « danser, bondir, remuer, s\'agiter ». Les Evenks sont un des peuples Tongouses de Sibérie. Pendant la transe, l\'âme du chaman voyage entre la terre, la lune, le soleil et les profondeurs de la terre.'
              ],
              [
                'periode' => '1972',
                'text' => 'Tatsumi Hiijakata, chorégraphie la pièce Hôsôtan. Hiijakata est considéré avec Kazuo Ohno comme cofondateur du butô, terme généralement traduit par « danse des ténèbres ». « Qu\'est-ce qui se passerait si on posait une échelle dans le corps et qu\'on descende au plus profond ? » se demandait-il.'
              ],
              [
                'periode' => '2019',
                'text' => 'La 6ème édition de Lausanne Jardins accueille l\'installation Réveiller les gardiens de la terre endormis : une multitude de créatures d\'argile rampent, sortent de terre et forment un petit jardin hors du temps. Un jardin de ruines, de fossiles et de vie. Sont-ce les témoins d\'une civilisation passée ? Le fruit d\'un rituel magique ?'
              ]
            ]
          ],
          [
            'title' => 'St. François',
            'subtitle' => 'Escaliers de l\'église',
            'audio_file' => 'lausanne-st-francois.mp3',
            'latitude' => 46.519732,
            'longitude' => 6.632887,
            'facts' => [
              [
                'periode' => '1258',
                'text' => 'Début de la construction, par des moines franciscains, d\'un couvent et de l\'église St. François en bordure sud de la ville.'
              ],
              [
                'periode' => '1368',
                'text' => 'Seul le chœur de l\'église, entièrement construit en pierre, résiste à l\'incendie qui ravage la ville de Lausanne.'
              ],
              [
                'periode' => '1536',
                'text' => 'Le réformateur Pierre Viret prêche la Réforme à Lausanne pour la première fois du haut de la chaire construite au début du 16ème siècle. L\'église St. François, jusque-là lieu de culte catholique, devient alors un temple protestant.'
              ],
              [
                'periode' => '1605',
                'text' => 'Décoration des ogives de la nef.'
              ],
              [
                'periode' => '1777',
                'text' => 'Construction de l\'orgue de l\'église St. François par le facteur Samson Scherrer du Toggenburg (CH).'
              ],
              [
                'periode' => '1900',
                'text' => 'Construction de l\'hôtel des Postes par l\'architecte Eugène Jost à la Place St. François 15.'
              ],
              [
                'periode' => '1907',
                'text' => 'Création par Clément Heaton des quatre vitraux centraux du chœur. Comme les maîtres verriers du Moyen Age, il fabriquait son verre lui-même.'
              ],
              [
                'periode' => '1976 à 1980',
                'text' => 'Aménagement de la Place St. François : création d\'une zone piétonnière sur toute la partie nord de la place, plantation de platanes et de tilleuls et construction de deux passages souterrains pour les piétons.'
              ],
              [
                'periode' => '1990 à 1997',
                'text' => 'Grande rénovation de l\'église St. François.'
              ],
              [
                'periode' => '1996',
                'text' => 'Inauguration de la porte de bronze créée par la sculptrice zurichoise Katharina Sallenbach pour l\'entrée principale de l\'église St. François.'
              ],
              [
                'periode' => '2016',
                'text' => 'Création de l\'installation 9.5 sur l\'échelle de Luther par Sandrine Pelletier pour l\'église St. François. 95 échelles brulées posées à même le sol et mesurant parfois près de dix mètres investissent le volume entier du monument. Des coulures de verre transparentes posées sur deux vitraux latéraux complètent l\'intervention de l\'artiste.'
              ],
              [
                'periode' => '14 et 15 mars 2019',
                'text' => 'La Ronde, spectacle chorégraphique de Yasmine Hugonnet est joué dans l\'église.'
              ],
              [
                'periode' => '2019',
                'text' => 'La 6ème édition de Lausanne Jardins accueille plusieurs jardins à St. François :
              L\'eau et vous : Un jet d\'eau qui interrompt un instant le flux de la circulation et de nos pensées. L\'eau jaillissant des tréfonds du sol urbain, comme une force de la nature qui reprendrait subitement ses droits. Réalisé par USUS Landschaftsarchitektur AG, Zurich (CH) et DOSCRE Donet Schäfer Reimer Architekten GmbH, Zurich (CH).
              Futur âge de pierre : Les micro-organismes sont les premiers êtres vivants à avoir peuplé la planète. Ils l\'ont modelée, ils l\'ont façonnée. Futur âge de pierre nous invite dans l\'atelier de Sphingomonas elodea, une bactérie qui transforme le sable en pierre et la sculpte. Réalisé par Manon Briod, designer (CH), Florian Fischbacher, journaliste (CH), Mathieu Pochon, ingénieur en environnement (CH).
              Portrait d\'un arbre : Huit grands platanes jaillissent du pavage de granit de la place Saint-François. Malgré l\'enchevêtrement souterrain, il reste encore un endroit suffisamment généreux en pleine terre pour pouvoir accueillir un neuvième arbre. C\'est sur cette zone, qu\'à la nuit venue, se projette le portrait fantôme de ce neuvième platane. Réalisé par Raphaël Dessimoz, architecte (CH), Loïc Fumeaux, architecte (CH), Amélie Poncety, architecte (CH), Tancrède Ottiger, graphiste (CH), Cédric Prada, jardinier paysagiste (CH).'
              ]
            ]
          ],
        ]
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
        'published' => true,
        'locations' => [
          [
            'title' => 'Banannefabrik',
            'subtitle' => '19 Rue du Puit',
            'audio_file' => 'luxembourg-banannefabrik.mp3',
            'latitude' => 49.598300853564304,
            'longitude' => 6.1357810469342144,
            'facts' => [
              [
                'periode' => '1960',
                'text' => 'Construction du bâtiment par la société Coprilux'
              ],
              [
                'periode' => '1960-1990',
                'text' => 'Les habitants du quartier donnent aux bâtiment le nom "Banannefabrik", qui a servi de dépôt de fruits et légumes.'
              ],
              [
                'periode' => 'Années 1990',
                'text' => 'La Banannefabrik est réquitisionnée par la culture.'
              ],
              [
                'periode' => '2011',
                'text' => 'Inauguration du CPCA - Centre de production et de création artistique) qui regroupe cinq institutions culturelles luxembourgeoises, dont le TROIS C-L – Centre de Création Chorégraphique Luxembourgeois.'
              ],
              [
                'periode' => '2013',
                'text' => 'L\'artiste Trixi Weiss réalise l\'installation permanente Swirling Memories.'
              ],
              [
                'periode' => '2017',
                'text' => 'Création de TOYS par la chorégraphe Léa Tirabasso.'
              ],
              [
                'periode' => '2018',
                'text' => 'Création de The Ephemeral life of an octopus par la chorégraphe Léa Tirabasso.'
              ],
              [
                'periode' => 'Juillet 2020',
                'text' => 'La chorégraphe Léa Tirabasso crée des danses inédites pour le projet Palimpsest.'
              ]
            ]
          ]
        ]
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