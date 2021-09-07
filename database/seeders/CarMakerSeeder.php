<?php

namespace Database\Seeders;

use App\Models\CarMaker;
use Illuminate\Database\Seeder;

/**
 * CarMakerSeeder
 *  @mixin Eloquent
 */

class  CarMakerSeeder extends Seeder
{
private $makers= [
['Abarth','Italy'],
['Acura','Japan'],
['Alfa Romeo','Italy'],
['Aprilia','Italy'],
['Arch Motorcycle','United States'],
['Ashok Leyland','India'],
['Aston Martin','United Kingdom'],
['Audi','Germany'],
['Automobile Dacia','Romania'],
['AvtoVAZ','Russia'],
['Bajaj','India'],
['Benelli','Italy'],
['Bentley','United Kingdom'],
['BharatBenz','India'],
['BMW','Germany'],
['Buell Motorcycle','United States'],
['Bugatti','France'],
['BYD Auto','China'],
['Cadillac','United States'],
['CFMoto','China'],
['Changan Automobile','China'],
['Chery Automobile','China'],
['Chevrolet','United States'],
['Chrysler','United States'],
['Citroën','France'],
['Daewoo','South Korean'],
['Daihatsu','Japan'],
['Datsun','Japan'],
['Dodge','United States'],
['DS Automobiles','France'],
['Ducati','Italy'],
['Eicher Motors','India'],
['Ferrari','Italy'],
['Fiat','Italy'],
['Force Motors','India'],
['Ford','United States'],
['Geely','China'],
['GMC','United States'],
['Harley Davidson','United States'],
['Hero Moto Corp','India'],
['Holden','Australia'],
['Honda','Japan'],
['Husqvarna','Sweden'],
['Hyundai','South Korea'],
['Indian Motorcycle','United States'],
['Infiniti','Japan'],
['Isuzu Motors','Japan'],
['JAC Motors','China'],
['Jaguar','United Kingdom'],
['Janus Motorcycles','United States'],
['Jawa Motorcycles','Czech Republic'],
['Jeep','United States'],
['Kawasaki','Japan'],
['Kia Motors','South Korea'],
['KTM','Austria'],
['Lada','Russia'],
['Lamborghini','Italy'],
['Lancia','Italy'],
['Land Rover','United Kingdom'],
['Lexus','Japan'],
['Lotus','United Kingdom'],
['Mahindra & Mahindra','India'],
['Maruti Suzuki','India'],
['Maserati','Italy'],
['Maybach','German'],
['Mazda','Japan'],
['McLaren Automotive','United Kingdom'],
['Mercedes-Benz','Germany'],
['Mini [marque]','United Kingdom'],
['Mitsubishi Motors','Japan'],
['Moto Guzzi','Italy'],
['Nissan','Japan'],
['Norton Motorcycle','United Kingdom'],
['Opel','Germany'],
['Peugeot','France'],
['Piaggio','Italy'],
['Polaris','United States'],
['Polestar','Sweden'],
['Porsche','Germany'],
['Razor Motorcycle','United States'],
['Renault','France'],
['Rolls-Royce','United Kingdom'],
['Royal Enfield','India'],
['SAIC Motor','China'],
['Saleen Automotive','United States'],
['SEAT','Spain'],
['Škoda Auto','Czech Republic'],
['Subaru','Japan'],
['Suzuki','Japan'],
['Tata Motors','India'],
['Tesla','United States'],
['Toyota','Japan'],
['Triumph','England'],
['TVS','India'],
['UAZ','Russia'],
['Vauxhall','United Kingdom'],
['Vespa','Italy'],
['Victory Motorcycle','United States'],
['Volkswagen','Germany'],
['Volvo','Sweden'],
['W Motors','Lebanon'],
['Yamaha','Japan'],
['Zero Motorcycle','United States'],
['Zenvo Automotive','Denmark'],
['Zündapp Janus','Germany'] ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()     {

        foreach ($this->makers as $maker) {
                $cm  =new CarMaker([
                'maker' => $maker[0],
                'country' => $maker[1]
            ]);
                $cm->save();
        }
    }
}
