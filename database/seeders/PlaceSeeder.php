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
          ]
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
        'published' => true
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
        'published' => true
      ],
      // Zug
      [
        'slug' => 'zug', 
        'name' => 'Zug', 
        'position' => 11,
        'published' => true
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
            'slug' => \Str::slug($l['title']),
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
                'location_slug' => \Str::slug($l['title']. ' ' . $p['name']),
                'location_id' => $location->id
              ]);
            }
          }
        }
      }
    }
  }
}