
    <header class="menu">
        <font class="logo">
            Meu site
        </font>

        <ul>
            <a href="#projetos"><li class="opcoes-menu">Projetos</li></a>
            <a href="#sobre"><li class="opcoes-menu">Sobre</li></a>
            <a href="#contato"><li class="opcoes-menu">Contato</li></a>
        </ul>

        <svg class="menu-mobile-icon" xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 24 24"><path d="M24 6h-24v-4h24v4zm0 4h-24v4h24v-4zm0 8h-24v4h24v-4z"/></svg>
    </header>

    <div class="menu-mobile">
        <ul>
            <a href="#projetos"><li class="opcoes-menu-mobile">Projetos</li></a>
            <a href="#sobre"><li class="opcoes-menu-mobile">Sobre</li></a>
            <a href="#contato"><li class="opcoes-menu-mobile">Contato</li></a>
        </ul>
    </div>

    <script>
        $(".menu-mobile-icon").click(function(){
            $(".menu-mobile").toggle();
        });
    </script>