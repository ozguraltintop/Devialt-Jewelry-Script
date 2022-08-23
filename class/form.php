<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">


<?php 

class form
{

	public $test;



    public function deneme($test)
    {
    	$this->test=$test;
    }


    public function testyazdir()
    {
    	echo $this->test;

    }
     public function fstart($id,$action)
    {
    	$this->id;
    	$this->action;

    	echo "<form id=".$id." name=".$id." action=".$action."><br>";
    	
    }
      public function fclose()
    {
    	echo "</form><br>";
    	
    }
    public function input($id1,$type1,$class,$stil)
    {
    	$this->id1;
    	$this->type1;
      $this->class;
      $this->stil;

    	if($type1=='text')
    	{
    		 $type1=='text';  		
    	}
    	else
    		{return $type1;}

    	echo "<input id=".$id1." name=".$id1." type=".$type1." class=".$class." style=".$stil."><br>";





    }
 
      public function label($id,$value,$class,$stil)
    {
      $this->id;
      $this->value;
      $this->class;
      $this->stil;

      if($type1=='text')
      {
         $type1=='text';      
      }
      else
        {return $type1;}

      echo "<label id=".$id." name=".$id." class=".$class." style=".$stil.">".$value."</label><br>";





    }


 	public function bttn($id2,$val,$submit,$class,$stil)
 	{

 		$this -> id2 ;
 		$this -> submit ;
 		$this -> val;
    $this->class;
    $this->stil;

			echo "<button id=".$id2." name=".$id2." type=".$submit." class=".$class." style=".$stil.">".$val."</button><br>";

 	}










}


?>