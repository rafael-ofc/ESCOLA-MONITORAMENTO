<main class="main">

    <div class="login-aluno">
        <h1>PROFESSOR</h1>

        <form action="home_professor" method="post">
            <!-- @csrf -->
            <div class="campo-ra">
                <input class="input-campo-aluno" type="text" name="user-prof" placeholder="Usuario" required> 
            </div>
            <input type="submit">
        </form>
        <a class="Botao-voltar-lobby" href="home">Voltar</a>
    </div>

</main>