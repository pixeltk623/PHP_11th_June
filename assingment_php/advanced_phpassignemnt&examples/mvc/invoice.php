<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Example 1</title>
    <link rel="stylesheet" href="assets/css/invoice.css" media="all" />
    
    <script type="text/javascript">
    function test()

    {

      window.print();

    }
    
    </script>
  </head>
  <body>
    <header class="clearfix">
      <div id="logo">
        <img src="assets/images/logo.png">
      </div>
      <h1>INVOICE 3-2-1</h1>
      <div id="company" class="clearfix">
        <div>Luxury watches</div>
        <div>150 feet ring road ,<br /> 360005, Rajkot</div>
        <div>(+91)9998003879</div>
        <div><a href="mailto:company@example.com">luxury@info.com</a></div>
      </div>
    


      <div id="project">
        <div><span>PROJECT</span> Luxury wtaches</div>
        <div><span>CLIENT</span> <?php echo $shwcart[0]["firstname"];?> </div>
        <div><span>ADDRESS</span> <?php echo $shwcart[0]["address"];?></div>
        <div><span>EMAIL</span> <a href="mailto:john@example.com"><?php echo $shwcart[0]["email"];?></a></div>
        <div><span>DATE</span> <?php echo $shwcart[0]["orderdate"];?></div>
        <div><span>DUE DATE</span> September 17, 2015</div>
      </div>
    </header>
    <main>
      <table>
        <thead>
          <tr>
            <th class="service">Id</th>
            <th class="desc">Customer Name</th>
            <th>ProductName</th>
            <th>QTY</th>
            <th>Price</th>
            <th>TOTAL</th>
          </tr>
        </thead>
        <tbody>


          <tr>
            <td class="service"><?php echo $shwcart[0]["cartid"];?></td>
            <td class="desc"><?php echo $shwcart[0]["firstname"];?></td>
            <td class="unit"><?php echo $shwcart[0]["pname"];?></td>
            <td class="qty"><?php echo $shwcart[0]["qty"];?></td>
            <td class="total"><?php echo $shwcart[0]["price"];?></td>
            <td class="total"><?php echo $shwcart[0]["subtotal"];?></td>
          </tr>
        </tbody>
      </table>
      <div id="notices">
        <div>NOTICE:</div>
        <div class="notice">A finance charge of 1.5% will be made on unpaid balances after 30 days.</div>
      </div>
    </main>
    <footer>
      Invoice was created on a computer and is valid without the signature and seal.
    </footer>


    <button type="button" style="margin-left:55%; width:200px; height:35px; background-color:red" onclick="test()">Print Bill</button>
  </body>
</html>