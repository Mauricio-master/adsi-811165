<?php
	if ($_GET) {
		$marca = $_GET['marca'];
		if($marca == 1) {
			echo "<option>HighBall</option>
				  <option>Heckler</option>
				  <option>Bronson</option>
				  <option>Nomad</option>
				  <option>V10</option>";
		}
		if($marca == 2) {
			echo "<option>RockHopper</option>
				  <option>StumpJumper</option>
				  <option>Crave</option>
				  <option>Enduro</option>
				  <option>Epic</option>";
		}
		if($marca == 3) {
			echo "<option>Xcaliber</option>
				  <option>Fuel EX</option>
				  <option>Slash</option>
				  <option>Remedy</option>
				  <option>Top Fuel</option>";
		}
		if($marca == 4) {
			echo "<option>XTC</option>
				  <option>Anthem</option>
				  <option>Fathom</option>
				  <option>Trance</option>
				  <option>Reign</option>";
		}
	}