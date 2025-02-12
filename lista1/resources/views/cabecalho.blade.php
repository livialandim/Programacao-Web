<style>
    nav {
        position: fixed;
        right: 0;
        top: 0;
        height: 100%;
        width: 220px;
        background-color: #2c3e50;
        padding: 20px;
        box-shadow: -2px 0 5px rgba(0, 0, 0, 0.2);
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
        background-color: #34495e;
        border-radius: 5px;
        text-align: center;
        transition: background 0.3s;
    }
    a:hover {
        background-color: #1abc9c;
    }
</style>

<?php
    echo '<nav>';
    echo '<ul>';
    for ($i = 1; $i <= 20; $i++) {
        echo '<li><a href="exercicio' . $i . '.php">Exercício ' . $i . '</a></li>';
    }
    echo '</ul>';
    echo '</nav>';
?>
