<?php
abstract class OnlineGateway{

    protected $options;
    public function __construct()
    {
        $this->options=array(
            'mellat'=>array(
                'merchant'=>'12345',
                'username'=>'ali',
                'password'=>'ali1234'
            ),
            'saman'=>array(
                'apikey'=>'sd3rfeiwfjrwi34'

            ),
            'parsian'=>array(
                'username'=>'reza',
                'password'=>'reza1234'
            )

        );
    }
    abstract  public function sendRequest();
    abstract  public function verifyRequest();

}

class Mellat extends OnlineGateway{

    private $gatewayName;
    private $mellatOptions;

    public function __construct()
    {
        $this->gatewayName='parsian';
        parent::__construct();
        $this->mellatOptions=$this->options[$this->gatewayName];
    }
    public function sendRequest()
    {

        //  echo $this->options;
         var_dump($this->mellatOptions);

    }

    public function verifyRequest()
    {

    }
}
//Factory::make('mellat');


class Factory{
    public static function make($class)
    {
        $className=ucfirst($class);
        if(class_exists($className)){
             (new $className)->sendRequest();
        }
        return false;
    }
}

