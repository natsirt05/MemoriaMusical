<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<style>

html {
  padding: 1%;
}

</style>
<?php

$csv = array_map('str_getcsv', file('data.csv')); 
//print_r($csv);

echo "<table class='table table-bordered'>";
echo '
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Código</th>
      <th scope="col">Sexo</th>
      <th scope="col">Fecha de nacimiento</th>
      <th scope="col">Estudios</th>
      <th scope="col">Modalidad</th>
      <th scope="col">Curso</th>
      <th scope="col">Nota media</th>
      <th scope="col">Instrumento musical</th>
      <th scope="col">Horas semanales</th>
      <th scope="col">Tipo de instrumento</th>
      <th scope="col">Estudios reglados</th>
      <th scope="col">Años reglados</th>
      <th scope="col">Estudios no reglados</th>
      <th scope="col">Años no reglados</th>
      <th scope="col">Inicio estudios musicales</th>
      <th scope="col">Fin estudios musicales</th>
      <th scope="col">Tiempo de desarrollo de la prueba</th>
      <th scope="col">1.Res</th>
      <th scope="col">2.Res</th>
      <th scope="col">3.Res</th>
      <th scope="col">4.Res</th>
      <th scope="col">5.Res</th>
      <th scope="col">6.Res</th>
      <th scope="col">7.Res</th>
      <th scope="col">8.Res</th>
      <th scope="col">9.Res</th>
      <th scope="col">1.Sol</th>
      <th scope="col">2.Sol</th>
      <th scope="col">3.Sol</th>
      <th scope="col">4.Sol</th>
      <th scope="col">5.Sol</th>
      <th scope="col">6.Sol</th>
      <th scope="col">7.Sol</th>
      <th scope="col">8.Sol</th>
      <th scope="col">9.Sol</th>
      <th scope="col">1.Res2</th>
      <th scope="col">2.Res2</th>
      <th scope="col">3.Res2</th>
      <th scope="col">4.Res2</th>
      <th scope="col">5.Res2</th>
      <th scope="col">6.Res2</th>
      <th scope="col">7.Res2</th>
      <th scope="col">8.Res2</th>
      <th scope="col">9.Res2</th>
      <th scope="col">1.Sol2</th>
      <th scope="col">2.Sol2</th>
      <th scope="col">3.Sol2</th>
      <th scope="col">4.Sol2</th>
      <th scope="col">5.Sol2</th>
      <th scope="col">6.Sol2</th>
      <th scope="col">7.Sol2</th>
      <th scope="col">8.Sol2</th>
      <th scope="col">9.Sol2</th>
      <th scope="col">Fecha</th> 
    </tr>
  </thead>
';

echo "<tbody>";

$i = 0;
foreach ($csv as $line) {
  echo "<tr>";
  echo "<th scope='row'>$i</th>";
  foreach ($line as $item) {
     echo "<td>$item</td>";
  }
  echo "</tr>";
  $i++;
}

echo "</tbody>";
echo "</table>";

?>
<html>
<form action="data.csv">
  <button type="button">Descargar datos</button> 
</form>
<html>