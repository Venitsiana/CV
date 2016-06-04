<?php include __DIR__ . '\templates\header.php'; ?>

<div class="row">
    <div class="container">
        <h4 id="inquiry-title" class="center">Administration</h4>
        <form id="inquiry-form" class="col s12" method="POST">
            <div class="row">
                <div class="input-field col s12">
                    <input id="username" type="text" class="validate" name="username">
                    <label for="username">Username</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input id="password" type="email" class="validate" name="email">
                    <label for="password">Password</label>
                </div>
            </div>
            <div class="row center">
                <button class="btn send-inquiry-btn waves-effect waves-light" type="submit" value="submit" id="submit">
                    <span>Submit</span>
                    <i class="material-icons right">send</i>
                </button>
            </div>
        </form>
    </div>
</div>

<?php include __DIR__ . '\templates\footer.php'; ?>
