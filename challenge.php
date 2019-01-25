
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="css/local.css" />
    <script src="js/Chart.bundle.js"></script>
	<script src="js/utils.js"></script>
	<script src="js/Chart.min.js"></script>
	<script src="js/Chart.js"></script>
	<script src="js/Chart.bundle.min.js"></script>


    <style>

    	canvas {
		-moz-user-select: none;
		-webkit-user-select: none;
		-ms-user-select: none;
	}

    table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}


    .responsive {
    width: 50%;
    max-width: 100px;
    height: auto;
    }


    </style>


    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

    <!-- you need to include the shieldui css and js assets in order for the charts to work -->
    <link rel="stylesheet" type="text/css" href="http://www.shieldui.com/shared/components/latest/css/light-bootstrap/all.min.css" />
    <script type="text/javascript" src="http://www.shieldui.com/shared/components/latest/js/shieldui-all.min.js"></script>
    <script type="text/javascript" src="http://www.prepbootstrap.com/Content/js/gridData.js"></script>
    	<script src="js/Chart.bundle.js"></script>
	<script src="js/utils.js"></script>
</head>
<body>



    	<style>
	canvas1 {
		-moz-user-select: none;
		-webkit-user-select: none;
		-ms-user-select: none;
	}
	canvas2 {
		-moz-user-select: none;
		-webkit-user-select: none;
		-ms-user-select: none;
	}
		</style>




        <form action="" method = "POST">
                            <div class="form-group">
                            <label for="email">Mois :</label>
                            <input type="text" name="mois" class="form-control">
                             <label for="email">An :</label>
                            <input type="text" name="an" class="form-control">
                             <label for="email">qte :</label>
                            <input type="text" name="qte" class="form-control">
                            </div><center>
                            <button type="submit" name = "sublieu" value = "sublieu" class="btn btn-success">Ajouter le lieu </button>  </center>
                            </form>


                    <?php
                    include '../config.php';
                    if(isset($_POST['sublieu'])){
                    $mois = $_POST['mois'];
                     $an = $_POST['an'];
                      $qte = $_POST['qte'];
                       if(!empty($mois)){
                    $query = mysqli_query($conn, "SELECT * FROM charttb WHERE mois='$mois' AND an = '$an' ");
                    $rows = mysqli_num_rows($query);
                    if($rows==1){
                        echo '<font color "red"><b>';
                        echo $lieu.' Existe déjà dans la base de données';
                        echo '<b></font>';
                    }else{
                    mysqli_query($conn, "INSERT INTO charttb (id,mois,qte,an) VALUES ('','$mois','$qte','$an')");
                    echo '<font color "green"><b>';
                        echo $mois.' Enregistré';
                        echo '<b></font>';
                    }
                        }else{
                             echo '<font color "red"><b>';
                        echo 'Ecrire un lieu';
                        echo '<b></font>';
                        }
                    }
                   // mysqli_close($conn);
                    ?>

        </div>
            <div class="row">

      <div class="col-lg-8">
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="fa fa-bar-chart-o"></i> Pluviométrie en metre cube </h3>
                        </div>
                        <div class="panel-body" id = "courbe1">
                         <canvas  id="canvas1"></div>
                        </div>
                    </div>

                            <h3 class="panel-title"><i class="fa fa-bar-chart-o"></i> Pluviométrie en metre cube </h3>
                        </div>
                        <div class="panel-body" id = "courbe1">

                        </div>
                    </div>
      </div>

              </div>


<script>
		function printDiv(divName){
			var printContents = document.getElementById(divName).innerHTML;
			var originalContents = document.body.innerHTML;
			document.body.innerHTML = printContents;
			window.print();
			document.body.innerHTML = originalContents;
		}

	</script>



  <!-- Pr. real/Prevu -->
  	<script>
		var lineChartData = {
				labels: ['Janvier', 'Fevrier', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet','Aout','Septembre','Octobre','Novembre','Decembre'],
			datasets: [{
				label: 'Pluviometrie en metre cube',
				borderColor: window.chartColors.red,
				backgroundColor: window.chartColors.red,
				fill: false,
					data: [
					    <?php
					    include '../config.php';
	   $queryM1 = mysqli_query($conn, "SELECT * FROM charttb WHERE mois ='Janvier' AND an = '2019' ");
	        $rowM1 = mysqli_fetch_assoc($queryM1);
            $laqte1 = $rowM1["qte"];
            echo $laqte1.",";
  $queryM2 = mysqli_query($conn, "SELECT * FROM charttb WHERE mois ='Fevrier' AND an = '2019' ");
	        $rowM2 = mysqli_fetch_assoc($queryM2);
            $laqte2 = $rowM2["qte"];
            echo $laqte2.",";
  $queryM3 = mysqli_query($conn, "SELECT * FROM charttb WHERE mois ='Mars' AND an = '2019' ");
	        $rowM3 = mysqli_fetch_assoc($queryM3);
            $laqte3 = $rowM3["qte"];
            echo $laqte3.",";
 $queryM4 = mysqli_query($conn, "SELECT * FROM charttb WHERE mois ='Avril' AND an = '2019' ");
	        $rowM4 = mysqli_fetch_assoc($queryM4);
            $laqte4 = $rowM4["qte"];
            echo $laqte4.",";
 $queryM5 = mysqli_query($conn, "SELECT * FROM charttb WHERE mois ='Mai' AND an = '2019' ");
	        $rowM5 = mysqli_fetch_assoc($queryM5);
            $laqte5 = $rowM5["qte"];
            echo $laqte5.",";
 $queryM6 = mysqli_query($conn, "SELECT * FROM charttb WHERE mois ='Juin' AND an = '2019' ");
	        $rowM6 = mysqli_fetch_assoc($queryM6);
            $laqte6 = $rowM6["qte"];
            echo $laqte6.",";
 $queryM7 = mysqli_query($conn, "SELECT * FROM charttb WHERE mois ='Juillet' AND an = '2019' ");
	        $rowM7 = mysqli_fetch_assoc($queryM7);
            $laqte7 = $rowM7["qte"];
            echo $laqte7.",";
 $queryM8 = mysqli_query($conn, "SELECT * FROM charttb WHERE mois ='Aout' AND an = '2019' ");
	        $rowM8 = mysqli_fetch_assoc($queryM8);
            $laqte8 = $rowM8["qte"];
            echo $laqte8.",";
$queryM9 = mysqli_query($conn, "SELECT * FROM charttb WHERE mois ='Septembre' AND an = '2019' ");
	        $rowM9 = mysqli_fetch_assoc($queryM9);
            $laqte9 = $rowM9["qte"];
            echo $laqte9.",";
$queryM10 = mysqli_query($conn, "SELECT * FROM charttb WHERE mois ='Octobre' AND an = '2019' ");
	        $rowM10 = mysqli_fetch_assoc($queryM10);
            $laqte10 = $rowM10["qte"];
            echo $laqte10.",";
$queryM11 = mysqli_query($conn, "SELECT * FROM charttb WHERE mois ='Novembre' AND an = '2019' ");
	        $rowM11 = mysqli_fetch_assoc($queryM11);
            $laqte11 = $rowM11["qte"];
            echo $laqte11.",";
$queryM12 = mysqli_query($conn, "SELECT * FROM charttb WHERE mois ='Decembre' AND an = '2019' ");
	        $rowM12 = mysqli_fetch_assoc($queryM12);
            $laqte12 = $rowM12["qte"];
            echo $laqte12.",";

	?>
				],
				yAxisID: 'y-axis-1',
			}, ]
		};


		window.onload = function() {

		    	var ctx = document.getElementById('canvas1').getContext('2d');
			window.myLine = Chart.Line(ctx, {
				data: lineChartData,
				options: {
					responsive: true,
					hoverMode: 'index',
					stacked: false,
					title: {
						display: true,
						text: ''
					},
					scales: {
						yAxes: [{
							type: 'linear', // only linear but allow scale type registration. This allows extensions to exist solely for log scale for instance
							display: true,
							position: 'left',
							id: 'y-axis-1',
						}, ],
					}
				}
			});


		};


	</script>
	  <?php
	   mysqli_close($conn);
                    ?>
</body>
</html>
