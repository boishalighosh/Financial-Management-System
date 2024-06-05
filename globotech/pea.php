<html>
	<head>
		<title>Price Exclasation</title>
		<script src="https://kit.fontawesome.com/5dd0cc1318.js" crossorigin="anonymous"></script>
		<style>
			a{text-decoration:none;color:black;background:lightgray;padding:5px;}
			i{margin-right:8px;}
			ul{list-style:none}
			.btn{margin-top:15%;color:black;background:lightgray;padding:5px;font-size:15px}
		</style>
	</head>
	<body>
			<table border='1'>
				<tr>
					<th colspan="15">PROFORMA FOR ESCALATION UNDER SBD AGREEMENT</th>
					<th colspan="13">PROFORMA FOR ESCALATION UNDER SBD AGREEMENT</th>
				</tr>
				<tr>
					<th colspan="6">Agreement No:  CE(HW)/03 of 2011 - 12</th>
					<th>Base: 14/07/11</th>
					<th>Labour(Lo)=173 </th>
					<th>Pi=25%</th>
					<th colspan="2">Material(Mo)=154.2</th>
					<th>Pm=45%</th>
					<th colspan="2">P.O.L(Fo) = Rs.40.77</th>
					<th>Pf=5%</th>
					<th colspan="2">Cement(Co)=153</th>
					<th>Pc=5%</th>
					<th colspan="2">Steel(So)=155.1</th>
					<th>Ps=5%</th>
					<th colspan="2">Bitumen(Bo)</th>
					<th>Pb=10%</th>
					<th colspan="2">Plant & Machinery</th>
					<th>Pp=5%</th>
					<th></th>
				</tr>
				<tr>
					<th colspan="6">Formulae:</th>
					<th colspan="3">Vl=0.85 x Pl/100 x R x (Li - Lo)/Lo</th>
					<th colspan="3">Vm=0.85 x Pm/100 x R x (Mi - Mo)/Mo</th>
					<th colspan="3">Vf=0.85 x Pf/100 x R x (Fi - Fo)/Fo</th>
					<th colspan="3">Vc=0.85 x Pc/100 x R x (Ci - Co)/Co</th>
					<th colspan="3">Vs=0.85 x Ps/100 x R x (Si - So)/So</th>
					<th colspan="3">Vb=0.85 x Pb/100 x R x (Bi - Bo)/Bo</th>
					<th colspan="3">Vp=0.85 x Pp/100 x R x (Pi - Po)/Po</th>
					<th></th>
				</tr>
				<tr>
					<th rowspan="2">Sr.No</th>
					<th rowspan="2">RA_Bill_No.</th>
					<th rowspan="2">Month</th>
					<th rowspan="2">Gross Work Done including secured advance</th>
					<th rowspan="2">Work executed under variations</th>
					<th rowspan="2">Total amount eligible for escalation</th>
					<th colspan="3">Local Labour( C )</th>
					<th colspan="3">General Material(T)</th>
					<th colspan="3">POL</th>
					<th colspan="3">Cement & Lime</th>
					<th colspan="3">Steel Long</th>
					<th colspan="3">Bitumen</th>
					<th colspan="3">Plant & Equip.(M)</th>
					<th rowspan="2">Total Amount</th>
				</tr>
				<tr>
					<th>Base Index(Lo)</th>
					<th>Current Index(Li)</th>
					<th>Amount(Vl)</th>
					<th>Base Index(Mo)</th>
					<th>Current Index(Mi)</th>
					<th>Amount(Vm)</th>
					<th>Base Index(Fo)</th>
					<th>Current Index(Fi)</th>
					<th>Amount(Vf)</th>
					<th>Base Index(Co)</th>
					<th>Current Index(Ci)</th>
					<th>Amount(Vc)</th>
					<th>Base Index(So)</th>
					<th>Current Index(Si)</th>
					<th>Amount(Vs)</th>
					<th>Base Index(Bo)</th>
					<th>Current Index(Bi)</th>
					<th>Amount(Vb)</th>
					<th>Base Index(Po)</th>
					<th>Current Index(Pi)</th>
					<th>Amount(Vp)</th>
				</tr>
				<?php
					$server="localhost";
					$username="root";
					$password="";
					$database="major";
	
					$con=mysqli_connect($server,$username,$password,$database);
	
					if (!$con)
					{
						die("failed". mysqli_connect_erre());
					}
	
					$sql="SELECT * FROM `pe`";
					$result=mysqli_query($con,$sql);
	
					$num=mysqli_num_rows($result);
					if($num!=0)
					{		
						while($row=mysqli_fetch_assoc($result))
						{
							echo "
							<tr>
								<td>".$row['s_no']."</td>
								<td>".$row['rabill_no']."</td>
								<td>".$row['month']."</td>
								<td>".$row['work_done']."</td>
								<td>".$row['variation']."</td>
								<td>".$row['escalation_amt']."</td>
								<td>".$row['l_base']."</td>
								<td>".$row['l_current']."</td>
								<td>".$row['l_amt']."</td>
								<td>".$row['m_base']."</td>
								<td>".$row['m_current']."</td>
								<td>".$row['m_amt']."</td>
								<td>".$row['f_base']."</td>
								<td>".$row['f_current']."</td>
								<td>".$row['f_amt']."</td>
								<td>".$row['c_base']."</td>
								<td>".$row['c_current']."</td>
								<td>".$row['c_amt']."</td>
								<td>".$row['s_base']."</td>
								<td>".$row['s_current']."</td>
								<td>".$row['s_amt']."</td>
								<td>".$row['b_base']."</td>
								<td>".$row['b_current']."</td>
								<td>".$row['b_amt']."</td>
								<td>".$row['p_base']."</td>
								<td>".$row['p_current']."</td>
								<td>".$row['p_amt']."</td>
								<td>".$row['total_amt']."</td>
							</tr>";
						}
					}
				?>
				<tbody id="tbody"></tbody>
			</table>
	</body>
</html>
			