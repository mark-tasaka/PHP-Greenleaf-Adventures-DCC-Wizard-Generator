<?php


function getLanguages($intMod, $luckMod, $luckySign, $species, $alignment, $intelligence)
{
        $bonusLanguages = 0;
        
        $languages = array();
        array_push($languages, 'Common');

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
            $languagesAvailable = array("Elf", "Halfling", "Dwarf", "Gnome", "Bugbear", "Lizard man", "Harpy", "Goblin", "Gnoll", "Hobgoblin", "Kobold", "Minotaur", "Ogre", "Orc", "Serpent man", "Troglodyte", "Angelic", "Centaur", "Demonic", "Doppelganger", "Dragon", "Pixie", "Giant", "Naga", "Bear", "Eagle", "Horse", "Wolf", "Spider", "Undercommon");

        }


        $alignmentTongue = "Alignment Tongue (" . $alignment . ")";

        array_push($languagesAvailable, $alignmentTongue);

        shuffle($languagesAvailable);

        if($intMod > 0)
        {
                $bonusLanguages += ($intMod * 2);
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