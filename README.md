# CRUD

<p>Short explication about project<p>
Basic CRUD for store customer data from the system (Made with PHP and Mysql). 

</p><strong>What is?</strong></p>
<p>The idea behind this CRUD is serve as a model for initiantes (i'm include) in this world. Even more considering the difficulty of hit the connections with data bank, hit the sintaxe and understand of why use X instead of Y.</p>

<p><strong>Running this Project</strong></p>
<p>You MUST install and configure the LAMP Server (https://wiki.archlinux.org/index.php/Category:Web_applications) or XAMPP (i use and recommend for beginners. Just install, run and start the services... https://www.apachefriends.org/index.html). The MySQL Workbench not exactly extreme necessary, but is very simple for beginners. To end, install one editor or IDE of your preference.</p>
<p>In my workflow, i opted for XAMPP, Sublime and MySQL WorkBench.</p>

<p></strong>Creating the data bank (using workbench)</strong></p>
<1) Open the MySQL Workbench.
2) Click on "Create a new schema in the connect server".
3) Rename the schema name to "bdaula2".
4) Click on Apply and then click the close.
5) Doble click on "bdaula2".
6) Click on "Create a new table in the active schema in connect server".
7) Rename the table name to "clientes".
8) The collumns in the table  are as follows:
    8.1)idcliente (certify of check AI [Auto Incremment]).
    8.2)nomeCliente.
    8.3)emailCliente.
    8.4)telefoneCliente.
    8.5)senhaCliente.
9) Click on Apply, Apply and then click the close.

<p><strong>Basic Configurations</strong></p>
<p>About connection file(conexao.php), you must change the password "root" to "" IF you are using XAMPP. The default password of MySQL in XAMPP is void (""). Then copy the project folder to "/opt/lampp/htdocs" (on Linux systems) or "C:/xampp/htdocs" (on Windows System).</p>

<p></strong>Running the Project</strong></p>
<p>Open the web browser and tap in address bar "localhost/CRUD/form.php"</p>

</p><strong>Enjoy!</strong></p>



