<html>
    <head>
        <meta charset="utf-8">
        <title>求闰年</title>
        <style text="text/css">
        </style>
    </head>
    <body>
        <div >
            <h2>输出年份</h2>
            <form  method="post">
                <p>年份:<input type="text" name='year' required />
                <p><input type="submit" name='submit'>
            </form>
                <?php
                    if(isset($_POST['submit'])){
                        $year=$_POST['year'];
                        $str="";
                        if($year%4==0&&$year%100!=0 or $year%400==0){ 
                            $str='闰年';
                        }
                        else{
                            $str='平年';
                        }
                    echo $year;
                    echo '是';
                    echo $str;
                    }
                ?>
        </div>
    </body>
</html>