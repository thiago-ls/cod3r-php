<div class="titulo">Integração CSS</div>

<h1 center>Ver css...</h1>

<div><button><?= "I'm a button!!!" ?></button></div>

<style>

    button {
        padding: 5px <?= 10 * 2 ?>px;
        background-color: #4286f4;
        color: #eee;
        font-weight: bold;
        border-radius: 10px;
    }

    [center] {
        display: flex;
        justify-content: center;
        color: gold;
    }

</style>


