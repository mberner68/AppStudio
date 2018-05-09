<?php
    
function grab_permissions ($username){
	
	$sqlp = "SELECT `SA`, `CG`, `DG`, `AG` FROM `users` WHERE `username` = '$username'";
	$result = mysql_query($sqlp) or die
	('Could not your information;' . mysql_error());
	while ($row = mysql_fetch_array($result))
	{
	
		$_SESSION['SA'] = $row['SA'];
		$_SESSION['CG'] = $row['CG'];
		$_SESSION['DG'] = $row['DG'];
		$_SESSION['AG'] = $row['AG'];
		 
	}
	
	
}
function check_nav($SA, $CG, $DG)
{
	if ($SA == 'yes')
	{
		$sql = "SELECT `permission`, `path` FROM `navigation` WHERE `permission` = 'SA'";
		$result = mysql_query($sql) or die ('Could not your information;' . mysql_error());
		while ($row = mysql_fetch_array($result))
		{
			return $row['path'];
		}
		
	}
	elseif (($CG == 'yes') AND ($DG == 'yes'))
	{
		$sql = "SELECT `permission`, `path` FROM `navigation` WHERE `permission` = 'CGDG'";
		$result = mysql_query($sql) or die ('Could not your information;' . mysql_error());
		while ($row = mysql_fetch_array($result))
		{
			return $row['path'];
		}
	}
	elseif (($DG == 'no') AND ($CG == 'yes'))
	{
		$sql = "SELECT `permission`, `path` FROM `navigation` WHERE `permission` = 'CG'";
		$result = mysql_query($sql) or die ('Could not your information;' . mysql_error());
		while ($row = mysql_fetch_array($result))
		{
			return $row['path'];
		}
	}
	elseif (($CG == 'no') AND ($DG == 'yes'))
	{
		$sql = "SELECT `permission`, `path` FROM `navigation` WHERE `permission` = 'DG'";
		$result = mysql_query($sql) or die ('Could not your information;' . mysql_error());
		while ($row = mysql_fetch_array($result))
		{
			return $row['path'];
		}
	}
	else
	{
		$sql = "SELECT `permission`, `path` FROM `navigation` WHERE `permission` = ''";
		$result = mysql_query($sql) or die ('Could not your information;' . mysql_error());
		while ($row = mysql_fetch_array($result))
		{
			return $row['path'];
		}
	}
}
	
	
	
?>