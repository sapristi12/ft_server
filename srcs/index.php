<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>@erlajoua - FT_SERVER</title>
</head>
<body>
    <div id="main">
        <h1>FT_SERVER</h1>
        <span id="intra"> by @erlajoua</span>
        <h3>___________________________________________</h3>
        <h2>Sujet :</h2>
        <p>
            Ce projet à pour but de vous faire découvir découvrir l’administration système en vous
            sensibilisant a l’importance de l’utilisation de scripts pour automatiser vos taches. Pour ce
            faire, nous allons vous faire découvrir la technologie "Docker" afin de vous faire installer
            un server web complet, qui sera capable de faire tourner plusieurs services, tel qu’un
            Wordpress, Phpmyadmin, ainsi qu’une base de donnée.
        </p>
        <p>
            L'un des critères du sujet est de vérifier que nous pouvons désactiver la ligne 
            dans le fichier de configuration nginx (chemin par défaut : "/etc/nginx/sites-available/default").
        </p>
        <div id="main_prompt">
            <div class="div_prompt">
                <span class="prompt">autoindex on;</span>
            </div>
            <span class="txt">en</span>
            <div class="div_prompt">
                <span class="prompt">autoindex off;</span>
            </div>
            <span class="txt">et vice-versa.</span>  
        </div>
		<p>
			Pour faire cela, lancez le script off.sh situé à la racine. sh /off.sh
		</p>
		<span class="txt" style="margin-bottom:10px;"></span>
			 <div style="margin-left:40%;width:265px;" class="div_prompt">
			 <span class="prompt">service nginx restart</span>
			</div>

    </div>
    <div id="pink">
        <span class="error">403</span>
        <span class="error2">Forbidden: nginx/1.14.2</span>
        <div id="img_github">
            <img id="img" src="logogit.png">
            <a target="_blank" class="github" href="https://github.com/sapristi12">@Sapristi12</a>
        </div>
    </div>
</body>
</html>

