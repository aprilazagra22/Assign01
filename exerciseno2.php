<?php echo "April Azagra's Calculator"; ?>
<body>

    <form method="get">
    <br>
    Input first number<br>
    <input name="num1"><br>
    Input second number<br>
    <input name="num2"><br>
    Choose method
    <button type="+"name="+"value="+">+ </button>
    <button type="-"name="-"value="-">- </button>
    <button type="*"name="*"value="*">* </button>
    <button type="/"name="/"value="/">/ </button>

    </form>
    <?php

    if(isset($_GET["+"]))
    {
        $this1 = $_GET['num1'];
        $this2 = $_GET['num2'];
        echo $this1 + $this2;
    }
    else if(isset($_GET["-"]))
    {
        $this1 = $_GET['num1'];
        $this2 = $_GET['num2'];
        echo $this1 - $this2;
    }
    else if(isset($_GET["*"]))
    {
        $this1 = $_GET['num1'];
        $this2 = $_GET['num2'];
        echo $this1 * $this2;
    }
    else if(isset($_GET["/"]))
    {
        $this1 = $_GET['num1'];
        $this2 = $_GET['num2'];
        echo $this1 / $this2;
    }
    ?>

    </body>
