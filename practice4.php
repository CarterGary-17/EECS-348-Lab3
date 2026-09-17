<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Multiplication Table</title>
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

  form {
    display: flex;
    gap: 0.5rem;
    align-items: center;
  }
</style>
</head>
<body>

  <h1>Multiplication Table</h1>

  <!-- Form sends the number back to this same file using GET -->
  <form method="get" action="practice4.php">
    <label for="number">Enter a number:</label>
    <input type="number" id="number" name="number" min="1" required>
    <button type="submit">Generate</button>
  </form>

  <?php
    // Check whether a number was submitted
    if (isset($_GET['number']) && $_GET['number'] !== '') {

      $number = (int) $_GET['number'];

      if ($number < 1) {
        echo '<p>Please enter a number greater than 0.</p>';
      } else {
        echo '<table>';

        // ---- Header row: column indexes 0 through $number ----
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

</body>
</html>
