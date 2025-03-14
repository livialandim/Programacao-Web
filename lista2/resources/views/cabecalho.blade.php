<style>
    body {
        display: flex;
        height: 100vh;
        margin: 0;
        background-color: #e8f5e9;
        font-family: Arial, sans-serif;
    }

    nav {
        position: fixed;
        left: 0;
        top: 0;
        height: 100%;
        width: 220px;
        background-color: #2e7d32;
        padding: 20px;
        box-shadow: 2px 0 5px rgba(0, 0, 0, 0.2);
        overflow-y: auto;
    }

    ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    li {
        margin-bottom: 10px;
    }

    a {
        display: block;
        color: white;
        text-decoration: none;
        padding: 12px;
        background-color: #388e3c;
        border-radius: 5px;
        text-align: center;
        transition: background 0.3s;
    }

    a:hover {
        background-color: #1b5e20;
    }

    .content {
        margin-left: 240px;
        display: flex;
        justify-content: center;
        align-items: center;
        width: calc(100% - 240px);
        height: 100vh;
        /* Garante que a área do formulário ocupe a tela toda */
    }

    .container {
        display: flex;
        flex-direction: column;
        align-items: center;
        align-content: center;
        padding: 30px;
        border-radius: 10px;
        max-width: 400px;
        width: 100%;
    }

    form {
        display: flex;
        flex-direction: column;
        align-items: center;
        align-content: center;
        background-color: white;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
        max-width: 400px;
        width: 100%;
    }

    input,
    button {
        margin-top: 10px;
        padding: 10px;
        width: 100%;
        border: 1px solid #388e3c;
        border-radius: 5px;
    }

    button {
        background-color: #388e3c;
        color: white;
        cursor: pointer;
        transition: background 0.3s;
    }

    button:hover {
        background-color: #1b5e20;
    }
</style>

<nav>
    <ul>
        @for ($i = 1; $i <= 10; $i++)
            <li><a href="{{ route('exercicio', ['id' => $i]) }}">Exercício {{ $i }}</a></li>
            @endfor
    </ul>
</nav>