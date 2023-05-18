<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP</title>
</head>
<body>
    <?php



abstract class animal {
    public $name;
    public $jenis;
    public function __construct($name, $jenis){
        $this->name = $name;
        $this->jenis = $jenis;
    }

    abstract function intro() : string;
}

class cat extends animal {
    public function intro() : string{
        return "hewan ini adalah $this->name jenis $this->jenis. kucing sering bermain di tempat yang bersih";
    }
}

class dog extends animal {
    public function intro() : string{
        return "hewan ini adalah $this->name jenis $this->jenis. anjing adalah hewan yang setia dan cerdas";
    }
}

class harimau extends animal {
    public function intro() : string{
        return "hewan ini adalah $this->name jenis $this->jenis. ";
    }
}



$dog = new dog ("buddy", "anjing");
echo $dog->intro();
echo "<br>";


$harimau = new harimau ("harimau", "karnivora");
echo $harimau->intro();
echo "<br>";





$cat = new cat ("kucing", "amoba");
echo $cat->intro();
?>
</body>
</html>