<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="UTF-8">
        <link href="horoscopeStylesNew.css" rel="stylesheet" type="text/css"/>
        <link href="https://fonts.googleapis.com/css2?family=Bellota:wght@300&display=swap" rel="stylesheet">
        <title>Horoscope calculator</title>
    </head>
    <body>
        <div id="h1div"><h1>Horoscope calculator</h1></div>
        <div id="h2div"><h2>What's your sign? Find out quickly here:</h2></div>
        <div id='formdiv'>
            <form action='signResult.php' method='post'>
                <select name='day' class='button' required>
                    <option value='1'>1</option>
                    <option value='2'>2</option>
                    <option value='3'>3</option>
                    <option value='4'>4</option>
                    <option value='5'>5</option>
                    <option value='6'>6</option>
                    <option value='7'>7</option>
                    <option value='8'>8</option>
                    <option value='9'>9</option>
                    <option value='10'>10</option>
                    <option value='11'>11</option>
                    <option value='12'>12</option>
                    <option value='13'>13</option>
                    <option value='14'>14</option>
                    <option value='15'>15</option>
                    <option value='16'>16</option>
                    <option value='17'>17</option>
                    <option value='18'>18</option>
                    <option value='19'>19</option>
                    <option value='20'>20</option>
                    <option value='21'>21</option>
                    <option value='22'>22</option>
                    <option value='23'>23</option>
                    <option value='24'>24</option>
                    <option value='25'>25</option>
                    <option value='26'>26</option>
                    <option value='27'>27</option>
                    <option value='28'>28</option>
                    <option value='29'>29</option>
                    <option value='30'>30</option>
                    <option value='31'>31</option>
                </select>
                <select name='month' class='button' required>
                    <option value='jan'>January</option>
                    <option value='feb'>February</option>
                    <option value='mar'>March</option>
                    <option value='apr'>April</option>
                    <option value='may'>May</option>
                    <option value='jun'>June</option>
                    <option value='jul'>July</option>
                    <option value='aug'>August</option>
                    <option value='sep'>September</option>
                    <option value='oct'>October</option>
                    <option value='nov'>November</option>
                    <option value='dec'>December</option>
                </select>
                <button class='button' type='submit'>So what's my sign?</button>
            </form> 
        </div>
    </body>
</html>
