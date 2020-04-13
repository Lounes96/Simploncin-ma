<!--TOGGLE MOBILE-->

<div class="menu-wrap">
    <input type="checkbox" class="toggler">
    <div class="hamburger">
        <div></div>
    </div>
    <div class="menu">
        <div>
            <div>
                <ul>
                    <Li><a href="catalogue.php">Films</a></Li>
                    <Li><a href="connexion.php">Connexion</a></Li>
                        <div class="liens-couleurs">

                    
                    </div>


                    <form action="">
                        <input type="text" placeholder="" name="search">
                        <button class="search-button" type="submit"><i class="fa fa-search"></i></button>
                    </form>

                </ul>
            </div>
        </div>
    </div>

</div>


<!--TITRE-->

<div class="title-dada">
    <h1> <a href="index.php"> ALLO SIMPLON</a></h1>
</div>


<!--NAV BAR-->

<div class="nav-dada">
    <div class="logo-dada">
        <h1><a class="lien-home" href="index.php">ALLO SIMPLON</a> </h1>
    </div>
    <div class="menu-nav">
        <form class="search-bar" action="">
            <input type="text" placeholder="" name="search">
            <button class="search-button" type="submit"><i class="fa fa-search"></i></button>
        </form>
        <div class="menu-dada">
            <ul>

                
                <li><a href="catalogue.php">Films</a></li>
                <?php if (!(isset($_SESSION['user']))) : ?>
                <li><a href="connexion.php">Connexion/Inscription</a></li>
                <?php else : ?>
                    <li><a href="deco.php">Deconexion</a>
                        <a href="include/formADMIN.php">
                            <h4> Bonjour <?php echo $_SESSION['user'] ?></h4>
                        </a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</div>

<div class="vide"></div>