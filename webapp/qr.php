<!DOCTYPE html>

<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />

<head>

  <!-- BOOTSTRAP BUNDLE -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

  <title> STI Cubao QR </title>
</head>

<!-- JS for the reader -->
<script src="html5-qrcode.min.js"></script>

<!-- STYLLESHEET FOR HTML-->
<style>
  body {
    padding: 0;
    margin: 0;
    background-color: #ebebeb;
  }

  .container {
    padding: 0;
    box-sizing: border-box;
    background: #f2f2f8ee;
    align-items: center;
    margin: 10px;
    margin-top: 5rem;
    border-radius: 3px;

  }


  h1 {
    box-sizing: border-box;
    border: 2px;
    padding: 20px;
    background: #555d5d;
    margin: 0;
    color: #fff;
    font-weight: 500;
  }

  .result {
    background-color: #fff;
    color: black;
    padding: 20px;
    text-align: center;
    border-radius: 2px;
  }

  .read {
    padding: 0;
  }



  .row {
    background-color: #5db1b9;

  }
</style>


<center>

  <body>

    <div class="container">
      <div class="heading">

        <h1 style="text-align: center; font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;"> QR SCANNER </h1>

      </div>

      <table>
        <tr>

          <div style=" text-align: center; font-family:Arial, Helvetica, sans-serif;" id="reader">
          </div>
    </div>
    </tr>

    <tr>
      <center>
        <div class="row">
          <div class="qr_result" style="padding:30px; text-align:center; font-family:Arial, Helvetica, sans-serif;">
            <h4>SCAN RESULT</h4>
            <div id="result">Result Here</div>
          </div>
        </div>
        </div>
      </center>

    </tr>

    </table>

    <script type="text/javascript">
      function onScanSuccess(qrCodeMessage) {
        document.getElementById('result').innerHTML = '<span class="result">' + qrCodeMessage + '</span>';
      }

      function onScanError(errorMessage) {
        //handle scan error
      }
      var html5QrcodeScanner = new Html5QrcodeScanner(
        "reader", {
          fps: 10,
          qrbox: 250
        });
      html5QrcodeScanner.render(onScanSuccess, onScanError);
    </script>

    </div>
  </body>

</center>

</html>