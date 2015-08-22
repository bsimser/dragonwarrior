# dragonwarrior
The Dragon Knight game engine is an online game system created by Jamin Seven. It is an RPG-style game in which characters explore the map, fight monsters, gain experience and buy items, among other things.

This is the source code for a variant of that engine called Dragon Warrior that includes dozens of community created mods and setup as a Facebook game that you can run yourself.

## History
The original engine was written in PHP4, with a MySQL database backend. While it was originally envisioned as a medieval/fantasy type game
(think back to the NES game, Dragon Warrior, to which this game is a tribute), it is possible to make it into any other kind of game you want (space, modern, whatever).
All statistics are handled by the database, so all items, monsters, etc., are fully customizable. It includes an administrative control panel suited for basic editing tasks,
however, the best way to make large-scale changes are with a more comprehensive database tool such as phpMyAdmin.

## System Requirements
* Required
  * PHP (4.1 and higher)
  * MySQL
* Optional
  * zlib compression enabled on your server

## Installation Instructions
1. Clone this repository or download a copy from github
2. Create a new MySQL database to use on your server
3. Copy 'blank.config.php' to 'local.config.php' and edit the values for your database setup (or just edit the values in 'config.php')
4. Upload the contents of the folder to your site
5. In your browser, go to the 'install.php' file and follow the instructions. If your site was 'http://myawesomedomain.com' then visit 'http://myawesomedomain.com/install.php'
6. After completing the instructions, delete or rename the 'install.php' file from your directory for security
7. Enjoy the game!