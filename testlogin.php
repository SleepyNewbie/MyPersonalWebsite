<!DOCTYPE html>
<html>
  <head>
    <title>Login Form</title>
    <style>
      /* Style the table */
      table {
        border-collapse: collapse;
        width: 100%;
        max-width: 400px;
        margin: auto;
      }

      /* Style the table header */
      th {
        background-color: #4CAF50;
        color: white;
        padding: 12px;
        text-align: left;
      }

      /* Style the table cells */
      td {
        border: 1px solid #ddd;
        padding: 8px;
      }

      /* Style the form input fields */
      input[type=text], input[type=password] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
      }

      /* Style the submit, clear, and cancel buttons */
      button[type=submit], button[type=button], button[type=reset] {
        background-color: #4CAF50;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        float: right;
        margin-left: 10px;
      }

      /* Style the forgot password and sign up links */
      a {
        text-decoration: none;
        color: #4CAF50;
        margin-top: 10px;
      }
      
      /* Style the sign up button */
      #signup-btn {
        float: left;
      }
    </style>
  </head>
  <body>
    <h2>Login Form</h2>
    <form>
      <table>
        <tr>
          <th colspan="2">Login</th>
        </tr>
        <tr>
          <td>Username:</td>
          <td><input type="text" name="username" required></td>
        </tr>
        <tr>
          <td>Password:</td>
          <td><input type="password" name="password" required></td>
        </tr>
        <tr>
          <td><button type="submit">Submit</button></td>
          <td>
            <button type="reset">Clear</button>
            <button type="button">Cancel</button>
            <a href="#">Forgot Password?</a>
          </td>
        </tr>
        <tr>
          <td colspan="2">
            <button id="signup-btn" type="button">Sign Up</button>
          </td>
        </tr>
      </table>
    </form>
  </body>
</html>
