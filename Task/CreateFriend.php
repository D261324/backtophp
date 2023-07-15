<?php require_once'../header.php';?>

<main>
	<div class="flex-container">
		<form action="Task/TaskController.php">
			<label for="fname">Friends Name</label>
		    <input type="text" id="fname" name="firstname" placeholder="Your name..">

		    <label for="Age">Friends age</label>
		    <input type="text" id="Age" name="Age" placeholder="Friends age..">

		    <label for="Friend-Status">relation status</label>
		    <select id="Status" name="Status">
		      <option value="Close Friend">Close Friend</option>
		      <option value="friend">friend</option>
		      <option value="known person">known person</option>
		    </select>
		  

		    <input type="submit" value="Submit">
		</form>
	</div>
</main>
