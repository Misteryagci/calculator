<?php
	/*Sayilarin oldugu dugmeleri yaratan bir fonksiyon
		$nb -> Toplam dugme sayisi
		$col -> Toplam satir sayisi
	*/
	function generate_number_buttons ($nb,$col)
	{
		for ($i = $nb-1; $i >= 0;$i --)
		{
			echo '<button id="button_'.$i.'" class="number_button" onclick="number_click('.$i.');">'.$i.'</button>';
			if (($nb-$i) % $col == 0)
			{
				echo '<br>';
			}
		}
	}
	//Islemlerin dugmelerini yaratan fonksiyon
	function generate_operators ()
	{
		echo '<button id="plus_button" class="operator_buttons" onclick="operator_click(\'+\')">+</button>';
		echo '<button id="minus_button" class="operator_buttons" onclick="operator_click(\'-\')">-</button>';
		echo '<button id="mult_button" class="operator_buttons" onclick="operator_click(\'x\')">x</button>';
		echo '<button id="div_button" class="operator_buttons" onclick="operator_click(\'/\')">/</button>';
		echo '<button id="sqrt_button" class="operator_buttons" onclick="operator_click(\'sqrt\')">√</button>';
		echo '<button id="equals_button" class="operator_buttons" onclick="operator_click(\'=\')">=</button>';
	}
?>