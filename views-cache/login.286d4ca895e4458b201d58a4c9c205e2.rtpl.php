<?php if(!class_exists('Rain\Tpl')){exit;}?><style type="text/css">
    nav.navbar {
        display: none;
    }
    .hero.is-large .hero-body {
        padding-bottom: 11.2rem;
        padding-top: 11.2rem;
    }
</style>
<section class="hero is-success is-large">
    <div class="hero-body">
        <div class="container has-text-centered">
            <div class="column is-4 is-offset-4">
                <h3 class="title has-text-grey">Login</h3>
                <p class="subtitle has-text-grey">Faça seu login para continuar...</p>
                <div class="box">
                    <figure class="avatar">
                        <img src="./appSite/app.img/LogPrefIpora_150.png">
                    </figure>
                    <form>
                        <div class="field">
                            <div class="control">
                                <p class="control has-icons-left has-icons-right">
                                    <input class="input is-large" type="text" placeholder="Nome de Login..." maxlength="20" autofocus required>
                                    <span class="icon is-medium is-left">
                                        <i class="fa fa-user" aria-hidden="true"></i>
                                    </span>
                                </p>

                            </div>
                        </div>

                        <div class="field">
                            <div class="control">
                                <p class="control has-icons-left has-icons-right">
                                    <input class="input is-large" type="password" placeholder="Sua Senha..." maxlength="8" required>
                                    <span class="icon is-medium is-left">
                                        <i class="fa fa-lock" aria-hidden="true"></i>
                                    </span>
                                </p>

                            </div>
                        </div>
                        <div class="field">
                            <label class="checkbox">
                                <input type="checkbox">
                                Lembar-me...
                            </label>
                        </div>
                        <button class="button is-block is-info is-large is-fullwidth">Login</button>
                    </form>
                </div>
                <p class="has-text-grey">
                    <a href="./views/cadLogin.html">Cadastrar-se</a> &nbsp;·&nbsp;
                    <a href="../">Esqueceu a Senha</a> &nbsp;·&nbsp;
                    <a href="../">Precisa de Ajuda?</a>
                </p>
            </div>
        </div>
    </div>
</section>
