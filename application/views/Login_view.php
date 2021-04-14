<html>
  <head>
    <title>Login System</title>
  </head>
  <body>
    <form action="<?php echo site_url('Login/auth'); ?>" method="POST">
    <table align="center">
      <tr>
        <td>Username</td>
        <td><input type="username" name="username" ></td>
      </tr>
      <tr>
        <td>Password</td>
        <td><input type="password" name="password" ></td>
      </tr>
      <tr>
        <td colspan="2">
          <button type="submit">LOGIN</button>
        </td>
      </tr>
    </table>
    </form>
  </body>
</html>
