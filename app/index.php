<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="data-container">
        <h1>School Data</h1>

    </div>
    <div>
        <form>
            <!-- Data Contains -->
            <label for="data-order">Field</label>
            <select name="data-order" id="data-contains">  
            <option value=""></option>
            <option value="stabbr">stabbr</option>
            <option value="instnm">instnm</option>
            <option value="tuitionfee_in">tuitionfee_in</option>
            <option value="tuitionfee_out">tuitionfee_out</option>
            <option value="satmtmid">satmtmid</option>
            <option value="satvrmid">satvrmid</option>
            <label>value</label><input type="text", id="input-value">
            </select>

            <!-- Order By -->
            <label for="data-order">Order By</label>
            <select name="data-order" id="data-field">
            <option value=""></option>
            <option value="stabbr">stabbr</option>
            <option value="instnm">instnm</option>
            <option value="tuitionfee_in">tuitionfee_in</option>
            <option value="tuitionfee_out">tuitionfee_out</option>
            <option value="satmtmid">satmtmid</option>
            <option value="satvrmid">satvrmid</option>
            </select>
            <select name="data-order" id="data-order">
            <option value=""></option>
            <option value="ASC">Ascendent</option>
            <option value="DESC">Descendent</option>
            </select>

            <!-- fields to show -->
            <label>Fields to show</label><input type="text", id="input-fields">
            
            <button id="callPHPbutton", onclick="callPhpFunction()">filter</button>
        </form>
    </div>
    <div id='response'>
        
    </div>
<script src="./main.js"></script>
</body>
</html>