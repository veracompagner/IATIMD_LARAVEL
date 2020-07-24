<?php

use Illuminate\Database\Seeder;

class ReceptenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	  DB::table('recepten')->insert([
        "name" => "Pasta Carbonara",
        "src" => "/img/1.png",
        "ingredients" => "400 gr spaghetti, 200 gr gerookte spekblokjes of reepjes, 2 teentjes knoflook, Takje verse peterselie, 100 gr parmezaanse kaas (geraspt), 3 eieren, peper en zout",
        "description" => "Doe de spekblokjes in een pan en bak ze mooi krokant, ze hoeven niet helemaal uitgebakken te worden. Zet ondertussen een grote pan water met een snufje zout op het vuur en als het water kookt voeg je de spaghetti toe. Kook de spaghetti in ongeveer 10 min al dente. Snijd ondertussen de knoflook en de peterselie fijn en bak deze kort mee met de spekjes. Klop de eieren los in een kom en roer de geraspte kaas er door en voeg wat zwarte peper toe. Giet de spaghetti af en doe direct terug in de pan. Giet het eiermengsel er door en blijf roeren totdat de eieren een romige saus vormen, dit is de basis van pasta carbonara. Let op: als de spaghetti te veel is afgekoeld bind de saus niet maar als de spaghetti te heet is gaan de eieren stollen, zet de pan daarom niet meer op het vuur. Schep de spekjes en knoflook er door en serveer direct. Garneer de pasta carbonara eventueel met een beetje kaas en peterselie. Deze pasta is lekker met een frisse salade.",
      ]);

      DB::table('recepten')->insert([
        "name" => "Pastasalade met tomaat",
        "src" => '/img/1.png',
        "ingredients" => "300 g	fusilli, 3 tomaten, 125 g	mozzarella, 220 g	zwarte olijven zonder pit,130 g	zongedroogde tomaten, 1 teen	knoflook, 1 tl	gedroogde Italiaanse kruiden, 40 g	rucola, 15 g	basilicum, 50 g	Parmezaanse kaas",
        "description" => "Kook de pasta beetgaar volgens de aanwijzingen op de verpakking. Giet af in een vergiet en spoel af met koud water. Verdeel over een schaal. Snijd intussen de tomaten en mozzarella in blokjes. Laat de olijven uitlekken en halveer ze. Schenk de olie uit het bakje tomaten in een kommetje, snijd de gedroogde tomaten in kleine stukjes en voeg toe aan de olie. Snijd de knoflook fijn en meng samen met de Italiaanse kruiden door de gedroogde tomaatjes. Meng de tomatenblokjes, het tomatenmengsel, de mozzarella, olijven en rucola door de pasta en breng op smaak met peper en eventueel zout. Haal de blaadjes van de takjes basilicum en scheur de grote blaadjes in stukken. Strooi ze over de pastasalade. Rasp of schaaf er de Parmezaanse kaas over.",
      ]);

      DB::table('recepten')->insert([
        "name" => "Aspergesoep",
        "src" => '/img/1.png',
        "ingredients" => "2 sjalotjes, 700 gr witte asperges (geschild), 2 blokjes kippenbouillon, 1,5 liter water, 200 ml kookroom of slagroom, 80 gr bloem, 70 gr boter",
        "description" => "Snijd de asperges in stukken. Kook ze 5 minuten in ongeveer 1,5 liter water en laat daarna nog 10 minuten nagaren in het water. Hak de sjalotjes fijn. Smelt de boter in een soeppan en fruit de sjalotjes hierin aan. Voeg dan de bloem toe en roer met een garde tot een roux en laat deze 5 minuten zachtjes bakken en garen. Giet de asperges af en vang al het kookvocht op. Los de bouillonblokjes op in het het kookvocht van de asperges. Giet dit beetje bij beetje bij de roux en blijf met een garde roeren zodat er geen klontjes ontstaan. Als alle bouillon is toegevoegd roer je de kookroom er door en voeg je de gekookte asperges in stukken toe. Proef of de soep goed op smaak is en voeg eventueel een snufje peper en/of zout toe. Voeg de hamreepjes (gedeeltelijk) toe aan de soep. Schep de soep in borden en garneer eventueel met stukjes ei, hamreepjes en wat fijngehakte peterselie.  Tip: voor een glutenvrije soep vervang je de bloem door maizena.",
      ]);

      DB::table('recepten')->insert([
        "name" => "Hamburgers",
        "src" => '/img/1.png',
        "ingredients" => "500 g rundergehakt, 2 tl uienpoeder, 2 tl tabasco chipotle pepper sauce, 1 tl zout, 4 hamburgerbroodjes, 1 tomaat, 4 blaadjes kropsla, 8 plakken augurken, 2 el mayonaise, 1 el ketchup, 1 el yellow mustard mild",
        "description" => "Doe het gehakt in een kom en voeg de uienpoeder, tabasco en het zout toe. Kneed goed door elkaar en verdeel het gehakt in een burger per persoon. Vorm een bal per persoon van het gehakt. Duw de gehaktballen plat tot burgers van 1 cm dik en Ø 12 cm. Steek de barbecue aan of verhit de grillpan op middelhoog vuur. Gril de burgers in ca. 8 min. gaar. Keer halverwege. Verhit ondertussen een koekenpan zonder olie of boter. Halveer de hamburgerbroodjes en rooster de helften in de hete koekenpan 2 min. aan beide zijden. Snijd de tomaat in plakjes. Beleg de onderste helften van de broodjes achtereenvolgens met een blad sla en een burger. Leg op elke burger een plakje tomaat en 2 plakjes augurk. Verdeel de mayonaise, ketchup en mosterd erover en leg de bovenste helften van de broodjes erop.",
      ]);

      DB::table('recepten')->insert([
        "name" => "Beef teriyaki",
        "src" => '/img/1.png',
        "ingredients" => "120 gr woknoedels (twee blokken), 200 gr rosbieflapjes, 250 gr champignons, 1 rode paprika, 2 teentjes knoflook, 25 gr honing, 50 ml sojasaus, 2 theelepels sesamolie (5 gr), 2 theelepels maïzena (5 gr), 10 gr sesamzaad, paar stengels bosui",
        "description" => "Kook de woknoedels volgens de instructies op de verpakking, giet ze af en spoel ze koud. Snijd de rosbieflapjes in reepjes en bestrooi met een beetje peper en zout. Snijd de champignons in kwarten en de paprika in stukken van ongeveer 1×1 cm. Hak de bosui in ringen. Pel de knoflooktenen en snijd één of twee keer doormidden. Doe de honing, sojasaus, sesamolie en knoflooktenen in een pannetje, voeg er 100 ml water aan toe en breng op laag vuur aan de kook. Laat dit een paar minuten pruttelen terwijl je regelmatig goed roert. Doe de maïzena in een kommetje, voeg een kleine eetlepel water toe en roer het glad. Haal de knoflooktenen uit de saus en gebruik de maïzena om de saus te binden. Voeg niet direct alles toe om te voorkomen dat je de saus te dik maakt. De maïzena bindt pas als de saus weer aan de kook is, dus wacht steeds even op het resultaat voordat je meer van de maïzena toevoegt. Zodra de saus de gewenste dikte heeft kun je het vuur uitzetten. Verhit een scheutje olie in een wok en laat goed heet worden.Doe de rosbieflapjes in de wok en bak 1 minuut op hoog vuur. Voeg vervolgens de paprika’s en champignons toe en laat deze ongeveer 3 minuten meebakken. Draai het vuur lager en voeg 3/4 van de teriyakisaus toe. Voeg vervolgens de noedels toe en roer alles goed door elkaar. Houd het vuur laag maar zorg er wel voor dat de noedels weer goed opwarmen. Proef het gerecht en maak op smaak met de rest van de teriyakisaus en eventueel wat peper. Schep de beef teriyaki op twee borden en bestrooi met sesamzaad en bosui.",
      ]);

      DB::table('recepten')->insert([
        "name" => "Mexicaanse nacho's uit de oven",
        "src" => '/img/1.png',
        "ingredients" => "150 gr tortilla chips, 2 tomaten in blokjes, 125 gr zure room, 1 avocado in blokjes, 75 gr geraspte kaas, 2 eetlepels mais uit blik, 1 rode ui, 1 lente ui, Optioneel: jalapenopepers voor de liefhebber, Optioneel: koriander",
        "description" => "Verwarm de oven op 220 graden of zet de grill aan. Snipper de rode ui grof en snijd de tomaat in blokjes. Snijd de jalapeno in plakjes en de lente ui in ringen. Verdeel de tortilla chips over een ovenschaal en verdeel hierover de rode ui, blokjes tomaat, lente-ui en de mais. Leg eventueel de jalapeno pepers er overheen. Strooi de geraspte kaas over de nacho’s heen en zet de nacho’s ongeveer voor 5 minuten onder de grill of tot de kaas gesmolten is. Verdeel vervolgens de blokjes avocado over de nacho’s en serveer met de zure room.",
      ]);

      DB::table('recepten')->insert([
        "name" => "Gewokte groenten met rijst",
        "src" => '/img/1.png',
        "ingredients" => "1 paprika, 200 gr champignons, 1 ui, 200 gr sperziebonen, 4 el sojasaus, 3 el sweet chili saus, 2 tl gembersiroop, 2 tenen knoflook, 200 gr (zilvervlies)rijst",
        "description" => "Kook de rijst volgens de bereidingswijze op het pak. Maak de champignons schoon. Snijd de ui, champignons en paprika  in stukjes. Snijd de knoflook fijn. Kook de sperziebonen ongeveer 6 minuten in een pan met water. Giet een scheutje olie in een wokpan. Bak de ui, champignons, paprika en knoflook ongeveer 3-4 minuten. Voeg dan de sperziebonen, sojasaus, sweet chili saus en gembersiroop toe. Bak dit nog een paar minuten en zet dan het vuur uit. Serveer de rijst met de gewokte groenten. Tip: voeg ook eens wat (vegetarische) stukjes kip toe aan dit gerecht.",
      ]);

      DB::table('recepten')->insert([
        "name" => "Poke bowl met zalm",
        "src" => '/img/1.png',
        "ingredients" => "125 gr zalm, 125 gr sushi rijst, 1 avocado, 75 gr peen julienne, 100 gr zeewiersalade, 100 gr edamame bonen, 2 el sojasaus, 1 tl rijstazijn, halve tl gemberpoeder, sesamzaad, chilipeper, verse peterselie",
        "description" => "Begin met het koken van de rijst. Doe dit volgens de aanwijzingen op de verpakking. Laat daarna de rijst afkoelen. Ondertussen maken we de marinade voor de zalm. Doe de sojasaus, rijstazijn en gemberpoeder in een schaal. Snijd de zalm in blokjes en doe ze vervolgens in de marinade. Laat de zalm een minuut of 10 marineren. Snijd vervolgens de avocado in plakjes. Pak nu twee kommen en verdeel de rijst. Daaroverheen gaan de andere ingrediënten en de zalm. Afmaken met wat sesamzaadjes, chilipeper en verse peterselie.",
      ]);
    }
}
