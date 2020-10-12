
<html>
<head>
    <!--Updated: Added new version of jQueryUI CDN.-->
    <link href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

<style>
        p, div, input {
            font: 16px Calibri;
        }
        .ui-autocomplete { 
            cursor:pointer; 
            height:120px; 
            overflow-y:scroll;
        }    
    </style>
</head>
<body>
    <p>Setting focus in the below box will automatically show the dropdown list. <br /> Start type in the value to search for values!</p>

    <div>
        <input type="text" id="tbCountries" />
    </div>
</body>

<script>
var country=new Array();
    $(document).ready(function() {
        BindControls();
    });

    function BindControls() {
        country = ['ARGENTINA', 
            'AUSTRALIA', 
            'BRAZIL', 
            'BELARUS', 
            'BHUTAN',
            'CHILE', 
            'CAMBODIA', 
            'CANADA', 
            'DENMARK', 
            'DOMINICA',
            'INDIA'];

        $('#tbCountries').autocomplete({
            source: Countries,
            minLength: 0,
            scroll: true
        }).focus(function() {
            $(this).autocomplete("search", "");
        });
    }
    <?php
 include('inc/connection.php');

 echo`<script>
 var country=new Array();</script>`;

$sql='SELECT * FROM `item`';
$check_query=mysqli_query($connection, $sql);
$checkNum=mysqli_num_rows($check_query);
if($checkNum>0){
    while($row=mysqli_fetch_assoc($check_query)){
        $id=$row['item_id'];
        // array_push($a,$id);
       
        echo`<script>
            for (var i = 0; i < country.length;i++){                
                country.push($id);
            }
        </script>`;
    }
}


?>
    console.log(country.toString);
</script>

</html>