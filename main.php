<?php

declare(strict_types=1);

$price = 18;
$cash = 20;
$change = $cash - $price;

echo "Keep the " . $change . " dollars!" . PHP_EOL;

class Johnny {
    
    const HEAD="ass";
    
    public function __construct()
    {
        echo "Johnny says: Anyway how is your sex life?" . PHP_EOL;
    }
    
    public function tearApart(Lisa $simpson)
    {
        echo "Johnny says: You're tearing me apart " . $simpson->getName() . PHP_EOL;
    }
    
    public function goToSleep(Gun $gun)
    {
        $this->fuckLisasDress();
        $gun->fireShot(self::HEAD);
    }
    
    private function fuckLisasDress()
    {
        echo "Johnny rubs red dress over his genitals" . PHP_EOL;
    }
}

class Danny {
    private $observer;
    
    public makeStatement()
    {
        'Anyway, I got homework to do';
    }
}

class Lisa
{
    private $statements = [
        'Can i have a dozen of roses',
        'keep the change',
        'nah',
        'it\'s confidential',
    ];
        
    public function getName()
    {
        return "Lisa";
    }
    
    public function makeStatement()
    {
        echo "Lisa says: I dont love him anymore" . PHP_EOL;
    }
    
    public function makeRandomStatement()
    {
        $aWsDkLerLoFmIaKAc = count($this->statements);
        $index = rand(1, $aWsDkLerLoFmIaKAc);
        
        return $this->statements[$index - 1];
    }
}

class LisasMother
{
    public function makeStatement()
    {
        $daughter = new Lisa();
        return  !$daughter->makeStatement() . "Yes you do!" . PHP_EOL;
    }
    
    public function hasBreastCancer()
    {
        return 'definitely';
    }
}

class Jesus
{
    public function __construct()
    {
        $this->getQuitted();
    }
    
    public function getQuitted()
    {
        die;
    }
}

class Doggy
{
    public function getHied()
    {
        
    }
}

class Restaurant
{
    public function getHuh()
    {
        return 'Huh';
    }
    
    public function getFunnyMeal()
    {
        return 'Ha ha ha Huh!';
    }
}

class Gun
{
    public function fireShot(string $bodyPart)
    {
        echo "Shooting in " . $bodyPart;
    }
}

$johnny = new Johnny();
$lisa = new Lisa();
$lisa->makeStatement();
$johnny->tearApart($lisa);
$johnny->goToSleep(new Gun());

