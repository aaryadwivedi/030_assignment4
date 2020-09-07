<!DOCTYPE html>
  <head>
    <title>Restaurant online</title>    
		<link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>  
  </head>
  <body id="mainb">      
    <div class="container">
      <div class="selectbox">
        <select name="item restaurant-dropdown restaurant" id="restaurant">
          <option value="">Select your order</option>
        </select>
        <br>  
      </div>
      <div class="tablebox">
        <table id="table" class="table table-light tab">
        <tr>
          <th>Name</th>
          <td id="menuname"></td>
        </tr>
        <tr>
          <th>ID</th>
          <td id="id"></td>
        </tr>
        <tr>
          <th>Short Name</th>
          <td id="sname"></td>
        </tr>
        <tr>
          <th>Description</th>
          <td id="descp"></td>
        </tr>
        <tr>
          <th>Price Small</th>
          <td id="psmall"></td>
        </tr>
        <tr>
          <th>Price Large</th>
          <td id="plarge"></td>
        </tr>
        <tr>
          <th>Small Portion Name</th>
          <td id="spname"></td>
        </tr>
        <tr>
          <th>Large Portion Name</th>
          <td id="lpname"></td>
        </tr>
      </table>
      </div>
    </div>        
    <script src="script.js" defer></script>
		<script src="jquery-3.5.1.min.js"></script>   
  </body>
</html>