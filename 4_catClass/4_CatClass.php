<?php

class Cat {
    private $firstName;
    private $age;
    private $color;
    private $sex;
    private $race;    
    
    public function getFirstName()
    {
        return $this->firstName;
    }
        public function setFirstName(string $newFirstName)
    {
        $this->firstName=$newFirstName;
    }
    
    public function getAge()
    {
        return $this->age;
    }
    public function setAge(int $newAge)
    {
        $this->age=$newAge;
    }
    
    public function getColor()
    {
        return $this->color;
    }
    public function setColor(string $newColor)
    {
        if((strlen($newColor) <= 3) && (strlen($newColor) >= 20)) 
        {
            throw new Exception();
        }
        $this->color=$newColor;
    }
    
    public function getRace()
    {
        return $this->race;
    }
    public function setRace(string $newRace)
    {
        if((strlen($newRace) <= 3) && (strlen($newRace) >= 20))
        {
            throw new Exception();
        }
        $this->race=$newRace;
    }
    
    public function getSex()
    {
        return $this->sex;
    }
    public function setSex(string $newSex)
    {
        $sexOptions = ['male', 'female'];
        if(in_array($newSex, $sexOptions)){
            $this->sex=$newSex;
        }else{
            throw new Exception();
        }
        return $this;
    }
    
    public function toArray()
    {
        return[
            'firstName'=>$this->firstName,
            'age'=>$this->age,
            'color'=>$this->color,
            'sex'=>$this->sex,
            'race'=>$this->race
        ];
    }
    
    public function getInfo()
    {
        return "$this->firstName $this->age $this->color $this->sex $this->race";
    }
    
    
}
  
$cat = new Cat("Popsicle", "5", "pink", "female", "Tiger");
echo $cat->getInfo();





//////////////////////// Testing alternative code /////////////////////


class CatTest {
    
    private $firstName;
    private $age;
    private $color;
    private $sex;
    private $race;
    
    function __construct($firstName, $age, $color, $sex, $race) {
        
        $this->firstName = $firstName;
        $this->age = $age;
        $this->color = $color;
        $this->sex = $sex;
        $this->race = $race;
    }
    
    function getInfo(){
        return "$this->firstName $this->age $this->color $this->sex $this->race";
    }
    
}

$russianBlue = new CatTest("Lollipop", "3", "blue", "male", "Russian Blue </br>");


$persianFluff = new CatTest("Cupcake", "4", "blue", "female", "Persian Fluff </br>");


$strayCat = new CatTest("Wooshy", "5", "blue", "male", "Stray </br>");
 
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
	<h1>Awesome cats</h1>
	<div>
    	<?php echo $russianBlue->getInfo();?>
        <img src="https://metrouk2.files.wordpress.com/2017/11/capture16.png?w=748&h=706&crop=1" style="width:300px;"  alt="cat1">   
    </div> 
    <div>
    	<?php echo $persianFluff->getInfo();?>
        <img src="https://cdn.images.express.co.uk/img/dynamic/galleries/x701/177020.jpg" style="width:300px;"  alt="cat2">   
    </div> 
    <div>
    	<?php echo $strayCat->getInfo();?>
        <img src="https://news.nationalgeographic.com/content/dam/news/photos/000/755/75552.jpg" style="width:300px;"  alt="cat2">   
    </div> 
</html>
