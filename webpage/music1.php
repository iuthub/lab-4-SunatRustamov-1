<?php
$music_name_list = array("");
$dir = "songs/";
if(is_dir($dir)) {
    if($dh = opendir($dir))
    {
        foreach (glob("songs/*.mp3") as $fileName) {
            array_push($music_name_list, $fileName);
        }
        closedir($dh);
    }
}
$music_link_list= array();
for ($i = 0; $i < count($music_name_list); $i++) {
    $music_link_list[$i] = "songs/".$music_name_list[$i];
}*/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
    "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Music Viewer</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <link href="viewer.css" type="text/css" rel="stylesheet" />
</head>
<body>
<div id="header">

    <h1>190M Music Playlist Viewer</h1>
    <h2>Search Through Your Playlists and Music</h2>
</div>


<div id="listarea">
    <ul id="musiclist">
       <?php /*<?php foreach (array_combine($music_name_list,$music_link_list) as $name => $link){?>
        <li class="mp3item">
            <a href="<?php $link?>"> <?=$name?></a>
            (5438375 b)
        </li>
        <?php } ?>
 */ ?>

        <li class="playlistitem">
            <a href="music.php?playlist=mypicks.txt">mypicks.txt</a>
        </li>

        <li class="playlistitem">
            <a href="music.php?playlist=playlist.txt">playlist.txt</a>
        </li>
    </ul>
</div>
</body>
</html>

