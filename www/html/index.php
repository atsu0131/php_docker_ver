<body>

<h1>九九表</h1>
<table>
<tr><th>&nbsp;</th><th>1</th><th>2</th><th>3</th><th>4</th><th>5</th><th>6</th><th>7</th><th>8</th><th>9</th></tr>
<?php
for ( $i = 1; $i <= 9; $i++ ) {

  print '<tr>';
  print '<th>' . $i . '</th>';

    for ( $j = 1; $j <= 9; $j++ ) {
      print '<td>' . $i*$j . '</td>';
    }
  print '</tr>' . "\n";
}
?>
</table>
</body>

<style>
body {
  font-family:
  "Hiragino Kaku Gothic Pro N",
  Meiryo,
  sans-serif;
}
table {
  border-collapse: collapse;
  border: 1px solid coral;
}
th, td {
  width: 50px;
  border: 1px dotted coral;

}
th {
  background: lightpink;
}
td {
  text-align: center;
}
</style>

