<?php

class autoform{

    public function getInputText($name,$label){

        echo '<label id="clr" for="'.$name.'">'.$label.'</label><br/>';
        echo '<input type="text" id="'.$name.'" name="'.$name.'"><br/><br/>';

    }

    public function getInputSubmit($name,$label){
        echo '<input type="'.$label.'" value="'.$name.'"><br/>';

    }






}





?>