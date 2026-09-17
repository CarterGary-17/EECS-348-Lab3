<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Table Result</title>
<style>
  body {
    font-family: Arial, sans-serif;
    max-width: 500px;
    margin: 3rem auto;
    padding: 0 1rem;
  }

  table {
    border-collapse: collapse;
    margin-top: 1.5rem;
  }

  td, th {
    border: 1px solid #999;
    padding: 0.5rem 0.8rem;
    text-align: center;
  }

  th {
    background: #eee;
  }

  a {
    display: inline-block;
    margin-top: 1rem;
  }
</style>
</head>
<body>

  <h1>Multiplication Table</h1>

  <?php
    // This file only runs the logic; the form that sends data to it
    // lives in table.html

    if (!isset($_GET['number']) || $_GET['number'] === '') {
      echo '<p>No number was provided. Please go back and enter one.</p>';
    } else {

      $number = (int) $_GET['number'];

      if ($number < 1) {
        echo '<p>Please enter a number greater than 0.</p>';
      } else {
        echo '<p>Table for numbers 1 through ' . $number . ':</p>';
        echo '<table>';

        // ---- Header row: column indexes 1 through $number ----
        echo '<tr><th>&times;</th>'; // top-left corner cell
        for ($col = 1; $col <= $number; $col++) {
          echo '<th>' . $col . '</th>';
        }
        echo '</tr>';

        // ---- One row per row-index, 1 through $number ----
        for ($row = 1; $row <= $number; $row++) {
          echo '<tr>';
          echo '<th>' . $row . '</th>'; // row index in the first column

          for ($col = 1; $col <= $number; $col++) {
            echo '<td>' . ($row * $col) . '</td>';
          }

          echo '</tr>';
        }

        echo '</table>';
      }
    }
  ?>

  <a href="table.html">&larr; Back</a>

</body>
</html>
