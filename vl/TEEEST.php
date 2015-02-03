<!DOCTYPE html>
<html lang="en">
<head>
    
    <link rel="stylesheet" href="../../jqwidgets/styles/jqx.base.css" type="text/css" />
    <script type="text/javascript" src="../../scripts/gettheme.js"></script>
    <script type="text/javascript" src="../../scripts/jquery-1.9.0.min.js"></script>
    <script type="text/javascript" src="../../jqwidgets/jqxcore.js"></script>
    <script type="text/javascript" src="../../jqwidgets/jqxradiobutton.js"></script>
     <script type="text/javascript" src="../../jqwidgets/jqxbuttons.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            var theme = getDemoTheme();
            $("#jqxRadioButton").jqxRadioButton({ width: 250, height: 25, checked: true, theme: theme });
            $("#jqxRadioButton2").jqxRadioButton({ width: 250, height: 25, theme: theme });
            $("#Button").jqxButton({ theme: theme });
            $('#Button').on('click', function () {
                var checked = $('#jqxRadioButton').jqxRadioButton('checked');
                var checked2 = $('#jqxRadioButton2').jqxRadioButton('checked');
                if (checked === true) {
                    alert("12 months is checked");
                }
                else if (checked2 === true) {
                    alert("6 months is checked");
                }
            });
        });
    </script>
</head>
<body class='default'>
    <div id='jqxWidget' style='font-family: Verdana Arial; font-size: 12px; width: 400px;'>
        <h3>
            House Contract</h3>
        <div style='margin-top: 10px;' id='jqxRadioButton'>
            12 Months Contract</div>
        <div style='margin-top: 10px;' id='jqxRadioButton2'>
            <span>6 Months Contract</span></div>
        <div style='margin-top: 10px;' id='Button'>
            <span>Click Me!</span></div>
    </div>
</body>
</html>