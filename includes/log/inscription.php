<div class="signup hide">
    <h2>Inscription</h2>
    <div class="inputbox">
        <form value="">
            <input type="text" name="name" placeholder="Nom">
            <input type="text" name="firstname" placeholder="Prénom">
            <div class="sexe">
                <label>Femme</label>
                <input type="radio" class="radio" name="sexe" value="female">
                <label>Homme</label>
                <input type="radio" class="radio" name="sexe" value="male">
            </div>
            <label>Date de Naissance</label>
            <input type="date" name="birthdate">
            <input type="text" name="email" placeholder="  EMAIL">
            <input type="text" name="adresse" placeholder="Votre adresse">
            <input type="password" name="password" placeholder="  Mot de passe">
            <input name="monAvatar" type="file">
            <div class="positionSelect">
                <select name ="specialite" id="specialite">
                    <option value="develop" selected>Dévelopement</option>
                    <option value="marketing">Marketing</option>
                    <option value="webdesign">Web-design</option>
                    <option value="intervenant">Intervenant</option>
                </select>
            </div>
            <div class="condition">
                <p>J'accepte les <a href="">conditions d'utilisation</a></p>
                <input type="checkbox">
            </div>
        </form>
    </div>
    <button>Inscription</button>
</div>