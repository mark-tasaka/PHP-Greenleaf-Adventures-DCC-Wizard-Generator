<?php


function getLanguages($intMod, $luckMod, $luckySign, $species, $alignment, $intelligence)
{
        $bonusLanguages = 0;
        
        $languages = array();
        array_push($languages, 'Common');
        array_push($languages, 'Thieves\' Cant');

        if($species === "Dwarf" && $intelligence > 7)
        {
            array_push($languages, $species);
            
            $languagesAvailable = array("Elf", "Halfling", "Gnome", "Bugbear", "Goblin", "Gnoll", "Hobgolin", "Kobold", "Lizardman", "Minotaur", "Ogre", "Orc", "Troglodyte", "Giant");

        }
        else if($species === "Elf" && $intelligence > 7)
        {
            array_push($languages, $species);

            $languagesAvailable = array("Dwarf", "Halfling", "Gnome", "Bugbear", "Goblin", "Gnoll", "Hobgolin", "Kobold", "Lizardman", "Minotaur", "Ogre", "Orc", "Troglodyte", "Giant");
    
            
        }
        else if($species === "Halfling" && $intelligence > 7)
        {
            array_push($languages, $species);
            
            $languagesAvailable = array("Dwarf", "Elf", "Gnome", "Bugbear", "Goblin", "Gnoll", "Hobgolin", "Kobold", "Lizardman", "Minotaur", "Ogre", "Orc", "Troglodyte", "Giant");

            
        }
        else
        {
            $languagesAvailable = array("Dwarf", "Elf", "Halfling", "Gnome", "Bugbear", "Goblin", "Gnoll", "Hobgoblin", "Kobold", "Lizardman", "Demonic", "Serpent-man", "Doppelganger", "Dragon", "Troglodyte", "Giant", "Harpy", "Pixie", "Undercommon");

        }


        $alignmentTongue = "Alignment Tongue (" . $alignment . ")";

        array_push($languagesAvailable, $alignmentTongue);

        shuffle($languagesAvailable);

        if($intMod > 0)
        {
                $bonusLanguages += $intMod;
        }

        if($luckySign == "28" && $luckMod > 0)
        {
            $bonusLanguages += $luckMod;
        }

        for($i = 0; $i < $bonusLanguages; $i++)
        {
            array_push($languages, $languagesAvailable[$i]);
        }

        return $languages;

}


?>