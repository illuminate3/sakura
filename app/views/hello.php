<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Laravel PHP Framework</title>
	<style>
		@import url(//fonts.googleapis.com/css?family=Lato:700);

		body {
			margin:0;
			font-family:'Lato', sans-serif;
			text-align:center;
			color: #999;
		}

		.welcome {
			width: 300px;
			height: 200px;
			position: absolute;
			left: 50%;
			top: 50%;
			margin-left: -150px;
			margin-top: -100px;
		}

		a, a:visited {
			text-decoration:none;
		}

		h1 {
			font-size: 32px;
			margin: 16px 0 0 0;
		}
	</style>
</head>
<body>
	<div class="welcome">
            <div>
                
                <?php
                echo 'ods bodkins<br />';
                foreach(range(1,9) as $i){
                $client = \Client::find($i);
                $need = \Need::find($i);
                $staff = \Staff::find(1);
                $program = \Program::find(2);
                //$staff->programs()->attach($program);
                //$client->needs()->attach($need);
                $name = $need->clients()->first()->name;
                echo('MTK: '.$client->mtk.',  '. 'Name: '.$name->first .' '.$name->middle . ' '. $name->last .'<br />');
                echo $client->needs()->first()->title.'<br />';
                $snam = new \StaffName();
                echo($snam);
                echo $staff->programs()->first()->title.'<br />';
                $staffname = $staff->name; 
                echo($staff->staff_id);
                echo($staffname);
                }
                ?>
                
            </div>
	</div>
</body>
</html>
