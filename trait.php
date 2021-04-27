<?php
trait Attr1{
    public function move()
    {
        echo"moving . . .";
    }
}
trait Attr2{
    public function makeNoise(){
        echo"making noise. . .";
    }
}
class Bycicle{
    use Attr1;
    use Attr2;
}
(new Bycicle())->move();
(new Bycicle())->makeNoise();