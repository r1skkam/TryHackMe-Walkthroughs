<html>
<body>

<form method="POST">
        <input id="comm" type="text" name="command" placeholder="Command">
        <button>Execute</button>
</form>
<?php
        if(isset($_POST['command']))
        {
                $cmd = $_POST['command'];
                $store = explode(" ",$cmd);
                $blacklist = array('nc', 'python', 'bash','php','perl','rm','cat','head','tail','python3','more','less','sh','ls');
                for($i=0; $i<count($store); $i++)
                {
                        for($j=0; $j<count($blacklist); $j++)
                        {
                                if($store[$i] == $blacklist[$j])
				{?>
					<h1 style="color:red;">Are you a hacker?</h1>
					<style>
						body
						{
							background-image: url('images/FailingMiserableEwe-size_restricted.gif');
							background-position: center center;
  							background-repeat: no-repeat;
  							background-attachment: fixed;
  							background-size: cover;					
	}	
					</style>
<?php					 return;
				}
                        }
                }
		?><h2 style="color:blue;"><?php echo shell_exec($cmd);?></h2>
			<style>
                             body
                             {
                                   background-image: url('images/blue_boy_typing_nothought.gif');  
				   background-position: center center;
  				   background-repeat: no-repeat;
  				   background-attachment: fixed;
  				   background-size: cover;
}
                          </style>
	<?php }
?>
</body>
</html>
