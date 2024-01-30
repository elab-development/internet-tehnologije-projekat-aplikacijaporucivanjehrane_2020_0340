<?php

namespace Database\Seeders;

use App\Models\Proizvod;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProizvodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       // Proizvod::factory()->count(20)->create();
        //ROSTILJ
        Proizvod::factory()->create([
        'naziv_proizvoda' => 'Pljeskavica',
        'cena' => '300.00',
        'opis_proizvoda' => 'Pljeskavica u lepinji',
        'kategorija_id' => '1',
        'restoran_id' => '1',
        'prilozi' => 'Kečap, pavlaka, kupus, senf, majonez, urnebes',
        'slika' => 'https://imageproxy.wolt.com/menu/menu-images/5f7ff6114b268214347bafac/e1eea030-5b82-11ed-9b97-ba43ab833f00_pljeskavica_1.jpeg?w=600',
        ]);

        Proizvod::factory()->create([
            'naziv_proizvoda' => 'Gurmanska pljeskavica',
            'cena' => '360.00',
            'opis_proizvoda' => 'Gurmanska pljeskavica u lepinji',
            'kategorija_id' => '1',
            'restoran_id' => '1',
            'prilozi' => 'Kečap, pavlaka, kupus, senf, majonez, urnebes',
            'slika' => 'https://imageproxy.wolt.com/menu/menu-images/5f7ff6114b268214347bafac/fa406402-5b82-11ed-ab8d-f60b3eb6c7ae_gurmanska_pljeskavica_1.jpeg?w=600',
            ]);

        Proizvod::factory()->create([
            'naziv_proizvoda' => 'Dimljeni vrat',
                'cena' => '420.00',
                'opis_proizvoda' => 'Dimljeni vrat u lepinji',
                'kategorija_id' => '1',
                'restoran_id' => '1',
                'prilozi' => 'Kečap, pavlaka, kupus, senf, majonez, urnebes',
                'slika' => 'https://imageproxy.wolt.com/menu/menu-images/5f7ff6114b268214347bafac/9f681660-5b82-11ed-940f-ee8a6d3b713f_dimljeni_vrat_1.jpeg?w=600',
        ]);

        Proizvod::factory()->create([
            'naziv_proizvoda' => 'Sarajevski ćevap 5 komada',
            'cena' => '400.00',
            'opis_proizvoda' => 'Juneće meso 125g, polovina somuna',
            'kategorija_id' => '1',
            'restoran_id' => '2',
            'prilozi' => 'Kečap, pavlaka, kupus, senf, majonez, urnebes',
            'slika' => 'https://imageproxy.wolt.com/menu/menu-images/61fbbb414851a135efb713a8/b87a7564-55f3-11ee-a378-d2cf0eb575cf_5_cevapa.jpg?w=600',
        ]);
            
        Proizvod::factory()->create([
            'naziv_proizvoda' => 'Sarajevski ćevap 10 komada',
            'cena' => '710.00',
            'opis_proizvoda' => 'Juneće meso 250g, polovina somuna',
            'kategorija_id' => '1',
            'restoran_id' => '2',
            'prilozi' => 'Kečap, pavlaka, kupus, senf, majonez, urnebes',
            'slika' => 'https://imageproxy.wolt.com/menu/menu-images/61fbbb414851a135efb713a8/c596911a-55f3-11ee-8d83-2ab293c873b0_10_cevapa.jpg?w=600',
        ]);
            
        Proizvod::factory()->create([
            'naziv_proizvoda' => 'Standard pljeskavica na kajmaku',
            'cena' => '760.00',
            'opis_proizvoda' => 'Juneće meso, 230g, kajmak 70g, polovina somuna',
            'kategorija_id' => '1',
            'restoran_id' => '2',
            'prilozi' => 'Kečap, pavlaka, kupus, senf, majonez, urnebes',
            'slika' => 'https://imageproxy.wolt.com/menu/menu-images/61fbbb414851a135efb713a8/9a333d10-4339-11ee-a2a3-6e43755d59bf_pljeskavica_sa_kajmakom.png?w=600',
        ]);

        Proizvod::factory()->create([
            'naziv_proizvoda' => 'Mala pljeskavica',
            'cena' => '340.00',
            'opis_proizvoda' => 'Juneće meso 150g',
            'kategorija_id' => '1',
            'restoran_id' => '3',
            'prilozi' => 'Kečap, pavlaka, kupus, senf, majonez, urnebes',
            'slika' => 'https://www.011info.com/uploads/Firma/2013/10/01/35619/5.jpg'
        ]);
            
        Proizvod::factory()->create([
            'naziv_proizvoda' => 'Pileće belo',
            'cena' => '410.00',
            'opis_proizvoda' => 'Belo meso 200g',
            'kategorija_id' => '1',
            'restoran_id' => '3',
            'prilozi' => 'Kečap, pavlaka, kupus, senf, majonez, urnebes',
            'slika' => 'https://www.011info.com/uploads/Firma/2013/10/01/35619/4.jpg',
        ]);
            
        Proizvod::factory()->create([
            'naziv_proizvoda' => 'Ćevapi',
            'cena' => '400.00',
            'opis_proizvoda' => 'Juneće meso 200g',
            'kategorija_id' => '1',
            'restoran_id' => '3',
            'prilozi' => 'Kečap, pavlaka, kupus, senf, majonez, urnebes',
            'slika' => 'https://www.011info.com/uploads/Firma/2013/10/01/35619/6.jpg',
        ]);

        Proizvod::factory()->create([
            'naziv_proizvoda' => 'Tripl čizburger',
            'cena' => '730.00',
            'opis_proizvoda' => 'Burger sa sirom',
            'kategorija_id' => '1',
            'restoran_id' => '4',
            'prilozi' => 'Burger sos, bbq sos, 3 x juneće meso, 3 x čedar sir, paradajz, crveni luk + POMFRIT',
            'slika' => 'https://imageproxy.wolt.com/menu/menu-images/655f6507711e237fdef0665b/039ee820-a335-11ee-97d5-d65f005ba65f_bbq_halapenjo_tripl_tripl.jpg'
        ]);
            
        Proizvod::factory()->create([
            'naziv_proizvoda' => 'Ljuti grizli burger',
            'cena' => '580.00',
            'opis_proizvoda' => 'Ljuti burger sa sirom',
            'kategorija_id' => '1',
            'restoran_id' => '4',
            'prilozi' => 'Burger sos, bbq sos, čili sos, juneće meso, čedar sir, slanina, iceberg salata, paradajz, crveni luk, tucana paprika, pomfrit',
            'slika' => 'https://images.deliveryhero.io/image/stores-glovo/stores/39633e7a8a48ab97b7b9b430278935991d115b13f348b2a1eb4d77f0483208e4?t=W3siYXV0byI6eyJxIjoibG93In19LHsicmVzaXplIjp7ImhlaWdodCI6MjI1fX1d',
        ]);
            
        Proizvod::factory()->create([
            'naziv_proizvoda' => 'Hrskavi Grizli burger',
            'cena' => '580.00',
            'opis_proizvoda' => 'Hrskavi burger sa sirom',
            'kategorija_id' => '1',
            'restoran_id' => '4',
            'prilozi' => 'Burger sos, bbq sos, juneće meso, čedar sir, slanina, tortilja, čips, iceberg salata, paradajz, crveni luk, pomfrit',
            'slika' => 'https://static.citylifestyle.com/articles/the-grizzly-burger/0T9A8476-1600.jpg?v=2',
        ]);

        //POSLASTICE
    
        Proizvod::factory()->create([
            'naziv_proizvoda' => 'Palačinka sa kremom, plazmom u mleku i bananom',
            'cena' => '600.00',
            'opis_proizvoda' => 'Slatka palačinka',
            'kategorija_id' => '2',
            'restoran_id' => '5',
            'prilozi' => 'Euokrem, banana sa plazmom u mleku',
            'slika' => 'https://images.deliveryhero.io/image/menus-glovo/products/bed992512cbf25398b200f1f65076830720e42dfd4e2becf74377d7bd395a2c8?t=W3siYXV0byI6eyJxIjoibG93In19LHsicmVzaXplIjp7IndpZHRoIjo2MDB9fV0=',
            ]);
    
            Proizvod::factory()->create([
                'naziv_proizvoda' => 'Palačinka sa kremom, plazmom u mleku i višnjom',
                'cena' => '600.00',
                'opis_proizvoda' => 'Preslatka palačinka',
                'kategorija_id' => '2',
                'restoran_id' => '5',
                'prilozi' => 'Eurokrem, višnja sa plazmom u mleku',
                'slika' => 'https://images.deliveryhero.io/image/menus-glovo/products/d96b8c6c9a2b08631b07a260a515a855d863ee763a899168318c89d8b4aaac36?t=W3siYXV0byI6eyJxIjoibG93In19LHsicmVzaXplIjp7IndpZHRoIjo2MDB9fV0=',
                ]);
    
            Proizvod::factory()->create([
                'naziv_proizvoda' => 'Palačinka sa džemom i šećerom u prahu',
                    'cena' => '450.00',
                    'opis_proizvoda' => 'Slatka x2',
                    'kategorija_id' => '2',
                    'restoran_id' => '5',
                    'prilozi' => 'Džem i šećer u prahu',
                    'slika' => 'https://images.deliveryhero.io/image/menus-glovo/products/335271ce9576a41e7fc3a086537ec65ce9ead07c3f174cf573d528608523fafe?t=W3siYXV0byI6eyJxIjoibG93In19LHsicmVzaXplIjp7IndpZHRoIjo2MDB9fV0=',
            ]);
    
            Proizvod::factory()->create([
                'naziv_proizvoda' => 'Knedla Rafaelo',
                'cena' => '240.00',
                'opis_proizvoda' => 'Knedla uvaljana u kokos',
                'kategorija_id' => '2',
                'restoran_id' => '6',
                'prilozi' => 'Bela čokolada, lešnik, šumsko voće',
                'slika' => 'https://imageproxy.wolt.com/menu/menu-images/6124d89fbc79cc6bc267bffa/e6e00764-9340-11ed-9ec9-eae0ec6d22bd_12_mzrml_1.jpg?w=600',
            ]);
                
            Proizvod::factory()->create([
                'naziv_proizvoda' => 'Karamela',
                'cena' => '240.00',
                'opis_proizvoda' => 'Goran Stojićević Karamela',
                'kategorija_id' => '2',
                'restoran_id' => '6',
                'prilozi' => 'Karamela, mlečna belgijska čokolada, kikiriki, med, orašasti plodovi',
                'slika' => 'https://imageproxy.wolt.com/menu/menu-images/6124d89fbc79cc6bc267bffa/e6136db2-9340-11ed-9ec9-eae0ec6d22bd_46_63ira_1.jpg?w=600',
            ]);
                
            Proizvod::factory()->create([
                'naziv_proizvoda' => 'Šumska jagoda',
                'cena' => '300.00',
                'opis_proizvoda' => 'Jagodica Bobica, prava mala slatkica.',
                'kategorija_id' => '2',
                'restoran_id' => '6',
                'prilozi' => 'Šumske jagode, bela belgijska čokolada',
                'slika' => 'https://imageproxy.wolt.com/menu/menu-images/6124d89fbc79cc6bc267bffa/e6f8d15e-9340-11ed-9ec9-eae0ec6d22bd_35_qpslz_1.jpg?w=600',
            ]);
    
            Proizvod::factory()->create([
                'naziv_proizvoda' => 'Palačinka nutella',
                'cena' => '490.00',
                'opis_proizvoda' => 'Palačinka sa nutellom',
                'kategorija_id' => '2',
                'restoran_id' => '7',
                'prilozi' => 'Banane, kikiriki, badem, višnja...',
                'slika' => 'https://imageproxy.wolt.com/menu/menu-images/6062da88cbd64139e77cd403/a7820d10-9149-11eb-af39-96c36c36afa8_nutela___razno.jpeg?w=600'
            ]);
                
            Proizvod::factory()->create([
                'naziv_proizvoda' => 'Zlatna palačinka',
                'cena' => '550.00',
                'opis_proizvoda' => 'Palačinka sa nutelom i plazmom',
                'kategorija_id' => '2',
                'restoran_id' => '7',
                'prilozi' => 'Plazma u mleku, kikiriki, badem, višnja...',
                'slika' => 'https://imageproxy.wolt.com/menu/menu-images/6062da88cbd64139e77cd403/1a3d63b8-89b5-11ec-85d2-b2b2a135cbd4_nutela_plazma_banana.jpeg?w=600',
            ]);
                
            Proizvod::factory()->create([
                'naziv_proizvoda' => 'Palačinka orasnica',
                'cena' => '480.00',
                'opis_proizvoda' => 'Palačinka sa medom i orasima',
                'kategorija_id' => '2',
                'restoran_id' => '7',
                'prilozi' => 'Banana, plazma u mleku, kikiriki, badem, višnja...',
                'slika' => 'https://imageproxy.wolt.com/menu/menu-images/6062da88cbd64139e77cd403/6030bc0e-89b4-11ec-a438-320da8045716_med_orasi.jpeg?w=600',
            ]);
    
            Proizvod::factory()->create([
                'naziv_proizvoda' => 'Kinder',
                'cena' => '200.00',
                'opis_proizvoda' => 'Čokoladna krofna',
                'kategorija_id' => '2',
                'restoran_id' => '8',
                'prilozi' => 'Mlečna čokolada, kinder fil, lešnik, kinder bueno',
                'slika' => 'https://imageproxy.wolt.com/menu/menu-images/5c8b771e4c7f0d000b5b7d2a/f039eb86-59c1-11ec-88ec-a6eca2ff776e_kinder.jpeg?w=600'
            ]);
                
            Proizvod::factory()->create([
                'naziv_proizvoda' => 'Krofna sreće',
                'cena' => '220.00',
                'opis_proizvoda' => 'Roza krofna',
                'kategorija_id' => '2',
                'restoran_id' => '8',
                'prilozi' => 'Čokolada sa ukusom jagode, kolačić sreće, beli kinder fil, mrvljeni beli kit kat',
                'slika' => 'https://imageproxy.wolt.com/menu/menu-images/5c8b771e4c7f0d000b5b7d2a/a44dba76-59c2-11ec-bea7-d2dce683133e_krofna_srece.jpeg?w=600',
            ]);
                
            Proizvod::factory()->create([
                'naziv_proizvoda' => 'Kapri',
                'cena' => '220.00',
                'opis_proizvoda' => 'Krofna u obliku srca',
                'kategorija_id' => '2',
                'restoran_id' => '8',
                'prilozi' => 'Mlečna čokolada, vanila fil, jagoda fil, malina, nana, bele čokoladne mrvice, smesa za krofne',
                'slika' => 'https://imageproxy.wolt.com/menu/menu-images/5c8b771e4c7f0d000b5b7d2a/11c251f4-59c1-11ec-9821-66224ac5b60b_capri.jpeg?w=600',
            ]);

         //PICE
    
         Proizvod::factory()->create([
            'naziv_proizvoda' => 'Pizza Carbonara',
            'cena' => '1060.00',
            'opis_proizvoda' => 'Pica sa karbonara sosom',
            'kategorija_id' => '3',
            'restoran_id' => '9',
            'prilozi' => 'Carbonara sos, šampinjoni, pančeta, baby mozzarella',
            'slika' => 'https://pizzabar.rs/wp-content/uploads/2022/02/Pizza-Carbonara.jpg',
            ]);
    
            Proizvod::factory()->create([
                'naziv_proizvoda' => 'Capricciosa',
                'cena' => '1010.00',
                'opis_proizvoda' => 'Najukusnija kaprićIoza u gradu',
                'kategorija_id' => '3',
                'restoran_id' => '9',
                'prilozi' => 'Sir, šunka, šampinjoni, masline',
                'slika' => 'https://pizzabar.rs/wp-content/uploads/2022/02/Capricciosa.jpg',
                ]);
    
            Proizvod::factory()->create([
                'naziv_proizvoda' => 'Quattro stagioni',
                    'cena' => '1180.00',
                    'opis_proizvoda' => 'Pica sa 4 vrste sira',
                    'kategorija_id' => '3',
                    'restoran_id' => '9',
                    'prilozi' => 'Sir, gorgonzola, parmezan, dimljeni sir',
                    'slika' => 'https://pizzabar.rs/wp-content/uploads/2022/02/4-sira.jpg',
            ]);
    
            Proizvod::factory()->create([
                'naziv_proizvoda' => 'Taurunum Fantasia',
                'cena' => '1300.00',
                'opis_proizvoda' => 'Originalna pica',
                'kategorija_id' => '3',
                'restoran_id' => '10',
                'prilozi' => 'Pelat, pica sir, šunka, goveđi pršut, kulen, pavlaka, jaje, masline, parmezan',
                'slika' => 'https://pizzabar.rs/wp-content/uploads/2022/02/Pizza-bar.jpg',
            ]);
                
            Proizvod::factory()->create([
                'naziv_proizvoda' => 'Porketa',
                'cena' => '1170.00',
                'opis_proizvoda' => 'Pica sa svinjetinom',
                'kategorija_id' => '3',
                'restoran_id' => '10',
                'prilozi' => 'Začinjeni rezanci svinjetine, paradajz, ljubičasti luk, peršun i orijent preliv',
                'slika' => 'https://pizzabar.rs/wp-content/uploads/2022/02/Porketa.jpg',
            ]);
                
            Proizvod::factory()->create([
                'naziv_proizvoda' => 'Toscana',
                'cena' => '1120.00',
                'opis_proizvoda' => 'Ukus Italije',
                'kategorija_id' => '3',
                'restoran_id' => '10',
                'prilozi' => 'Sir, pršuta, rukola, parmezan',
                'slika' => 'https://pizzabar.rs/wp-content/uploads/2022/02/Toscana.jpg',
            ]);
    
            Proizvod::factory()->create([
                'naziv_proizvoda' => 'Supreme',
                'cena' => '1350.00',
                'opis_proizvoda' => 'Pica sa kobasicom',
                'kategorija_id' => '3',
                'restoran_id' => '11',
                'prilozi' => 'Testo, pelat, sir, kobasice',
                'slika' => 'https://imageproxy.wolt.com/menu/menu-images/8e697df0-f73e-11e9-8d0e-0a586463ee55_supreme.jpeg?w=600'
            ]);
                
            Proizvod::factory()->create([
                'naziv_proizvoda' => 'Fresh Line Piletina',
                'cena' => '1420.00',
                'opis_proizvoda' => 'Pica za svačiji ukus',
                'kategorija_id' => '3',
                'restoran_id' => '11',
                'prilozi' => 'Testo, pelat, sir, paradajz, rukola, piletina',
                'slika' => 'https://imageproxy.wolt.com/menu/menu-images/f4575284-f73b-11e9-9067-0a586464310c_piletina_fresh.jpeg?w=600',
            ]);
                
            Proizvod::factory()->create([
                'naziv_proizvoda' => 'Chicken Feta',
                'cena' => '1500.00',
                'opis_proizvoda' => 'Pica sa piletinom',
                'kategorija_id' => '3',
                'restoran_id' => '11',
                'prilozi' => 'Testo, piletina, feta sir, tikvice, pavlaka',
                'slika' => 'https://imageproxy.wolt.com/menu/menu-images/5ac309a4-f72e-11e9-88c8-0a586460070c_chicken_feta.jpeg?w=600',
            ]);
    
            Proizvod::factory()->create([
                'naziv_proizvoda' => 'Mediteran',
                'cena' => '1140.00',
                'opis_proizvoda' => 'Ukus mora',
                'kategorija_id' => '3',
                'restoran_id' => '12',
                'prilozi' => 'Testo, pavlaka, sir, slanina, paradajz, feta.',
                'slika' => 'https://imageproxy.wolt.com/menu/menu-images/5fa50201da0fc0fee5f879b4/e74ad490-2852-11ec-a710-1e17ea74ddf2_mediteran.jpeg?w=600'
            ]);
                
            Proizvod::factory()->create([
                'naziv_proizvoda' => 'Pizza Napoli',
                'cena' => '1120.00',
                'opis_proizvoda' => 'Pica sa pršutom',
                'kategorija_id' => '3',
                'restoran_id' => '12',
                'prilozi' => 'Testo, pelat, mozzarella, paradajz, pršuta',
                'slika' => 'https://imageproxy.wolt.com/menu/menu-images/5fa50201da0fc0fee5f879b4/2d3bf970-2853-11ec-b5a5-a6434af6d6a3_napoli.jpeg?w=600',
            ]);
                
            Proizvod::factory()->create([
                'naziv_proizvoda' => 'Atina pizza',
                'cena' => '1220.00',
                'opis_proizvoda' => 'Ukusi Grčke na tanjiru',
                'kategorija_id' => '3',
                'restoran_id' => '12',
                'prilozi' => 'Testo, pavlaka, sir, tuna, feta sir, zelene masline',
                'slika' => 'https://imageproxy.wolt.com/menu/menu-images/5fa50201da0fc0fee5f879b4/74ca72b2-2853-11ec-a96d-ea3434d1bcac_atina.jpeg?w=600',
            ]);
    }
}
