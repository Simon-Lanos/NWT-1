?>
<div class="menuProfile">
    <div onclick="openProfile(this)" class="demiCercle"><div class="croix1"></div><div class="croix2"></div></div>
    <div class="profileContainer">
        <img class="profilePicture" src="https://scontent-mrs1-1.xx.fbcdn.net/v/t1.0-0/p206x206/29433352_1755952454463031_6669985011330065173_n.jpg?_nc_cat=0&oh=8fe281522adf2430974c3ccbfe0e5ef9&oe=5B2E2E55">
        <div class="noColumn">
            <p class="lobster">Alexandre </p>
            <p class="lobster marginLeft2"> Delaistre</p>
        </div>
        <p class="lobster">Groupe: Developpeur</p>
        <a class="noUnderLine" href="https://www.google.fr"><div class="button lobster">Mes Prochains Cours</div></a>
        <a class="noUnderLine" href="https://www.google.fr"><div class="buttonJaune lobster marginTopDix ">Signaler une Absence</div></a>
        <a class="noUnderLine" href="https://www.google.fr"><div class="buttonNoir lobster marginTopDix ">Se deconecter</div></a>

    </div>
</div>
<div onclick="openProfile(this)" class="buttonMenuProfile">
    <div class="bar1" ></div>
    <div class="bar2" ></div>
    <div class="bar3" ></div>
</div>
<script type="text/javascript">
    var c = 0;
    function openProfile(x){
        x.classList.toggle("change");
        var l = document.querySelector(".menuProfile");
        var k = document.querySelector(".buttonMenuProfile");
        while (c== 1 || c > 1){
            l.style.display ="none";
            k.style.display ="block";
            c = 0;
            return;
        }
        while ( c == undefined || c == 0){
            l.style.display ="block";
            k.style.display ="none";
            c = 1;
            return;
        }
    }
</script>
<?php