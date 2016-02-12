<?php
class Animal
{
    public $name;
    public $age;

    public function __construct($name,$age)
    {
        $this->name = $name;
        $this->age = $age;
    }
    public function info()
    {
        echo('It is an animal<br>Name: '.$this->name.'<br>Age: '.$this->age.'<br><br>');
    }
}
class Amphibian extends Animal
{
    public $tail;

    public function __construct($name,$age,$tail)
    {
        parent::__construct($name,$age);
        $this->tail = $tail;
    }
    public function info()
    {
        echo('It is an Amphibian<br>Name: '.$this->name.'<br>Age: '.$this->age.'<br>Tail: '.$this->tail.'<br><br>');
    }
}
class Frog extends Amphibian
{
    public $color;

    public function __construct($name,$age,$tail,$color)
    {
        parent::__construct($name,$age,$tail);
        $this->color=$color;
    }
    public function info()
    {
        echo('It is a frog<br>Name: '.$this->name.'<br>Age: '.$this->age.'<br>Tail: '.$this->tail.'<br>Color: '.$this->color.'<br><br>');
    }
}
class Triton extends Amphibian
{
    public $length;

    public function __construct($name,$age,$tail,$length)
    {
        parent::__construct($name,$age,$tail);
        $this->length = $length;
    }
    public function info()
    {
        echo('It is a triton<br>Name: '.$this->name.'<br>Age: '.$this->age.'<br>Tail: '.$this->tail.'<br>Length: '.$this->length.'<br><br>');
    }
}
class Mamal extends Animal
{
    public $sex;

    public function __construct($name,$age,$sex)
    {
        parent::__construct($name,$age);
        $this->sex = $sex;
    }
    public function info()
    {
        echo('It is a mamal<br>Name: '.$this->name.'<br>Age: '.$this->age.'<br>Sex: '.$this->sex.'<br><br>');
    }
}
class Elephant extends Mamal
{
    public $destination;

    public function __construct($name,$age,$sex,$destination)
    {
        parent::__construct($name,$age,$sex);
        $this->destination = $destination;
    }
    public function info()
    {
        echo('It is an elephant<br>Name: '.$this->name.'<br>Age: '.$this->age.'<br>Sex: '.$this->sex.'<br>Destination: '.$this->destination.'<br><br>');
    }
}
class Giraffe extends Mamal
{
    public $necklength;

    public function __construct($name,$age,$sex,$necklength)
    {
        parent::__construct($name,$age,$sex);
        $this->necklength = $necklength;
    }
    public function info()
    {
        echo('It is an giraffe<br>Name: '.$this->name.'<br>Age: '.$this->age.'<br>Sex: '.$this->sex.'<br>Necklength: '.$this->necklength.'<br><br>');
    }
}

$mike = new Animal('Mike',29);
$mike->info();
$amphimike = new Amphibian('Amphimike',29,'true');
$amphimike->info();
$frogmike = new Frog('Frogmike',29,'false','green');
$frogmike->info();
$tritonmike = new Triton('Mike',31,'true','20 mm');
$tritonmike->info();
$mamalmike = new Mamal('Mamalmike','18','male');
$mamalmike->info();
$elephantmike = new Elephant('Mike',12,'female','India');
$elephantmike->info();
$giraffemike = new Giraffe('Nina',4,'female','2m');
$giraffemike->info();