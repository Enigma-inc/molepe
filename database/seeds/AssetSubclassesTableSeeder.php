<?php


use App\AssetClass;
use App\AssetSubclass;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;


class AssetSubclassesTableSeeder extends Seeder
{
    public function run()
    {
        //$faker = Faker::create();

        //$assetClassesIds=AssetClass::lists('id');
       // $minUsefulLives=[3,5,8,12,15];


       /* foreach(range(1,50) as $index)
        {
            $minLife=$faker->randomElement($minUsefulLives);
         AssetSubclass::create([
                'name'=>'Asset Subclass '.$index,
                'description'=>$faker->sentence(10),
                'min_useful_life'=>$minLife,
                'max_useful_life'=>$minLife+$faker->randomElement($minUsefulLives),
                'asset_class_id'=>$faker->randomElement($assetClassesIds->toArray())
            ]);
        }*/


AssetSubclass::create( [
            'name'=>'Developed land',
'asset_class_id'=>1
] );



AssetSubclass::create( [
    'name'=>'Undeveloped land',
'asset_class_id'=>1
] );



AssetSubclass::create( [
    'name'=>'Caravans',
'asset_class_id'=>2
] );



AssetSubclass::create( [
    'name'=>'Children’s homes',
'asset_class_id'=>2
] );



AssetSubclass::create( [
    'name'=>'Foreign mission dwellings',
'asset_class_id'=>2
] );



AssetSubclass::create( [
    'name'=>'Homes for the aged',
'asset_class_id'=>2
] );



AssetSubclass::create( [
    'name'=>'Hostels',
'asset_class_id'=>2
] );



AssetSubclass::create( [
    'name'=>'Military personnel dwellings',
'asset_class_id'=>2
] );



AssetSubclass::create( [
    'name'=>'Mobile homes',
'asset_class_id'=>2
] );



AssetSubclass::create( [
    'name'=>'Places of safety (children)',
'asset_class_id'=>2
] );



AssetSubclass::create( [
    'name'=>'Prisons and rehabilitation facilities',
'asset_class_id'=>2
] );



AssetSubclass::create( [
    'name'=>'Residences (presidential, embassies)',
'asset_class_id'=>2
] );



AssetSubclass::create( [
    'name'=>'Residences (personnel) include garages and parking',
'asset_class_id'=>2
] );



AssetSubclass::create( [
    'name'=>'Secure care centres',
'asset_class_id'=>2
] );



AssetSubclass::create( [
    'name'=>'Airport and associated buildings((control towers, transfer halls, parking, hangars and warehousing)',
'asset_class_id'=>3
] );



AssetSubclass::create( [
    'name'=>'Border and custom control points',
'asset_class_id'=>3
] );



AssetSubclass::create( [
    'name'=>'Bus terminals',
'asset_class_id'=>3
] );



AssetSubclass::create( [
    'name'=>'Bus shelters',
'asset_class_id'=>3
] );



AssetSubclass::create( [
    'name'=>'Civic theatres',
'asset_class_id'=>3
] );



AssetSubclass::create( [
    'name'=>'Clinics and community health facilities',
'asset_class_id'=>3
] );



AssetSubclass::create( [
    'name'=>'Community centres and public entertainment buildings',
'asset_class_id'=>3
] );



AssetSubclass::create( [
    'name'=>'Driver and vehicle testing centres',
'asset_class_id'=>3
] );



AssetSubclass::create( [
    'name'=>'Fire stations',
'asset_class_id'=>3
] );



AssetSubclass::create( [
    'name'=>'Foreign mission offices',
'asset_class_id'=>3
] );



AssetSubclass::create( [
    'name'=>'Hospitals and ambulance stations',
'asset_class_id'=>3
] );



AssetSubclass::create( [
    'name'=>'Industrial buildings',
'asset_class_id'=>3
] );



AssetSubclass::create( [
    'name'=>'Laboratories',
'asset_class_id'=>3
] );



AssetSubclass::create( [
    'name'=>'Libraries',
'asset_class_id'=>3
] );



AssetSubclass::create( [
    'name'=>'Mortuaries',
'asset_class_id'=>3
] );



AssetSubclass::create( [
    'name'=>'Museums and art galleries',
'asset_class_id'=>3
] );



AssetSubclass::create( [
    'name'=>'Office buildings (including air conditioning systems)',
'asset_class_id'=>3
] );



AssetSubclass::create( [
    'name'=>'Public parking (covered and open)',
'asset_class_id'=>3
] );



AssetSubclass::create( [
    'name'=>'Police stations (and associated buildings)',
'asset_class_id'=>3
] );



AssetSubclass::create( [
    'name'=>'Railway and associated buildings',
'asset_class_id'=>3
] );



AssetSubclass::create( [
    'name'=>'Research facilities (including weather)',
'asset_class_id'=>3
] );



AssetSubclass::create( [
    'name'=>'Stadiums',
'asset_class_id'=>3
] );



AssetSubclass::create( [
    'name'=>'Taxi ranks',
'asset_class_id'=>3
] );



AssetSubclass::create( [
    'name'=>'Universities, colleges, schools etc.',
'asset_class_id'=>3
] );



AssetSubclass::create( [
    'name'=>'Warehouses (storage facilities, including data)',
'asset_class_id'=>3
] );



AssetSubclass::create( [
    'name'=>'Cooling towers',
'asset_class_id'=>4
] );



AssetSubclass::create( [
    'name'=>'Mains',
'asset_class_id'=>4
] );



AssetSubclass::create( [
    'name'=>'Meters  - Prepaid',
'asset_class_id'=>4
] );



AssetSubclass::create( [
    'name'=>'Meters - Credit',
'asset_class_id'=>4
] );



AssetSubclass::create( [
    'name'=>'Power stations -Coal',
'asset_class_id'=>4
] );



AssetSubclass::create( [
    'name'=>'Power stations - Gas',
'asset_class_id'=>4
] );



AssetSubclass::create( [
    'name'=>'Power stations - Hydro',
'asset_class_id'=>4
] );



AssetSubclass::create( [
    'name'=>'Power stations - Nuclear',
'asset_class_id'=>4
] );



AssetSubclass::create( [
    'name'=>'Supply/reticulation',
'asset_class_id'=>4
] );



AssetSubclass::create( [
    'name'=>'Transformers',
'asset_class_id'=>4
] );



AssetSubclass::create( [
    'name'=>'Lines - Underground',
'asset_class_id'=>4
] );



AssetSubclass::create( [
    'name'=>'Lines - Overhead',
'asset_class_id'=>4
] );



AssetSubclass::create( [
    'name'=>'Cables',
'asset_class_id'=>4
] );



AssetSubclass::create( [
    'name'=>'Substations - Switchgear',
'asset_class_id'=>4
] );



AssetSubclass::create( [
    'name'=>'Substations - Equipment - Outdoor',
'asset_class_id'=>4
] );



AssetSubclass::create( [
    'name'=>'Substations - Equipment -GIS',
'asset_class_id'=>4
] );



AssetSubclass::create( [
    'name'=>'Substation - Equipment - Indoor',
'asset_class_id'=>4
] );



AssetSubclass::create( [
    'name'=>'Electrical panels',
'asset_class_id'=>4
] );



AssetSubclass::create( [
    'name'=>'Telemetry',
'asset_class_id'=>4
] );



AssetSubclass::create( [
    'name'=>'Vehicle - Bridges - Concrete',
'asset_class_id'=>5
] );



AssetSubclass::create( [
    'name'=>'Vehicle - Bridges - Steel',
'asset_class_id'=>5
] );



AssetSubclass::create( [
    'name'=>'Vehicle - Bridges - Timber',
'asset_class_id'=>5
] );



AssetSubclass::create( [
    'name'=>'Vehicle - Pedestrian',
'asset_class_id'=>5
] );



AssetSubclass::create( [
    'name'=>'Pedestrian - Bridges - Concrete',
'asset_class_id'=>5
] );



AssetSubclass::create( [
    'name'=>'Pedestrian - Bridges – Steel',
'asset_class_id'=>5
] );



AssetSubclass::create( [
    'name'=>'pedestrian - Bridges – Timber',
'asset_class_id'=>5
] );



AssetSubclass::create( [
    'name'=>'Railway - Bridges - Concrete',
'asset_class_id'=>5
] );



AssetSubclass::create( [
    'name'=>'Railway - Bridges – Steel',
'asset_class_id'=>5
] );



AssetSubclass::create( [
    'name'=>'Railway - Bridges - Timber',
'asset_class_id'=>5
] );



AssetSubclass::create( [
    'name'=>'Reinforced retaining walls - Earth',
'asset_class_id'=>5
] );



AssetSubclass::create( [
    'name'=>'Reinforced retaining walls - Concrete',
'asset_class_id'=>5
] );



AssetSubclass::create( [
    'name'=>'Expansion and construction joints',
'asset_class_id'=>5
] );



AssetSubclass::create( [
    'name'=>'Capitalised development costs',
    'asset_class_id'=>22
] );



AssetSubclass::create( [
    'name'=>'Computer software',
    'asset_class_id'=>22
] );



AssetSubclass::create( [
    'name'=>'Mastheads and publishing titles',
    'asset_class_id'=>22
] );



AssetSubclass::create( [
    'name'=>'Patents, licences, copyrights, brand names and trademarks',
    'asset_class_id'=>22
] );



AssetSubclass::create( [
    'name'=>'Recipes, formulae, prototypes, designs and models',
    'asset_class_id'=>22
] );



AssetSubclass::create( [
    'name'=>'Service and operating rights',
    'asset_class_id'=>22
] );



AssetSubclass::create( [
    'name'=>'Other intangibles',
    'asset_class_id'=>22
] );



AssetSubclass::create( [
    'name'=>'Dairy cattle',
    'asset_class_id'=>20
] );



AssetSubclass::create( [
    'name'=>'Feathered animals (for eggs and feathers)',
    'asset_class_id'=>20
] );



AssetSubclass::create( [
    'name'=>'Forests and plantations',
    'asset_class_id'=>20
] );



AssetSubclass::create( [
    'name'=>'Fruit trees',
    'asset_class_id'=>20
] );



AssetSubclass::create( [
    'name'=>'Culverts - Concrete',
'asset_class_id'=>6
] );



AssetSubclass::create( [
    'name'=>'Game animals',
    'asset_class_id'=>20
] );



AssetSubclass::create( [
    'name'=>'Animals for reproduction (cattle, goats, sheep, pigs)',
    'asset_class_id'=>20
] );



AssetSubclass::create( [
    'name'=>'Culverts - Armco',
'asset_class_id'=>6
] );



AssetSubclass::create( [
    'name'=>'Animals for wool or milk (goats and sheep)',
    'asset_class_id'=>20
] );



AssetSubclass::create( [
    'name'=>'Dogs (law enforcement and security)',
    'asset_class_id'=>20
] );



AssetSubclass::create( [
    'name'=>'Horses (law enforcement and working)',
    'asset_class_id'=>20
] );



AssetSubclass::create( [
    'name'=>'Drains - Earthworks',
'asset_class_id'=>6
] );



AssetSubclass::create( [
    'name'=>'Plants (for production of seeds)',
    'asset_class_id'=>20
] );



AssetSubclass::create( [
    'name'=>'Vines',
    'asset_class_id'=>20
] );



AssetSubclass::create( [
    'name'=>'Other animals',
    'asset_class_id'=>20
] );



AssetSubclass::create( [
    'name'=>'Drains - Earthworks',
'asset_class_id'=>6
] );



AssetSubclass::create( [
    'name'=>'Archives',
    'asset_class_id'=>19
] );



AssetSubclass::create( [
    'name'=>'Areas of land of historic or specific significance (i.e. world heritage site)',
    'asset_class_id'=>19
] );



AssetSubclass::create( [
    'name'=>'Drains - Concrete lining',
'asset_class_id'=>6
] );



AssetSubclass::create( [
    'name'=>'Culturally significant buildings (parliamentary buildings)',
    'asset_class_id'=>19
] );



AssetSubclass::create( [
    'name'=>'Stop banks',
'asset_class_id'=>6
] );



AssetSubclass::create( [
    'name'=>'National monuments',
    'asset_class_id'=>19
] );



AssetSubclass::create( [
    'name'=>'Pipes',
'asset_class_id'=>6
] );



AssetSubclass::create( [
    'name'=>'National parks/reserves (i.e. Kruger Park)',
    'asset_class_id'=>19
] );



AssetSubclass::create( [
    'name'=>'Paintings',
    'asset_class_id'=>19
] );



AssetSubclass::create( [
    'name'=>'Sculptures',
    'asset_class_id'=>19
] );



AssetSubclass::create( [
    'name'=>'Coastal - Structure (Retaining walls)',
'asset_class_id'=>6
] );



AssetSubclass::create( [
    'name'=>'Municipal jewellery',
    'asset_class_id'=>19
] );



AssetSubclass::create( [
    'name'=>'Works of art',
    'asset_class_id'=>19
] );



AssetSubclass::create( [
    'name'=>'Other antiques and collections',
    'asset_class_id'=>19
] );



AssetSubclass::create( [
    'name'=>'Coastal - Piers',
'asset_class_id'=>6
] );



AssetSubclass::create( [
    'name'=>'Aircraft',
    'asset_class_id'=>18
] );



AssetSubclass::create( [
    'name'=>'Aircraft engines',
    'asset_class_id'=>18
] );



AssetSubclass::create( [
    'name'=>'Airport transport equipment (stairs and luggage)',
    'asset_class_id'=>18
] );



AssetSubclass::create( [
    'name'=>'Busses',
    'asset_class_id'=>18
] );



AssetSubclass::create( [
    'name'=>'Coastal - Storm water outfalls',
'asset_class_id'=>6
] );



AssetSubclass::create( [
    'name'=>'Cycles',
    'asset_class_id'=>18
] );



AssetSubclass::create( [
    'name'=>'Emergency vehicles (Ambulances and fire engines)',
    'asset_class_id'=>18
] );



AssetSubclass::create( [
    'name'=>'Kerb and channels',
'asset_class_id'=>7
] );



AssetSubclass::create( [
    'name'=>'Mobile clinics',
    'asset_class_id'=>18
] );



AssetSubclass::create( [
    'name'=>'Motor vehicles',
    'asset_class_id'=>18
] );



AssetSubclass::create( [
    'name'=>'Municipal roads - Asphalt surface',
'asset_class_id'=>7
] );



AssetSubclass::create( [
    'name'=>'Municipal roads - Asphalt layer',
'asset_class_id'=>7
] );



AssetSubclass::create( [
    'name'=>'Railway rolling stock',
    'asset_class_id'=>18
] );



AssetSubclass::create( [
    'name'=>'Ships',
    'asset_class_id'=>18
] );



AssetSubclass::create( [
    'name'=>'Ships engines',
    'asset_class_id'=>18
] );



AssetSubclass::create( [
    'name'=>'Trailers and accessories',
    'asset_class_id'=>18
] );



AssetSubclass::create( [
    'name'=>'Trucks',
    'asset_class_id'=>18
] );



AssetSubclass::create( [
    'name'=>'Computer hardware including operating systems',
    'asset_class_id'=>17
] );



AssetSubclass::create( [
    'name'=>'Networks',
    'asset_class_id'=>17
] );



AssetSubclass::create( [
    'name'=>'Municipal roads - - Gravel surface',
'asset_class_id'=>7
] );



AssetSubclass::create( [
    'name'=>'Advertising boards',
    'asset_class_id'=>16
] );



AssetSubclass::create( [
    'name'=>'National roads - Asphalt surface',
'asset_class_id'=>7
] );



AssetSubclass::create( [
    'name'=>'Air conditioners (individual fixed & portable)',
    'asset_class_id'=>16
] );



AssetSubclass::create( [
    'name'=>'Cutlery and crockery',
    'asset_class_id'=>16
] );



AssetSubclass::create( [
    'name'=>'Domestic and hostel furniture',
    'asset_class_id'=>16
] );



AssetSubclass::create( [
    'name'=>'Linen and soft furnishings',
    'asset_class_id'=>16
] );



AssetSubclass::create( [
    'name'=>'Office equipment (including fax machines)',
    'asset_class_id'=>16
] );



AssetSubclass::create( [
    'name'=>'National roads - Concrete surface',
'asset_class_id'=>7
] );



AssetSubclass::create( [
    'name'=>'Office furniture',
    'asset_class_id'=>16
] );



AssetSubclass::create( [
    'name'=>'Paintings, sculptures, ornaments (home and office)',
    'asset_class_id'=>16
] );



AssetSubclass::create( [
    'name'=>'Audiovisual equipment',
    'asset_class_id'=>15
] );



AssetSubclass::create( [
    'name'=>'Building air conditioning systems',
    'asset_class_id'=>15
] );



AssetSubclass::create( [
    'name'=>'Cellular phones (over R5 000)',
    'asset_class_id'=>15
] );



AssetSubclass::create( [
    'name'=>'Cellular routers',
    'asset_class_id'=>15
] );



AssetSubclass::create( [
    'name'=>'Domestic equipment (non kitchen appliances)',
    'asset_class_id'=>15
] );



AssetSubclass::create( [
    'name'=>'Electric wire and power distribution equipment (compressors, generators & allied equipment)',
    'asset_class_id'=>15
] );



AssetSubclass::create( [
    'name'=>'Emergency/rescue equipment',
    'asset_class_id'=>15
] );



AssetSubclass::create( [
    'name'=>'Elevator systems',
    'asset_class_id'=>15
] );



AssetSubclass::create( [
    'name'=>'Farm/Agricultural equipment',
    'asset_class_id'=>15
] );



AssetSubclass::create( [
    'name'=>'Fire Fighting equipment',
    'asset_class_id'=>15
] );



AssetSubclass::create( [
    'name'=>'Gardening equipment',
    'asset_class_id'=>15
] );



AssetSubclass::create( [
    'name'=>'Irrigation equipment',
    'asset_class_id'=>15
] );



AssetSubclass::create( [
    'name'=>'Kitchen appliances',
    'asset_class_id'=>15
] );



AssetSubclass::create( [
    'name'=>'Laboratory equipment - Agricultural',
    'asset_class_id'=>15
] );



AssetSubclass::create( [
    'name'=>'Laboratory equipment - Medical testing',
    'asset_class_id'=>15
] );



AssetSubclass::create( [
    'name'=>'Municipal roads - Concrete layer',
'asset_class_id'=>7
] );



AssetSubclass::create( [
    'name'=>'Laboratory equipment - Roads and transport',
    'asset_class_id'=>15
] );



AssetSubclass::create( [
    'name'=>'Laundry equipment and industrial sewing machines',
    'asset_class_id'=>15
] );



AssetSubclass::create( [
    'name'=>'Learning, training support and library material (curriculum equipment)',
    'asset_class_id'=>15
] );



AssetSubclass::create( [
    'name'=>'Machines for metallurgy',
    'asset_class_id'=>15
] );



AssetSubclass::create( [
    'name'=>'Machines for mining and quarrying',
    'asset_class_id'=>15
] );



AssetSubclass::create( [
    'name'=>'Machines for textile production',
    'asset_class_id'=>15
] );



AssetSubclass::create( [
    'name'=>'Medical and allied equipment',
    'asset_class_id'=>15
] );



AssetSubclass::create( [
    'name'=>'Music instruments',
    'asset_class_id'=>15
] );



AssetSubclass::create( [
    'name'=>'Photographic equipment',
    'asset_class_id'=>15
] );



AssetSubclass::create( [
    'name'=>'Municipal roads - Concrete surface',
'asset_class_id'=>7
] );



AssetSubclass::create( [
    'name'=>'Pumps, plumbing, purification and sanitation equipment',
    'asset_class_id'=>15
] );



AssetSubclass::create( [
    'name'=>'Radio equipment',
    'asset_class_id'=>15
] );



AssetSubclass::create( [
    'name'=>'Road construction and maintenance equipment',
    'asset_class_id'=>15
] );



AssetSubclass::create( [
    'name'=>'Saddles and other tack',
    'asset_class_id'=>15
] );



AssetSubclass::create( [
    'name'=>'Security equipment/systems/ materials - Fixed',
    'asset_class_id'=>15
] );



AssetSubclass::create( [
    'name'=>'Security equipment/systems/ materials - Movable',
    'asset_class_id'=>15
] );



AssetSubclass::create( [
    'name'=>'Ship and marine equipment',
    'asset_class_id'=>15
] );



AssetSubclass::create( [
    'name'=>'Sport and recreational equipment',
    'asset_class_id'=>15
] );



AssetSubclass::create( [
    'name'=>'Survey equipment',
    'asset_class_id'=>15
] );



AssetSubclass::create( [
    'name'=>'National roads - Asphalt layer',
'asset_class_id'=>7
] );



AssetSubclass::create( [
    'name'=>'Telecommunication equipment',
    'asset_class_id'=>15
] );



AssetSubclass::create( [
    'name'=>'Tents, flags and accessories',
    'asset_class_id'=>15
] );



AssetSubclass::create( [
    'name'=>'Woodworking machinery and equipment',
    'asset_class_id'=>15
] );



AssetSubclass::create( [
    'name'=>'Workshop equipment and loose tools - Fixed',
    'asset_class_id'=>15
] );



AssetSubclass::create( [
    'name'=>'National roads - Concrete layer',
'asset_class_id'=>7
] );



AssetSubclass::create( [
    'name'=>'Workshop equipment and loose tools - Movable',
    'asset_class_id'=>15
] );



AssetSubclass::create( [
    'name'=>'Buildings',
    'asset_class_id'=>14
] );



AssetSubclass::create( [
    'name'=>'National roads - Gravel surface',
'asset_class_id'=>7
] );



AssetSubclass::create( [
    'name'=>'Infrastructure',
    'asset_class_id'=>14
] );



AssetSubclass::create( [
    'name'=>'Other',
    'asset_class_id'=>14
] );



AssetSubclass::create( [
    'name'=>'Provincial roads - Asphalt surface',
'asset_class_id'=>7
] );



AssetSubclass::create( [
    'name'=>'Provincial roads - Asphalt layer',
'asset_class_id'=>7
] );



AssetSubclass::create( [
    'name'=>'Toll road plazas',
'asset_class_id'=>7
] );



AssetSubclass::create( [
    'name'=>'Traffic signs',
'asset_class_id'=>7
] );



AssetSubclass::create( [
    'name'=>'Traffic lights – coastal',
'asset_class_id'=>7
] );



AssetSubclass::create( [
    'name'=>'Traffic lights',
'asset_class_id'=>7
] );



AssetSubclass::create( [
    'name'=>'Traffic islands',
'asset_class_id'=>7
] );



AssetSubclass::create( [
    'name'=>'Subways',
'asset_class_id'=>7
] );



AssetSubclass::create( [
    'name'=>'Street lighting',
'asset_class_id'=>7
] );



AssetSubclass::create( [
    'name'=>'Provincial roads - Concrete surface',
'asset_class_id'=>7
] );



AssetSubclass::create( [
    'name'=>'Pedestrian footpaths',
'asset_class_id'=>7
] );



AssetSubclass::create( [
    'name'=>'Overload control centres',
'asset_class_id'=>7
] );



AssetSubclass::create( [
    'name'=>'Overload control centres - Electronic hardware',
'asset_class_id'=>7
] );



AssetSubclass::create( [
    'name'=>'Provincial roads  - Concrete layer',
'asset_class_id'=>7
] );



AssetSubclass::create( [
    'name'=>'Overload control centres - Other equipment',
'asset_class_id'=>7
] );



AssetSubclass::create( [
    'name'=>'Retaining walls',
'asset_class_id'=>7
] );



AssetSubclass::create( [
    'name'=>'Provincial roads - Gravel surface',
'asset_class_id'=>7
] );



AssetSubclass::create( [
    'name'=>'Crash barriers',
'asset_class_id'=>7
] );



AssetSubclass::create( [
    'name'=>'Airports and radio beacons',
'asset_class_id'=>8
] );



AssetSubclass::create( [
    'name'=>'Aprons',
'asset_class_id'=>8
] );



AssetSubclass::create( [
    'name'=>'Runways',
'asset_class_id'=>8
] );



AssetSubclass::create( [
    'name'=>'Taxiways',
'asset_class_id'=>8
] );



AssetSubclass::create( [
    'name'=>'Specialised equipment - Luggage movement equipment',
'asset_class_id'=>8
] );



AssetSubclass::create( [
    'name'=>'Specialised equipment - Communication equipment',
'asset_class_id'=>8
] );



AssetSubclass::create( [
    'name'=>'Dams - Structure - concrete',
'asset_class_id'=>9
] );



AssetSubclass::create( [
    'name'=>'Dams - Structure - Earth',
'asset_class_id'=>9
] );



AssetSubclass::create( [
    'name'=>'Dams - Mechanical and electrical',
'asset_class_id'=>9
] );



AssetSubclass::create( [
    'name'=>'Meters',
'asset_class_id'=>9
] );



AssetSubclass::create( [
    'name'=>'Standpipes',
'asset_class_id'=>9
] );



AssetSubclass::create( [
    'name'=>'Metalwork (steel stairs, ladders, handrails, weirs)',
'asset_class_id'=>9
] );



AssetSubclass::create( [
    'name'=>'Pump stations - Structure',
'asset_class_id'=>9
] );



AssetSubclass::create( [
    'name'=>'Pump stations - Electrical',
'asset_class_id'=>9
] );



AssetSubclass::create( [
    'name'=>'Pump stations - mechanical',
'asset_class_id'=>9
] );



AssetSubclass::create( [
    'name'=>'Pump stations - perimeter Protection',
'asset_class_id'=>9
] );



AssetSubclass::create( [
    'name'=>'Reservoirs - Structure',
'asset_class_id'=>9
] );



AssetSubclass::create( [
    'name'=>'Reservoirs - Electrical',
'asset_class_id'=>9
] );



AssetSubclass::create( [
    'name'=>'Reservoirs - Mechanical',
'asset_class_id'=>9
] );



AssetSubclass::create( [
    'name'=>'Reservoirs - Perimeter protection',
'asset_class_id'=>9
] );



AssetSubclass::create( [
    'name'=>'Supply/reticulation',
'asset_class_id'=>9
] );



AssetSubclass::create( [
    'name'=>'Underground chambers - values',
'asset_class_id'=>9
] );



AssetSubclass::create( [
    'name'=>'Underground chambers - meters',
'asset_class_id'=>9
] );



AssetSubclass::create( [
    'name'=>'Underground chambers - Transition',
'asset_class_id'=>9
] );



AssetSubclass::create( [
    'name'=>'Underground chambers - Other',
'asset_class_id'=>9
] );



AssetSubclass::create( [
    'name'=>'Water purification works - Structure',
'asset_class_id'=>9
] );



AssetSubclass::create( [
    'name'=>'Water purification works - Electrical',
'asset_class_id'=>9
] );



AssetSubclass::create( [
    'name'=>'Water purification works - Mechanical',
'asset_class_id'=>9
] );



AssetSubclass::create( [
    'name'=>'Water purification works - Perimeter protection',
'asset_class_id'=>9
] );



AssetSubclass::create( [
    'name'=>'Water purification works - Meters',
'asset_class_id'=>9
] );



AssetSubclass::create( [
    'name'=>'Telemetry',
'asset_class_id'=>9
] );



AssetSubclass::create( [
    'name'=>'Bulk pipelines (outfall sewers) - Rising mains',
'asset_class_id'=>10
] );



AssetSubclass::create( [
    'name'=>'Bulk pipelines (outfall sewers) - Gravity mains',
'asset_class_id'=>10
] );



AssetSubclass::create( [
    'name'=>'Sewerage pump stations - Structure',
'asset_class_id'=>10
] );



AssetSubclass::create( [
    'name'=>'Sewerage pump stations - Electrical',
'asset_class_id'=>10
] );



AssetSubclass::create( [
    'name'=>'Sewerage pump stations - Mechanical',
'asset_class_id'=>10
] );



AssetSubclass::create( [
    'name'=>'Sewerage pump stations - Perimeter protection',
'asset_class_id'=>10
] );



AssetSubclass::create( [
    'name'=>'Sewerage pump stations - Metalwork',
'asset_class_id'=>10
] );



AssetSubclass::create( [
    'name'=>'Sewers/reticulation',
'asset_class_id'=>10
] );



AssetSubclass::create( [
    'name'=>'Waste purification works - Structure',
'asset_class_id'=>10
] );



AssetSubclass::create( [
    'name'=>'Waste purification works - Electrical',
'asset_class_id'=>10
] );



AssetSubclass::create( [
    'name'=>'Waste purification works - Mechanical',
'asset_class_id'=>10
] );



AssetSubclass::create( [
    'name'=>'Waste purification works - Perimeter protection',
'asset_class_id'=>10
] );



AssetSubclass::create( [
    'name'=>'Waste purification works - meters',
'asset_class_id'=>10
] );



AssetSubclass::create( [
    'name'=>'Collection - Vehicles',
'asset_class_id'=>11
] );



AssetSubclass::create( [
    'name'=>'Collection - Containers/Bins',
'asset_class_id'=>11
] );



AssetSubclass::create( [
    'name'=>'Transfer stations and processing facilities - Structure',
'asset_class_id'=>11
] );



AssetSubclass::create( [
    'name'=>'Transfer stations and processing facilities - Electrical',
'asset_class_id'=>11
] );



AssetSubclass::create( [
    'name'=>'Transfer stations and processing facilities - Mechanical',
'asset_class_id'=>11
] );



AssetSubclass::create( [
    'name'=>'Transfer stations and processing facilities - Perimeter protection',
'asset_class_id'=>11
] );



AssetSubclass::create( [
    'name'=>'Landfill site - Earthmoving and compaction equipment',
'asset_class_id'=>11
] );



AssetSubclass::create( [
    'name'=>'Landfill site - Landfill preparation',
'asset_class_id'=>11
] );



AssetSubclass::create( [
    'name'=>'Landfill site - Structure',
'asset_class_id'=>11
] );



AssetSubclass::create( [
    'name'=>'Landfill site - Weighbridge - Mechanical',
'asset_class_id'=>11
] );



AssetSubclass::create( [
    'name'=>'Landfill site - Weighbridge - Electrical',
'asset_class_id'=>11
] );



AssetSubclass::create( [
    'name'=>'Landfill site - Perimeter protection',
'asset_class_id'=>11
] );



AssetSubclass::create( [
    'name'=>'Power supply units',
'asset_class_id'=>12
] );



AssetSubclass::create( [
    'name'=>'Railway sidings',
'asset_class_id'=>12
] );



AssetSubclass::create( [
    'name'=>'Railway tracks',
'asset_class_id'=>12
] );



AssetSubclass::create( [
    'name'=>'Signalling systems',
'asset_class_id'=>12
] );



AssetSubclass::create( [
    'name'=>'Shunting yards',
'asset_class_id'=>12
] );



AssetSubclass::create( [
    'name'=>'Structure',
'asset_class_id'=>13
] );



AssetSubclass::create( [
    'name'=>'Electrical',
'asset_class_id'=>13
] );



AssetSubclass::create( [
    'name'=>'Mechanical',
'asset_class_id'=>13
] );



AssetSubclass::create( [
    'name'=>'Perimeter protection',
'asset_class_id'=>13
] );



AssetSubclass::create( [
    'name'=>'Stations - Trunk receiving',
'asset_class_id'=>13
] );



AssetSubclass::create( [
    'name'=>'Stations - District regulating',
'asset_class_id'=>13
] );



AssetSubclass::create( [
    'name'=>'Mains/pipelines',
'asset_class_id'=>13
] );



AssetSubclass::create( [
    'name'=>'Meters',
'asset_class_id'=>13
] );



AssetSubclass::create( [
    'name'=>'Storage facilities',
'asset_class_id'=>13
] );



AssetSubclass::create( [
    'name'=>'Supply/reticulation',
'asset_class_id'=>13
] );


 }
}

